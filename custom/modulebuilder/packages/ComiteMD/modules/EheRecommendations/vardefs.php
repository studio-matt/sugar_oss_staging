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

$vardefs = array (
  'fields' => 
  array (
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'type' => 'date',
      'link' => true,
      'dbType' => 'varchar',
      'len' => '255',
      'unified_search' => false,
      'required' => true,
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
    'ehe_exercise_regimen' => 
    array (
      'required' => false,
      'name' => 'ehe_exercise_regimen',
      'vname' => 'LBL_EHE_EXERCISE_REGIMEN',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => 'ehe_exercise_regiment_solid_foundation',
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
      'options' => 'ehe_exercise_regimen_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'ehe_aerobic_action' => 
    array (
      'required' => false,
      'name' => 'ehe_aerobic_action',
      'vname' => 'LBL_EHE_AEROBIC_ACTION',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => 'ehe_aerobic_action_maintain',
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
      'options' => 'ehe_aerobic_action_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'ehe_aerobic_frequency' => 
    array (
      'required' => false,
      'name' => 'ehe_aerobic_frequency',
      'vname' => 'LBL_EHE_AEROBIC_FREQUENCY',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => 'ehe_aerobic_frequency_twice',
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
      'options' => 'ehe_aerobic_frequency_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'ehe_aerobic_time' => 
    array (
      'required' => false,
      'name' => 'ehe_aerobic_time',
      'vname' => 'LBL_EHE_AEROBIC_TIME',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => 'ehe_aerobic_time_20',
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
      'options' => 'ehe_aerobic_time_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'ehe_aerobic_activity' => 
    array (
      'required' => false,
      'name' => 'ehe_aerobic_activity',
      'vname' => 'LBL_EHE_AEROBIC_ACTIVITY',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => 'ehe_aerobic_activity_low_impact',
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
      'options' => 'ehe_aerobic_activity_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'ehe_weight_type' => 
    array (
      'required' => false,
      'name' => 'ehe_weight_type',
      'vname' => 'LBL_EHE_WEIGHT_TYPE',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => 'ehe_weight_type_personal_trainer',
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
      'options' => 'ehe_weight_type_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'ehe_weight_frequency' => 
    array (
      'required' => false,
      'name' => 'ehe_weight_frequency',
      'vname' => 'LBL_EHE_WEIGHT_FREQUENCY',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => 'ehe_weight_frequency_twice',
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
      'options' => 'ehe_weight_frequency_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'ehe_weight_format' => 
    array (
      'required' => false,
      'name' => 'ehe_weight_format',
      'vname' => 'LBL_EHE_WEIGHT_FORMAT',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => 'ehe_weight_format_push_pull',
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
      'options' => 'ehe_weight_format_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
  ),
  'relationships' => 
  array (
  ),
);