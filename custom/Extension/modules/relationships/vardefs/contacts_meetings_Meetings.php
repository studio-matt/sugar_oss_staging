<?php
// created: 2012-08-09 16:42:16
$dictionary["Meeting"]["fields"]["contacts_meetings"] = array (
  'name' => 'contacts_meetings',
  'type' => 'link',
  'relationship' => 'contacts_meetings',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_MEETINGS_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_meetingscontacts_ida',
);
$dictionary["Meeting"]["fields"]["contacts_meetings_name"] = array (
  'name' => 'contacts_meetings_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_MEETINGS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_meetingscontacts_ida',
  'link' => 'contacts_meetings',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Meeting"]["fields"]["contacts_meetingscontacts_ida"] = array (
  'name' => 'contacts_meetingscontacts_ida',
  'type' => 'link',
  'relationship' => 'contacts_meetings',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_MEETINGS_FROM_MEETINGS_TITLE',
);
