<?php
// created: 2012-07-30 20:32:58
$dictionary["comite_v02testing_comite_healthtest"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'comite_v02testing_comite_healthtest' => 
    array (
      'lhs_module' => 'comite_HealthTest',
      'lhs_table' => 'comite_healthtest',
      'lhs_key' => 'id',
      'rhs_module' => 'comite_V02Testing',
      'rhs_table' => 'comite_v02testing',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'comite_v02testing_comite_healthtest_c',
      'join_key_lhs' => 'comite_v02testing_comite_healthtestcomite_healthtest_ida',
      'join_key_rhs' => 'comite_v02testing_comite_healthtestcomite_v02testing_idb',
    ),
  ),
  'table' => 'comite_v02testing_comite_healthtest_c',
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
      'name' => 'comite_v02testing_comite_healthtestcomite_healthtest_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'comite_v02testing_comite_healthtestcomite_v02testing_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'comite_v02testing_comite_healthtestspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'comite_v02testing_comite_healthtest_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'comite_v02testing_comite_healthtestcomite_healthtest_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'comite_v02testing_comite_healthtest_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'comite_v02testing_comite_healthtestcomite_v02testing_idb',
      ),
    ),
  ),
);