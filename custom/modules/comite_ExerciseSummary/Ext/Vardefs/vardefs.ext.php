<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-07-13 11:30:29
$dictionary["comite_ExerciseSummary"]["fields"]["comite_exercisesummary_comite_nutritionexercise"] = array (
  'name' => 'comite_exercisesummary_comite_nutritionexercise',
  'type' => 'link',
  'relationship' => 'comite_exercisesummary_comite_nutritionexercise',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_EXERCISESUMMARY_COMITE_NUTRITIONEXERCISE_FROM_COMITE_NUTRITIONEXERCISE_TITLE',
  'id_name' => 'comite_exe5cb8xercise_ida',
);
$dictionary["comite_ExerciseSummary"]["fields"]["comite_exercisesummary_comite_nutritionexercise_name"] = array (
  'name' => 'comite_exercisesummary_comite_nutritionexercise_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_EXERCISESUMMARY_COMITE_NUTRITIONEXERCISE_FROM_COMITE_NUTRITIONEXERCISE_TITLE',
  'save' => true,
  'id_name' => 'comite_exe5cb8xercise_ida',
  'link' => 'comite_exercisesummary_comite_nutritionexercise',
  'table' => 'comite_nutritionexercise',
  'module' => 'comite_NutritionExercise',
  'rname' => 'name',
);
$dictionary["comite_ExerciseSummary"]["fields"]["comite_exe5cb8xercise_ida"] = array (
  'name' => 'comite_exe5cb8xercise_ida',
  'type' => 'link',
  'relationship' => 'comite_exercisesummary_comite_nutritionexercise',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_EXERCISESUMMARY_COMITE_NUTRITIONEXERCISE_FROM_COMITE_EXERCISESUMMARY_TITLE',
);

?>