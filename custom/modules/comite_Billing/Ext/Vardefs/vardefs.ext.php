<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-07-03 21:05:29
$dictionary["comite_Billing"]["fields"]["comite_billing_contacts"] = array (
  'name' => 'comite_billing_contacts',
  'type' => 'link',
  'relationship' => 'comite_billing_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_BILLING_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'comite_billing_contactscontacts_ida',
);
$dictionary["comite_Billing"]["fields"]["comite_billing_contacts_name"] = array (
  'name' => 'comite_billing_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_BILLING_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'comite_billing_contactscontacts_ida',
  'link' => 'comite_billing_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["comite_Billing"]["fields"]["comite_billing_contactscontacts_ida"] = array (
  'name' => 'comite_billing_contactscontacts_ida',
  'type' => 'link',
  'relationship' => 'comite_billing_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_BILLING_CONTACTS_FROM_COMITE_BILLING_TITLE',
);

?>