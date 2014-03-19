<?php
// created: 2012-07-13 11:30:19
$dictionary["comite_FitnessActivity"]["fields"]["comite_fitnessactivity_comite_nutritionexercise"] = array (
  'name' => 'comite_fitnessactivity_comite_nutritionexercise',
  'type' => 'link',
  'relationship' => 'comite_fitnessactivity_comite_nutritionexercise',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_FITNESSACTIVITY_COMITE_NUTRITIONEXERCISE_FROM_COMITE_NUTRITIONEXERCISE_TITLE',
  'id_name' => 'comite_fitff99xercise_ida',
);
$dictionary["comite_FitnessActivity"]["fields"]["comite_fitnessactivity_comite_nutritionexercise_name"] = array (
  'name' => 'comite_fitnessactivity_comite_nutritionexercise_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_FITNESSACTIVITY_COMITE_NUTRITIONEXERCISE_FROM_COMITE_NUTRITIONEXERCISE_TITLE',
  'save' => true,
  'id_name' => 'comite_fitff99xercise_ida',
  'link' => 'comite_fitnessactivity_comite_nutritionexercise',
  'table' => 'comite_nutritionexercise',
  'module' => 'comite_NutritionExercise',
  'rname' => 'name',
);
$dictionary["comite_FitnessActivity"]["fields"]["comite_fitff99xercise_ida"] = array (
  'name' => 'comite_fitff99xercise_ida',
  'type' => 'link',
  'relationship' => 'comite_fitnessactivity_comite_nutritionexercise',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_FITNESSACTIVITY_COMITE_NUTRITIONEXERCISE_FROM_COMITE_FITNESSACTIVITY_TITLE',
);
