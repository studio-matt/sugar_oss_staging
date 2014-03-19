<?php
// created: 2012-07-13 11:30:15
$dictionary["Contact"]["fields"]["comite_nutritionexercise_contacts"] = array (
  'name' => 'comite_nutritionexercise_contacts',
  'type' => 'link',
  'relationship' => 'comite_nutritionexercise_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_NUTRITIONEXERCISE_CONTACTS_FROM_COMITE_NUTRITIONEXERCISE_TITLE',
  'id_name' => 'comite_nutritionexercise_contactscomite_nutritionexercise_ida',
);
$dictionary["Contact"]["fields"]["comite_nutritionexercise_contacts_name"] = array (
  'name' => 'comite_nutritionexercise_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_NUTRITIONEXERCISE_CONTACTS_FROM_COMITE_NUTRITIONEXERCISE_TITLE',
  'save' => true,
  'id_name' => 'comite_nutritionexercise_contactscomite_nutritionexercise_ida',
  'link' => 'comite_nutritionexercise_contacts',
  'table' => 'comite_nutritionexercise',
  'module' => 'comite_NutritionExercise',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["comite_nutritionexercise_contactscomite_nutritionexercise_ida"] = array (
  'name' => 'comite_nutritionexercise_contactscomite_nutritionexercise_ida',
  'type' => 'link',
  'relationship' => 'comite_nutritionexercise_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_COMITE_NUTRITIONEXERCISE_CONTACTS_FROM_COMITE_NUTRITIONEXERCISE_TITLE',
);
