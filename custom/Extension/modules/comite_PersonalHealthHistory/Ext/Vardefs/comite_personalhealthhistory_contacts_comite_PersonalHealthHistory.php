<?php
// created: 2012-07-03 21:55:35
$dictionary["comite_PersonalHealthHistory"]["fields"]["comite_personalhealthhistory_contacts"] = array (
  'name' => 'comite_personalhealthhistory_contacts',
  'type' => 'link',
  'relationship' => 'comite_personalhealthhistory_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_PERSONALHEALTHHISTORY_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'comite_personalhealthhistory_contactscontacts_idb',
);
$dictionary["comite_PersonalHealthHistory"]["fields"]["comite_personalhealthhistory_contacts_name"] = array (
  'name' => 'comite_personalhealthhistory_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_PERSONALHEALTHHISTORY_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'comite_personalhealthhistory_contactscontacts_idb',
  'link' => 'comite_personalhealthhistory_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["comite_PersonalHealthHistory"]["fields"]["comite_personalhealthhistory_contactscontacts_idb"] = array (
  'name' => 'comite_personalhealthhistory_contactscontacts_idb',
  'type' => 'link',
  'relationship' => 'comite_personalhealthhistory_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_COMITE_PERSONALHEALTHHISTORY_CONTACTS_FROM_CONTACTS_TITLE',
);
