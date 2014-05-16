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

class comite_BoneStudiesViewComparisonReport extends SugarView{
 	function comite_BoneStudiesViewComparisonReport(){
 	    $this->options['show_header'] = true;
 	    $this->options['show_subpanels'] = false;
 	    $this->options['show_search'] = false;
 	    $this->options['show_footer'] = false;
 	    $this->options['view_print'] = false;
 		parent::SugarView();
 	}
 	
 	function display(){
 	    
 	    global $app_list_strings;
 	    
 	    if(!isset($_REQUEST['record']) && empty($_REQUEST['record'])){
 	        sugar_die('Wrong Parameter Passed');
 	    }
 	    
 	    $boneStudies = new comite_BoneStudies();
 	    $boneStudies->retrieve($_REQUEST['record']);
 	    
 	    $boneStudies->load_relationship('comite_bonestudies_comite_drnotesnutritionexercise');
 	    $nutritionExercise = $boneStudies->comite_bonestudies_comite_drnotesnutritionexercise->get();
 	    
 	    $nutrition_exercise_id = $nutritionExercise[0];
 	    
 	    $boneStudiesArr = array();
 	    
 	    $sqlBoneStudies = "(SELECT comite_bonestudies.id , comite_bonestudies.name  FROM comite_bonestudies INNER JOIN comite_bonestudies_comite_drnotesnutritionexercise_c ON comite_bonestudies.id=comite_bonestudies_comite_drnotesnutritionexercise_c.comite_bon36d7studies_idb AND comite_bonestudies_comite_drnotesnutritionexercise_c.comite_bon0dc8xercise_ida='".$nutrition_exercise_id."' AND comite_bonestudies_comite_drnotesnutritionexercise_c.deleted=0 where comite_bonestudies.deleted=0) ORDER BY comite_bonestudies.date_entered desc";
 	    $resultBoneStudies = $boneStudies->db->query($sqlBoneStudies);
 	    $i = 1;
 	    while ($rowBoneStudies = $boneStudies->db->fetchByAssoc($resultBoneStudies) ){
            $boneStudiesId = $rowBoneStudies['id'];
            $boneStud = new  comite_BoneStudies();
            $boneStud->retrieve($boneStudiesId);
 	        $boneStudiesArr[$boneStudiesId] = $boneStud;
 	        $i++;
 	    }
 	    
 	    //echo '<pre>'; print_r($boneStudiesArr); echo '</pre>';
 	    
 	    $html = '<table border="1" cellpadding="1" cellspacing="1" width="100%" class="detail view">';
 	    
 	    $html .='<tr><td colspan="'.$i.'" align="center"><strong>Details</strong></td></tr>';
 	    
 	    //Name
 	    $html .= '<tr>';
 	    $html .= '<td>Name</td>';
 	    foreach ( $boneStudiesArr as $key => $value){
 	        if(!empty($value->fetched_row['name'])){
 	              $html .= '<td><a href="index.php?module=comite_BoneStudies&action=DetailView&record='.$value->id.'">'.$value->fetched_row['name'] .'</a></td>';
 	        }
 	    }
 	    $html .= '</tr>';
 	    
 	    //Date of Test
 	    $html .= '<tr>';
 	    $html .= '<td>Date of Test</td>';
 	    foreach ( $boneStudiesArr as $key => $value){
 	        $html .= '<td>'.$value->test_date .'</td>';
 	    }
 	    $html .= '</tr>';
 	    
 	    $html .='<tr><td colspan="'.$i.'" align="center"><strong>Bone Density Scan</strong></td></tr>';
 	    
 	    //Lumbar Spine
 	    $html .= '<tr>';
 	    $html .= '<td>Lumbar Spine</td>';
 	    foreach ( $boneStudiesArr as $key => $value){
 	        $html .= '<td>'.$app_list_strings->field_name_map['bds_lumbar_spine']['options'][$value->bds_lumbar_spine] .'</td>';
 	    }
 	    $html .= '</tr>';
 	    
 	    //Femoral Neck (Left)
 	    $html .= '<tr>';
 	    $html .= '<td>Femoral Neck (Left)</td>';
 	    foreach ( $boneStudiesArr as $key => $value){
 	        $html .= '<td>'.$app_list_strings[$value->field_name_map['bds_femoral_neck_left']['options']][$value->bds_femoral_neck_left] .'</td>';
 	    }
 	    $html .= '</tr>';
 	    
 	    //Femoral Neck (Right)
 	    $html .= '<tr>';
 	    $html .= '<td>Femoral Neck (Right)</td>';
 	    foreach ( $boneStudiesArr as $key => $value){
 	        $html .= '<td>'.$app_list_strings[$value->field_name_map['bds_femoral_neck_right']['options']][$value->bds_femoral_neck_right] .'</td>';
 	    }
 	    $html .= '</tr>';
 	    
 	    //Total Hip (Left)
 	    $html .= '<tr>';
 	    $html .= '<td>Total Hip (Left)</td>';
 	    foreach ( $boneStudiesArr as $key => $value){
 	        $html .= '<td>'.$app_list_strings[$value->field_name_map['bds_total_hip_left']['options']][$value->bds_total_hip_left] .'</td>';
 	    }
 	    $html .= '</tr>';
 	    
 	    //Total Hip (Right)
 	    $html .= '<tr>';
 	    $html .= '<td>Total Hip (Right)</td>';
 	    foreach ( $boneStudiesArr as $key => $value){
 	        $html .= '<td>'.$app_list_strings[$value->field_name_map['bds_total_hip_right']['options']][$value->bds_total_hip_right] .'</td>';
 	    }
 	    $html .= '</tr>';
 	    
 	    //Forearm (Left)
 	    $html .= '<tr>';
 	    $html .= '<td>Forearm (Left)</td>';
 	    foreach ( $boneStudiesArr as $key => $value){
 	        $html .= '<td>'.$app_list_strings[$value->field_name_map['bds_forearm_left']['options']][$value->bds_forearm_left] .'</td>';
 	    }
 	    $html .= '</tr>';
 	    
 	    //Forearm (Right)
 	    $html .= '<tr>';
 	    $html .= '<td>Forearm (Right)</td>';
 	    foreach ( $boneStudiesArr as $key => $value){
 	        $html .= '<td>'.$app_list_strings[$value->field_name_map['bds_forearm_right']['options']][$value->bds_forearm_right] .'</td>';
 	    }
 	    $html .= '</tr>';
 	    
 	    
 	    //Region of Forearm (Left)
 	    $html .= '<tr>';
 	    $html .= '<td>Region of Forearm (Left)</td>';
 	    foreach ( $boneStudiesArr as $key => $value){
 	        $html .= '<td>'.$app_list_strings[$value->field_name_map['bds_region_of_forearm_left']['options']][$value->bds_region_of_forearm_left] .'</td>';
 	    }
 	    $html .= '</tr>';
 	    
 	    //Region of Forearm (Right)
 	    $html .= '<tr>';
 	    $html .= '<td>Region of Forearm (Right)</td>';
 	    foreach ( $boneStudiesArr as $key => $value){
 	        $html .= '<td>'.$app_list_strings[$value->field_name_map['bds_region_of_forearm_right']['options']][$value->bds_region_of_forearm_right] .'</td>';
 	    }
 	    $html .= '</tr>';
 	    
 	    $html .='<tr><td colspan="'.$i.'" align="center"><strong>VDA</strong></td></tr>';
 	    
 	    //Normal
 	    $html .= '<tr>';
 	    $html .= '<td>Normal</td>';
 	    foreach ( $boneStudiesArr as $key => $value){
 	        $html .= '<td>'.($value->vda_normal == 1 ? 'Yes' : 'No')  .'</td>';
 	    }
 	    $html .= '</tr>';
 	    
 	    //Mild Wedge Deformity
 	    $html .= '<tr>';
 	    $html .= '<td>Mild Wedge Deformity</td>';
 	    foreach ( $boneStudiesArr as $key => $value){
 	        $html .= '<td>'.($value->vda_mild_wedge_deformity == 1 ? 'Yes' : 'No') .'</td>';
 	    }
 	    $html .= '</tr>';
 	    
 	    //Mild Wedge Deformity (Note)
 	    $html .= '<tr>';
 	    $html .= '<td>Mild Wedge Deformity (Note)</td>';
 	    foreach ( $boneStudiesArr as $key => $value){
 	        $html .= '<td>'.$value->vda_mild_wedge_deformity_note  .'</td>';
 	    }
 	    $html .= '</tr>';
 	    
 	    //Moderate Wedge Deformity
 	    $html .= '<tr>';
 	    $html .= '<td>Moderate Wedge Deformity</td>';
 	    foreach ( $boneStudiesArr as $key => $value){
 	        $html .= '<td>'.($value->vda_moderate_wedge_deformity == 1 ? 'Yes' : 'No')  .'</td>';
 	    }
 	    $html .= '</tr>';
 	    
 	    //Moderate Wedge Deformity(Note)
 	    $html .= '<tr>';
 	    $html .= '<td>Moderate Wedge Deformity (Note)</td>';
 	    foreach ( $boneStudiesArr as $key => $value){
 	        $html .= '<td>'.$value->vda_moderate_wedge_deformity_note  .'</td>';
 	    }
 	    $html .= '</tr>';
 	    
 	    
 	    $html .='<tr><td colspan="'.$i.'" align="center"><strong>Body Comp</strong></td></tr>';
 	    
 	    //Left Arm - Lean Muscle (grams)
 	    $html .= '<tr>';
 	    $html .= '<td>Left Arm - Lean Muscle (grams)</td>';
 	    foreach ( $boneStudiesArr as $key => $value){
 	        $html .= '<td>'.$value->bc_left_arm_lean_muscle  .'</td>';
 	    }
 	    $html .= '</tr>';
 	    
 	    
 	    //Left Arm - Fat (grams)
 	    $html .= '<tr>';
 	    $html .= '<td>Left Arm - Fat (grams)</td>';
 	    foreach ( $boneStudiesArr as $key => $value){
 	        $html .= '<td>'.$value->bc_left_arm_fat_mass  .'</td>';
 	    }
 	    $html .= '</tr>';
 	    
 	    //Left Arm - % Fat
 	    $html .= '<tr>';
 	    $html .= '<td>Left Arm - % Fat</td>';
 	    foreach ( $boneStudiesArr as $key => $value){
 	        $html .= '<td>'.$value->bc_left_arm_fat_percent  .'</td>';
 	    }
 	    $html .= '</tr>';
 	    
 	    
 	    //Right Arm - Lean Muscle (grams)
 	    $html .= '<tr>';
 	    $html .= '<td>Right Arm - Lean Muscle (grams)</td>';
 	    foreach ( $boneStudiesArr as $key => $value){
 	        $html .= '<td>'.$value->bc_right_arm_lean_muscle  .'</td>';
 	    }
 	    $html .= '</tr>';
 	    
 	    
 	    //Right Arm - Fat (grams)
 	    $html .= '<tr>';
 	    $html .= '<td>Right Arm - Fat (grams)</td>';
 	    foreach ( $boneStudiesArr as $key => $value){
 	        $html .= '<td>'.$value->bc_right_arm_fat_mass  .'</td>';
 	    }
 	    $html .= '</tr>';
 	    
 	    //Right Arm - % Fat
 	    $html .= '<tr>';
 	    $html .= '<td>Right Arm - % Fat</td>';
 	    foreach ( $boneStudiesArr as $key => $value){
 	        $html .= '<td>'.$value->bc_right_arm_fat_percent  .'</td>';
 	    }
 	    $html .= '</tr>';
 	    
 	    
 	    //Trunk - Lean Muscle (grams)
 	    $html .= '<tr>';
 	    $html .= '<td>Trunk - Lean Muscle (grams)</td>';
 	    foreach ( $boneStudiesArr as $key => $value){
 	        $html .= '<td>'.$value->bc_trunk_lean_muscle  .'</td>';
 	    }
 	    $html .= '</tr>';
 	    
 	    
 	    //Trunk - Fat (grams)
 	    $html .= '<tr>';
 	    $html .= '<td>Trunk - Fat (grams)</td>';
 	    foreach ( $boneStudiesArr as $key => $value){
 	        $html .= '<td>'.$value->bc_trunk_fat_mass  .'</td>';
 	    }
 	    $html .= '</tr>';
 	    
 	    //Trunk - % Fat
 	    $html .= '<tr>';
 	    $html .= '<td>Trunk - % Fat</td>';
 	    foreach ( $boneStudiesArr as $key => $value){
 	        $html .= '<td>'.$value->bc_trunk_fat_percent  .'</td>';
 	    }
 	    $html .= '</tr>';
 	    
 	    
 	    //Left Leg - Lean Muscle (grams)
 	    $html .= '<tr>';
 	    $html .= '<td>Left Leg - Lean Muscle (grams)</td>';
 	    foreach ( $boneStudiesArr as $key => $value){
 	        $html .= '<td>'.$value->bc_left_leg_lean_muscle  .'</td>';
 	    }
 	    $html .= '</tr>';
 	    
 	    
 	    //Left Leg - Fat (grams)
 	    $html .= '<tr>';
 	    $html .= '<td>Left Leg - Fat (grams)</td>';
 	    foreach ( $boneStudiesArr as $key => $value){
 	        $html .= '<td>'.$value->bc_left_leg_fat_mass  .'</td>';
 	    }
 	    $html .= '</tr>';
 	    
 	    //Left Leg - % Fat
 	    $html .= '<tr>';
 	    $html .= '<td>Left Leg - % Fat</td>';
 	    foreach ( $boneStudiesArr as $key => $value){
 	        $html .= '<td>'.$value->bc_left_leg_fat_percent  .'</td>';
 	    }
 	    $html .= '</tr>';
 	    
 	    
 	    //Right Leg - Lean Muscle (grams)
 	    $html .= '<tr>';
 	    $html .= '<td>Right Leg - Lean Muscle (grams)</td>';
 	    foreach ( $boneStudiesArr as $key => $value){
 	        $html .= '<td>'.$value->bc_right_leg_lean_muscle  .'</td>';
 	    }
 	    $html .= '</tr>';
 	    
 	    //Right Leg - Fat (grams)
 	    $html .= '<tr>';
 	    $html .= '<td>Right Leg - Fat (grams)</td>';
 	    foreach ( $boneStudiesArr as $key => $value){
 	        $html .= '<td>'.$value->bc_right_leg_fat_mass  .'</td>';
 	    }
 	    $html .= '</tr>';
 	    
 	    //Right Leg - % Fat
 	    $html .= '<tr>';
 	    $html .= '<td>Right Leg - % Fat</td>';
 	    foreach ( $boneStudiesArr as $key => $value){
 	        $html .= '<td>'.$value->bc_right_leg_fat_percent  .'</td>';
 	    }
 	    $html .= '</tr>';
 	    
 	    
 	    
 	    //Subtotal - Lean Muscle (grams)
 	    $html .= '<tr>';
 	    $html .= '<td>Subtotal - Lean Muscle (grams)</td>';
 	    foreach ( $boneStudiesArr as $key => $value){
 	        $html .= '<td>'.$value->bc_subtotal_lean_muscle  .'</td>';
 	    }
 	    $html .= '</tr>';
 	    
 	    //Subtotal - Fat (grams)
 	    $html .= '<tr>';
 	    $html .= '<td>Subtotal - Fat (grams)</td>';
 	    foreach ( $boneStudiesArr as $key => $value){
 	        $html .= '<td>'.$value->bc_subtotal_fat_mass  .'</td>';
 	    }
 	    $html .= '</tr>';
 	    
 	    //Subtotal - % Fat
 	    $html .= '<tr>';
 	    $html .= '<td>Subtotal - % Fat</td>';
 	    foreach ( $boneStudiesArr as $key => $value){
 	        $html .= '<td>'.$value->bc_subtotal_fat_percent  .'</td>';
 	    }
 	    $html .= '</tr>';
 	    
 	    $html .= '</table>';
 	    
 	    echo $html;
 	    
		parent::display();
 	}
}

?>