<?php
// created: 2012-07-29 00:27:34
$dictionary["comite_FamilyHealthHistory"]["fields"]["comite_familyhealthhistory_contacts"] = array (
  'name' => 'comite_familyhealthhistory_contacts',
  'type' => 'link',
  'relationship' => 'comite_familyhealthhistory_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_FAMILYHEALTHHISTORY_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'comite_familyhealthhistory_contactscontacts_idb',
);
$dictionary["comite_FamilyHealthHistory"]["fields"]["comite_familyhealthhistory_contacts_name"] = array (
  'name' => 'comite_familyhealthhistory_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_FAMILYHEALTHHISTORY_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'comite_familyhealthhistory_contactscontacts_idb',
  'link' => 'comite_familyhealthhistory_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["comite_FamilyHealthHistory"]["fields"]["comite_familyhealthhistory_contactscontacts_idb"] = array (
  'name' => 'comite_familyhealthhistory_contactscontacts_idb',
  'type' => 'link',
  'relationship' => 'comite_familyhealthhistory_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_COMITE_FAMILYHEALTHHISTORY_CONTACTS_FROM_CONTACTS_TITLE',
);
