<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-07-31 13:29:02
$dictionary["comite_DrNotesNutritionExercise"]["fields"]["comite_fitnessassessment_comite_drnotesnutritionexercise"] = array (
  'name' => 'comite_fitnessassessment_comite_drnotesnutritionexercise',
  'type' => 'link',
  'relationship' => 'comite_fitnessassessment_comite_drnotesnutritionexercise',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_FITNESSASSESSMENT_COMITE_DRNOTESNUTRITIONEXERCISE_FROM_COMITE_FITNESSASSESSMENT_TITLE',
);


// created: 2012-07-30 23:30:42
$dictionary["comite_DrNotesNutritionExercise"]["fields"]["comite_drnotesnutritionexercise_contacts"] = array (
  'name' => 'comite_drnotesnutritionexercise_contacts',
  'type' => 'link',
  'relationship' => 'comite_drnotesnutritionexercise_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_DRNOTESNUTRITIONEXERCISE_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'comite_drnotesnutritionexercise_contactscontacts_idb',
);
$dictionary["comite_DrNotesNutritionExercise"]["fields"]["comite_drnotesnutritionexercise_contacts_name"] = array (
  'name' => 'comite_drnotesnutritionexercise_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_DRNOTESNUTRITIONEXERCISE_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'comite_drnotesnutritionexercise_contactscontacts_idb',
  'link' => 'comite_drnotesnutritionexercise_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["comite_DrNotesNutritionExercise"]["fields"]["comite_drnotesnutritionexercise_contactscontacts_idb"] = array (
  'name' => 'comite_drnotesnutritionexercise_contactscontacts_idb',
  'type' => 'link',
  'relationship' => 'comite_drnotesnutritionexercise_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_COMITE_DRNOTESNUTRITIONEXERCISE_CONTACTS_FROM_CONTACTS_TITLE',
);


// created: 2013-01-08 14:45:32
$dictionary["comite_DrNotesNutritionExercise"]["fields"]["comite_physicalexam_comite_drnotesnutritionexercise"] = array (
  'name' => 'comite_physicalexam_comite_drnotesnutritionexercise',
  'type' => 'link',
  'relationship' => 'comite_physicalexam_comite_drnotesnutritionexercise',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_PHYSICALEXAM_COMITE_DRNOTESNUTRITIONEXERCISE_FROM_COMITE_PHYSICALEXAM_TITLE',
);


// created: 2012-07-30 23:30:20
$dictionary["comite_DrNotesNutritionExercise"]["fields"]["comite_spirometry_comite_drnotesnutritionexercise"] = array (
  'name' => 'comite_spirometry_comite_drnotesnutritionexercise',
  'type' => 'link',
  'relationship' => 'comite_spirometry_comite_drnotesnutritionexercise',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_SPIROMETRY_COMITE_DRNOTESNUTRITIONEXERCISE_FROM_COMITE_SPIROMETRY_TITLE',
);


// created: 2012-07-30 23:30:02
$dictionary["comite_DrNotesNutritionExercise"]["fields"]["comite_tmfollowupcall_comite_drnotesnutritionexercise"] = array (
  'name' => 'comite_tmfollowupcall_comite_drnotesnutritionexercise',
  'type' => 'link',
  'relationship' => 'comite_tmfollowupcall_comite_drnotesnutritionexercise',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_TMFOLLOWUPCALL_COMITE_DRNOTESNUTRITIONEXERCISE_FROM_COMITE_TMFOLLOWUPCALL_TITLE',
);


// created: 2013-01-08 14:44:40
$dictionary["comite_DrNotesNutritionExercise"]["fields"]["comite_eherecommendations_comite_drnotesnutritionexercise"] = array (
  'name' => 'comite_eherecommendations_comite_drnotesnutritionexercise',
  'type' => 'link',
  'relationship' => 'comite_eherecommendations_comite_drnotesnutritionexercise',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_EHERECOMMENDATIONS_COMITE_DRNOTESNUTRITIONEXERCISE_FROM_COMITE_EHERECOMMENDATIONS_TITLE',
);


// created: 2013-01-08 14:44:26
$dictionary["comite_DrNotesNutritionExercise"]["fields"]["comite_bonestudies_comite_drnotesnutritionexercise"] = array (
  'name' => 'comite_bonestudies_comite_drnotesnutritionexercise',
  'type' => 'link',
  'relationship' => 'comite_bonestudies_comite_drnotesnutritionexercise',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_BONESTUDIES_COMITE_DRNOTESNUTRITIONEXERCISE_FROM_COMITE_BONESTUDIES_TITLE',
);


// created: 2012-07-30 23:30:16
$dictionary["comite_DrNotesNutritionExercise"]["fields"]["comite_v02testing_comite_drnotesnutritionexercise"] = array (
  'name' => 'comite_v02testing_comite_drnotesnutritionexercise',
  'type' => 'link',
  'relationship' => 'comite_v02testing_comite_drnotesnutritionexercise',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_V02TESTING_COMITE_DRNOTESNUTRITIONEXERCISE_FROM_COMITE_V02TESTING_TITLE',
);


// created: 2013-01-08 14:44:42
$dictionary["comite_DrNotesNutritionExercise"]["fields"]["comite_endopat_comite_drnotesnutritionexercise"] = array (
  'name' => 'comite_endopat_comite_drnotesnutritionexercise',
  'type' => 'link',
  'relationship' => 'comite_endopat_comite_drnotesnutritionexercise',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_ENDOPAT_COMITE_DRNOTESNUTRITIONEXERCISE_FROM_COMITE_ENDOPAT_TITLE',
);

?>