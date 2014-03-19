<?php
// created: 2012-07-13 11:30:17
$dictionary["comite_NutrionalSummary"]["fields"]["comite_nutrionalsummary_comite_nutritionexercise"] = array (
  'name' => 'comite_nutrionalsummary_comite_nutritionexercise',
  'type' => 'link',
  'relationship' => 'comite_nutrionalsummary_comite_nutritionexercise',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_NUTRIONALSUMMARY_COMITE_NUTRITIONEXERCISE_FROM_COMITE_NUTRITIONEXERCISE_TITLE',
  'id_name' => 'comite_nut38e7xercise_ida',
);
$dictionary["comite_NutrionalSummary"]["fields"]["comite_nutrionalsummary_comite_nutritionexercise_name"] = array (
  'name' => 'comite_nutrionalsummary_comite_nutritionexercise_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_NUTRIONALSUMMARY_COMITE_NUTRITIONEXERCISE_FROM_COMITE_NUTRITIONEXERCISE_TITLE',
  'save' => true,
  'id_name' => 'comite_nut38e7xercise_ida',
  'link' => 'comite_nutrionalsummary_comite_nutritionexercise',
  'table' => 'comite_nutritionexercise',
  'module' => 'comite_NutritionExercise',
  'rname' => 'name',
);
$dictionary["comite_NutrionalSummary"]["fields"]["comite_nut38e7xercise_ida"] = array (
  'name' => 'comite_nut38e7xercise_ida',
  'type' => 'link',
  'relationship' => 'comite_nutrionalsummary_comite_nutritionexercise',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_NUTRIONALSUMMARY_COMITE_NUTRITIONEXERCISE_FROM_COMITE_NUTRIONALSUMMARY_TITLE',
);
