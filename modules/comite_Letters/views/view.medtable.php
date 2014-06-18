<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

require_once(dirname(__FILE__) . '/PdfView.php');

class comite_LettersViewMedtable extends PdfView {

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
                            $MedSuppInstance->comite_change_name = true;
                            break;
                        case 'dosage':
                            if ($row['after_value_string'] > $row['before_value_string']) {
                                $MedSuppInstance->comite_change_dosage = 'increase';
                            } else {
                                $MedSuppInstance->comite_change_dosage = 'decrease';
                            }
                            break;
                        case 'quantity':
                            if ($row['after_value_string'] > $row['before_value_string']) {
                                $MedSuppInstance->comite_change_quantity = 'increase';
                            } else {
                                $MedSuppInstance->comite_change_quantity = 'decrease';
                            }
                            break;
                        case 'frequency':

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
                                $MedSuppInstance->comite_change_frequency = 'decrease';
                            } else {
                                $MedSuppInstance->comite_change_frequency = 'increase';
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
        }
        
        
        $date = date('F j, Y');

        $this->ss->assign('css', file_get_contents(dirname(__FILE__).'/../css/pdf.css'));

        $this->ss->assign('base', $this->getBaseUrl());
        $this->ss->assign('date', $date);
        $this->ss->assign('CONTACT', $Contact);
        $this->ss->assign('DISCONTINUE_HORMONES', $DiscontinueHormones);
        $this->ss->assign('DISCONTINUE_MEDICATIONS', $DiscontinueMeds);
        $this->ss->assign('DISCONTINUE_SUPPLEMENTS', $DiscontinueSupps);
        $this->ss->assign('PERSONALHEALTHHISTORY', $PersonalHealthHistory);
        $this->ss->assign('MEDSUPPINSTANCES', $MedSuppInstances);
        $this->ss->assign('MEDSUPPS', $MedSuppObjects);
        $this->ss->assign('REQUEST', $_REQUEST);

        $html = $this->ss->fetch('modules/comite_Letters/tpls/medtable.tpl');

        $filename = preg_replace("#[^a-z0-9]+#i", "-", $Contact->first_name . '-' . $Contact->last_name . '-' . $date . '-MedTable') . '.pdf';
        $pdf = $this->generatePdf($html);
        $Document = $this->savePdfAsDocument($pdf, $filename, $Contact);
        header("Location: index.php?action=DetailView&module=Documents&record=".$Document->id);
        exit;
    }
}
