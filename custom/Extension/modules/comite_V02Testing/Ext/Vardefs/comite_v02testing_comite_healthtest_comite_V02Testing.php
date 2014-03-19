<?php
// created: 2012-07-30 20:32:58
$dictionary["comite_V02Testing"]["fields"]["comite_v02testing_comite_healthtest"] = array (
  'name' => 'comite_v02testing_comite_healthtest',
  'type' => 'link',
  'relationship' => 'comite_v02testing_comite_healthtest',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_V02TESTING_COMITE_HEALTHTEST_FROM_COMITE_HEALTHTEST_TITLE',
  'id_name' => 'comite_v02testing_comite_healthtestcomite_healthtest_ida',
);
$dictionary["comite_V02Testing"]["fields"]["comite_v02testing_comite_healthtest_name"] = array (
  'name' => 'comite_v02testing_comite_healthtest_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_V02TESTING_COMITE_HEALTHTEST_FROM_COMITE_HEALTHTEST_TITLE',
  'save' => true,
  'id_name' => 'comite_v02testing_comite_healthtestcomite_healthtest_ida',
  'link' => 'comite_v02testing_comite_healthtest',
  'table' => 'comite_healthtest',
  'module' => 'comite_HealthTest',
  'rname' => 'name',
);
$dictionary["comite_V02Testing"]["fields"]["comite_v02testing_comite_healthtestcomite_healthtest_ida"] = array (
  'name' => 'comite_v02testing_comite_healthtestcomite_healthtest_ida',
  'type' => 'link',
  'relationship' => 'comite_v02testing_comite_healthtest',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_V02TESTING_COMITE_HEALTHTEST_FROM_COMITE_V02TESTING_TITLE',
);
