<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-07-28 23:57:49
$dictionary["comite_FamilyHealthHistory"]["fields"]["comite_relative_comite_familyhealthhistory"] = array (
  'name' => 'comite_relative_comite_familyhealthhistory',
  'type' => 'link',
  'relationship' => 'comite_relative_comite_familyhealthhistory',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_RELATIVE_COMITE_FAMILYHEALTHHISTORY_FROM_COMITE_RELATIVE_TITLE',
);


// created: 2012-07-29 00:27:34
$dictionary["comite_FamilyHealthHistory"]["fields"]["comite_familyhealthhistory_contacts"] = array (
  'name' => 'comite_familyhealthhistory_contacts',
  'type' => 'link',
  'relationship' => 'comite_familyhealthhistory_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_FAMILYHEALTHHISTORY_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'comite_familyhealthhistory_contactscontacts_idb',
);
$dictionary["comite_FamilyHealthHistory"]["fields"]["comite_familyhealthhistory_contacts_name"] = array (
  'name' => 'comite_familyhealthhistory_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_FAMILYHEALTHHISTORY_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'comite_familyhealthhistory_contactscontacts_idb',
  'link' => 'comite_familyhealthhistory_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["comite_FamilyHealthHistory"]["fields"]["comite_familyhealthhistory_contactscontacts_idb"] = array (
  'name' => 'comite_familyhealthhistory_contactscontacts_idb',
  'type' => 'link',
  'relationship' => 'comite_familyhealthhistory_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_COMITE_FAMILYHEALTHHISTORY_CONTACTS_FROM_CONTACTS_TITLE',
);


// created: 2012-07-28 23:57:30
$dictionary["comite_FamilyHealthHistory"]["fields"]["comite_conditioninstance_comite_familyhealthhistory"] = array (
  'name' => 'comite_conditioninstance_comite_familyhealthhistory',
  'type' => 'link',
  'relationship' => 'comite_conditioninstance_comite_familyhealthhistory',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_CONDITIONINSTANCE_COMITE_FAMILYHEALTHHISTORY_FROM_COMITE_CONDITIONINSTANCE_TITLE',
);

?>