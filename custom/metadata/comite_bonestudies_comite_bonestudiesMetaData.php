<?php
// created: 2012-12-26 17:43:33
$dictionary["comite_bonestudies_comite_bonestudies"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'comite_bonestudies_comite_bonestudies' => 
    array (
      'lhs_module' => 'comite_BoneStudies',
      'lhs_table' => 'comite_bonestudies',
      'lhs_key' => 'id',
      'rhs_module' => 'comite_BoneStudies',
      'rhs_table' => 'comite_bonestudies',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'comite_bonestudies_comite_bonestudies_c',
      'join_key_lhs' => 'comite_bonestudies_comite_bonestudiescomite_bonestudies_ida',
      'join_key_rhs' => 'comite_bonestudies_comite_bonestudiescomite_bonestudies_idb',
    ),
  ),
  'table' => 'comite_bonestudies_comite_bonestudies_c',
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
      'name' => 'comite_bonestudies_comite_bonestudiescomite_bonestudies_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'comite_bonestudies_comite_bonestudiescomite_bonestudies_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'comite_bonestudies_comite_bonestudiesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'comite_bonestudies_comite_bonestudies_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'comite_bonestudies_comite_bonestudiescomite_bonestudies_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'comite_bonestudies_comite_bonestudies_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'comite_bonestudies_comite_bonestudiescomite_bonestudies_idb',
      ),
    ),
  ),
);