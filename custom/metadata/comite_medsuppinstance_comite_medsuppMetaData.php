<?php
// created: 2012-12-26 17:43:57
$dictionary["comite_medsuppinstance_comite_medsupp"] = array (
  'relationships' => 
  array (
    'comite_medsuppinstance_comite_medsupp' => 
    array (
      'lhs_module' => 'comite_MedicationSupplement',
      'lhs_table' => 'comite_medicationsupplement',
      'lhs_key' => 'id',
      'rhs_module' => 'comite_MedicationSupplementInstance',
      'rhs_table' => 'comite_medicationsupplementinstance',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'comite_medsuppinstance_comite_medsupp_c',
      'join_key_lhs' => 'comite_med8f3bplement_ida',
      'join_key_rhs' => 'comite_med4b8dnstance_idb',
    ),
  ),
  'table' => 'comite_medsuppinstance_comite_medsupp_c',
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
      'name' => 'comite_med8f3bplement_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'comite_med4b8dnstance_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'comite_medsuppinstance_comite_medsuppspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'comite_medsuppinstance_comite_medsupp_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'comite_med8f3bplement_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'comite_medsuppinstance_comite_medsupp_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'comite_med4b8dnstance_idb',
      ),
    ),
  ),
);