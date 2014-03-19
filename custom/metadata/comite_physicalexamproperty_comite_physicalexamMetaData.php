<?php
// created: 2012-12-26 17:44:14
$dictionary["comite_physicalexamproperty_comite_physicalexam"] = array (
  'relationships' => 
  array (
    'comite_physicalexamproperty_comite_physicalexam' => 
    array (
      'lhs_module' => 'comite_PhysicalExam',
      'lhs_table' => 'comite_physicalexam',
      'lhs_key' => 'id',
      'rhs_module' => 'comite_PhysicalExamProperty',
      'rhs_table' => 'comite_physicalexamproperty',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'comite_physicalexamproperty_comite_physicalexam_c',
      'join_key_lhs' => 'comite_phy93fccalexam_ida',
      'join_key_rhs' => 'comite_phyade8roperty_idb',
    ),
  ),
  'table' => 'comite_physicalexamproperty_comite_physicalexam_c',
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
      'name' => 'comite_phy93fccalexam_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'comite_phyade8roperty_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'comite_physicalexamproperty_comite_physicalexamspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'comite_physicalexamproperty_comite_physicalexam_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'comite_phy93fccalexam_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'comite_physicalexamproperty_comite_physicalexam_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'comite_phyade8roperty_idb',
      ),
    ),
  ),
);