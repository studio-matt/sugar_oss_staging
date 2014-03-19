<?php
// created: 2013-01-08 14:44:41
$dictionary["comite_endopat_comite_drnotesnutritionexercise"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'comite_endopat_comite_drnotesnutritionexercise' => 
    array (
      'lhs_module' => 'comite_DrNotesNutritionExercise',
      'lhs_table' => 'comite_drnotesnutritionexercise',
      'lhs_key' => 'id',
      'rhs_module' => 'comite_EndoPAT',
      'rhs_table' => 'comite_endopat',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'comite_endopat_comite_drnotesnutritionexercise_c',
      'join_key_lhs' => 'comite_endf82axercise_ida',
      'join_key_rhs' => 'comite_endopat_comite_drnotesnutritionexercisecomite_endopat_idb',
    ),
  ),
  'table' => 'comite_endopat_comite_drnotesnutritionexercise_c',
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
      'name' => 'comite_endf82axercise_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'comite_endopat_comite_drnotesnutritionexercisecomite_endopat_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'comite_endopat_comite_drnotesnutritionexercisespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'comite_endopat_comite_drnotesnutritionexercise_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'comite_endf82axercise_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'comite_endopat_comite_drnotesnutritionexercise_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'comite_endopat_comite_drnotesnutritionexercisecomite_endopat_idb',
      ),
    ),
  ),
);