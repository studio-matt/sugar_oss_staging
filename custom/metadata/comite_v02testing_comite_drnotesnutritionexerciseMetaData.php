<?php
// created: 2012-12-26 17:44:26
$dictionary["comite_v02testing_comite_drnotesnutritionexercise"] = array (
  'relationships' => 
  array (
    'comite_v02testing_comite_drnotesnutritionexercise' => 
    array (
      'lhs_module' => 'comite_DrNotesNutritionExercise',
      'lhs_table' => 'comite_drnotesnutritionexercise',
      'lhs_key' => 'id',
      'rhs_module' => 'comite_V02Testing',
      'rhs_table' => 'comite_v02testing',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'comite_v02testing_comite_drnotesnutritionexercise_c',
      'join_key_lhs' => 'comite_v0250ebxercise_ida',
      'join_key_rhs' => 'comite_v0267f5testing_idb',
    ),
  ),
  'table' => 'comite_v02testing_comite_drnotesnutritionexercise_c',
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
      'name' => 'comite_v0250ebxercise_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'comite_v0267f5testing_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'comite_v02testing_comite_drnotesnutritionexercisespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'comite_v02testing_comite_drnotesnutritionexercise_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'comite_v0250ebxercise_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'comite_v02testing_comite_drnotesnutritionexercise_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'comite_v0267f5testing_idb',
      ),
    ),
  ),
);