<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-07-30 23:30:00
$dictionary["comite_HealthTest"]["fields"]["comite_eherecommendations_comite_healthtest"] = array (
  'name' => 'comite_eherecommendations_comite_healthtest',
  'type' => 'link',
  'relationship' => 'comite_eherecommendations_comite_healthtest',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_EHERECOMMENDATIONS_COMITE_HEALTHTEST_FROM_COMITE_EHERECOMMENDATIONS_TITLE',
);


// created: 2012-07-30 18:34:22
$dictionary["comite_HealthTest"]["fields"]["comite_physicalexam_comite_healthtest"] = array (
  'name' => 'comite_physicalexam_comite_healthtest',
  'type' => 'link',
  'relationship' => 'comite_physicalexam_comite_healthtest',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_PHYSICALEXAM_COMITE_HEALTHTEST_FROM_COMITE_PHYSICALEXAM_TITLE',
);


// created: 2012-07-31 19:20:59
$dictionary["comite_HealthTest"]["fields"]["comite_bonestudies_comite_healthtest"] = array (
  'name' => 'comite_bonestudies_comite_healthtest',
  'type' => 'link',
  'relationship' => 'comite_bonestudies_comite_healthtest',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_BONESTUDIES_COMITE_HEALTHTEST_FROM_COMITE_BONESTUDIES_TITLE',
);


// created: 2012-07-30 20:32:58
$dictionary["comite_HealthTest"]["fields"]["comite_v02testing_comite_healthtest"] = array (
  'name' => 'comite_v02testing_comite_healthtest',
  'type' => 'link',
  'relationship' => 'comite_v02testing_comite_healthtest',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_V02TESTING_COMITE_HEALTHTEST_FROM_COMITE_V02TESTING_TITLE',
);


// created: 2012-07-30 18:33:52
$dictionary["comite_HealthTest"]["fields"]["comite_healthtest_contacts"] = array (
  'name' => 'comite_healthtest_contacts',
  'type' => 'link',
  'relationship' => 'comite_healthtest_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_HEALTHTEST_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'comite_healthtest_contactscontacts_idb',
);
$dictionary["comite_HealthTest"]["fields"]["comite_healthtest_contacts_name"] = array (
  'name' => 'comite_healthtest_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_HEALTHTEST_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'comite_healthtest_contactscontacts_idb',
  'link' => 'comite_healthtest_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["comite_HealthTest"]["fields"]["comite_healthtest_contactscontacts_idb"] = array (
  'name' => 'comite_healthtest_contactscontacts_idb',
  'type' => 'link',
  'relationship' => 'comite_healthtest_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_COMITE_HEALTHTEST_CONTACTS_FROM_CONTACTS_TITLE',
);

?>