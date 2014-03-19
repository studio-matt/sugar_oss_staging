<?php
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
