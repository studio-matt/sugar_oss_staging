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

$dictionary['comite_MedicationSupplementInstance'] = array(
	'table'=>'comite_medicationsupplementinstance',
	'audited'=>true,
		'duplicate_merge'=>true,
		'fields'=>array (
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
  'dosage' => 
  array (
    'required' => false,
    'name' => 'dosage',
    'vname' => 'LBL_DOSAGE',
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
    'len' => '18',
    'size' => '20',
    'enable_range_search' => false,
  ),
  'dosage_unit' => 
  array (
    'required' => false,
    'name' => 'dosage_unit',
    'vname' => 'LBL_DOSAGE_UNIT',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'g',
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
    'options' => 'dosage_unit_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'quantity' => 
  array (
    'required' => false,
    'name' => 'quantity',
    'vname' => 'LBL_QUANTITY',
    'type' => 'decimal',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'len' => '18',
    'size' => '20',
    'enable_range_search' => false,
    'precision' => '8',
  ),
  'quantity_unit' => 
  array (
    'required' => false,
    'name' => 'quantity_unit',
    'vname' => 'LBL_QUANTITY_UNIT',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'cap',
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
    'options' => 'quantity_unit_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'frequency' => 
  array (
    'required' => false,
    'name' => 'frequency',
    'vname' => 'LBL_FREQUENCY',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'daily',
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
    'options' => 'frequency_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'time_of_day' => 
  array (
    'required' => false,
    'name' => 'time_of_day',
    'vname' => 'LBL_TIME_OF_DAY',
    'type' => 'multienum',
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
    'options' => 'time_of_day_list',
    'studio' => 'visible',
    'isMultiSelect' => true,
  ),
  'notes_doctor' => 
  array (
    'required' => false,
    'name' => 'notes_doctor',
    'vname' => 'LBL_NOTES_DOCTOR',
    'type' => 'text',
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
    'rows' => '4',
    'cols' => '20',
  ),
  'source' => 
  array (
    'required' => false,
    'name' => 'source',
    'vname' => 'LBL_SOURCE',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'local_pharmacy',
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
    'options' => 'medication_suppliments_source_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'notes_patient' => 
  array (
    'required' => false,
    'name' => 'notes_patient',
    'vname' => 'LBL_NOTES_PATIENT',
    'type' => 'text',
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
    'rows' => '4',
    'cols' => '20',
  ),
  'type' => 
  array (
    'required' => true,
    'name' => 'type',
    'vname' => 'LBL_TYPE',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'medication',
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
    'options' => 'medication_supplement_type_list',
    'studio' => 'visible',
    'dependency' => false,
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
VardefManager::createVardef('comite_MedicationSupplementInstance','comite_MedicationSupplementInstance', array('basic','assignable'));