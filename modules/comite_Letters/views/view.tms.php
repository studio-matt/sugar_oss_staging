<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

require_once(dirname(__FILE__) . '/PdfView.php');

class comite_LettersViewTms extends PdfView {

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

        global $app_list_strings;

        $record = $_REQUEST['record'];

        global $beanList,
            $beanFiles,
            $sugar_config,
            $app_list_strings,
            $mod_strings,
            $db;

        $this->ss->assign('app_list_strings', $app_list_strings);

        # Get DrNote
        $DrNote = new comite_DoctorsNote();
        $DrNote->retrieve($record);

        # Find Contact
        $DrNote->load_relationship('comite_doctorsnote_contacts');
        $Contact = reset($DrNote->comite_doctorsnote_contacts->beans);

        # Count EHE to see if this an initial or annual
        $EheCount = 0;
        $Contact->load_relationship('comite_doctorsnote_contacts');
        foreach($Contact->comite_doctorsnote_contacts->beans as $OldDrNote) {
            if (strtolower($OldDrNote->appointment_type) == 'ehe') {
                $EheCount++;
            }
        }

        # Get PersonalHealthHistory
        $Contact->load_relationship('comite_personalhealthhistory_contacts');
        $PersonalHealthHistory = reset($Contact->comite_personalhealthhistory_contacts->beans);

        # Get MedicationSupplementInstances
        $PersonalHealthHistory->load_relationship('comite_medsuppinst_comite_personalhealthhistory');
        $MedSuppInstances = $PersonalHealthHistory->comite_medsuppinst_comite_personalhealthhistory->beans;
        $MedSuppObjects = array();
        foreach($MedSuppInstances as $MedSuppInstance) {
            $MedSuppInstance->load_relationship('comite_medsuppinstance_comite_medsupp');
            $MedSupp = reset($MedSuppInstance->comite_medsuppinstance_comite_medsupp->beans);
            $MedSuppObjects[$MedSuppInstance->comite_med8f3bplement_ida] = $MedSupp;
            // assume new, unless audit exists, then check dates.
            $MedSuppInstance->comite_new = false;
            $MedSuppInstance->comite_changed = false;
            if(new \DateTime($MedSuppInstance->date_modified) > new \DateTime($DrNote->date_entered)) {
                $MedSuppInstance->comite_new = true;
            }

            # Add Attributes
            $db = $MedSupp->db;
            $resp = $db->query('SELECT * FROM comite_medicationsupplementinstance_audit WHERE parent_id = "'.$MedSuppInstance->id.'"');
            while($row = $resp->fetch_assoc()) {
                $MedSuppInstance->comite_new = false;

                if(new \DateTime($MedSuppInstance->date_modified) > new \DateTime($DrNote->date_entered)) {
                    switch($row['field_name']) {
                        case 'name':
                            $MedSuppInstance->comite_changed = true;
                            $MedSuppInstance->comite_change_name = true;
                            break;
                        case 'dosage':
                            $MedSuppInstance->comite_changed = true;
                            if ($row['after_value_string'] > $row['before_value_string']) {
                                $MedSuppInstance->comite_change_dosage = 'increase';
                            } else {
                                $MedSuppInstance->comite_change_dosage = 'decrease';
                            }
                            break;
                        case 'quantity':
                            $MedSuppInstance->comite_changed = true;
                            if ($row['after_value_string'] > $row['before_value_string']) {
                                $MedSuppInstance->comite_change_quantity = 'increase';
                            } else {
                                $MedSuppInstance->comite_change_quantity = 'decrease';
                            }
                            break;
                        case 'frequency':
                            $MedSuppInstance->comite_changed = true;
                            $before = 0;
                            foreach ( $app_list_strings['frequency_list'] as $value => $display) {
                                $before++;
                                if($value == $row['before_value_string']) {
                                    break;
                                }
                            }

                            $after = 0;
                            foreach ( $app_list_strings['frequency_list'] as $value => $display) {
                                $after++;
                                if($value == $row['after_value_string']) {
                                    break;
                                }
                            }

                            if ($after > $before) {
                                $MedSuppInstance->comite_change_frequency = 'increase';
                            } else {
                                $MedSuppInstance->comite_change_frequency = 'decrease';
                            }
                            break;
                    }
                }

                if(new \DateTime($MedSuppInstance->date_entered) >= new \DateTime($DrNote->date_entered)) {
                    $MedSuppInstance->comite_new = true;
                }
            }
        }

        $db = $Contact->db;
        $DiscontinueMeds = array();
        $DiscontinueSupps = array();
        $DiscontinueHormones = array();
        $q = 'SELECT 
                    m.* 
                FROM comite_medsuppinst_comite_personalhealthhistory_c mp
                LEFT JOIN comite_medicationsupplementinstance m ON m.id = mp.comite_meda66fnstance_idb
                WHERE 
                    m.id IS NOT NULL
                        AND m.date_modified > "' . $DrNote->fetched_row['date_entered'] . '"
                        AND mp.deleted = 1
                        AND mp.comite_med5d7ehistory_ida = "'.$PersonalHealthHistory->id.'"
                GROUP BY m.name';
        $resp = $db->query($q);
        while($row = $resp->fetch_assoc()) {
            if ($row['type'] == 'hormone') {
                $DiscontinueHormones[] = $row;
            }
            if ($row['type'] == 'medication') {
                $DiscontinueMeds[] = $row;
            }
            if ($row['type'] == 'supplement') {
                $DiscontinueSupps[] = $row;
            }
        }

