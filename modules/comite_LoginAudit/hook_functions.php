<?php

class comite_loginActions {

    function checkAccountLocked(&$la_bean, $la_event, $la_arguments = 'failed') {

        global $current_user, $db, $sugar_config, $mod_strings;

        $typed_name = $db->quote($_REQUEST['user_name']);

        $time_limit = $sugar_config['login']['time_limited_max_attempts_time_minutes'];
        $max_attempts = $sugar_config['login']['time_limited_max_attempts'];

        $query = "SELECT typed_name, result, date_entered 
                          FROM la_loginaudit 
                          WHERE 
                            typed_name = '$typed_name' 
                            AND date_entered > DATE_SUB(NOW(), INTERVAL $time_limit MINUTE)
                          ORDER BY date_entered DESC";
        $results = $db->query($query);

        $fails = 0;
        while ($row = $db->fetchByAssoc($results)) {
            if ($row['result'] == 'Success' || $row['result'] == 'Reset') {
                # We've had a success in the last 5
                break;
            }
            if ($row['result'] == 'Failed' && ++$fails >= $max_attempts) {
                # Too many failures
                $_SESSION['login_error'] = $mod_strings['LBL_TOO_MANY_FAILED_ATTEMPTS'];
                header("Location:index.php?module=Users&action=Login");
                exit();
            }
        }
    }
    
    function checkAccountIpRestricted(&$la_bean, $la_event, $la_arguments = 'failed') {
        
        global $current_user, $db, $sugar_config, $mod_strings;
        
        $restrict_to_ips = $la_bean->restrict_to_ips_c;
        $remote_address = $_SERVER['REMOTE_ADDR'];
        
        if(!strlen($restrict_to_ips)) {
            return;
        }
        
        $ips_array = preg_split('/[\n\r]+/', $restrict_to_ips);
        
        if(!in_array($remote_address, $ips_array)) {
            unset($_SESSION['authenticated_user_id'], $_SESSION['unique_key']);
            $_SESSION['login_error'] = $mod_strings['LBL_RESTRICTED_IP'];
            header("Location:index.php?module=Users&action=Login");
            exit();
        }
    }

}