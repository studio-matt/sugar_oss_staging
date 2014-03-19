<?php
// created: 2012-12-26 17:44:07
$dictionary["comite_pharmacy_comite_pharmacylog"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'comite_pharmacy_comite_pharmacylog' => 
    array (
      'lhs_module' => 'comite_PharmacyLog',
      'lhs_table' => 'comite_pharmacylog',
      'lhs_key' => 'id',
      'rhs_module' => 'comite_Pharmacy',
      'rhs_table' => 'comite_pharmacy',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'comite_pharmacy_comite_pharmacylog_c',
      'join_key_lhs' => 'comite_pharmacy_comite_pharmacylogcomite_pharmacylog_ida',
      'join_key_rhs' => 'comite_pharmacy_comite_pharmacylogcomite_pharmacy_idb',
    ),
  ),
  'table' => 'comite_pharmacy_comite_pharmacylog_c',
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
      'name' => 'comite_pharmacy_comite_pharmacylogcomite_pharmacylog_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'comite_pharmacy_comite_pharmacylogcomite_pharmacy_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'comite_pharmacy_comite_pharmacylogspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'comite_pharmacy_comite_pharmacylog_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'comite_pharmacy_comite_pharmacylogcomite_pharmacylog_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'comite_pharmacy_comite_pharmacylog_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'comite_pharmacy_comite_pharmacylogcomite_pharmacy_idb',
      ),
    ),
  ),
);