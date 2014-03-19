<?php
// created: 2012-12-26 17:43:55
$dictionary["comite_lifestyle_contacts"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'comite_lifestyle_contacts' => 
    array (
      'lhs_module' => 'comite_LifeStyle',
      'lhs_table' => 'comite_lifestyle',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'comite_lifestyle_contacts_c',
      'join_key_lhs' => 'comite_lifestyle_contactscomite_lifestyle_ida',
      'join_key_rhs' => 'comite_lifestyle_contactscontacts_idb',
    ),
  ),
  'table' => 'comite_lifestyle_contacts_c',
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
      'name' => 'comite_lifestyle_contactscomite_lifestyle_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'comite_lifestyle_contactscontacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'comite_lifestyle_contactsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'comite_lifestyle_contacts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'comite_lifestyle_contactscomite_lifestyle_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'comite_lifestyle_contacts_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'comite_lifestyle_contactscontacts_idb',
      ),
    ),
  ),
);