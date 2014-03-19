<?php
// created: 2012-08-09 16:42:16
$dictionary["contacts_meetings"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'contacts_meetings' => 
    array (
      'lhs_module' => 'Contacts',
      'lhs_table' => 'contacts',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'contacts_meetings_c',
      'join_key_lhs' => 'contacts_meetingscontacts_ida',
      'join_key_rhs' => 'contacts_meetingsmeetings_idb',
    ),
  ),
  'table' => 'contacts_meetings_c',
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
      'name' => 'contacts_meetingscontacts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'contacts_meetingsmeetings_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'contacts_meetingsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'contacts_meetings_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'contacts_meetingscontacts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'contacts_meetings_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'contacts_meetingsmeetings_idb',
      ),
    ),
  ),
);