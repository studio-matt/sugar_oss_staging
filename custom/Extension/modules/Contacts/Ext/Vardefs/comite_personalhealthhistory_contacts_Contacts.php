<?php
// created: 2012-07-03 21:55:35
$dictionary["Contact"]["fields"]["comite_personalhealthhistory_contacts"] = array (
  'name' => 'comite_personalhealthhistory_contacts',
  'type' => 'link',
  'relationship' => 'comite_personalhealthhistory_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_PERSONALHEALTHHISTORY_CONTACTS_FROM_COMITE_PERSONALHEALTHHISTORY_TITLE',
  'id_name' => 'comite_per66fchistory_ida',
);
$dictionary["Contact"]["fields"]["comite_personalhealthhistory_contacts_name"] = array (
  'name' => 'comite_personalhealthhistory_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_PERSONALHEALTHHISTORY_CONTACTS_FROM_COMITE_PERSONALHEALTHHISTORY_TITLE',
  'save' => true,
  'id_name' => 'comite_per66fchistory_ida',
  'link' => 'comite_personalhealthhistory_contacts',
  'table' => 'comite_personalhealthhistory',
  'module' => 'comite_PersonalHealthHistory',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["comite_per66fchistory_ida"] = array (
  'name' => 'comite_per66fchistory_ida',
  'type' => 'link',
  'relationship' => 'comite_personalhealthhistory_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_COMITE_PERSONALHEALTHHISTORY_CONTACTS_FROM_COMITE_PERSONALHEALTHHISTORY_TITLE',
);
