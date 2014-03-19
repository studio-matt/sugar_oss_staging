<?php
// created: 2013-04-17 11:00:12
$dictionary["comite_conditioninstance_comite_relative"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'comite_conditioninstance_comite_relative' => 
    array (
      'lhs_module' => 'comite_Relative',
      'lhs_table' => 'comite_relative',
      'lhs_key' => 'id',
      'rhs_module' => 'comite_ConditionInstance',
      'rhs_table' => 'comite_conditioninstance',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'comite_conditioninstance_comite_relative_c',
      'join_key_lhs' => 'comite_conditioninstance_comite_relativecomite_relative_ida',
      'join_key_rhs' => 'comite_conb517nstance_idb',
    ),
  ),
  'table' => 'comite_conditioninstance_comite_relative_c',
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
      'name' => 'comite_conditioninstance_comite_relativecomite_relative_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'comite_conb517nstance_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'comite_conditioninstance_comite_relativespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'comite_conditioninstance_comite_relative_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'comite_conditioninstance_comite_relativecomite_relative_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'comite_conditioninstance_comite_relative_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'comite_conb517nstance_idb',
      ),
    ),
  ),
);