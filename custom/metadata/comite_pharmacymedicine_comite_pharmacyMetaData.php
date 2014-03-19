<?php
// created: 2012-12-26 17:44:10
$dictionary["comite_pharmacymedicine_comite_pharmacy"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'comite_pharmacymedicine_comite_pharmacy' => 
    array (
      'lhs_module' => 'comite_Pharmacy',
      'lhs_table' => 'comite_pharmacy',
      'lhs_key' => 'id',
      'rhs_module' => 'comite_PharmacyMedicine',
      'rhs_table' => 'comite_pharmacymedicine',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'comite_pharmacymedicine_comite_pharmacy_c',
      'join_key_lhs' => 'comite_pharmacymedicine_comite_pharmacycomite_pharmacy_ida',
      'join_key_rhs' => 'comite_phac13cedicine_idb',
    ),
  ),
  'table' => 'comite_pharmacymedicine_comite_pharmacy_c',
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
      'name' => 'comite_pharmacymedicine_comite_pharmacycomite_pharmacy_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'comite_phac13cedicine_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'comite_pharmacymedicine_comite_pharmacyspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'comite_pharmacymedicine_comite_pharmacy_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'comite_pharmacymedicine_comite_pharmacycomite_pharmacy_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'comite_pharmacymedicine_comite_pharmacy_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'comite_phac13cedicine_idb',
      ),
    ),
  ),
);