<?php
// created: 2012-12-26 17:44:12
$dictionary["comite_phone_contacts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'comite_phone_contacts' => 
    array (
      'lhs_module' => 'Contacts',
      'lhs_table' => 'contacts',
      'lhs_key' => 'id',
      'rhs_module' => 'comite_Phone',
      'rhs_table' => 'comite_phone',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'comite_phone_contacts_c',
      'join_key_lhs' => 'comite_phone_contactscontacts_ida',
      'join_key_rhs' => 'comite_phone_contactscomite_phone_idb',
    ),
  ),
  'table' => 'comite_phone_contacts_c',
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
      'name' => 'comite_phone_contactscontacts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'comite_phone_contactscomite_phone_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'comite_phone_contactsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'comite_phone_contacts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'comite_phone_contactscontacts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'comite_phone_contacts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'comite_phone_contactscomite_phone_idb',
      ),
    ),
  ),
);