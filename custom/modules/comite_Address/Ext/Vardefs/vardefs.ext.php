<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-07-03 21:05:29
$dictionary["comite_Address"]["fields"]["comite_address_contacts"] = array (
  'name' => 'comite_address_contacts',
  'type' => 'link',
  'relationship' => 'comite_address_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_ADDRESS_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'comite_address_contactscontacts_ida',
);
$dictionary["comite_Address"]["fields"]["comite_address_contacts_name"] = array (
  'name' => 'comite_address_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_ADDRESS_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'comite_address_contactscontacts_ida',
  'link' => 'comite_address_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["comite_Address"]["fields"]["comite_address_contactscontacts_ida"] = array (
  'name' => 'comite_address_contactscontacts_ida',
  'type' => 'link',
  'relationship' => 'comite_address_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_ADDRESS_CONTACTS_FROM_COMITE_ADDRESS_TITLE',
);

?>