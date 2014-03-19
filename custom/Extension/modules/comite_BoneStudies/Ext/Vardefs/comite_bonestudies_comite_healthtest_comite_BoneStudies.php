<?php
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
