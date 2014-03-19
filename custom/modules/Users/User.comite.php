<?php

/**
 * Description of User
 *
 * @author Stephen Ostrow <stephen@whoisstudio.com>
 */
class UserComite extends User {

    /**
     * Changes the security question for a user
     * @global array $mod_strings
     * @param string $security_question
     * @param string $security_question_answer
     * @return boolean 
     */
    public function change_security_question($security_question, $security_question_answer) {
        global $mod_strings;

        if (!strlen($security_question)) {
            $this->error_string = $mod_strings['LBL_SECURITY_QUESTION_REQUIRED'];
            return false;
        }

        if (!strlen($security_question_answer)) {
            $this->error_string = $mod_strings['LBL_SECURITY_QUESTION_ANSWER_REQUIRED'];
            return false;
        }

        $this->security_question_c = $security_question;
        $this->security_question_answer_c = $security_question_answer;
        $this->save();

        return true;
    }

    /**
     * Verify that the current password is correct and write the new password to the DB.
     *
     * @param string $user name - Must be non null and at least 1 character.
     * @param string $user_password - Must be non null and at least 1 character.
     * @param string $new_password - Must be non null and at least 1 character.
     * @return boolean - If passwords pass verification and query succeeds, return true, else return false.
     */
    function change_password(
    $user_password, $new_password, $system_generated = '0'
    ) {
        global $mod_strings;
        global $current_user;
        $GLOBALS['log']->debug("Starting password change for $this->user_name");

        if (!isset($new_password) || $new_password == "") {
            $this->error_string = $mod_strings['ERR_PASSWORD_CHANGE_FAILED_1'] . $current_user->user_name . $mod_strings['ERR_PASSWORD_CHANGE_FAILED_2'];
            return false;
        }

        // Check new password against rules set by admin
        if (!$this->check_password_rules($new_password)) {
            $this->error_string = $mod_strings['ERR_PASSWORD_CHANGE_FAILED_1'] . $current_user->user_name . $mod_strings['ERR_PASSWORD_CHANGE_FAILED_3'];
            return false;
        }

        $old_user_hash = strtolower(md5($user_password));

        if (!$current_user->isAdminForModule('Users')) {
            //check old password first
            $query = "SELECT user_name FROM $this->table_name WHERE user_hash='$old_user_hash' AND id='$this->id'";
            $result = $this->db->query($query, true);
            $row = $this->db->fetchByAssoc($result);
            $GLOBALS['log']->debug("select old password query: $query");
            $GLOBALS['log']->debug("return result of $row");
            if ($row == null) {
                $GLOBALS['log']->warn("Incorrect old password for " . $this->user_name . "");
                $this->error_string = $mod_strings['ERR_PASSWORD_INCORRECT_OLD_1'] . $this->user_name . $mod_strings['ERR_PASSWORD_INCORRECT_OLD_2'];
                return false;
            }
        }

        $user_hash = strtolower(md5($new_password));
        $this->setPreference('loginexpiration', '0');
        //set new password
        $now = TimeDate::getInstance()->nowDb();
        $this->user_hash = $user_hash;
        $this->system_generated_password = 0;
        $this->pwd_last_changed = $now;
        $this->save();
//        $query = "UPDATE $this->table_name SET user_hash='$user_hash', system_generated_password='$system_generated', pwd_last_changed='$now' where id='$this->id'";
//        $this->db->query($query, true, "Error setting new password for $this->user_name: ");
        $_SESSION['hasExpiredPassword'] = '0';
        return true;
    }

}

?>
