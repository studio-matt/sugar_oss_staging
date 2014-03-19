<?php
// created: 2012-12-26 17:43:42
$dictionary["comite_exercisesummary_comite_nutritionexercise"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'comite_exercisesummary_comite_nutritionexercise' => 
    array (
      'lhs_module' => 'comite_NutritionExercise',
      'lhs_table' => 'comite_nutritionexercise',
      'lhs_key' => 'id',
      'rhs_module' => 'comite_ExerciseSummary',
      'rhs_table' => 'comite_exercisesummary',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'comite_exercisesummary_comite_nutritionexercise_c',
      'join_key_lhs' => 'comite_exe5cb8xercise_ida',
      'join_key_rhs' => 'comite_execc49summary_idb',
    ),
  ),
  'table' => 'comite_exercisesummary_comite_nutritionexercise_c',
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
      'name' => 'comite_exe5cb8xercise_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'comite_execc49summary_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'comite_exercisesummary_comite_nutritionexercisespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'comite_exercisesummary_comite_nutritionexercise_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'comite_exe5cb8xercise_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'comite_exercisesummary_comite_nutritionexercise_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'comite_execc49summary_idb',
      ),
    ),
  ),
);