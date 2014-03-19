<?php
// created: 2012-08-01 18:02:09
$dictionary["comite_Impression"]["fields"]["comite_impression_contacts"] = array (
  'name' => 'comite_impression_contacts',
  'type' => 'link',
  'relationship' => 'comite_impression_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_IMPRESSION_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'comite_impression_contactscontacts_ida',
);
$dictionary["comite_Impression"]["fields"]["comite_impression_contacts_name"] = array (
  'name' => 'comite_impression_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_IMPRESSION_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'comite_impression_contactscontacts_ida',
  'link' => 'comite_impression_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["comite_Impression"]["fields"]["comite_impression_contactscontacts_ida"] = array (
  'name' => 'comite_impression_contactscontacts_ida',
  'type' => 'link',
  'relationship' => 'comite_impression_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_IMPRESSION_CONTACTS_FROM_COMITE_IMPRESSION_TITLE',
);
