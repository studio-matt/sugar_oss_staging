<?php
// created: 2012-07-30 23:30:00
$dictionary["comite_EheRecommendations"]["fields"]["comite_eherecommendations_comite_healthtest"] = array (
  'name' => 'comite_eherecommendations_comite_healthtest',
  'type' => 'link',
  'relationship' => 'comite_eherecommendations_comite_healthtest',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_EHERECOMMENDATIONS_COMITE_HEALTHTEST_FROM_COMITE_HEALTHTEST_TITLE',
  'id_name' => 'comite_eherecommendations_comite_healthtestcomite_healthtest_ida',
);
$dictionary["comite_EheRecommendations"]["fields"]["comite_eherecommendations_comite_healthtest_name"] = array (
  'name' => 'comite_eherecommendations_comite_healthtest_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_EHERECOMMENDATIONS_COMITE_HEALTHTEST_FROM_COMITE_HEALTHTEST_TITLE',
  'save' => true,
  'id_name' => 'comite_eherecommendations_comite_healthtestcomite_healthtest_ida',
  'link' => 'comite_eherecommendations_comite_healthtest',
  'table' => 'comite_healthtest',
  'module' => 'comite_HealthTest',
  'rname' => 'name',
);
$dictionary["comite_EheRecommendations"]["fields"]["comite_eherecommendations_comite_healthtestcomite_healthtest_ida"] = array (
  'name' => 'comite_eherecommendations_comite_healthtestcomite_healthtest_ida',
  'type' => 'link',
  'relationship' => 'comite_eherecommendations_comite_healthtest',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_EHERECOMMENDATIONS_COMITE_HEALTHTEST_FROM_COMITE_EHERECOMMENDATIONS_TITLE',
);
