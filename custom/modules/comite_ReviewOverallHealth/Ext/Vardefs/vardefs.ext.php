<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-07-27 15:25:58
$dictionary["comite_ReviewOverallHealth"]["fields"]["comite_reviewoverallhealth_comite_personalhealthhistory"] = array (
  'name' => 'comite_reviewoverallhealth_comite_personalhealthhistory',
  'type' => 'link',
  'relationship' => 'comite_reviewoverallhealth_comite_personalhealthhistory',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_REVIEWOVERALLHEALTH_COMITE_PERSONALHEALTHHISTORY_FROM_COMITE_PERSONALHEALTHHISTORY_TITLE',
  'id_name' => 'comite_rev17cehistory_ida',
);
$dictionary["comite_ReviewOverallHealth"]["fields"]["comite_reviewoverallhealth_comite_personalhealthhistory_name"] = array (
  'name' => 'comite_reviewoverallhealth_comite_personalhealthhistory_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_REVIEWOVERALLHEALTH_COMITE_PERSONALHEALTHHISTORY_FROM_COMITE_PERSONALHEALTHHISTORY_TITLE',
  'save' => true,
  'id_name' => 'comite_rev17cehistory_ida',
  'link' => 'comite_reviewoverallhealth_comite_personalhealthhistory',
  'table' => 'comite_personalhealthhistory',
  'module' => 'comite_PersonalHealthHistory',
  'rname' => 'name',
);
$dictionary["comite_ReviewOverallHealth"]["fields"]["comite_rev17cehistory_ida"] = array (
  'name' => 'comite_rev17cehistory_ida',
  'type' => 'link',
  'relationship' => 'comite_reviewoverallhealth_comite_personalhealthhistory',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_REVIEWOVERALLHEALTH_COMITE_PERSONALHEALTHHISTORY_FROM_COMITE_REVIEWOVERALLHEALTH_TITLE',
);

?>