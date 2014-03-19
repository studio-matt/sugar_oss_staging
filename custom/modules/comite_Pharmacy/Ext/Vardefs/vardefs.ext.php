<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-07-30 14:50:14
$dictionary["comite_Pharmacy"]["fields"]["comite_pharmacymedicine_comite_pharmacy"] = array (
  'name' => 'comite_pharmacymedicine_comite_pharmacy',
  'type' => 'link',
  'relationship' => 'comite_pharmacymedicine_comite_pharmacy',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_COMITE_PHARMACYMEDICINE_COMITE_PHARMACY_FROM_COMITE_PHARMACYMEDICINE_TITLE',
);


// created: 2012-07-30 15:56:10
$dictionary["comite_Pharmacy"]["fields"]["comite_pharmacy_comite_pharmacylog"] = array (
  'name' => 'comite_pharmacy_comite_pharmacylog',
  'type' => 'link',
  'relationship' => 'comite_pharmacy_comite_pharmacylog',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_PHARMACY_COMITE_PHARMACYLOG_FROM_COMITE_PHARMACYLOG_TITLE',
  'id_name' => 'comite_pharmacy_comite_pharmacylogcomite_pharmacylog_ida',
);
$dictionary["comite_Pharmacy"]["fields"]["comite_pharmacy_comite_pharmacylog_name"] = array (
  'name' => 'comite_pharmacy_comite_pharmacylog_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_PHARMACY_COMITE_PHARMACYLOG_FROM_COMITE_PHARMACYLOG_TITLE',
  'save' => true,
  'id_name' => 'comite_pharmacy_comite_pharmacylogcomite_pharmacylog_ida',
  'link' => 'comite_pharmacy_comite_pharmacylog',
  'table' => 'comite_pharmacylog',
  'module' => 'comite_PharmacyLog',
  'rname' => 'name',
);
$dictionary["comite_Pharmacy"]["fields"]["comite_pharmacy_comite_pharmacylogcomite_pharmacylog_ida"] = array (
  'name' => 'comite_pharmacy_comite_pharmacylogcomite_pharmacylog_ida',
  'type' => 'link',
  'relationship' => 'comite_pharmacy_comite_pharmacylog',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_PHARMACY_COMITE_PHARMACYLOG_FROM_COMITE_PHARMACY_TITLE',
);

?>