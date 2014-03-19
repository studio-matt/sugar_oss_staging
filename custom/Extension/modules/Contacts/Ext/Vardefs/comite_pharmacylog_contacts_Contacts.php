<?php
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
