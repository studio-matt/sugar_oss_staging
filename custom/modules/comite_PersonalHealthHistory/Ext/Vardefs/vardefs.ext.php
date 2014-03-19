<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-08-30 16:32:13
$dictionary["comite_PersonalHealthHistory"]["fields"]["comite_medsuppinst_comite_personalhealthhistory"] = array (
  'name' => 'comite_medsuppinst_comite_personalhealthhistory',
  'type' => 'link',
  'relationship' => 'comite_medsuppinst_comite_personalhealthhistory',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_MEDSUPPINST_COMITE_PERSONALHEALTHHISTORY_FROM_COMITE_MEDICATIONSUPPLEMENTINSTANCE_TITLE',
);


// created: 2012-07-03 21:55:35
$dictionary["comite_PersonalHealthHistory"]["fields"]["comite_personalhealthhistory_contacts"] = array (
  'name' => 'comite_personalhealthhistory_contacts',
  'type' => 'link',
  'relationship' => 'comite_personalhealthhistory_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_PERSONALHEALTHHISTORY_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'comite_personalhealthhistory_contactscontacts_idb',
);
$dictionary["comite_PersonalHealthHistory"]["fields"]["comite_personalhealthhistory_contacts_name"] = array (
  'name' => 'comite_personalhealthhistory_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_PERSONALHEALTHHISTORY_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'comite_personalhealthhistory_contactscontacts_idb',
  'link' => 'comite_personalhealthhistory_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["comite_PersonalHealthHistory"]["fields"]["comite_personalhealthhistory_contactscontacts_idb"] = array (
  'name' => 'comite_personalhealthhistory_contactscontacts_idb',
  'type' => 'link',
  'relationship' => 'comite_personalhealthhistory_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_COMITE_PERSONALHEALTHHISTORY_CONTACTS_FROM_CONTACTS_TITLE',
);


// created: 2012-07-05 15:54:50
$dictionary["comite_PersonalHealthHistory"]["fields"]["comite_exposureinstance_comite_personalhealthhistory"] = array (
  'name' => 'comite_exposureinstance_comite_personalhealthhistory',
  'type' => 'link',
  'relationship' => 'comite_exposureinstance_comite_personalhealthhistory',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_EXPOSUREINSTANCE_COMITE_PERSONALHEALTHHISTORY_FROM_COMITE_EXPOSUREINSTANCE_TITLE',
);


// created: 2012-07-05 17:53:55
$dictionary["comite_PersonalHealthHistory"]["fields"]["comite_diagnosticinstance_comite_personalhealthhistory"] = array (
  'name' => 'comite_diagnosticinstance_comite_personalhealthhistory',
  'type' => 'link',
  'relationship' => 'comite_diagnosticinstance_comite_personalhealthhistory',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_DIAGNOSTICINSTANCE_COMITE_PERSONALHEALTHHISTORY_FROM_COMITE_DIAGNOSTICINSTANCE_TITLE',
);


// created: 2012-07-27 15:25:58
$dictionary["comite_PersonalHealthHistory"]["fields"]["comite_reviewoverallhealth_comite_personalhealthhistory"] = array (
  'name' => 'comite_reviewoverallhealth_comite_personalhealthhistory',
  'type' => 'link',
  'relationship' => 'comite_reviewoverallhealth_comite_personalhealthhistory',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_REVIEWOVERALLHEALTH_COMITE_PERSONALHEALTHHISTORY_FROM_COMITE_REVIEWOVERALLHEALTH_TITLE',
);

?>