<?php
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
