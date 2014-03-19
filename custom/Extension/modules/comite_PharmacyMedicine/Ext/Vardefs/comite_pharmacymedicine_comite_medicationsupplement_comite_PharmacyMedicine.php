<?php
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