        # Find most recent PhysicalExam
        $Contact->load_relationship('comite_drnotesnutritionexercise_contacts');
        $DrsNoteNutritionExercise = reset($Contact->comite_drnotesnutritionexercise_contacts->beans);

        $DrsNoteNutritionExercise->load_relationship('comite_physicalexam_comite_drnotesnutritionexercise');
        $PhysicalExam = end($DrsNoteNutritionExercise->comite_physicalexam_comite_drnotesnutritionexercise->beans);
        $PhysicalExamProperties = array();
        if ($PhysicalExam) {
            $PhysicalExam->load_relationship('comite_physicalexamproperty_comite_physicalexam');
            $PhysicalExamProperties = $PhysicalExam->comite_physicalexamproperty_comite_physicalexam->beans;
        }

        $DrsNoteNutritionExercise->load_relationship('comite_bonestudies_comite_drnotesnutritionexercise');
        $PreviousBoneStudy = end($DrsNoteNutritionExercise->comite_bonestudies_comite_drnotesnutritionexercise->beans);

        # Load upcoming meetings
        $UpcomingMeetings = array();
        $Contact->load_relationship('meetings');
        $Meetings = ($Contact->meetings->beans);
        $FutureTm = false;
        foreach($Meetings as $Meeting) {
            if (strtotime($Meeting->date_start) > time()) {
                $UpcomingMeetings[] = $Meeting;

                if (trim(strtolower($Meeting->plan_type_c)) == 'specialty') {
                    $Meeting->load_relationship('comite_specialtyreferral_meetings');
                }

                if (trim(strtolower($Meeting->plan_type_c)) == 'tm') {
                    $FutureTm = $Meeting;
                }
            }
        }

        $date = date('F j, Y');

        if ($this->will_be_rendering_pdf) {
            $this->ss->assign('css', file_get_contents(dirname(__FILE__).'/../css/pdf.css'));
        } else {
            $this->ss->assign('css', file_get_contents(dirname(__FILE__).'/../css/pdf.css') . "\n" . file_get_contents(dirname(__FILE__).'/../css/edit-pdf.css'));
        }

        $Hormones = array();
        $Medications = array();
        $Supplements = array();
        
        foreach($MedSuppInstances as $MedSuppInstance) {
            
            if(!empty($MedSuppInstance->dosage)){
                if ( strpos( $MedSuppInstance->dosage, "." ) !== false ) {
                    $MedSuppInstance->dosage = floatval($MedSuppInstance->dosage);
                }
            }
            
            if(!empty($MedSuppInstance->quantity)){
                if ( strpos( $MedSuppInstance->quantity, "." ) !== false ) {
                    $MedSuppInstance->quantity = floatval($MedSuppInstance->quantity);
                }
            }
            
            if ($MedSuppInstance->type == 'hormone') {
                $Hormones[] = $MedSuppInstance;
            }
            if ($MedSuppInstance->type == 'medication' && ($MedSuppInstance->comite_new || $MedSuppInstance->comite_changed)) {
                $Medications[] = $MedSuppInstance;
            }
            if ($MedSuppInstance->type == 'supplement' && ($MedSuppInstance->comite_new || $MedSuppInstance->comite_changed)) {
                $Supplements[] = $MedSuppInstance;
            }
        }

        $this->ss->assign('base', $this->getBaseUrl());
        $this->ss->assign('date', $date);
        $this->ss->assign('HORMONES', $Hormones);
        $this->ss->assign('MEDICATIONS', $Medications);
        $this->ss->assign('SUPPLEMENTS', $Supplements);
        $this->ss->assign('DISCONTINUE_HORMONES', $DiscontinueHormones);
        $this->ss->assign('DISCONTINUE_MEDICATIONS', $DiscontinueMeds);
        $this->ss->assign('DISCONTINUE_SUPPLEMENTS', $DiscontinueSupps);
        $this->ss->assign('EHECOUNT', $EheCount);
        $this->ss->assign('DRNOTE', $DrNote);
        $this->ss->assign('MEETINGS', $UpcomingMeetings);
        $this->ss->assign('FUTURETM', $FutureTm);
        $this->ss->assign('PREVIOUSBONESTUDY', $PreviousBoneStudy);
        $this->ss->assign('CONTACT', $Contact);
        $this->ss->assign('PERSONALHEALTHHISTORY', $PersonalHealthHistory);
        $this->ss->assign('MEDSUPPINSTANCES', $MedSuppInstances);
        $this->ss->assign('MEDSUPPS', $MedSuppObjects);
        $this->ss->assign('PHYSICALEXAM', $PhysicalExam);
        $this->ss->assign('PHYSICALEXAMPROPERTIES', $PhysicalExamProperties);
        $this->ss->assign('REQUEST', $_REQUEST);
        $this->ss->assign('VARS', isset($_REQUEST['VARS']) ? $_REQUEST['VARS'] : array());

        $html = $this->ss->fetch('modules/comite_Letters/tpls/tms.tpl');

        if ($this->will_be_rendering_pdf) {
            $filename = preg_replace("#[^a-z0-9]+#i", "-", $Contact->first_name . '-' . $Contact->last_name . '-' . $date . '-TMSummary') . '.pdf';
            $pdf = $this->generatePdf($html);
            $Document = $this->savePdfAsDocument($pdf, $filename, $Contact);
            header("Location: index.php?action=DetailView&module=Documents&record=".$Document->id);
            exit;
        } else {
            echo $html;
        }
    }

    static function sortMeetingsByDate($a, $b) {
        if (strtotime($a->start_time) < strtotime($b->start_time)) {
            return -1;
        }
        return 1;
    }
}
