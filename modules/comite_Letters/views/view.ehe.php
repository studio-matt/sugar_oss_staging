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


/**
 * ContactsViewValidPortalUsername.php
 *
 * This class overrides SugarView and provides an implementation for the ValidPortalUsername
 * method used for checking whether or not an existing portal user_name has already been assigned.
 * We take advantage of the MVC framework to provide this action which is invoked from
 * a javascript AJAX request.
 *
 * @author Collin Lee
 * */

require_once(dirname(__FILE__) . '/PdfView.php');

class comite_LettersViewEhe extends PdfView {

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
    $this->ss->assign('app_list_strings', $app_list_strings);

    $record = $_REQUEST['record'];;

    # Get DrNote
    $DrNote = new comite_DoctorsNote();
    $DrNote->retrieve($record);

    # Find Contact
    $DrNote->load_relationship('comite_doctorsnote_contacts');
    $Contact = reset($DrNote->comite_doctorsnote_contacts->beans);

    $Contact->load_relationship('comite_drnotesnutritionexercise_contacts');
    $DrNotesNutritionExercise = reset($Contact->comite_drnotesnutritionexercise_contacts->beans);

    $DrNotesNutritionExercise->load_relationship('comite_eherecommendations_comite_drnotesnutritionexercise');
    $EheRecommendations = end($DrNotesNutritionExercise->comite_eherecommendations_comite_drnotesnutritionexercise->beans);

    $DrNotesNutritionExercise->load_relationship('comite_v02testing_comite_drnotesnutritionexercise');
    $VO2Testings = $DrNotesNutritionExercise->comite_v02testing_comite_drnotesnutritionexercise->beans;

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

    $date = date('F j, Y');

    $this->ss->assign('date', $date);
    $this->ss->assign('base', $this->getBaseUrl());

    
    if ($this->will_be_rendering_pdf) {
        $this->ss->assign('css', file_get_contents(dirname(__FILE__).'/../css/pdf.css'));
    } else {
        $this->ss->assign('css', file_get_contents(dirname(__FILE__).'/../css/pdf.css') . "\n" . file_get_contents(dirname(__FILE__).'/../css/edit-pdf.css'));
    }

    usort($VO2Testings, array($this, 'sortVo2'));

    $this->ss->assign('CONTACT', $Contact);
    $this->ss->assign('NUTRITION_EXERCISE', $DrNotesNutritionExercise);
    $this->ss->assign('EHE_RECOMMENDATIONS', $EheRecommendations);
    $this->ss->assign('VO2_TESTINGS', $VO2Testings);
    $this->ss->assign('VO2_TESTING', reset($VO2Testings));
    $this->ss->assign('MEDSUPPINSTANCES', $MedSuppInstances);
    $this->ss->assign('MEDSUPPS', $MedSuppObjects);

    $this->ss->assign('REQUEST', $_REQUEST);
    $this->ss->assign('VARS', isset($_REQUEST['VARS']) ? $_REQUEST['VARS'] : array());
    $this->ss->assign('render', $this->will_be_rendering_pdf);

    $html = $this->ss->fetch('modules/comite_Letters/tpls/ehe.tpl');

    if ($this->will_be_rendering_pdf) {
        $filename = preg_replace("#[^a-z0-9]+#i", "-", $Contact->first_name . '-' . $Contact->last_name . '-' . $date . '-Letter') . '.pdf';
        $pdf = $this->generatePdf($html);
        $Document = $this->savePdfAsDocument($pdf, $filename, $Contact);
        header("Location: index.php?action=DetailView&module=Documents&record=".$Document->id);
    } else {
        echo $html;
    }
  }
  
  /**
   * Sorts newest first
   */
  public function sortVo2($a, $b) {
      if ($a->document_name < $b->document_name) {
          return 1;
      } else if ($a->document_name > $b->document_name) {
          return -1;
      }
      return 0;
  }
}
