<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2013-01-08 14:45:32
$dictionary["comite_PhysicalExam"]["fields"]["comite_physicalexam_comite_drnotesnutritionexercise"] = array (
  'name' => 'comite_physicalexam_comite_drnotesnutritionexercise',
  'type' => 'link',
  'relationship' => 'comite_physicalexam_comite_drnotesnutritionexercise',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_PHYSICALEXAM_COMITE_DRNOTESNUTRITIONEXERCISE_FROM_COMITE_DRNOTESNUTRITIONEXERCISE_TITLE',
  'id_name' => 'comite_phy7f5axercise_ida',
);
$dictionary["comite_PhysicalExam"]["fields"]["comite_physicalexam_comite_drnotesnutritionexercise_name"] = array (
  'name' => 'comite_physicalexam_comite_drnotesnutritionexercise_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_PHYSICALEXAM_COMITE_DRNOTESNUTRITIONEXERCISE_FROM_COMITE_DRNOTESNUTRITIONEXERCISE_TITLE',
  'save' => true,
  'id_name' => 'comite_phy7f5axercise_ida',
  'link' => 'comite_physicalexam_comite_drnotesnutritionexercise',
  'table' => 'comite_drnotesnutritionexercise',
  'module' => 'comite_DrNotesNutritionExercise',
  'rname' => 'name',
);
$dictionary["comite_PhysicalExam"]["fields"]["comite_phy7f5axercise_ida"] = array (
  'name' => 'comite_phy7f5axercise_ida',
  'type' => 'link',
  'relationship' => 'comite_physicalexam_comite_drnotesnutritionexercise',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_PHYSICALEXAM_COMITE_DRNOTESNUTRITIONEXERCISE_FROM_COMITE_PHYSICALEXAM_TITLE',
);


// created: 2012-07-30 18:34:01
$dictionary["comite_PhysicalExam"]["fields"]["comite_physicalexamproperty_comite_physicalexam"] = array (
  'name' => 'comite_physicalexamproperty_comite_physicalexam',
  'type' => 'link',
  'relationship' => 'comite_physicalexamproperty_comite_physicalexam',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_PHYSICALEXAMPROPERTY_COMITE_PHYSICALEXAM_FROM_COMITE_PHYSICALEXAMPROPERTY_TITLE',
);


// created: 2012-07-30 18:34:22
$dictionary["comite_PhysicalExam"]["fields"]["comite_physicalexam_comite_healthtest"] = array (
  'name' => 'comite_physicalexam_comite_healthtest',
  'type' => 'link',
  'relationship' => 'comite_physicalexam_comite_healthtest',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_PHYSICALEXAM_COMITE_HEALTHTEST_FROM_COMITE_HEALTHTEST_TITLE',
  'id_name' => 'comite_physicalexam_comite_healthtestcomite_healthtest_ida',
);
$dictionary["comite_PhysicalExam"]["fields"]["comite_physicalexam_comite_healthtest_name"] = array (
  'name' => 'comite_physicalexam_comite_healthtest_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_PHYSICALEXAM_COMITE_HEALTHTEST_FROM_COMITE_HEALTHTEST_TITLE',
  'save' => true,
  'id_name' => 'comite_physicalexam_comite_healthtestcomite_healthtest_ida',
  'link' => 'comite_physicalexam_comite_healthtest',
  'table' => 'comite_healthtest',
  'module' => 'comite_HealthTest',
  'rname' => 'name',
);
$dictionary["comite_PhysicalExam"]["fields"]["comite_physicalexam_comite_healthtestcomite_healthtest_ida"] = array (
  'name' => 'comite_physicalexam_comite_healthtestcomite_healthtest_ida',
  'type' => 'link',
  'relationship' => 'comite_physicalexam_comite_healthtest',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_PHYSICALEXAM_COMITE_HEALTHTEST_FROM_COMITE_PHYSICALEXAM_TITLE',
);

?>