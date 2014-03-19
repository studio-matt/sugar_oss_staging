<?php
// created: 2012-12-20 17:45:39
$dictionary["comite_DoctorsNote"]["fields"]["comite_doctorsnote_contacts"] = array (
  'name' => 'comite_doctorsnote_contacts',
  'type' => 'link',
  'relationship' => 'comite_doctorsnote_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_DOCTORSNOTE_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'comite_doctorsnote_contactscontacts_ida',
);
$dictionary["comite_DoctorsNote"]["fields"]["comite_doctorsnote_contacts_name"] = array (
  'name' => 'comite_doctorsnote_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_DOCTORSNOTE_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'comite_doctorsnote_contactscontacts_ida',
  'link' => 'comite_doctorsnote_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["comite_DoctorsNote"]["fields"]["comite_doctorsnote_contactscontacts_ida"] = array (
  'name' => 'comite_doctorsnote_contactscontacts_ida',
  'type' => 'link',
  'relationship' => 'comite_doctorsnote_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_DOCTORSNOTE_CONTACTS_FROM_COMITE_DOCTORSNOTE_TITLE',
);
