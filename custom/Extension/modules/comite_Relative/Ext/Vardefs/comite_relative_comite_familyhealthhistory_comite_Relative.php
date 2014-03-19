<?php
// created: 2012-07-28 23:57:49
$dictionary["comite_Relative"]["fields"]["comite_relative_comite_familyhealthhistory"] = array (
  'name' => 'comite_relative_comite_familyhealthhistory',
  'type' => 'link',
  'relationship' => 'comite_relative_comite_familyhealthhistory',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_RELATIVE_COMITE_FAMILYHEALTHHISTORY_FROM_COMITE_FAMILYHEALTHHISTORY_TITLE',
  'id_name' => 'comite_rela366history_ida',
);
$dictionary["comite_Relative"]["fields"]["comite_relative_comite_familyhealthhistory_name"] = array (
  'name' => 'comite_relative_comite_familyhealthhistory_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_RELATIVE_COMITE_FAMILYHEALTHHISTORY_FROM_COMITE_FAMILYHEALTHHISTORY_TITLE',
  'save' => true,
  'id_name' => 'comite_rela366history_ida',
  'link' => 'comite_relative_comite_familyhealthhistory',
  'table' => 'comite_familyhealthhistory',
  'module' => 'comite_FamilyHealthHistory',
  'rname' => 'name',
);
$dictionary["comite_Relative"]["fields"]["comite_rela366history_ida"] = array (
  'name' => 'comite_rela366history_ida',
  'type' => 'link',
  'relationship' => 'comite_relative_comite_familyhealthhistory',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_RELATIVE_COMITE_FAMILYHEALTHHISTORY_FROM_COMITE_RELATIVE_TITLE',
);
