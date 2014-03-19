<?php
// created: 2013-01-08 14:44:42
$dictionary["comite_EndoPAT"]["fields"]["comite_endopat_comite_drnotesnutritionexercise"] = array (
  'name' => 'comite_endopat_comite_drnotesnutritionexercise',
  'type' => 'link',
  'relationship' => 'comite_endopat_comite_drnotesnutritionexercise',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_ENDOPAT_COMITE_DRNOTESNUTRITIONEXERCISE_FROM_COMITE_DRNOTESNUTRITIONEXERCISE_TITLE',
  'id_name' => 'comite_endf82axercise_ida',
);
$dictionary["comite_EndoPAT"]["fields"]["comite_endopat_comite_drnotesnutritionexercise_name"] = array (
  'name' => 'comite_endopat_comite_drnotesnutritionexercise_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_ENDOPAT_COMITE_DRNOTESNUTRITIONEXERCISE_FROM_COMITE_DRNOTESNUTRITIONEXERCISE_TITLE',
  'save' => true,
  'id_name' => 'comite_endf82axercise_ida',
  'link' => 'comite_endopat_comite_drnotesnutritionexercise',
  'table' => 'comite_drnotesnutritionexercise',
  'module' => 'comite_DrNotesNutritionExercise',
  'rname' => 'name',
);
$dictionary["comite_EndoPAT"]["fields"]["comite_endf82axercise_ida"] = array (
  'name' => 'comite_endf82axercise_ida',
  'type' => 'link',
  'relationship' => 'comite_endopat_comite_drnotesnutritionexercise',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_ENDOPAT_COMITE_DRNOTESNUTRITIONEXERCISE_FROM_COMITE_ENDOPAT_TITLE',
);
