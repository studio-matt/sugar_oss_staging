<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-08-06 14:25:58
$dictionary["comite_FitnessAssessment"]["fields"]["comite_fitnessassessmentphoto_comite_fitnessassessment"] = array (
  'name' => 'comite_fitnessassessmentphoto_comite_fitnessassessment',
  'type' => 'link',
  'relationship' => 'comite_fitnessassessmentphoto_comite_fitnessassessment',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_FITNESSASSESSMENTPHOTO_COMITE_FITNESSASSESSMENT_FROM_COMITE_FITNESSASSESSMENTPHOTO_TITLE',
);


// created: 2012-07-31 13:29:02
$dictionary["comite_FitnessAssessment"]["fields"]["comite_fitnessassessment_comite_drnotesnutritionexercise"] = array (
  'name' => 'comite_fitnessassessment_comite_drnotesnutritionexercise',
  'type' => 'link',
  'relationship' => 'comite_fitnessassessment_comite_drnotesnutritionexercise',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_FITNESSASSESSMENT_COMITE_DRNOTESNUTRITIONEXERCISE_FROM_COMITE_DRNOTESNUTRITIONEXERCISE_TITLE',
  'id_name' => 'comite_fit217bxercise_ida',
);
$dictionary["comite_FitnessAssessment"]["fields"]["comite_fitnessassessment_comite_drnotesnutritionexercise_name"] = array (
  'name' => 'comite_fitnessassessment_comite_drnotesnutritionexercise_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_FITNESSASSESSMENT_COMITE_DRNOTESNUTRITIONEXERCISE_FROM_COMITE_DRNOTESNUTRITIONEXERCISE_TITLE',
  'save' => true,
  'id_name' => 'comite_fit217bxercise_ida',
  'link' => 'comite_fitnessassessment_comite_drnotesnutritionexercise',
  'table' => 'comite_drnotesnutritionexercise',
  'module' => 'comite_DrNotesNutritionExercise',
  'rname' => 'name',
);
$dictionary["comite_FitnessAssessment"]["fields"]["comite_fit217bxercise_ida"] = array (
  'name' => 'comite_fit217bxercise_ida',
  'type' => 'link',
  'relationship' => 'comite_fitnessassessment_comite_drnotesnutritionexercise',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_FITNESSASSESSMENT_COMITE_DRNOTESNUTRITIONEXERCISE_FROM_COMITE_FITNESSASSESSMENT_TITLE',
);

?>