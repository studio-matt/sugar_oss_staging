<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-07-13 11:30:13
$dictionary["comite_LifeStyle"]["fields"]["comite_personaltraitinstance_comite_lifestyle"] = array (
  'name' => 'comite_personaltraitinstance_comite_lifestyle',
  'type' => 'link',
  'relationship' => 'comite_personaltraitinstance_comite_lifestyle',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_PERSONALTRAITINSTANCE_COMITE_LIFESTYLE_FROM_COMITE_PERSONALTRAITINSTANCE_TITLE',
);


// created: 2012-07-13 11:30:16
$dictionary["comite_LifeStyle"]["fields"]["comite_workfeelinginstance_comite_lifestyle"] = array (
  'name' => 'comite_workfeelinginstance_comite_lifestyle',
  'type' => 'link',
  'relationship' => 'comite_workfeelinginstance_comite_lifestyle',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_WORKFEELINGINSTANCE_COMITE_LIFESTYLE_FROM_COMITE_WORKFEELINGINSTANCE_TITLE',
);


// created: 2012-07-13 11:30:21
$dictionary["comite_LifeStyle"]["fields"]["comite_lifechangeinstance_comite_lifestyle"] = array (
  'name' => 'comite_lifechangeinstance_comite_lifestyle',
  'type' => 'link',
  'relationship' => 'comite_lifechangeinstance_comite_lifestyle',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_LIFECHANGEINSTANCE_COMITE_LIFESTYLE_FROM_COMITE_LIFECHANGEINSTANCE_TITLE',
);


// created: 2012-07-13 11:30:23
$dictionary["comite_LifeStyle"]["fields"]["comite_substanceuseinstance_comite_lifestyle"] = array (
  'name' => 'comite_substanceuseinstance_comite_lifestyle',
  'type' => 'link',
  'relationship' => 'comite_substanceuseinstance_comite_lifestyle',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_SUBSTANCEUSEINSTANCE_COMITE_LIFESTYLE_FROM_COMITE_SUBSTANCEUSEINSTANCE_TITLE',
);


// created: 2012-07-13 11:30:18
$dictionary["comite_LifeStyle"]["fields"]["comite_lifestyle_contacts"] = array (
  'name' => 'comite_lifestyle_contacts',
  'type' => 'link',
  'relationship' => 'comite_lifestyle_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_LIFESTYLE_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'comite_lifestyle_contactscontacts_idb',
);
$dictionary["comite_LifeStyle"]["fields"]["comite_lifestyle_contacts_name"] = array (
  'name' => 'comite_lifestyle_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_LIFESTYLE_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'comite_lifestyle_contactscontacts_idb',
  'link' => 'comite_lifestyle_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["comite_LifeStyle"]["fields"]["comite_lifestyle_contactscontacts_idb"] = array (
  'name' => 'comite_lifestyle_contactscontacts_idb',
  'type' => 'link',
  'relationship' => 'comite_lifestyle_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_COMITE_LIFESTYLE_CONTACTS_FROM_CONTACTS_TITLE',
);


// created: 2012-07-13 11:30:29
$dictionary["comite_LifeStyle"]["fields"]["comite_mindemotioninstance_comite_lifestyle"] = array (
  'name' => 'comite_mindemotioninstance_comite_lifestyle',
  'type' => 'link',
  'relationship' => 'comite_mindemotioninstance_comite_lifestyle',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_MINDEMOTIONINSTANCE_COMITE_LIFESTYLE_FROM_COMITE_MINDEMOTIONINSTANCE_TITLE',
);


// created: 2012-07-13 11:30:32
$dictionary["comite_LifeStyle"]["fields"]["comite_sleepconditioninstance_comite_lifestyle"] = array (
  'name' => 'comite_sleepconditioninstance_comite_lifestyle',
  'type' => 'link',
  'relationship' => 'comite_sleepconditioninstance_comite_lifestyle',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_SLEEPCONDITIONINSTANCE_COMITE_LIFESTYLE_FROM_COMITE_SLEEPCONDITIONINSTANCE_TITLE',
);


// created: 2012-07-13 11:30:26
$dictionary["comite_LifeStyle"]["fields"]["comite_angryreactioninstance_comite_lifestyle"] = array (
  'name' => 'comite_angryreactioninstance_comite_lifestyle',
  'type' => 'link',
  'relationship' => 'comite_angryreactioninstance_comite_lifestyle',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_ANGRYREACTIONINSTANCE_COMITE_LIFESTYLE_FROM_COMITE_ANGRYREACTIONINSTANCE_TITLE',
);

?>