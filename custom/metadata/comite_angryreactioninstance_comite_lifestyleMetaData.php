<?php
// created: 2012-12-26 17:43:32
$dictionary["comite_angryreactioninstance_comite_lifestyle"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'comite_angryreactioninstance_comite_lifestyle' => 
    array (
      'lhs_module' => 'comite_LifeStyle',
      'lhs_table' => 'comite_lifestyle',
      'lhs_key' => 'id',
      'rhs_module' => 'comite_AngryReactionInstance',
      'rhs_table' => 'comite_angryreactioninstance',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'comite_angryreactioninstance_comite_lifestyle_c',
      'join_key_lhs' => 'comite_ang25d7festyle_ida',
      'join_key_rhs' => 'comite_ang0d2fnstance_idb',
    ),
  ),
  'table' => 'comite_angryreactioninstance_comite_lifestyle_c',
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
      'name' => 'comite_ang25d7festyle_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'comite_ang0d2fnstance_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'comite_angryreactioninstance_comite_lifestylespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'comite_angryreactioninstance_comite_lifestyle_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'comite_ang25d7festyle_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'comite_angryreactioninstance_comite_lifestyle_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'comite_ang0d2fnstance_idb',
      ),
    ),
  ),
);