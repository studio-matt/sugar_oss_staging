<?php
// created: 2012-08-30 16:32:13
$dictionary["comite_MedicationSupplementInstance"]["fields"]["comite_medsuppinst_comite_personalhealthhistory"] = array (
  'name' => 'comite_medsuppinst_comite_personalhealthhistory',
  'type' => 'link',
  'relationship' => 'comite_medsuppinst_comite_personalhealthhistory',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_MEDSUPPINST_COMITE_PERSONALHEALTHHISTORY_FROM_COMITE_PERSONALHEALTHHISTORY_TITLE',
  'id_name' => 'comite_med5d7ehistory_ida',
);
$dictionary["comite_MedicationSupplementInstance"]["fields"]["comite_medsuppinst_comite_personalhealthhistory_name"] = array (
  'name' => 'comite_medsuppinst_comite_personalhealthhistory_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_MEDSUPPINST_COMITE_PERSONALHEALTHHISTORY_FROM_COMITE_PERSONALHEALTHHISTORY_TITLE',
  'save' => true,
  'id_name' => 'comite_med5d7ehistory_ida',
  'link' => 'comite_medsuppinst_comite_personalhealthhistory',
  'table' => 'comite_personalhealthhistory',
  'module' => 'comite_PersonalHealthHistory',
  'rname' => 'name',
);
$dictionary["comite_MedicationSupplementInstance"]["fields"]["comite_med5d7ehistory_ida"] = array (
  'name' => 'comite_med5d7ehistory_ida',
  'type' => 'link',
  'relationship' => 'comite_medsuppinst_comite_personalhealthhistory',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_MEDSUPPINST_COMITE_PERSONALHEALTHHISTORY_FROM_COMITE_MEDICATIONSUPPLEMENTINSTANCE_TITLE',
);
