<?php
// created: 2012-12-26 17:44:17
$dictionary["comite_planmisc_meetings"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'comite_planmisc_meetings' => 
    array (
      'lhs_module' => 'comite_PlanMisc',
      'lhs_table' => 'comite_planmisc',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'comite_planmisc_meetings_c',
      'join_key_lhs' => 'comite_planmisc_meetingscomite_planmisc_ida',
      'join_key_rhs' => 'comite_planmisc_meetingsmeetings_idb',
    ),
  ),
  'table' => 'comite_planmisc_meetings_c',
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
      'name' => 'comite_planmisc_meetingscomite_planmisc_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'comite_planmisc_meetingsmeetings_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'comite_planmisc_meetingsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'comite_planmisc_meetings_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'comite_planmisc_meetingscomite_planmisc_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'comite_planmisc_meetings_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'comite_planmisc_meetingsmeetings_idb',
      ),
    ),
  ),
);