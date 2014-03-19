<?php
// created: 2012-07-30 14:50:14
$dictionary["comite_PharmacyMedicine"]["fields"]["comite_pharmacymedicine_comite_pharmacy"] = array (
  'name' => 'comite_pharmacymedicine_comite_pharmacy',
  'type' => 'link',
  'relationship' => 'comite_pharmacymedicine_comite_pharmacy',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_PHARMACYMEDICINE_COMITE_PHARMACY_FROM_COMITE_PHARMACY_TITLE',
  'id_name' => 'comite_pharmacymedicine_comite_pharmacycomite_pharmacy_ida',
);
$dictionary["comite_PharmacyMedicine"]["fields"]["comite_pharmacymedicine_comite_pharmacy_name"] = array (
  'name' => 'comite_pharmacymedicine_comite_pharmacy_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_PHARMACYMEDICINE_COMITE_PHARMACY_FROM_COMITE_PHARMACY_TITLE',
  'save' => true,
  'id_name' => 'comite_pharmacymedicine_comite_pharmacycomite_pharmacy_ida',
  'link' => 'comite_pharmacymedicine_comite_pharmacy',
  'table' => 'comite_pharmacy',
  'module' => 'comite_Pharmacy',
  'rname' => 'name',
);
$dictionary["comite_PharmacyMedicine"]["fields"]["comite_pharmacymedicine_comite_pharmacycomite_pharmacy_ida"] = array (
  'name' => 'comite_pharmacymedicine_comite_pharmacycomite_pharmacy_ida',
  'type' => 'link',
  'relationship' => 'comite_pharmacymedicine_comite_pharmacy',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_PHARMACYMEDICINE_COMITE_PHARMACY_FROM_COMITE_PHARMACYMEDICINE_TITLE',
);
