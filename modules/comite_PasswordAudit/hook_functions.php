<?php

class comite_passwordActions {

    /**
     *
     * @param User $bean
     * @param string $event
     * @param string $arguments 
     */
    function checkNewPassword(&$bean, $event, $arguments = 'failed') {
        global $sugar_config, $app_strings;

        # If not changing password then ignore
        if(!array_key_exists('new_password', $_POST) || !strlen($_POST['new_password'])) {
            return;
        }

        require_once('modules/Users/User.php');
        $user_bean = new User();
        
        $submitted_password = $_POST['new_password'];
        $hashed_password = strtolower(md5($submitted_password));

        require_once('modules/comite_PasswordAudit/comite_PasswordAudit.php');
        $passwordAudit_bean = new comite_PasswordAudit();
        $repeat_interval = $sugar_config['passwordsetting']['duplicatehistorytimemysqlstring'];
        $previous_passwords = $passwordAudit_bean->get_list("date_entered DESC", "comite_passwordaudit.user_hash='$hashed_password' AND comite_passwordaudit.assigned_user_id = '$bean->id' AND ADDDATE(comite_passwordaudit.date_entered, INTERVAL $repeat_interval) >= NOW()", 0, 1);

        if ($previous_passwords['row_count'] > 0) {
            if($_POST['entryPoint'] == "Changenewpassword") {
                SugarApplication::redirect("index.php?entryPoint=".$_POST['entryPoint']."&guid=" . $_POST['guid'] . "&error_password=" . urlencode($app_strings['LBL_REPEAT_PASSWORD']));
            } else {
                SugarApplication::redirect("index.php?action=EditView&module=Users&record=" . $bean->id . "&error_password=" . urlencode($app_strings['LBL_REPEAT_PASSWORD']) . "#tab2");
            }
        }
    }

    /**
     *
     * @param User $bean
     * @param string $event
     * @param string $arguments
     * @return boolean
     */
    function saveNewPassword(&$bean, $event, $arguments = 'failed') {

      # If not changing password then ignore
        if(!array_key_exists('new_password', $_POST) || !strlen($_POST['new_password'])) {
            return;
        }

        $submitted_password = $_POST['new_password'];
        $hashed_password = strtolower(md5($submitted_password));

        require_once('modules/comite_PasswordAudit/comite_PasswordAudit.php');
        $passwordAudit_bean = new comite_PasswordAudit();
        $previous_passwords = $passwordAudit_bean->get_list("date_entered DESC", "assigned_user_id = '$hashed_password'", 0, 1);

        if ($previous_passwords['row_count'] == 0 || $previous_passwords['list'][0]->user_hash != $hashed_password) {
            $comite_PasswordAudit = new comite_PasswordAudit();
            $comite_PasswordAudit->assigned_user_id = $bean->id;
            $comite_PasswordAudit->user_hash = $hashed_password;
            $comite_PasswordAudit->save();
        }
    }
    
    /**
     *
     * @param User $bean
     * @param string $event
     * @param string $arguments
     * @return boolean
     */
    function checkPasswordExpiration(&$bean, $event, $arguments = 'failed') {
        global $sugar_config, $app_strings;

        if(strtotime($bean->pwd_last_changed) < (time() - $sugar_config['passwordsetting']['expirationlengthtime']) ) {
            $_SESSION['expiration_type'] = $app_strings['LBL_EXPIRED_PASSWORD'];
            $_SESSION['hasExpiredPassword'] = true;
        }
    }

}

