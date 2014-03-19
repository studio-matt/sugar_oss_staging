<?php
// created: 2012-07-30 18:33:52
$dictionary["Contact"]["fields"]["comite_healthtest_contacts"] = array (
  'name' => 'comite_healthtest_contacts',
  'type' => 'link',
  'relationship' => 'comite_healthtest_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_HEALTHTEST_CONTACTS_FROM_COMITE_HEALTHTEST_TITLE',
  'id_name' => 'comite_healthtest_contactscomite_healthtest_ida',
);
$dictionary["Contact"]["fields"]["comite_healthtest_contacts_name"] = array (
  'name' => 'comite_healthtest_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_HEALTHTEST_CONTACTS_FROM_COMITE_HEALTHTEST_TITLE',
  'save' => true,
  'id_name' => 'comite_healthtest_contactscomite_healthtest_ida',
  'link' => 'comite_healthtest_contacts',
  'table' => 'comite_healthtest',
  'module' => 'comite_HealthTest',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["comite_healthtest_contactscomite_healthtest_ida"] = array (
  'name' => 'comite_healthtest_contactscomite_healthtest_ida',
  'type' => 'link',
  'relationship' => 'comite_healthtest_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_COMITE_HEALTHTEST_CONTACTS_FROM_COMITE_HEALTHTEST_TITLE',
);
