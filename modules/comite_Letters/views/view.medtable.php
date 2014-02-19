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

        $Contact = new Contact();
        $Contact->retrieve($record);

        # Find Most Recent Doctors Note
        $Contact->load_relationship('comite_doctorsnote_contacts');
        $DrNote = reset($Contact->comite_doctorsnote_contacts->beans);

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

            # Add Attributes
            $db = $MedSupp->db;
            $resp = $db->query('SELECT * FROM comite_medicationsupplementinstance_audit WHERE parent_id = "'.$MedSuppInstance->id.'"');
            while($row = $resp->fetch_assoc()) {
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
                            $MedSuppInstance->comite_change_frequency = 'increase';
                        } else {
                            $MedSuppInstance->comite_change_frequency = 'decrease';
                        }
                        break;
                }

                if(new \DateTime($MedSuppInstance->date_entered) > new \DateTime($DrNote->date_entered)) {
                    $MedSuppInstance->comite_new = true;
                }
            }
        }

        $date = date('F j, Y');

        $this->ss->assign('css', file_get_contents(dirname(__FILE__).'/../css/pdf.css'));

        $this->ss->assign('base', $this->getBaseUrl());
        $this->ss->assign('date', $date);
        $this->ss->assign('CONTACT', $Contact);
        $this->ss->assign('PERSONALHEALTHHISTORY', $PersonalHealthHistory);
        $this->ss->assign('MEDSUPPINSTANCES', $MedSuppInstances);
        $this->ss->assign('MEDSUPPS', $MedSuppObjects);
        $this->ss->assign('REQUEST', $_REQUEST);

        $html = $this->ss->fetch('modules/comite_Letters/tpls/medtable.tpl');

        $filename = preg_replace("#[^a-z0-9]+#i", "-", $Contact->first_name . '-' . $Contact->last_name . '-' . $date . '-MedTable') . '.pdf';
        $this->displayPdf($html, $filename);
    }
}
