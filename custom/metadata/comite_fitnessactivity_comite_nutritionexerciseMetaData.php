<?php
// created: 2012-12-26 17:43:46
$dictionary["comite_fitnessactivity_comite_nutritionexercise"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'comite_fitnessactivity_comite_nutritionexercise' => 
    array (
      'lhs_module' => 'comite_NutritionExercise',
      'lhs_table' => 'comite_nutritionexercise',
      'lhs_key' => 'id',
      'rhs_module' => 'comite_FitnessActivity',
      'rhs_table' => 'comite_fitnessactivity',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'comite_fitnessactivity_comite_nutritionexercise_c',
      'join_key_lhs' => 'comite_fitff99xercise_ida',
      'join_key_rhs' => 'comite_fita83bctivity_idb',
    ),
  ),
  'table' => 'comite_fitnessactivity_comite_nutritionexercise_c',
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
      'name' => 'comite_fitff99xercise_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'comite_fita83bctivity_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'comite_fitnessactivity_comite_nutritionexercisespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'comite_fitnessactivity_comite_nutritionexercise_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'comite_fitff99xercise_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'comite_fitnessactivity_comite_nutritionexercise_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'comite_fita83bctivity_idb',
      ),
    ),
  ),
);