<?php
// created: 2012-12-26 17:44:22
$dictionary["comite_spirometry_comite_drnotesnutritionexercise"] = array (
  'relationships' => 
  array (
    'comite_spirometry_comite_drnotesnutritionexercise' => 
    array (
      'lhs_module' => 'comite_DrNotesNutritionExercise',
      'lhs_table' => 'comite_drnotesnutritionexercise',
      'lhs_key' => 'id',
      'rhs_module' => 'comite_Spirometry',
      'rhs_table' => 'comite_spirometry',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'comite_spirometry_comite_drnotesnutritionexercise_c',
      'join_key_lhs' => 'comite_spi8031xercise_ida',
      'join_key_rhs' => 'comite_spi7165rometry_idb',
    ),
  ),
  'table' => 'comite_spirometry_comite_drnotesnutritionexercise_c',
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
      'name' => 'comite_spi8031xercise_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'comite_spi7165rometry_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'comite_spirometry_comite_drnotesnutritionexercisespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'comite_spirometry_comite_drnotesnutritionexercise_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'comite_spi8031xercise_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'comite_spirometry_comite_drnotesnutritionexercise_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'comite_spi7165rometry_idb',
      ),
    ),
  ),
);