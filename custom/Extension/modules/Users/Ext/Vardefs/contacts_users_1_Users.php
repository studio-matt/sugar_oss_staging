<?php
// created: 2012-05-21 14:10:58
$dictionary["User"]["fields"]["contacts_users_1"] = array (
  'name' => 'contacts_users_1',
  'type' => 'link',
  'relationship' => 'contacts_users_1',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_USERS_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_users_1contacts_ida',
);
$dictionary["User"]["fields"]["contacts_users_1_name"] = array (
  'name' => 'contacts_users_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_USERS_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_users_1contacts_ida',
  'link' => 'contacts_users_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["User"]["fields"]["contacts_users_1contacts_ida"] = array (
  'name' => 'contacts_users_1contacts_ida',
  'type' => 'link',
  'relationship' => 'contacts_users_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_CONTACTS_USERS_1_FROM_CONTACTS_TITLE',
);
