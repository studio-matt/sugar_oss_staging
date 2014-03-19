<?php
// created: 2012-12-26 17:44:03
$dictionary["comite_nutritionalintake_comite_nutritionexercise"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'comite_nutritionalintake_comite_nutritionexercise' => 
    array (
      'lhs_module' => 'comite_NutritionExercise',
      'lhs_table' => 'comite_nutritionexercise',
      'lhs_key' => 'id',
      'rhs_module' => 'comite_NutritionalIntake',
      'rhs_table' => 'comite_nutritionalintake',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'comite_nutritionalintake_comite_nutritionexercise_c',
      'join_key_lhs' => 'comite_nut9e6bxercise_ida',
      'join_key_rhs' => 'comite_nutd840lintake_idb',
    ),
  ),
  'table' => 'comite_nutritionalintake_comite_nutritionexercise_c',
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
      'name' => 'comite_nut9e6bxercise_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'comite_nutd840lintake_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'comite_nutritionalintake_comite_nutritionexercisespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'comite_nutritionalintake_comite_nutritionexercise_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'comite_nut9e6bxercise_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'comite_nutritionalintake_comite_nutritionexercise_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'comite_nutd840lintake_idb',
      ),
    ),
  ),
);