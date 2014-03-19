<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['after_login'] = Array(); 
$hook_array['after_login'][] = Array(1, 'SugarFeed old feed entry remover', 'modules/SugarFeed/SugarFeedFlush.php','SugarFeedFlush', 'flushStaleEntries'); 
$hook_array['after_login'][] = Array(100, 'Check Login status', 'modules/la_LoginAudit/hook_functions.php','loginActions', 'updateLoginAudit'); 
$hook_array['login_failed'] = Array(); 
$hook_array['login_failed'][] = Array(99, 'Check Login status', 'modules/la_LoginAudit/hook_functions.php','loginActions', 'updateLoginAudit'); 
$hook_array['before_logout'] = Array(); 
$hook_array['before_logout'][] = Array(101, 'Check Login status', 'modules/la_LoginAudit/hook_functions.php','loginActions', 'updateLoginAudit'); 

$hook_array['before_login'][] = Array(101, 'Check Account Locked', 'modules/comite_LoginAudit/hook_functions.php','comite_loginActions', 'checkAccountLocked'); 
$hook_array['after_login'][] = Array(99, 'Check Account IP Address', 'modules/comite_LoginAudit/hook_functions.php','comite_loginActions', 'checkAccountIpRestricted'); 

$hook_array['before_save'][] = Array(1, 'Check If Password is Used', 'modules/comite_PasswordAudit/hook_functions.php','comite_passwordActions', 'checkNewPassword'); 
$hook_array['after_save'][] = Array(101, 'Save New Password', 'modules/comite_PasswordAudit/hook_functions.php','comite_passwordActions', 'saveNewPassword'); 
$hook_array['after_login'][] = Array(100, 'Check Password Expiration', 'modules/comite_PasswordAudit/hook_functions.php','comite_passwordActions', 'checkPasswordExpiration'); 
$hook_array['after_login'][] = Array(101, 'Check Security Question', 'modules/comite_SecurityQuestion/hook_functions.php','comite_securityQuestionActions', 'checkSecurityQuestion'); 


$hook_array['after_relationship_delete'] = Array();
$hook_array['after_relationship_delete'][] = Array(1, 'Remove User', 'custom/modules/Users/Userhook.php', 'UserHook', 'deletedRelationship');

?>