<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2012 SugarCRM Inc.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

/*********************************************************************************

 * Description: TODO:  To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/


if (isset($_POST['saveConfig'])){
    require_once('custom/modules/Users/User.comite.php');
  $focus = new UserComite();
  $focus->retrieve($_POST['record']);
  if(!$focus->change_security_question($_POST['security_question'], $_POST['security_question_answer']))
    SugarApplication::redirect("index.php?action=Change&module=comite_SecurityQuestion&record=".$_POST['record']."&error_password=".urlencode($focus->error_string));

    $_SESSION['hasExpiredSecurityQuestion'] = 0;
    // Otherwise, send to home page
    SugarApplication::redirect('index.php?module=Home&action=index');
}

require_once('modules/Administration/Forms.php');
require_once('modules/Configurator/Configurator.php');
$configurator = new Configurator();
$sugarConfig = SugarConfig::getInstance();


require_once('include/SugarLogger/SugarLogger.php');
$sugar_smarty = new Sugar_Smarty();
$sugar_smarty->assign('MOD', $mod_strings);
$sugar_smarty->assign('APP', $app_strings);
$sugar_smarty->assign('MODULE', 'comite_SecurityQuestion');
$sugar_smarty->assign('ACTION', 'Change');
$sugar_smarty->assign('return_action', 'index');
$sugar_smarty->assign('APP_LIST', $app_list_strings);
$sugar_smarty->assign('config', $configurator->config);
$sugar_smarty->assign('error', $configurator->errors);
$sugar_smarty->assign('LANGUAGES', get_languages());
$sugar_smarty->assign('PWDSETTINGS', $GLOBALS['sugar_config']['passwordsetting']);
$sugar_smarty->assign('ID', $current_user->id);
$sugar_smarty->assign('IS_ADMIN', $current_user->is_admin);
$sugar_smarty->assign('USER_NAME', $current_user->user_name);
$sugar_smarty->assign("INSTRUCTION", $mod_strings['LBL_CHANGE_SECURITY_QUESTION']);
$sugar_smarty->assign('questions', $app_list_strings['security_question_list']);
if ( sugar_is_file('custom/include/images/sugar_md.png') ) {
    $sugar_smarty->assign('sugar_md',getWebPath('custom/include/images/sugar_md.png'));
}
else {
    $sugar_smarty->assign('sugar_md',getWebPath('include/images/sugar_md_open.png'));
}


$rules = "'','',''";
$sugar_smarty->assign('SUBMIT_BUTTON',
  '<input title="'.$app_strings['LBL_SAVE_BUTTON_TITLE'].'" class="button" '
  . 'onclick="if (!set_password(form,newrules(' . $rules . '))) return false; this.form.saveConfig.value=\'1\';" '
  . 'type="submit" name="button" value="'.$app_strings['LBL_SAVE_BUTTON_LABEL'].'" />');


if (isset($_SESSION['security_question_expiration_type']) && $_SESSION['security_question_expiration_type'] != '')
  $sugar_smarty->assign('EXPIRATION_TYPE', $_SESSION['security_question_expiration_type']);/*
if ($current_user->system_generated_password == '1')
  $sugar_smarty->assign('EXPIRATION_TYPE', $mod_strings['LBL_PASSWORD_EXPIRATION_GENERATED']);*/
if(isset($_REQUEST['error_password'])) $sugar_smarty->assign('EXPIRATION_TYPE', $_REQUEST['error_password']);
$sugar_smarty->display('modules/comite_SecurityQuestion/tpls/Change.tpl');

?>
