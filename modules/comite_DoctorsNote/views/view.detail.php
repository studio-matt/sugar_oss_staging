<?php
require_once('include/MVC/View/views/view.detail.php');

class comite_DoctorsNoteViewDetail extends ViewDetail {

  public $LifeStyleDetail;


  function comite_DoctorsNoteViewDetail(){

  }

  public function preDisplay() {

    parent::preDisplay();


    $comite_DoctorsNote = $this->bean;

    // Contact
    $comite_DoctorsNote->load_relationship('comite_doctorsnote_contacts');
    $contact = reset($comite_DoctorsNote->comite_doctorsnote_contacts->beans);
    if (!$contact) {
        return;
    }
    $this->contact = $contact;

    # Demographics
    $this->DemographicsDetail = new DetailView2();
    $metadataFile = $this->getMetaDataFile();
    $this->DemographicsDetail->ss =& $this->ss;
    $this->DemographicsDetail->setup('Contacts', $contact, null, 'custom/include/generic/tpls/SubPanelDetailView.tpl');

    # Family Health History
    $contact->load_relationship('comite_familyhealthhistory_contacts');
    $comite_FamilyHealthHistory = $contact->comite_familyhealthhistory_contacts->beans[reset(array_keys($contact->comite_familyhealthhistory_contacts->beans))];
    $this->FamilyHealthHistoryDetail = new DetailView2();
    $metadataFile = $this->getMetaDataFile();
    $this->FamilyHealthHistoryDetail->ss =& $this->ss;
    $this->FamilyHealthHistoryDetail->setup('comite_FamilyHealthHistory', $comite_FamilyHealthHistory, null, 'custom/include/generic/tpls/SubPanelDetailView.tpl');

    # Personal Health History
    $contact->load_relationship('comite_personalhealthhistory_contacts');
    $comite_PersonalHealthHistory = $contact->comite_personalhealthhistory_contacts->beans[reset(array_keys($contact->comite_personalhealthhistory_contacts->beans))];
    $this->PersonalHealthHistoryDetail = new DetailView2();
    $metadataFile = $this->getMetaDataFile();
    $this->PersonalHealthHistoryDetail->ss =& $this->ss;
    $this->PersonalHealthHistoryDetail->setup('comite_PersonalHealthHistory', $comite_PersonalHealthHistory, null, 'custom/include/generic/tpls/SubPanelDetailView.tpl');

    # Lifestyle
    $contact->load_relationship('comite_lifestyle_contacts');
    $comite_LifeStyle = $contact->comite_lifestyle_contacts->beans[reset(array_keys($contact->comite_lifestyle_contacts->beans))];
    $this->LifeStyleDetail = new DetailView2();
    $metadataFile = $this->getMetaDataFile();
    $this->LifeStyleDetail->ss =& $this->ss;
    $this->LifeStyleDetail->setup('comite_LifeStyle', $comite_LifeStyle, null, 'custom/include/generic/tpls/SubPanelDetailView.tpl');

    # Nutrition & Exercise
    $contact->load_relationship('comite_nutritionexercise_contacts');
    $comite_LifeStyle = $contact->comite_nutritionexercise_contacts->beans[reset(array_keys($contact->comite_nutritionexercise_contacts->beans))];
    $this->NutritionExerciseDetail = new DetailView2();
    $metadataFile = $this->getMetaDataFile();
    $this->NutritionExerciseDetail->ss =& $this->ss;
    $this->NutritionExerciseDetail->setup('comite_NutritionExercise', $comite_LifeStyle, null, 'custom/include/generic/tpls/SubPanelDetailView.tpl');

    # Pharmacy Log
    $contact->load_relationship('comite_pharmacylog_contacts');
    $comite_PharmacyLog = $contact->comite_pharmacylog_contacts->beans[reset(array_keys($contact->comite_pharmacylog_contacts->beans))];
    $this->PharmacyLogDetail = new DetailView2();
    $metadataFile = $this->getMetaDataFile();
    $this->PharmacyLogDetail->ss =& $this->ss;
    $this->PharmacyLogDetail->setup('comite_PharmacyLog', $comite_PharmacyLog, null, 'custom/include/generic/tpls/SubPanelDetailView.tpl');

    # Dr. Notes Nutrition & Exercise
    $contact->load_relationship('comite_drnotesnutritionexercise_contacts');
    $comite_DrNotesNutritionExercise = $contact->comite_drnotesnutritionexercise_contacts->beans[reset(array_keys($contact->comite_drnotesnutritionexercise_contacts->beans))];
    $this->DrNotesNutritionExerciseDetail = new DetailView2();
    $metadataFile = $this->getMetaDataFile();
    $this->DrNotesNutritionExerciseDetail->ss =& $this->ss;
    $this->DrNotesNutritionExerciseDetail->setup('comite_DrNotesNutritionExercise', $comite_DrNotesNutritionExercise, null, 'custom/include/generic/tpls/SubPanelDetailView.tpl');
  }

