<?php
// created: 2012-07-13 11:30:18
$dictionary["Contact"]["fields"]["comite_lifestyle_contacts"] = array (
  'name' => 'comite_lifestyle_contacts',
  'type' => 'link',
  'relationship' => 'comite_lifestyle_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_LIFESTYLE_CONTACTS_FROM_COMITE_LIFESTYLE_TITLE',
  'id_name' => 'comite_lifestyle_contactscomite_lifestyle_ida',
);
$dictionary["Contact"]["fields"]["comite_lifestyle_contacts_name"] = array (
  'name' => 'comite_lifestyle_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_LIFESTYLE_CONTACTS_FROM_COMITE_LIFESTYLE_TITLE',
  'save' => true,
  'id_name' => 'comite_lifestyle_contactscomite_lifestyle_ida',
  'link' => 'comite_lifestyle_contacts',
  'table' => 'comite_lifestyle',
  'module' => 'comite_LifeStyle',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["comite_lifestyle_contactscomite_lifestyle_ida"] = array (
  'name' => 'comite_lifestyle_contactscomite_lifestyle_ida',
  'type' => 'link',
  'relationship' => 'comite_lifestyle_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_COMITE_LIFESTYLE_CONTACTS_FROM_COMITE_LIFESTYLE_TITLE',
);
