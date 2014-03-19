<?php
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
