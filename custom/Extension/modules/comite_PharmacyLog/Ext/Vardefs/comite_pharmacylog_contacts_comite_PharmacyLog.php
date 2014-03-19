<?php
// created: 2012-07-30 15:56:08
$dictionary["comite_PharmacyLog"]["fields"]["comite_pharmacylog_contacts"] = array (
  'name' => 'comite_pharmacylog_contacts',
  'type' => 'link',
  'relationship' => 'comite_pharmacylog_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_PHARMACYLOG_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'comite_pharmacylog_contactscontacts_idb',
);
$dictionary["comite_PharmacyLog"]["fields"]["comite_pharmacylog_contacts_name"] = array (
  'name' => 'comite_pharmacylog_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_PHARMACYLOG_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'comite_pharmacylog_contactscontacts_idb',
  'link' => 'comite_pharmacylog_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["comite_PharmacyLog"]["fields"]["comite_pharmacylog_contactscontacts_idb"] = array (
  'name' => 'comite_pharmacylog_contactscontacts_idb',
  'type' => 'link',
  'relationship' => 'comite_pharmacylog_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_COMITE_PHARMACYLOG_CONTACTS_FROM_CONTACTS_TITLE',
);
