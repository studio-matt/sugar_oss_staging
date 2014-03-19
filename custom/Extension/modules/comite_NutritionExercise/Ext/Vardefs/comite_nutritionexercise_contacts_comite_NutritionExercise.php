<?php
// created: 2012-07-13 11:30:15
$dictionary["comite_NutritionExercise"]["fields"]["comite_nutritionexercise_contacts"] = array (
  'name' => 'comite_nutritionexercise_contacts',
  'type' => 'link',
  'relationship' => 'comite_nutritionexercise_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_NUTRITIONEXERCISE_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'comite_nutritionexercise_contactscontacts_idb',
);
$dictionary["comite_NutritionExercise"]["fields"]["comite_nutritionexercise_contacts_name"] = array (
  'name' => 'comite_nutritionexercise_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_NUTRITIONEXERCISE_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'comite_nutritionexercise_contactscontacts_idb',
  'link' => 'comite_nutritionexercise_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["comite_NutritionExercise"]["fields"]["comite_nutritionexercise_contactscontacts_idb"] = array (
  'name' => 'comite_nutritionexercise_contactscontacts_idb',
  'type' => 'link',
  'relationship' => 'comite_nutritionexercise_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_COMITE_NUTRITIONEXERCISE_CONTACTS_FROM_CONTACTS_TITLE',
);
