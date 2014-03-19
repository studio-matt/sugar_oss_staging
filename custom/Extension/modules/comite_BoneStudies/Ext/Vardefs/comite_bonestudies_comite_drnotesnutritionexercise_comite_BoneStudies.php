<?php
// created: 2013-01-08 14:44:26
$dictionary["comite_BoneStudies"]["fields"]["comite_bonestudies_comite_drnotesnutritionexercise"] = array (
  'name' => 'comite_bonestudies_comite_drnotesnutritionexercise',
  'type' => 'link',
  'relationship' => 'comite_bonestudies_comite_drnotesnutritionexercise',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_BONESTUDIES_COMITE_DRNOTESNUTRITIONEXERCISE_FROM_COMITE_DRNOTESNUTRITIONEXERCISE_TITLE',
  'id_name' => 'comite_bon0dc8xercise_ida',
);
$dictionary["comite_BoneStudies"]["fields"]["comite_bonestudies_comite_drnotesnutritionexercise_name"] = array (
  'name' => 'comite_bonestudies_comite_drnotesnutritionexercise_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_BONESTUDIES_COMITE_DRNOTESNUTRITIONEXERCISE_FROM_COMITE_DRNOTESNUTRITIONEXERCISE_TITLE',
  'save' => true,
  'id_name' => 'comite_bon0dc8xercise_ida',
  'link' => 'comite_bonestudies_comite_drnotesnutritionexercise',
  'table' => 'comite_drnotesnutritionexercise',
  'module' => 'comite_DrNotesNutritionExercise',
  'rname' => 'name',
);
$dictionary["comite_BoneStudies"]["fields"]["comite_bon0dc8xercise_ida"] = array (
  'name' => 'comite_bon0dc8xercise_ida',
  'type' => 'link',
  'relationship' => 'comite_bonestudies_comite_drnotesnutritionexercise',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_BONESTUDIES_COMITE_DRNOTESNUTRITIONEXERCISE_FROM_COMITE_BONESTUDIES_TITLE',
);
