<?php 
 //WARNING: The contents of this file are auto-generated


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


// created: 2012-07-13 11:30:19
$dictionary["comite_NutritionExercise"]["fields"]["comite_fitnessactivity_comite_nutritionexercise"] = array (
  'name' => 'comite_fitnessactivity_comite_nutritionexercise',
  'type' => 'link',
  'relationship' => 'comite_fitnessactivity_comite_nutritionexercise',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_FITNESSACTIVITY_COMITE_NUTRITIONEXERCISE_FROM_COMITE_FITNESSACTIVITY_TITLE',
);


// created: 2012-07-13 11:30:29
$dictionary["comite_NutritionExercise"]["fields"]["comite_exercisesummary_comite_nutritionexercise"] = array (
  'name' => 'comite_exercisesummary_comite_nutritionexercise',
  'type' => 'link',
  'relationship' => 'comite_exercisesummary_comite_nutritionexercise',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_EXERCISESUMMARY_COMITE_NUTRITIONEXERCISE_FROM_COMITE_EXERCISESUMMARY_TITLE',
);


// created: 2012-07-13 11:30:17
$dictionary["comite_NutritionExercise"]["fields"]["comite_nutrionalsummary_comite_nutritionexercise"] = array (
  'name' => 'comite_nutrionalsummary_comite_nutritionexercise',
  'type' => 'link',
  'relationship' => 'comite_nutrionalsummary_comite_nutritionexercise',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_NUTRIONALSUMMARY_COMITE_NUTRITIONEXERCISE_FROM_COMITE_NUTRIONALSUMMARY_TITLE',
);


// created: 2012-07-13 11:30:15
$dictionary["comite_NutritionExercise"]["fields"]["comite_nutritionalintake_comite_nutritionexercise"] = array (
  'name' => 'comite_nutritionalintake_comite_nutritionexercise',
  'type' => 'link',
  'relationship' => 'comite_nutritionalintake_comite_nutritionexercise',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_NUTRITIONALINTAKE_COMITE_NUTRITIONEXERCISE_FROM_COMITE_NUTRITIONALINTAKE_TITLE',
);

?>