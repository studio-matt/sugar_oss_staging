<?php
// created: 2012-07-30 23:30:42
$dictionary["Contact"]["fields"]["comite_drnotesnutritionexercise_contacts"] = array (
  'name' => 'comite_drnotesnutritionexercise_contacts',
  'type' => 'link',
  'relationship' => 'comite_drnotesnutritionexercise_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_DRNOTESNUTRITIONEXERCISE_CONTACTS_FROM_COMITE_DRNOTESNUTRITIONEXERCISE_TITLE',
  'id_name' => 'comite_drn0c29xercise_ida',
);
$dictionary["Contact"]["fields"]["comite_drnotesnutritionexercise_contacts_name"] = array (
  'name' => 'comite_drnotesnutritionexercise_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_DRNOTESNUTRITIONEXERCISE_CONTACTS_FROM_COMITE_DRNOTESNUTRITIONEXERCISE_TITLE',
  'save' => true,
  'id_name' => 'comite_drn0c29xercise_ida',
  'link' => 'comite_drnotesnutritionexercise_contacts',
  'table' => 'comite_drnotesnutritionexercise',
  'module' => 'comite_DrNotesNutritionExercise',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["comite_drn0c29xercise_ida"] = array (
  'name' => 'comite_drn0c29xercise_ida',
  'type' => 'link',
  'relationship' => 'comite_drnotesnutritionexercise_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_COMITE_DRNOTESNUTRITIONEXERCISE_CONTACTS_FROM_COMITE_DRNOTESNUTRITIONEXERCISE_TITLE',
);
