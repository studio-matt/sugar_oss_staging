<?php
// created: 2012-07-29 00:27:34
$dictionary["Contact"]["fields"]["comite_familyhealthhistory_contacts"] = array (
  'name' => 'comite_familyhealthhistory_contacts',
  'type' => 'link',
  'relationship' => 'comite_familyhealthhistory_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_FAMILYHEALTHHISTORY_CONTACTS_FROM_COMITE_FAMILYHEALTHHISTORY_TITLE',
  'id_name' => 'comite_fam691fhistory_ida',
);
$dictionary["Contact"]["fields"]["comite_familyhealthhistory_contacts_name"] = array (
  'name' => 'comite_familyhealthhistory_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_FAMILYHEALTHHISTORY_CONTACTS_FROM_COMITE_FAMILYHEALTHHISTORY_TITLE',
  'save' => true,
  'id_name' => 'comite_fam691fhistory_ida',
  'link' => 'comite_familyhealthhistory_contacts',
  'table' => 'comite_familyhealthhistory',
  'module' => 'comite_FamilyHealthHistory',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["comite_fam691fhistory_ida"] = array (
  'name' => 'comite_fam691fhistory_ida',
  'type' => 'link',
  'relationship' => 'comite_familyhealthhistory_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_COMITE_FAMILYHEALTHHISTORY_CONTACTS_FROM_COMITE_FAMILYHEALTHHISTORY_TITLE',
);
