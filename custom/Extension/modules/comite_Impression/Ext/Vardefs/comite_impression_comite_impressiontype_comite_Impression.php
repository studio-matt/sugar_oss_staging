<?php
// created: 2012-08-01 18:02:10
$dictionary["comite_Impression"]["fields"]["comite_impression_comite_impressiontype"] = array (
  'name' => 'comite_impression_comite_impressiontype',
  'type' => 'link',
  'relationship' => 'comite_impression_comite_impressiontype',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_IMPRESSION_COMITE_IMPRESSIONTYPE_FROM_COMITE_IMPRESSIONTYPE_TITLE',
  'id_name' => 'comite_impression_comite_impressiontypecomite_impressiontype_ida',
);
$dictionary["comite_Impression"]["fields"]["comite_impression_comite_impressiontype_name"] = array (
  'name' => 'comite_impression_comite_impressiontype_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_IMPRESSION_COMITE_IMPRESSIONTYPE_FROM_COMITE_IMPRESSIONTYPE_TITLE',
  'save' => true,
  'id_name' => 'comite_impression_comite_impressiontypecomite_impressiontype_ida',
  'link' => 'comite_impression_comite_impressiontype',
  'table' => 'comite_impressiontype',
  'module' => 'comite_ImpressionType',
  'rname' => 'name',
);
$dictionary["comite_Impression"]["fields"]["comite_impression_comite_impressiontypecomite_impressiontype_ida"] = array (
  'name' => 'comite_impression_comite_impressiontypecomite_impressiontype_ida',
  'type' => 'link',
  'relationship' => 'comite_impression_comite_impressiontype',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_IMPRESSION_COMITE_IMPRESSIONTYPE_FROM_COMITE_IMPRESSION_TITLE',
);
