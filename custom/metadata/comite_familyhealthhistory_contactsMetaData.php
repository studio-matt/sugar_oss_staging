<?php
// created: 2012-12-26 17:43:45
$dictionary["comite_familyhealthhistory_contacts"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'comite_familyhealthhistory_contacts' => 
    array (
      'lhs_module' => 'comite_FamilyHealthHistory',
      'lhs_table' => 'comite_familyhealthhistory',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'comite_familyhealthhistory_contacts_c',
      'join_key_lhs' => 'comite_fam691fhistory_ida',
      'join_key_rhs' => 'comite_familyhealthhistory_contactscontacts_idb',
    ),
  ),
  'table' => 'comite_familyhealthhistory_contacts_c',
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
      'name' => 'comite_fam691fhistory_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'comite_familyhealthhistory_contactscontacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'comite_familyhealthhistory_contactsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'comite_familyhealthhistory_contacts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'comite_fam691fhistory_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'comite_familyhealthhistory_contacts_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'comite_familyhealthhistory_contactscontacts_idb',
      ),
    ),
  ),
);