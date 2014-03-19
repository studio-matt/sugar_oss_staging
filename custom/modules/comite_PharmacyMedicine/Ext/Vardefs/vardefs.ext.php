<?php 
 //WARNING: The contents of this file are auto-generated


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


// created: 2012-07-30 15:55:59
$dictionary["comite_PharmacyMedicine"]["fields"]["comite_pharmacymedicine_comite_pharmacylog"] = array (
  'name' => 'comite_pharmacymedicine_comite_pharmacylog',
  'type' => 'link',
  'relationship' => 'comite_pharmacymedicine_comite_pharmacylog',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_PHARMACYMEDICINE_COMITE_PHARMACYLOG_FROM_COMITE_PHARMACYLOG_TITLE',
  'id_name' => 'comite_pharmacymedicine_comite_pharmacylogcomite_pharmacylog_ida',
);
$dictionary["comite_PharmacyMedicine"]["fields"]["comite_pharmacymedicine_comite_pharmacylog_name"] = array (
  'name' => 'comite_pharmacymedicine_comite_pharmacylog_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_PHARMACYMEDICINE_COMITE_PHARMACYLOG_FROM_COMITE_PHARMACYLOG_TITLE',
  'save' => true,
  'id_name' => 'comite_pharmacymedicine_comite_pharmacylogcomite_pharmacylog_ida',
  'link' => 'comite_pharmacymedicine_comite_pharmacylog',
  'table' => 'comite_pharmacylog',
  'module' => 'comite_PharmacyLog',
  'rname' => 'name',
);
$dictionary["comite_PharmacyMedicine"]["fields"]["comite_pharmacymedicine_comite_pharmacylogcomite_pharmacylog_ida"] = array (
  'name' => 'comite_pharmacymedicine_comite_pharmacylogcomite_pharmacylog_ida',
  'type' => 'link',
  'relationship' => 'comite_pharmacymedicine_comite_pharmacylog',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_PHARMACYMEDICINE_COMITE_PHARMACYLOG_FROM_COMITE_PHARMACYMEDICINE_TITLE',
);


// created: 2013-04-02 13:37:47
$dictionary["comite_PharmacyMedicine"]["fields"]["comite_pharmacymedicine_comite_medicationsupplement"] = array (
  'name' => 'comite_pharmacymedicine_comite_medicationsupplement',
  'type' => 'link',
  'relationship' => 'comite_pharmacymedicine_comite_medicationsupplement',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_PHARMACYMEDICINE_COMITE_MEDICATIONSUPPLEMENT_FROM_COMITE_MEDICATIONSUPPLEMENT_TITLE',
  'id_name' => 'comite_pha5360plement_ida',
);
$dictionary["comite_PharmacyMedicine"]["fields"]["comite_pharmacymedicine_comite_medicationsupplement_name"] = array (
  'name' => 'comite_pharmacymedicine_comite_medicationsupplement_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_PHARMACYMEDICINE_COMITE_MEDICATIONSUPPLEMENT_FROM_COMITE_MEDICATIONSUPPLEMENT_TITLE',
  'save' => true,
  'id_name' => 'comite_pha5360plement_ida',
  'link' => 'comite_pharmacymedicine_comite_medicationsupplement',
  'table' => 'comite_medicationsupplement',
  'module' => 'comite_MedicationSupplement',
  'rname' => 'name',
);
$dictionary["comite_PharmacyMedicine"]["fields"]["comite_pha5360plement_ida"] = array (
  'name' => 'comite_pha5360plement_ida',
  'type' => 'link',
  'relationship' => 'comite_pharmacymedicine_comite_medicationsupplement',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_PHARMACYMEDICINE_COMITE_MEDICATIONSUPPLEMENT_FROM_COMITE_PHARMACYMEDICINE_TITLE',
);

?>