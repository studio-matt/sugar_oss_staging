<?php
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
