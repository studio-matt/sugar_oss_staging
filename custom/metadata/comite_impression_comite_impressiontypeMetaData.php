<?php
// created: 2012-12-26 17:43:52
$dictionary["comite_impression_comite_impressiontype"] = array (
  'relationships' => 
  array (
    'comite_impression_comite_impressiontype' => 
    array (
      'lhs_module' => 'comite_ImpressionType',
      'lhs_table' => 'comite_impressiontype',
      'lhs_key' => 'id',
      'rhs_module' => 'comite_Impression',
      'rhs_table' => 'comite_impression',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'comite_impression_comite_impressiontype_c',
      'join_key_lhs' => 'comite_impression_comite_impressiontypecomite_impressiontype_ida',
      'join_key_rhs' => 'comite_impression_comite_impressiontypecomite_impression_idb',
    ),
  ),
  'table' => 'comite_impression_comite_impressiontype_c',
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
      'name' => 'comite_impression_comite_impressiontypecomite_impressiontype_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'comite_impression_comite_impressiontypecomite_impression_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'comite_impression_comite_impressiontypespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'comite_impression_comite_impressiontype_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'comite_impression_comite_impressiontypecomite_impressiontype_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'comite_impression_comite_impressiontype_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'comite_impression_comite_impressiontypecomite_impression_idb',
      ),
    ),
  ),
);