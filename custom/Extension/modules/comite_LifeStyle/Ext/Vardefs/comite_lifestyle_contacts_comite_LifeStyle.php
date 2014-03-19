<?php
// created: 2012-07-13 11:30:18
$dictionary["comite_LifeStyle"]["fields"]["comite_lifestyle_contacts"] = array (
  'name' => 'comite_lifestyle_contacts',
  'type' => 'link',
  'relationship' => 'comite_lifestyle_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_LIFESTYLE_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'comite_lifestyle_contactscontacts_idb',
);
$dictionary["comite_LifeStyle"]["fields"]["comite_lifestyle_contacts_name"] = array (
  'name' => 'comite_lifestyle_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_LIFESTYLE_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'comite_lifestyle_contactscontacts_idb',
  'link' => 'comite_lifestyle_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["comite_LifeStyle"]["fields"]["comite_lifestyle_contactscontacts_idb"] = array (
  'name' => 'comite_lifestyle_contactscontacts_idb',
  'type' => 'link',
  'relationship' => 'comite_lifestyle_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_COMITE_LIFESTYLE_CONTACTS_FROM_CONTACTS_TITLE',
);
