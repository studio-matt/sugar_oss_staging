<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-07-31 19:20:59
$dictionary["comite_BoneStudies"]["fields"]["comite_bonestudies_comite_healthtest"] = array (
  'name' => 'comite_bonestudies_comite_healthtest',
  'type' => 'link',
  'relationship' => 'comite_bonestudies_comite_healthtest',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_BONESTUDIES_COMITE_HEALTHTEST_FROM_COMITE_HEALTHTEST_TITLE',
  'id_name' => 'comite_bonestudies_comite_healthtestcomite_healthtest_ida',
);
$dictionary["comite_BoneStudies"]["fields"]["comite_bonestudies_comite_healthtest_name"] = array (
  'name' => 'comite_bonestudies_comite_healthtest_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_BONESTUDIES_COMITE_HEALTHTEST_FROM_COMITE_HEALTHTEST_TITLE',
  'save' => true,
  'id_name' => 'comite_bonestudies_comite_healthtestcomite_healthtest_ida',
  'link' => 'comite_bonestudies_comite_healthtest',
  'table' => 'comite_healthtest',
  'module' => 'comite_HealthTest',
  'rname' => 'name',
);
$dictionary["comite_BoneStudies"]["fields"]["comite_bonestudies_comite_healthtestcomite_healthtest_ida"] = array (
  'name' => 'comite_bonestudies_comite_healthtestcomite_healthtest_ida',
  'type' => 'link',
  'relationship' => 'comite_bonestudies_comite_healthtest',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_BONESTUDIES_COMITE_HEALTHTEST_FROM_COMITE_BONESTUDIES_TITLE',
);


// created: 2013-04-23 17:32:17
$dictionary["comite_BoneStudies"]["fields"]["comite_bonestudies_comite_bonestudies"] = array (
  'name' => 'comite_bonestudies_comite_bonestudies',
  'type' => 'link',
  'relationship' => 'comite_bonestudies_comite_bonestudies',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_BONESTUDIES_COMITE_BONESTUDIES_FROM_COMITE_BONESTUDIES_L_TITLE',
  'id_name' => 'comite_bonestudies_comite_bonestudiescomite_bonestudies_ida',
);
$dictionary["comite_BoneStudies"]["fields"]["comite_bonestudies_comite_bonestudies_name"] = array (
  'name' => 'comite_bonestudies_comite_bonestudies_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_BONESTUDIES_COMITE_BONESTUDIES_FROM_COMITE_BONESTUDIES_L_TITLE',
  'save' => true,
  'id_name' => 'comite_bonestudies_comite_bonestudiescomite_bonestudies_ida',
  'link' => 'comite_bonestudies_comite_bonestudies',
  'table' => 'comite_bonestudies',
  'module' => 'comite_BoneStudies',
  'rname' => 'document_name',
);
$dictionary["comite_BoneStudies"]["fields"]["comite_bonestudies_comite_bonestudiescomite_bonestudies_ida"] = array (
  'name' => 'comite_bonestudies_comite_bonestudiescomite_bonestudies_ida',
  'type' => 'link',
  'relationship' => 'comite_bonestudies_comite_bonestudies',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_BONESTUDIES_COMITE_BONESTUDIES_FROM_COMITE_BONESTUDIES_R_TITLE',
);


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

?>