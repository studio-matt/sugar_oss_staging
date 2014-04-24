<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

require_once(dirname(__FILE__) . '/PdfView.php');

class comite_LettersViewBonestudy extends PdfView {

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

            $gramsperlb = 453.592;
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

        $this->ss->assign('css', file_get_contents(dirname(__FILE__).'/../css/pdf.css'));

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

        $html = $this->ss->fetch('modules/comite_Letters/tpls/bonestudy.tpl');

        $filename = preg_replace("#[^a-z0-9]+#i", "-", $Contact->first_name . '-' . $Contact->last_name . '-' . $testdate . '-BoneStudy') . '.pdf';
        $pdf = $this->generatePdf($html);
        $Document = $this->savePdfAsDocument($pdf, $filename, $Contact);
        header("Location: index.php?action=DetailView&module=Documents&record=".$Document->id);
        exit;
    }

}
