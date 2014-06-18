<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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
require_once(dirname(__FILE__) . '/PdfView.php');

class comite_LettersViewBsc extends PdfView {

    public function init($bean = null, $view_object_map = array()) {
        if (!isset($_REQUEST['render'])) {
            $this->will_be_rendering_pdf = false;
        }
        parent::init($bean, $view_object_map);
    }
    
    /**
     * @see SugarView::display()
     */
    public function display() {

        $record = array_key_exists('record', $_REQUEST) ? $_REQUEST['record'] : false;
        if (!$record) {
            die('Invalid Bone Study ID');
        }

        $Bonestudy = new comite_BoneStudies();
        $Bonestudy->retrieve($record);
        if (!$Bonestudy->id) {
            die('Invalid Bone Study ID');
        }

        $Bonestudy->load_relationship('comite_bonestudies_comite_drnotesnutritionexercise');
        $DrNotesNutritionExercise = reset($Bonestudy->comite_bonestudies_comite_drnotesnutritionexercise->beans);
        $DrNotesNutritionExercise->load_relationship('comite_drnotesnutritionexercise_contacts');
        $Contact = reset($DrNotesNutritionExercise->comite_drnotesnutritionexercise_contacts->beans);
        $Contact->load_relationship('comite_personalhealthhistory_contacts');
        $PersonalHealthHistory = reset($Contact->comite_personalhealthhistory_contacts->beans);

        $previous = array_key_exists('previous', $_REQUEST) ? $_REQUEST['previous'] : false;

        $PreviousBonestudy = false;
        $delta = array();
        if ($previous) {
            $PreviousBonestudy = new comite_BoneStudies();
            $PreviousBonestudy->retrieve($previous);
            if (!$PreviousBonestudy->id) {
                die('Invalid Previous Bone Study ID');
            }
            
            $gramsperlb = 453.59;
            $delta = array(
                'bc_left_arm_lean_muscle' => number_format(($Bonestudy->bc_left_arm_lean_muscle - $PreviousBonestudy->bc_left_arm_lean_muscle)/$gramsperlb, 3),
                'bc_right_arm_lean_muscle' => number_format(($Bonestudy->bc_right_arm_lean_muscle - $PreviousBonestudy->bc_right_arm_lean_muscle)/$gramsperlb, 3),
                'bc_trunk_lean_muscle' => number_format(($Bonestudy->bc_trunk_lean_muscle - $PreviousBonestudy->bc_trunk_lean_muscle)/$gramsperlb, 3),
                'bc_left_leg_lean_muscle' => number_format(($Bonestudy->bc_left_leg_lean_muscle - $PreviousBonestudy->bc_left_leg_lean_muscle)/$gramsperlb, 3),
                'bc_right_leg_lean_muscle' => number_format(($Bonestudy->bc_right_leg_lean_muscle - $PreviousBonestudy->bc_right_leg_lean_muscle)/$gramsperlb, 3),
                'bc_subtotal_lean_muscle' => number_format(($Bonestudy->bc_subtotal_lean_muscle - $PreviousBonestudy->bc_subtotal_lean_muscle)/$gramsperlb, 3),

                'bc_left_arm_fat_mass' => number_format(($Bonestudy->bc_left_arm_fat_mass - $PreviousBonestudy->bc_left_arm_fat_mass)/$gramsperlb, 3),
                'bc_right_arm_fat_mass' => number_format(($Bonestudy->bc_trunk_lean_muscle - $PreviousBonestudy->bc_right_arm_fat_mass)/$gramsperlb, 3),
                'bc_trunk_fat_mass' => number_format(($Bonestudy->bc_trunk_fat_mass - $PreviousBonestudy->bc_trunk_fat_mass)/$gramsperlb, 3),
                'bc_left_leg_fat_mass' => number_format(($Bonestudy->bc_left_leg_fat_mass - $PreviousBonestudy->bc_left_leg_fat_mass)/$gramsperlb, 3),
                'bc_right_leg_fat_mass' => number_format(($Bonestudy->bc_right_leg_fat_mass - $PreviousBonestudy->bc_right_leg_fat_mass)/$gramsperlb, 3),
                'bc_subtotal_fat_mass' => number_format(($Bonestudy->bc_subtotal_fat_mass - $PreviousBonestudy->bc_subtotal_fat_mass)/$gramsperlb, 3),

                'bc_left_arm_fat_percent' => number_format(($Bonestudy->bc_left_arm_fat_percent - $PreviousBonestudy->bc_left_arm_fat_percent), 1),
                'bc_right_arm_fat_percent' => number_format(($Bonestudy->bc_right_arm_fat_percent - $PreviousBonestudy->bc_right_arm_fat_percent), 1),
                'bc_trunk_fat_percent' => number_format(($Bonestudy->bc_trunk_fat_percent - $PreviousBonestudy->bc_trunk_fat_percent), 1),
                'bc_left_leg_fat_percent' => number_format(($Bonestudy->bc_left_leg_fat_percent - $PreviousBonestudy->bc_left_leg_fat_percent), 1),
                'bc_right_leg_fat_percent' => number_format(($Bonestudy->bc_right_leg_fat_percent - $PreviousBonestudy->bc_right_leg_fat_percent), 1),
                'bc_subtotal_fat_percent' => number_format(($Bonestudy->bc_subtotal_fat_percent - $PreviousBonestudy->bc_subtotal_fat_percent), 1),
            );
        }

        $now = new DateTime();
        $age = $now->diff(new DateTime($Contact->birthdate));
        $testdate = date('F j, Y', strtotime($Bonestudy->test_date));

        if ($this->will_be_rendering_pdf) {
            $this->ss->assign('css', file_get_contents(dirname(__FILE__).'/../css/pdf.css'));
        } else {
            $this->ss->assign('css', file_get_contents(dirname(__FILE__).'/../css/pdf.css') . "\n" . file_get_contents(dirname(__FILE__).'/../css/edit-pdf.css'));
        }
        
        
        $this->ss->assign('age_range', '');
        if($age-> y >= 50){
            $this->ss->assign('age_range', 'over 50');
        }else if($age-> y < 50){
            $this->ss->assign('age_range', 'under 50');
        }
        
        $this->ss->assign('percent_range', '');
        if( ($age-> y >= 50) && ($Contact->gender == 'Male') ){
            $this->ss->assign('percent_range', '20-25%');
        }else if( ($age-> y < 50) && ($Contact->gender == 'Male') ) {
            $this->ss->assign('percent_range', '14-20%');
        }else if( ($age-> y >= 50) && ($Contact->gender == 'Female') ) {
            $this->ss->assign('percent_range', '26-31%');
        }else if( ($age-> y < 50) && ($Contact->gender == 'Female') ) {
            $this->ss->assign('percent_range', '18-27%');
        }
        
        $address = new comite_Address();
        $sqlContactAddress = "SELECT comite_address.id FROM comite_address INNER JOIN comite_address_contacts_c ON comite_address_contacts_c.comite_address_contactscomite_address_idb = comite_address.id AND comite_address_contacts_c.deleted = 0 AND comite_address_contacts_c.comite_address_contactscontacts_ida = '".$Contact->id."' WHERE comite_address.deleted = 0 ORDER BY rank LIMIT 0,1";
        $resultContactAddress = $Contact->db->query($sqlContactAddress);
        $rowContactAddress = $Contact->db->fetchByAssoc($resultContactAddress);
        if(!empty($rowContactAddress['id'])){
            $address->retrieve($rowContactAddress['id']);
        }
        $this->ss->assign('ADDRESS', $address);

        $this->ss->assign('base', $this->getBaseUrl());
        $this->ss->assign('age', $age->y);
        $this->ss->assign('date', date('F j, Y'));
        $this->ss->assign('BONESTUDY', $Bonestudy);
        $this->ss->assign('testdate', $testdate);
        $this->ss->assign('PREVIOUSBONESTUDY', $PreviousBonestudy);
        $this->ss->assign('previoustestdate', $PreviousBonestudy ? date('F j, Y', strtotime($PreviousBonestudy->test_date)) : '');
        $this->ss->assign('DELTA', $delta);
        $this->ss->assign('CONTACT', $Contact);
        $this->ss->assign('PERSONALHEALTHHISTORY', $PersonalHealthHistory);
        
        $this->ss->assign('REQUEST', $_REQUEST);
        $this->ss->assign('VARS', isset($_REQUEST['VARS']) ? $_REQUEST['VARS'] : array());
        $this->ss->assign('render', $this->will_be_rendering_pdf);

        $html = $this->ss->fetch('modules/comite_Letters/tpls/bsc.tpl');
        
        if ($this->will_be_rendering_pdf) {
            $filename = preg_replace("#[^a-z0-9]+#i", "-", $Contact->first_name . '-' . $Contact->last_name . '-' . $date . '- Bone Study') . '.pdf';
            $pdf = $this->generatePdf($html);
            $Document = $this->savePdfAsDocument($pdf, $filename, $Contact);
            header("Location: index.php?action=DetailView&module=Documents&record=".$Document->id);
        } else {
            echo $html;
        }
    }

}
