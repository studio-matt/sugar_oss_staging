<?php
// created: 2013-01-08 14:44:40
$dictionary["comite_eherecommendations_comite_drnotesnutritionexercise"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'comite_eherecommendations_comite_drnotesnutritionexercise' => 
    array (
      'lhs_module' => 'comite_DrNotesNutritionExercise',
      'lhs_table' => 'comite_drnotesnutritionexercise',
      'lhs_key' => 'id',
      'rhs_module' => 'comite_EheRecommendations',
      'rhs_table' => 'comite_eherecommendations',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'comite_eherecommendations_comite_drnotesnutritionexercise_c',
      'join_key_lhs' => 'comite_ehe5028xercise_ida',
      'join_key_rhs' => 'comite_ehe6ee4dations_idb',
    ),
  ),
  'table' => 'comite_eherecommendations_comite_drnotesnutritionexercise_c',
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
      'name' => 'comite_ehe5028xercise_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'comite_ehe6ee4dations_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'comite_eherecommendations_comite_drnotesnutritionexercisespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'comite_eherecommendations_comite_drnotesnutritionexercise_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'comite_ehe5028xercise_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'comite_eherecommendations_comite_drnotesnutritionexercise_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'comite_ehe6ee4dations_idb',
      ),
    ),
  ),
);