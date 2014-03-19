<?php
// created: 2012-12-26 17:44:01
$dictionary["comite_nutritionexercise_contacts"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'comite_nutritionexercise_contacts' => 
    array (
      'lhs_module' => 'comite_NutritionExercise',
      'lhs_table' => 'comite_nutritionexercise',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'comite_nutritionexercise_contacts_c',
      'join_key_lhs' => 'comite_nutritionexercise_contactscomite_nutritionexercise_ida',
      'join_key_rhs' => 'comite_nutritionexercise_contactscontacts_idb',
    ),
  ),
  'table' => 'comite_nutritionexercise_contacts_c',
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
      'name' => 'comite_nutritionexercise_contactscomite_nutritionexercise_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'comite_nutritionexercise_contactscontacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'comite_nutritionexercise_contactsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'comite_nutritionexercise_contacts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'comite_nutritionexercise_contactscomite_nutritionexercise_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'comite_nutritionexercise_contacts_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'comite_nutritionexercise_contactscontacts_idb',
      ),
    ),
  ),
);