<?php
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

$dictionary['comite_Billing'] = array(
	'table'=>'comite_billing',
	'audited'=>true,
		'duplicate_merge'=>true,
		'fields'=>array (
  'type' => 
  array (
    'required' => true,
    'name' => 'type',
    'vname' => 'LBL_TYPE',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'AX',
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'credit_card_type_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'expiration_month' => 
  array (
    'required' => true,
    'name' => 'expiration_month',
    'vname' => 'LBL_EXPIRATION_MONTH',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => '01',
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'date_month_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'expiration_year' => 
  array (
    'required' => true,
    'name' => 'expiration_year',
    'vname' => 'LBL_EXPIRATION_YEAR',
    'type' => 'int',
    'massupdate' => 0,
    'default' => '2012',
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'len' => '4',
    'size' => '20',
    'enable_range_search' => false,
    'disable_num_format' => '',
  ),
  'name_on_card' => 
  array (
    'required' => true,
    'name' => 'name_on_card',
    'vname' => 'LBL_NAME_ON_CARD',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'len' => '255',
    'size' => '20',
  ),
  'zip_code' => 
  array (
    'required' => true,
    'name' => 'zip_code',
    'vname' => 'LBL_ZIP_CODE',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'len' => '10',
    'size' => '20',
  ),
  'rank' => 
  array (
    'required' => true,
    'name' => 'rank',
    'vname' => 'LBL_RANK',
    'type' => 'int',
    'massupdate' => 0,
    'default' => '0',
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'len' => '255',
    'size' => '20',
    'enable_range_search' => false,
    'disable_num_format' => '',
  ),
  'cc_numbers' => 
  array (
    'required' => false,
    'name' => 'cc_numbers',
    'vname' => 'LBL_CC_NUMBERS',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'len' => '255',
    'size' => '20',
  ),
),
	'relationships'=>array (
),
	'optimistic_locking'=>true,
		'unified_search'=>true,
	);
if (!class_exists('VardefManager')){
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('comite_Billing','comite_Billing', array('basic','assignable'));