<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-07-29 00:27:34
$dictionary["Contact"]["fields"]["comite_familyhealthhistory_contacts"] = array (
  'name' => 'comite_familyhealthhistory_contacts',
  'type' => 'link',
  'relationship' => 'comite_familyhealthhistory_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_FAMILYHEALTHHISTORY_CONTACTS_FROM_COMITE_FAMILYHEALTHHISTORY_TITLE',
  'id_name' => 'comite_fam691fhistory_ida',
);
$dictionary["Contact"]["fields"]["comite_familyhealthhistory_contacts_name"] = array (
  'name' => 'comite_familyhealthhistory_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_FAMILYHEALTHHISTORY_CONTACTS_FROM_COMITE_FAMILYHEALTHHISTORY_TITLE',
  'save' => true,
  'id_name' => 'comite_fam691fhistory_ida',
  'link' => 'comite_familyhealthhistory_contacts',
  'table' => 'comite_familyhealthhistory',
  'module' => 'comite_FamilyHealthHistory',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["comite_fam691fhistory_ida"] = array (
  'name' => 'comite_fam691fhistory_ida',
  'type' => 'link',
  'relationship' => 'comite_familyhealthhistory_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_COMITE_FAMILYHEALTHHISTORY_CONTACTS_FROM_COMITE_FAMILYHEALTHHISTORY_TITLE',
);


// created: 2012-07-03 21:05:29
$dictionary["Contact"]["fields"]["comite_billing_contacts"] = array (
  'name' => 'comite_billing_contacts',
  'type' => 'link',
  'relationship' => 'comite_billing_contacts',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_BILLING_CONTACTS_FROM_COMITE_BILLING_TITLE',
);


// created: 2012-07-13 11:30:18
$dictionary["Contact"]["fields"]["comite_lifestyle_contacts"] = array (
  'name' => 'comite_lifestyle_contacts',
  'type' => 'link',
  'relationship' => 'comite_lifestyle_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_LIFESTYLE_CONTACTS_FROM_COMITE_LIFESTYLE_TITLE',
  'id_name' => 'comite_lifestyle_contactscomite_lifestyle_ida',
);
$dictionary["Contact"]["fields"]["comite_lifestyle_contacts_name"] = array (
  'name' => 'comite_lifestyle_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_LIFESTYLE_CONTACTS_FROM_COMITE_LIFESTYLE_TITLE',
  'save' => true,
  'id_name' => 'comite_lifestyle_contactscomite_lifestyle_ida',
  'link' => 'comite_lifestyle_contacts',
  'table' => 'comite_lifestyle',
  'module' => 'comite_LifeStyle',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["comite_lifestyle_contactscomite_lifestyle_ida"] = array (
  'name' => 'comite_lifestyle_contactscomite_lifestyle_ida',
  'type' => 'link',
  'relationship' => 'comite_lifestyle_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_COMITE_LIFESTYLE_CONTACTS_FROM_COMITE_LIFESTYLE_TITLE',
);


// created: 2012-08-10 17:10:10
$dictionary["Contact"]["fields"]["comite_episodicnote_contacts"] = array (
  'name' => 'comite_episodicnote_contacts',
  'type' => 'link',
  'relationship' => 'comite_episodicnote_contacts',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_EPISODICNOTE_CONTACTS_FROM_COMITE_EPISODICNOTE_TITLE',
);


 // created: 2012-07-05 11:29:59

 

// created: 2012-07-03 21:05:29
$dictionary["Contact"]["fields"]["comite_address_contacts"] = array (
  'name' => 'comite_address_contacts',
  'type' => 'link',
  'relationship' => 'comite_address_contacts',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_ADDRESS_CONTACTS_FROM_COMITE_ADDRESS_TITLE',
);


// created: 2012-08-01 18:02:09
$dictionary["Contact"]["fields"]["comite_impression_contacts"] = array (
  'name' => 'comite_impression_contacts',
  'type' => 'link',
  'relationship' => 'comite_impression_contacts',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_IMPRESSION_CONTACTS_FROM_COMITE_IMPRESSION_TITLE',
);


 // created: 2012-08-07 08:33:01

 

 // created: 2012-08-07 08:32:30

 

// created: 2012-07-30 15:56:08
$dictionary["Contact"]["fields"]["comite_pharmacylog_contacts"] = array (
  'name' => 'comite_pharmacylog_contacts',
  'type' => 'link',
  'relationship' => 'comite_pharmacylog_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_PHARMACYLOG_CONTACTS_FROM_COMITE_PHARMACYLOG_TITLE',
  'id_name' => 'comite_pharmacylog_contactscomite_pharmacylog_ida',
);
$dictionary["Contact"]["fields"]["comite_pharmacylog_contacts_name"] = array (
  'name' => 'comite_pharmacylog_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_PHARMACYLOG_CONTACTS_FROM_COMITE_PHARMACYLOG_TITLE',
  'save' => true,
  'id_name' => 'comite_pharmacylog_contactscomite_pharmacylog_ida',
  'link' => 'comite_pharmacylog_contacts',
  'table' => 'comite_pharmacylog',
  'module' => 'comite_PharmacyLog',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["comite_pharmacylog_contactscomite_pharmacylog_ida"] = array (
  'name' => 'comite_pharmacylog_contactscomite_pharmacylog_ida',
  'type' => 'link',
  'relationship' => 'comite_pharmacylog_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_COMITE_PHARMACYLOG_CONTACTS_FROM_COMITE_PHARMACYLOG_TITLE',
);


 // created: 2012-07-27 16:29:29

 

 // created: 2012-08-10 14:20:57

 

// created: 2012-07-03 21:05:29
$dictionary["Contact"]["fields"]["comite_doctorsnote_contacts"] = array (
  'name' => 'comite_doctorsnote_contacts',
  'type' => 'link',
  'relationship' => 'comite_doctorsnote_contacts',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_DOCTORSNOTE_CONTACTS_FROM_COMITE_DOCTORSNOTE_TITLE',
);


// created: 2012-07-03 21:55:35
$dictionary["Contact"]["fields"]["comite_personalhealthhistory_contacts"] = array (
  'name' => 'comite_personalhealthhistory_contacts',
  'type' => 'link',
  'relationship' => 'comite_personalhealthhistory_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_PERSONALHEALTHHISTORY_CONTACTS_FROM_COMITE_PERSONALHEALTHHISTORY_TITLE',
  'id_name' => 'comite_per66fchistory_ida',
);
$dictionary["Contact"]["fields"]["comite_personalhealthhistory_contacts_name"] = array (
  'name' => 'comite_personalhealthhistory_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_PERSONALHEALTHHISTORY_CONTACTS_FROM_COMITE_PERSONALHEALTHHISTORY_TITLE',
  'save' => true,
  'id_name' => 'comite_per66fchistory_ida',
  'link' => 'comite_personalhealthhistory_contacts',
  'table' => 'comite_personalhealthhistory',
  'module' => 'comite_PersonalHealthHistory',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["comite_per66fchistory_ida"] = array (
  'name' => 'comite_per66fchistory_ida',
  'type' => 'link',
  'relationship' => 'comite_personalhealthhistory_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_COMITE_PERSONALHEALTHHISTORY_CONTACTS_FROM_COMITE_PERSONALHEALTHHISTORY_TITLE',
);


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


// created: 2012-07-03 21:05:29
$dictionary["Contact"]["fields"]["comite_phone_contacts"] = array (
  'name' => 'comite_phone_contacts',
  'type' => 'link',
  'relationship' => 'comite_phone_contacts',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_PHONE_CONTACTS_FROM_COMITE_PHONE_TITLE',
);


 // created: 2012-07-03 15:13:08

 

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


// created: 2012-05-21 14:10:58
$dictionary["Contact"]["fields"]["contacts_users_1"] = array (
  'name' => 'contacts_users_1',
  'type' => 'link',
  'relationship' => 'contacts_users_1',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_USERS_1_FROM_USERS_TITLE',
  'id_name' => 'contacts_users_1users_idb',
);
$dictionary["Contact"]["fields"]["contacts_users_1_name"] = array (
  'name' => 'contacts_users_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_USERS_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'contacts_users_1users_idb',
  'link' => 'contacts_users_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["contacts_users_1users_idb"] = array (
  'name' => 'contacts_users_1users_idb',
  'type' => 'link',
  'relationship' => 'contacts_users_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_CONTACTS_USERS_1_FROM_USERS_TITLE',
);


 // created: 2013-01-28 16:55:52

 

// created: 2012-07-30 18:33:52
$dictionary["Contact"]["fields"]["comite_healthtest_contacts"] = array (
  'name' => 'comite_healthtest_contacts',
  'type' => 'link',
  'relationship' => 'comite_healthtest_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_HEALTHTEST_CONTACTS_FROM_COMITE_HEALTHTEST_TITLE',
  'id_name' => 'comite_healthtest_contactscomite_healthtest_ida',
);
$dictionary["Contact"]["fields"]["comite_healthtest_contacts_name"] = array (
  'name' => 'comite_healthtest_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_HEALTHTEST_CONTACTS_FROM_COMITE_HEALTHTEST_TITLE',
  'save' => true,
  'id_name' => 'comite_healthtest_contactscomite_healthtest_ida',
  'link' => 'comite_healthtest_contacts',
  'table' => 'comite_healthtest',
  'module' => 'comite_HealthTest',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["comite_healthtest_contactscomite_healthtest_ida"] = array (
  'name' => 'comite_healthtest_contactscomite_healthtest_ida',
  'type' => 'link',
  'relationship' => 'comite_healthtest_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_COMITE_HEALTHTEST_CONTACTS_FROM_COMITE_HEALTHTEST_TITLE',
);

?>