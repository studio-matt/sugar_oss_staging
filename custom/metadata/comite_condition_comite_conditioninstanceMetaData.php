<?php
// created: 2012-07-05 15:54:51
$dictionary["comite_condition_comite_conditioninstance"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'comite_condition_comite_conditioninstance' => 
    array (
      'lhs_module' => 'comite_Condition',
      'lhs_table' => 'comite_condition',
      'lhs_key' => 'id',
      'rhs_module' => 'comite_ConditionInstance',
      'rhs_table' => 'comite_conditioninstance',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'comite_condition_comite_conditioninstance_c',
      'join_key_lhs' => 'comite_condition_comite_conditioninstancecomite_condition_ida',
      'join_key_rhs' => 'comite_cond6d5nstance_idb',
    ),
  ),
  'table' => 'comite_condition_comite_conditioninstance_c',
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
      'name' => 'comite_condition_comite_conditioninstancecomite_condition_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'comite_cond6d5nstance_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'comite_condition_comite_conditioninstancespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'comite_condition_comite_conditioninstance_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'comite_condition_comite_conditioninstancecomite_condition_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'comite_condition_comite_conditioninstance_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'comite_cond6d5nstance_idb',
      ),
    ),
  ),
);