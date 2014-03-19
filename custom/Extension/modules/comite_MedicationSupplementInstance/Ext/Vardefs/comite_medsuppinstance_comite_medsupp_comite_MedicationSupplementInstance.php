<?php
// created: 2012-08-30 16:32:12
$dictionary["comite_MedicationSupplementInstance"]["fields"]["comite_medsuppinstance_comite_medsupp"] = array (
  'name' => 'comite_medsuppinstance_comite_medsupp',
  'type' => 'link',
  'relationship' => 'comite_medsuppinstance_comite_medsupp',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_MEDSUPPINSTANCE_COMITE_MEDSUPP_FROM_COMITE_MEDICATIONSUPPLEMENT_TITLE',
  'id_name' => 'comite_med8f3bplement_ida',
);
$dictionary["comite_MedicationSupplementInstance"]["fields"]["comite_medsuppinstance_comite_medsupp_name"] = array (
  'name' => 'comite_medsuppinstance_comite_medsupp_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_MEDSUPPINSTANCE_COMITE_MEDSUPP_FROM_COMITE_MEDICATIONSUPPLEMENT_TITLE',
  'save' => true,
  'id_name' => 'comite_med8f3bplement_ida',
  'link' => 'comite_medsuppinstance_comite_medsupp',
  'table' => 'comite_medicationsupplement',
  'module' => 'comite_MedicationSupplement',
  'rname' => 'name',
);
$dictionary["comite_MedicationSupplementInstance"]["fields"]["comite_med8f3bplement_ida"] = array (
  'name' => 'comite_med8f3bplement_ida',
  'type' => 'link',
  'relationship' => 'comite_medsuppinstance_comite_medsupp',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_MEDSUPPINSTANCE_COMITE_MEDSUPP_FROM_COMITE_MEDICATIONSUPPLEMENTINSTANCE_TITLE',
);
