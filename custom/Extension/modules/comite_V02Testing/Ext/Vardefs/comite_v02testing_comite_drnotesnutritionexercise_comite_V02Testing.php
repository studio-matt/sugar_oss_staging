<?php
// created: 2012-07-30 23:30:16
$dictionary["comite_V02Testing"]["fields"]["comite_v02testing_comite_drnotesnutritionexercise"] = array (
  'name' => 'comite_v02testing_comite_drnotesnutritionexercise',
  'type' => 'link',
  'relationship' => 'comite_v02testing_comite_drnotesnutritionexercise',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_V02TESTING_COMITE_DRNOTESNUTRITIONEXERCISE_FROM_COMITE_DRNOTESNUTRITIONEXERCISE_TITLE',
  'id_name' => 'comite_v0250ebxercise_ida',
);
$dictionary["comite_V02Testing"]["fields"]["comite_v02testing_comite_drnotesnutritionexercise_name"] = array (
  'name' => 'comite_v02testing_comite_drnotesnutritionexercise_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_V02TESTING_COMITE_DRNOTESNUTRITIONEXERCISE_FROM_COMITE_DRNOTESNUTRITIONEXERCISE_TITLE',
  'save' => true,
  'id_name' => 'comite_v0250ebxercise_ida',
  'link' => 'comite_v02testing_comite_drnotesnutritionexercise',
  'table' => 'comite_drnotesnutritionexercise',
  'module' => 'comite_DrNotesNutritionExercise',
  'rname' => 'name',
);
$dictionary["comite_V02Testing"]["fields"]["comite_v0250ebxercise_ida"] = array (
  'name' => 'comite_v0250ebxercise_ida',
  'type' => 'link',
  'relationship' => 'comite_v02testing_comite_drnotesnutritionexercise',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_V02TESTING_COMITE_DRNOTESNUTRITIONEXERCISE_FROM_COMITE_V02TESTING_TITLE',
);
