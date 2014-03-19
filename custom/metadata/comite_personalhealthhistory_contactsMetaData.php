<?php
// created: 2012-12-26 17:44:04
$dictionary["comite_personalhealthhistory_contacts"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'comite_personalhealthhistory_contacts' => 
    array (
      'lhs_module' => 'comite_PersonalHealthHistory',
      'lhs_table' => 'comite_personalhealthhistory',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'comite_personalhealthhistory_contacts_c',
      'join_key_lhs' => 'comite_per66fchistory_ida',
      'join_key_rhs' => 'comite_personalhealthhistory_contactscontacts_idb',
    ),
  ),
  'table' => 'comite_personalhealthhistory_contacts_c',
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
      'name' => 'comite_per66fchistory_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'comite_personalhealthhistory_contactscontacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'comite_personalhealthhistory_contactsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'comite_personalhealthhistory_contacts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'comite_per66fchistory_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'comite_personalhealthhistory_contacts_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'comite_personalhealthhistory_contactscontacts_idb',
      ),
    ),
  ),
);