<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-07-13 11:30:15
$dictionary["comite_NutritionalIntake"]["fields"]["comite_nutritionalintake_comite_nutritionexercise"] = array (
  'name' => 'comite_nutritionalintake_comite_nutritionexercise',
  'type' => 'link',
  'relationship' => 'comite_nutritionalintake_comite_nutritionexercise',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_NUTRITIONALINTAKE_COMITE_NUTRITIONEXERCISE_FROM_COMITE_NUTRITIONEXERCISE_TITLE',
  'id_name' => 'comite_nut9e6bxercise_ida',
);
$dictionary["comite_NutritionalIntake"]["fields"]["comite_nutritionalintake_comite_nutritionexercise_name"] = array (
  'name' => 'comite_nutritionalintake_comite_nutritionexercise_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_NUTRITIONALINTAKE_COMITE_NUTRITIONEXERCISE_FROM_COMITE_NUTRITIONEXERCISE_TITLE',
  'save' => true,
  'id_name' => 'comite_nut9e6bxercise_ida',
  'link' => 'comite_nutritionalintake_comite_nutritionexercise',
  'table' => 'comite_nutritionexercise',
  'module' => 'comite_NutritionExercise',
  'rname' => 'name',
);
$dictionary["comite_NutritionalIntake"]["fields"]["comite_nut9e6bxercise_ida"] = array (
  'name' => 'comite_nut9e6bxercise_ida',
  'type' => 'link',
  'relationship' => 'comite_nutritionalintake_comite_nutritionexercise',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_NUTRITIONALINTAKE_COMITE_NUTRITIONEXERCISE_FROM_COMITE_NUTRITIONALINTAKE_TITLE',
);

?>