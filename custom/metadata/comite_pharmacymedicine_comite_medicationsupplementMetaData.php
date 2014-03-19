<?php
// created: 2013-04-02 13:37:46
$dictionary["comite_pharmacymedicine_comite_medicationsupplement"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'comite_pharmacymedicine_comite_medicationsupplement' => 
    array (
      'lhs_module' => 'comite_MedicationSupplement',
      'lhs_table' => 'comite_medicationsupplement',
      'lhs_key' => 'id',
      'rhs_module' => 'comite_PharmacyMedicine',
      'rhs_table' => 'comite_pharmacymedicine',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'comite_pharmacymedicine_comite_medicationsupplement_c',
      'join_key_lhs' => 'comite_pha5360plement_ida',
      'join_key_rhs' => 'comite_pha5f79edicine_idb',
    ),
  ),
  'table' => 'comite_pharmacymedicine_comite_medicationsupplement_c',
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
      'name' => 'comite_pha5360plement_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'comite_pha5f79edicine_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'comite_pharmacymedicine_comite_medicationsupplementspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'comite_pharmacymedicine_comite_medicationsupplement_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'comite_pha5360plement_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'comite_pharmacymedicine_comite_medicationsupplement_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'comite_pha5f79edicine_idb',
      ),
    ),
  ),
);