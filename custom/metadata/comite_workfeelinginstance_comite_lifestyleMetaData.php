<?php
// created: 2012-12-26 17:44:27
$dictionary["comite_workfeelinginstance_comite_lifestyle"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'comite_workfeelinginstance_comite_lifestyle' => 
    array (
      'lhs_module' => 'comite_LifeStyle',
      'lhs_table' => 'comite_lifestyle',
      'lhs_key' => 'id',
      'rhs_module' => 'comite_WorkFeelingInstance',
      'rhs_table' => 'comite_workfeelinginstance',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'comite_workfeelinginstance_comite_lifestyle_c',
      'join_key_lhs' => 'comite_workfeelinginstance_comite_lifestylecomite_lifestyle_ida',
      'join_key_rhs' => 'comite_wor878dnstance_idb',
    ),
  ),
  'table' => 'comite_workfeelinginstance_comite_lifestyle_c',
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
      'name' => 'comite_workfeelinginstance_comite_lifestylecomite_lifestyle_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'comite_wor878dnstance_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'comite_workfeelinginstance_comite_lifestylespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'comite_workfeelinginstance_comite_lifestyle_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'comite_workfeelinginstance_comite_lifestylecomite_lifestyle_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'comite_workfeelinginstance_comite_lifestyle_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'comite_wor878dnstance_idb',
      ),
    ),
  ),
);