<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-07-05 15:54:50
$dictionary["comite_ExposureInstance"]["fields"]["comite_exposureinstance_comite_personalhealthhistory"] = array (
  'name' => 'comite_exposureinstance_comite_personalhealthhistory',
  'type' => 'link',
  'relationship' => 'comite_exposureinstance_comite_personalhealthhistory',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_EXPOSUREINSTANCE_COMITE_PERSONALHEALTHHISTORY_FROM_COMITE_PERSONALHEALTHHISTORY_TITLE',
  'id_name' => 'comite_exp5c0ahistory_ida',
);
$dictionary["comite_ExposureInstance"]["fields"]["comite_exposureinstance_comite_personalhealthhistory_name"] = array (
  'name' => 'comite_exposureinstance_comite_personalhealthhistory_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_EXPOSUREINSTANCE_COMITE_PERSONALHEALTHHISTORY_FROM_COMITE_PERSONALHEALTHHISTORY_TITLE',
  'save' => true,
  'id_name' => 'comite_exp5c0ahistory_ida',
  'link' => 'comite_exposureinstance_comite_personalhealthhistory',
  'table' => 'comite_personalhealthhistory',
  'module' => 'comite_PersonalHealthHistory',
  'rname' => 'name',
);
$dictionary["comite_ExposureInstance"]["fields"]["comite_exp5c0ahistory_ida"] = array (
  'name' => 'comite_exp5c0ahistory_ida',
  'type' => 'link',
  'relationship' => 'comite_exposureinstance_comite_personalhealthhistory',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_EXPOSUREINSTANCE_COMITE_PERSONALHEALTHHISTORY_FROM_COMITE_EXPOSUREINSTANCE_TITLE',
);

?>