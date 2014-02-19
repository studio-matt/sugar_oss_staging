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

$dictionary['comite_PharmacyMedicine'] = array(
	'table'=>'comite_pharmacymedicine',
	'audited'=>true,
		'duplicate_merge'=>true,
		'fields'=>array (
  'prescription_date' => 
  array (
    'required' => false,
    'name' => 'prescription_date',
    'vname' => 'LBL_PRESCRIPTION_DATE',
    'type' => 'date',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'size' => '20',
    'enable_range_search' => false,
  ),
  'name' => 
  array (
    'name' => 'name',
    'vname' => 'LBL_NAME',
    'type' => 'name',
    'link' => true,
    'dbType' => 'varchar',
    'len' => '255',
    'unified_search' => false,
    'required' => false,
    'importable' => 'required',
    'duplicate_merge' => 'disabled',
    'merge_filter' => 'selected',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'size' => '20',
  ),
  'dose' => 
  array (
    'required' => false,
    'name' => 'dose',
    'vname' => 'LBL_DOSE',
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
  'refills' => 
  array (
    'required' => false,
    'name' => 'refills',
    'vname' => 'LBL_REFILLS',
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
  'initials' => 
  array (
    'required' => false,
    'name' => 'initials',
    'vname' => 'LBL_INITIALS',
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
  'description' => 
  array (
    'name' => 'description',
    'vname' => 'LBL_DESCRIPTION',
    'type' => 'text',
    'comment' => 'Full text of the note',
    'rows' => '6',
    'cols' => '80',
    'required' => false,
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'size' => '20',
    'studio' => 'visible',
  ),
  'pharmacy' => 
  array (
    'name' => 'pharmacy',
    'id_name' => 'comite_pharmacymedicine_comite_pharmacycomite_pharmacy_ida',
    'type' => 'relate',
    'rname' => 'name',
    'vname' => 'LBL_PHARMACY',
    'join_name' => 'comite_pharmacymedicine_comite_pharmacy',
    'module' => 'comite_Pharmacy',
    'source' => 'non-db',
    'dbType' => 'non-db',
    'studio' => 'visible',
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
VardefManager::createVardef('comite_PharmacyMedicine','comite_PharmacyMedicine', array('basic','assignable'));