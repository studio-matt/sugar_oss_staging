<?php
// created: 2012-12-26 17:43:40
$dictionary["comite_eherecommendations_comite_healthtest"] = array (
  'relationships' => 
  array (
    'comite_eherecommendations_comite_healthtest' => 
    array (
      'lhs_module' => 'comite_HealthTest',
      'lhs_table' => 'comite_healthtest',
      'lhs_key' => 'id',
      'rhs_module' => 'comite_EheRecommendations',
      'rhs_table' => 'comite_eherecommendations',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'comite_eherecommendations_comite_healthtest_c',
      'join_key_lhs' => 'comite_eherecommendations_comite_healthtestcomite_healthtest_ida',
      'join_key_rhs' => 'comite_ehea79ddations_idb',
    ),
  ),
  'table' => 'comite_eherecommendations_comite_healthtest_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'comite_eherecommendations_comite_healthtestcomite_healthtest_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'comite_ehea79ddations_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'comite_eherecommendations_comite_healthtestspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'comite_eherecommendations_comite_healthtest_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'comite_eherecommendations_comite_healthtestcomite_healthtest_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'comite_eherecommendations_comite_healthtest_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'comite_ehea79ddations_idb',
      ),
    ),
  ),
);