  /**
    * @see SugarView::display()
    */
  public function display()
  {
  
    parent::display();
    
    //Bone Study PDF button
      if(!empty($this->bean->comite_doctorsnote_contactscontacts_ida)){
         global $db;
         $sqlBoneStudies = "(SELECT comite_bonestudies.id, comite_bonestudies.name  FROM comite_bonestudies INNER JOIN comite_bonestudies_comite_drnotesnutritionexercise_c ON comite_bonestudies.id=comite_bonestudies_comite_drnotesnutritionexercise_c.comite_bon36d7studies_idb AND comite_bonestudies_comite_drnotesnutritionexercise_c.deleted=0  LEFT JOIN   comite_drnotesnutritionexercise ON comite_drnotesnutritionexercise.id = comite_bonestudies_comite_drnotesnutritionexercise_c.comite_bon0dc8xercise_ida AND comite_drnotesnutritionexercise.deleted = 0 INNER JOIN  comite_drnotesnutritionexercise_contacts_c ON comite_drnotesnutritionexercise_contacts_c.comite_drn0c29xercise_ida = comite_drnotesnutritionexercise.id AND  comite_drnotesnutritionexercise_contacts_c. 	comite_drnotesnutritionexercise_contactscontacts_idb = '".$this->bean->comite_doctorsnote_contactscontacts_ida."'  AND comite_drnotesnutritionexercise_contacts_c.deleted = 0 WHERE comite_bonestudies.deleted=0) ORDER BY comite_bonestudies.test_date desc LIMIT 0,2";
          $resultBoneStudies = $db->query($sqlBoneStudies);
          $i = 1;
          while ($rowBoneStudies = $db->fetchByAssoc($resultBoneStudies) ){
              $boneStudyId[$i] = $rowBoneStudies['id'];
              $i++;
          }
          
          if($i > 2){
                echo <<<EOQ
		<script type="text/javascript">
		$(document).ready(function(){
		 	var bone_studies_button = '<input type="button" name="comaprisonReport" value="Bone Studies Comparison Report" id="comaprisonReport"  onClick="window.open(\'index.php?module=comite_Letters&action=bsc&record={$boneStudyId[1]}&previous={$boneStudyId[2]}\', \'comaprisonReport\');">';
                  	$('#btn_view_change_log').parent().prepend(bone_studies_button);
		});
                </script>
EOQ;
          }
      }

    echo <<<EOF
    <ul id="DoctorNotesButtons">
      <li><a href="#Dr_Med_Table_Sub" onclick="return doctorsNoteShowHide(this,'Dr_Med_Table_Sub');">Med Table</a></li>
      <li><a href="#Dr_Labs_Sub" onclick="return doctorsNoteShowHide(this,'Dr_Labs_Sub');">Labs</a></li>
      <li><a href="#Dr_Health_History_Sub" onclick="return doctorsNoteShowHide(this,'Dr_Health_History_Sub');">Health History</a></li>
      <li><a href="#Dr_Lifestyle_Fitness_Sub" onclick="return doctorsNoteShowHide(this,'Dr_Lifestyle_Fitness_Sub');">Lifestyle / Fitness</a></li>
      <li><a href="#Dr_Nutrition_Exercise_Sub" onclick="return doctorsNoteShowHide(this,'Dr_Nutrition_Exercise_Sub');">Nutrition &amp; Exercise</a></li>
      <li><a href="#Dr_Consults_Diagnostics_Sub" onclick="return doctorsNoteShowHide(this,'Dr_Consults_Diagnostics_Sub');">Consults &amp; Diagnostics</a></li>
      <li><a href="#Dr_PharmacyLog_Sub" onclick="return doctorsNoteShowHide(this,'Dr_PharmacyLog_Sub');">Pharmacy Log</a></li>
      <li><a href="#Dr_Plan_Sub" onclick="return doctorsNoteShowHide(this,'Dr_Plan_Sub');">Plan</a></li>
    </ul>
EOF;

    $originalModule = $_REQUEST['module'];
    $originalRecord = $_REQUEST['record'];
    $_REQUEST['originalModule'] = $originalModule;
    $_REQUEST['originalRecord'] = $originalRecord;

    # Demographics
    $this->DemographicsDetail->th->ss->assign('SECTION_TITLE', 'Demographics');
    $this->DemographicsDetail->process();
    $GLOBALS['focus'] = $this->DemographicsDetail->focus;
    $_REQUEST['module'] = $_GET['module'] = $this->DemographicsDetail->module;
    $_REQUEST['record'] = $_GET['record'] = $this->DemographicsDetail->focus->id;
    require_once ('include/SubPanel/SubPanelTiles.php');
    $subpanel = new SubPanelTiles($this->DemographicsDetail->focus, $this->DemographicsDetail->module);
    echo '<div class="HLAGroup" id="Dr_Demographics_Sub">';
    echo $this->DemographicsDetail->display(false);
    echo $subpanel->display();
    echo '</div>';
    $_REQUEST['module'] = $_GET['module'] = $originalModule;
    $_REQUEST['record'] = $_GET['record'] = $originalRecord;

    # Family Health History
    $this->FamilyHealthHistoryDetail->th->ss->assign('SECTION_TITLE', 'Family Health History');
    $this->FamilyHealthHistoryDetail->process();
    $GLOBALS['focus'] = $this->FamilyHealthHistoryDetail->focus;
    $_REQUEST['module'] = $_GET['module'] = $this->FamilyHealthHistoryDetail->module;
    $_REQUEST['record'] = $_GET['record'] = $this->FamilyHealthHistoryDetail->focus->id;
    require_once ('include/SubPanel/SubPanelTiles.php');
    $subpanel = new SubPanelTiles($this->FamilyHealthHistoryDetail->focus, $this->FamilyHealthHistoryDetail->module);
    echo '<div class="HLAGroup" id="Dr_FamilyHealth_Sub">';
    echo $this->FamilyHealthHistoryDetail->display(false);
    echo $subpanel->display();
    echo '</div>';
    $_REQUEST['module'] = $_GET['module'] = $originalModule;
    $_REQUEST['record'] = $_GET['record'] = $originalRecord;

    # Personal Health History
    $this->PersonalHealthHistoryDetail->th->ss->assign('SECTION_TITLE', 'Personal Health History');
    $this->PersonalHealthHistoryDetail->process();
    $GLOBALS['focus'] = $this->PersonalHealthHistoryDetail->focus;
    $_REQUEST['module'] = $_GET['module'] = $this->PersonalHealthHistoryDetail->module;
    $_REQUEST['record'] = $_GET['record'] = $this->PersonalHealthHistoryDetail->focus->id;
    require_once ('include/SubPanel/SubPanelTiles.php');
    $subpanel = new SubPanelTiles($this->PersonalHealthHistoryDetail->focus, $this->PersonalHealthHistoryDetail->module, null, 'comite_PersonalHealthHistory');
    echo '<div class="HLAGroup" id="Dr_PersonalHealth_Sub">';
    echo $this->PersonalHealthHistoryDetail->display(false);
    echo $subpanel->display();
    echo '</div>';
    $_REQUEST['module'] = $_GET['module'] = $originalModule;
    $_REQUEST['record'] = $_GET['record'] = $originalRecord;

    # Lifestyle
    $this->LifeStyleDetail->th->ss->assign('SECTION_TITLE', 'Lifestyle');
    $this->LifeStyleDetail->process();
    $GLOBALS['focus'] = $this->LifeStyleDetail->focus;
    $_REQUEST['module'] = $_GET['module'] = $this->LifeStyleDetail->module;
    $_REQUEST['record'] = $_GET['record'] = $this->LifeStyleDetail->focus->id;
    require_once ('include/SubPanel/SubPanelTiles.php');
    $subpanel = new SubPanelTiles($this->LifeStyleDetail->focus, $this->LifeStyleDetail->module);
    echo '<div class="HLAGroup" id="Dr_Lifestyle_Sub">';
    echo $this->LifeStyleDetail->display(false);
    echo $subpanel->display();
    echo '</div>';
    $_REQUEST['module'] = $_GET['module'] = $originalModule;
    $_REQUEST['record'] = $_GET['record'] = $originalRecord;

    # HLA Fitness
    $this->NutritionExerciseDetail->th->ss->assign('SECTION_TITLE', 'HLA Fitness');
    $this->NutritionExerciseDetail->process();
    $GLOBALS['focus'] = $this->NutritionExerciseDetail->focus;
    $_REQUEST['module'] = $_GET['module'] = $this->NutritionExerciseDetail->module;
    $_REQUEST['record'] = $_GET['record'] = $this->NutritionExerciseDetail->focus->id;
    require_once ('include/SubPanel/SubPanelTiles.php');
    $subpanel = new SubPanelTiles($this->NutritionExerciseDetail->focus, $this->NutritionExerciseDetail->module);
    echo '<div class="HLAGroup" id="Dr_NutritionExercise_Sub">';
    echo $this->NutritionExerciseDetail->display(false);
    echo $subpanel->display();
    echo '</div>';
    $_REQUEST['module'] = $_GET['module'] = $originalModule;
    $_REQUEST['record'] = $_GET['record'] = $originalRecord;

    # Pharmacy Log
    $this->PharmacyLogDetail->th->ss->assign('SECTION_TITLE', 'Pharmacy Log');
    $this->PharmacyLogDetail->process();
    $GLOBALS['focus'] = $this->PharmacyLogDetail->focus;
    $_REQUEST['module'] = $_GET['module'] = $this->PharmacyLogDetail->module;
    $_REQUEST['record'] = $_GET['record'] = $this->PharmacyLogDetail->focus->id;
    require_once ('include/SubPanel/SubPanelTiles.php');
    $subpanel = new SubPanelTiles($this->PharmacyLogDetail->focus, $this->PharmacyLogDetail->module);
    echo '<div class="HLAGroup" id="Dr_PharmacyLog_Sub">';
    echo $this->PharmacyLogDetail->display(false);
    echo $subpanel->display();
    echo '</div>';
    $_REQUEST['module'] = $_GET['module'] = $originalModule;
    $_REQUEST['record'] = $_GET['record'] = $originalRecord;

    # Nutrition & Exercise
    $this->DrNotesNutritionExerciseDetail->th->ss->assign('SECTION_TITLE', 'Nutrition & Exercise');
    $this->DrNotesNutritionExerciseDetail->process();
    $GLOBALS['focus'] = $this->DrNotesNutritionExerciseDetail->focus;
    $_REQUEST['module'] = $_GET['module'] = $this->DrNotesNutritionExerciseDetail->module;
    $_REQUEST['record'] = $_GET['record'] = $this->DrNotesNutritionExerciseDetail->focus->id;
    require_once ('include/SubPanel/SubPanelTiles.php');
    $subpanel = new SubPanelTiles($this->DrNotesNutritionExerciseDetail->focus, $this->DrNotesNutritionExerciseDetail->module);
    echo '<div class="HLAGroup" id="Dr_DrNotesNutritionExercise_Sub">';
    echo $this->DrNotesNutritionExerciseDetail->display(false);
    echo $subpanel->display();
    echo '</div>';
    $_REQUEST['module'] = $_GET['module'] = $originalModule;
    $_REQUEST['record'] = $_GET['record'] = $originalRecord;
  }
}
