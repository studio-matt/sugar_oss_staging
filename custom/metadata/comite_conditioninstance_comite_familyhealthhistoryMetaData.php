<?php
// created: 2012-12-26 17:43:35
$dictionary["comite_conditioninstance_comite_familyhealthhistory"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'comite_conditioninstance_comite_familyhealthhistory' => 
    array (
      'lhs_module' => 'comite_FamilyHealthHistory',
      'lhs_table' => 'comite_familyhealthhistory',
      'lhs_key' => 'id',
      'rhs_module' => 'comite_ConditionInstance',
      'rhs_table' => 'comite_conditioninstance',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'comite_conditioninstance_comite_familyhealthhistory_c',
      'join_key_lhs' => 'comite_con0c71history_ida',
      'join_key_rhs' => 'comite_con8035nstance_idb',
    ),
  ),
  'table' => 'comite_conditioninstance_comite_familyhealthhistory_c',
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
      'name' => 'comite_con0c71history_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'comite_con8035nstance_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'comite_conditioninstance_comite_familyhealthhistoryspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'comite_conditioninstance_comite_familyhealthhistory_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'comite_con0c71history_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'comite_conditioninstance_comite_familyhealthhistory_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'comite_con8035nstance_idb',
      ),
    ),
  ),
);