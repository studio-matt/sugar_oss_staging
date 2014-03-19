<?php
// created: 2012-05-21 14:10:58
$dictionary["Contact"]["fields"]["contacts_users_1"] = array (
  'name' => 'contacts_users_1',
  'type' => 'link',
  'relationship' => 'contacts_users_1',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_USERS_1_FROM_USERS_TITLE',
  'id_name' => 'contacts_users_1users_idb',
);
$dictionary["Contact"]["fields"]["contacts_users_1_name"] = array (
  'name' => 'contacts_users_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_USERS_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'contacts_users_1users_idb',
  'link' => 'contacts_users_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["contacts_users_1users_idb"] = array (
  'name' => 'contacts_users_1users_idb',
  'type' => 'link',
  'relationship' => 'contacts_users_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_CONTACTS_USERS_1_FROM_USERS_TITLE',
);
