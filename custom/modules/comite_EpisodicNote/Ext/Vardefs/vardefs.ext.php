<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-08-10 17:10:10
$dictionary["comite_EpisodicNote"]["fields"]["comite_episodicnote_contacts"] = array (
  'name' => 'comite_episodicnote_contacts',
  'type' => 'link',
  'relationship' => 'comite_episodicnote_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_EPISODICNOTE_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'comite_episodicnote_contactscontacts_ida',
);
$dictionary["comite_EpisodicNote"]["fields"]["comite_episodicnote_contacts_name"] = array (
  'name' => 'comite_episodicnote_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_EPISODICNOTE_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'comite_episodicnote_contactscontacts_ida',
  'link' => 'comite_episodicnote_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["comite_EpisodicNote"]["fields"]["comite_episodicnote_contactscontacts_ida"] = array (
  'name' => 'comite_episodicnote_contactscontacts_ida',
  'type' => 'link',
  'relationship' => 'comite_episodicnote_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_EPISODICNOTE_CONTACTS_FROM_COMITE_EPISODICNOTE_TITLE',
);

?>