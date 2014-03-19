<?php
// created: 2012-07-30 23:30:42
$dictionary["comite_DrNotesNutritionExercise"]["fields"]["comite_drnotesnutritionexercise_contacts"] = array (
  'name' => 'comite_drnotesnutritionexercise_contacts',
  'type' => 'link',
  'relationship' => 'comite_drnotesnutritionexercise_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_DRNOTESNUTRITIONEXERCISE_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'comite_drnotesnutritionexercise_contactscontacts_idb',
);
$dictionary["comite_DrNotesNutritionExercise"]["fields"]["comite_drnotesnutritionexercise_contacts_name"] = array (
  'name' => 'comite_drnotesnutritionexercise_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_DRNOTESNUTRITIONEXERCISE_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'comite_drnotesnutritionexercise_contactscontacts_idb',
  'link' => 'comite_drnotesnutritionexercise_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["comite_DrNotesNutritionExercise"]["fields"]["comite_drnotesnutritionexercise_contactscontacts_idb"] = array (
  'name' => 'comite_drnotesnutritionexercise_contactscontacts_idb',
  'type' => 'link',
  'relationship' => 'comite_drnotesnutritionexercise_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_COMITE_DRNOTESNUTRITIONEXERCISE_CONTACTS_FROM_CONTACTS_TITLE',
);
