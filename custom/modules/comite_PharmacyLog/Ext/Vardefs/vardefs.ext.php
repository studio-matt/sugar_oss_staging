<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-07-30 15:55:59
$dictionary["comite_PharmacyLog"]["fields"]["comite_pharmacymedicine_comite_pharmacylog"] = array (
  'name' => 'comite_pharmacymedicine_comite_pharmacylog',
  'type' => 'link',
  'relationship' => 'comite_pharmacymedicine_comite_pharmacylog',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_PHARMACYMEDICINE_COMITE_PHARMACYLOG_FROM_COMITE_PHARMACYMEDICINE_TITLE',
);


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


// created: 2012-07-30 15:56:10
$dictionary["comite_PharmacyLog"]["fields"]["comite_pharmacy_comite_pharmacylog"] = array (
  'name' => 'comite_pharmacy_comite_pharmacylog',
  'type' => 'link',
  'relationship' => 'comite_pharmacy_comite_pharmacylog',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_PHARMACY_COMITE_PHARMACYLOG_FROM_COMITE_PHARMACY_TITLE',
);

?>