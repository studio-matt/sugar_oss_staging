<?php
// created: 2012-07-05 14:55:25
$dictionary["comite_condition_comite_personalhealthhistory"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'comite_condition_comite_personalhealthhistory' => 
    array (
      'lhs_module' => 'comite_Condition',
      'lhs_table' => 'comite_condition',
      'lhs_key' => 'id',
      'rhs_module' => 'comite_PersonalHealthHistory',
      'rhs_table' => 'comite_personalhealthhistory',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'comite_condition_comite_personalhealthhistory_c',
      'join_key_lhs' => 'comite_con527endition_ida',
      'join_key_rhs' => 'comite_con27b6history_idb',
    ),
  ),
  'table' => 'comite_condition_comite_personalhealthhistory_c',
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
      'name' => 'comite_con527endition_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'comite_con27b6history_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'comite_condition_comite_personalhealthhistoryspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'comite_condition_comite_personalhealthhistory_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'comite_con527endition_ida',
        1 => 'comite_con27b6history_idb',
      ),
    ),
  ),
);