<?php

class comite_securityQuestionActions {

    /**
     *
     * @param User $bean
     * @param string $event
     * @param string $arguments
     * @return boolean
     */
    function checkSecurityQuestion(&$bean, $event, $arguments = 'failed') {
        global $sugar_config, $app_strings;
        
        if(!isset($bean->security_question_answer_c) || !strlen($bean->security_question_answer_c)) {
            $_SESSION['security_question_expiration_type'] = $app_strings['LBL_EXPIRED_SECURITY_QUESTION'];
            $_SESSION['hasExpiredSecurityQuestion'] = true;
        }
    }

}
