<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-08-06 14:25:58
$dictionary["comite_FitnessAssessmentPhoto"]["fields"]["comite_fitnessassessmentphoto_comite_fitnessassessment"] = array (
  'name' => 'comite_fitnessassessmentphoto_comite_fitnessassessment',
  'type' => 'link',
  'relationship' => 'comite_fitnessassessmentphoto_comite_fitnessassessment',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_FITNESSASSESSMENTPHOTO_COMITE_FITNESSASSESSMENT_FROM_COMITE_FITNESSASSESSMENT_TITLE',
  'id_name' => 'comite_fit5fbdessment_ida',
);
$dictionary["comite_FitnessAssessmentPhoto"]["fields"]["comite_fitnessassessmentphoto_comite_fitnessassessment_name"] = array (
  'name' => 'comite_fitnessassessmentphoto_comite_fitnessassessment_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_FITNESSASSESSMENTPHOTO_COMITE_FITNESSASSESSMENT_FROM_COMITE_FITNESSASSESSMENT_TITLE',
  'save' => true,
  'id_name' => 'comite_fit5fbdessment_ida',
  'link' => 'comite_fitnessassessmentphoto_comite_fitnessassessment',
  'table' => 'comite_fitnessassessment',
  'module' => 'comite_FitnessAssessment',
  'rname' => 'name',
);
$dictionary["comite_FitnessAssessmentPhoto"]["fields"]["comite_fit5fbdessment_ida"] = array (
  'name' => 'comite_fit5fbdessment_ida',
  'type' => 'link',
  'relationship' => 'comite_fitnessassessmentphoto_comite_fitnessassessment',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_FITNESSASSESSMENTPHOTO_COMITE_FITNESSASSESSMENT_FROM_COMITE_FITNESSASSESSMENTPHOTO_TITLE',
);

?>