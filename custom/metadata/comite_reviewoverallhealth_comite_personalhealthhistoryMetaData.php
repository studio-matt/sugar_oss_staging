<?php
// created: 2012-12-26 17:44:19
$dictionary["comite_reviewoverallhealth_comite_personalhealthhistory"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'comite_reviewoverallhealth_comite_personalhealthhistory' => 
    array (
      'lhs_module' => 'comite_PersonalHealthHistory',
      'lhs_table' => 'comite_personalhealthhistory',
      'lhs_key' => 'id',
      'rhs_module' => 'comite_ReviewOverallHealth',
      'rhs_table' => 'comite_reviewoverallhealth',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'comite_reviewoverallhealth_comite_personalhealthhistory_c',
      'join_key_lhs' => 'comite_rev17cehistory_ida',
      'join_key_rhs' => 'comite_revfb1clhealth_idb',
    ),
  ),
  'table' => 'comite_reviewoverallhealth_comite_personalhealthhistory_c',
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
      'name' => 'comite_rev17cehistory_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'comite_revfb1clhealth_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'comite_reviewoverallhealth_comite_personalhealthhistoryspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'comite_reviewoverallhealth_comite_personalhealthhistory_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'comite_rev17cehistory_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'comite_reviewoverallhealth_comite_personalhealthhistory_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'comite_revfb1clhealth_idb',
      ),
    ),
  ),
);