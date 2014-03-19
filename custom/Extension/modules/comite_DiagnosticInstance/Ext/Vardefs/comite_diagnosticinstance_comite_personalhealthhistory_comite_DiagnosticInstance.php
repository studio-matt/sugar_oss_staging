<?php
// created: 2012-07-05 17:53:55
$dictionary["comite_DiagnosticInstance"]["fields"]["comite_diagnosticinstance_comite_personalhealthhistory"] = array (
  'name' => 'comite_diagnosticinstance_comite_personalhealthhistory',
  'type' => 'link',
  'relationship' => 'comite_diagnosticinstance_comite_personalhealthhistory',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_DIAGNOSTICINSTANCE_COMITE_PERSONALHEALTHHISTORY_FROM_COMITE_PERSONALHEALTHHISTORY_TITLE',
  'id_name' => 'comite_dia9085history_ida',
);
$dictionary["comite_DiagnosticInstance"]["fields"]["comite_diagnosticinstance_comite_personalhealthhistory_name"] = array (
  'name' => 'comite_diagnosticinstance_comite_personalhealthhistory_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_DIAGNOSTICINSTANCE_COMITE_PERSONALHEALTHHISTORY_FROM_COMITE_PERSONALHEALTHHISTORY_TITLE',
  'save' => true,
  'id_name' => 'comite_dia9085history_ida',
  'link' => 'comite_diagnosticinstance_comite_personalhealthhistory',
  'table' => 'comite_personalhealthhistory',
  'module' => 'comite_PersonalHealthHistory',
  'rname' => 'name',
);
$dictionary["comite_DiagnosticInstance"]["fields"]["comite_dia9085history_ida"] = array (
  'name' => 'comite_dia9085history_ida',
  'type' => 'link',
  'relationship' => 'comite_diagnosticinstance_comite_personalhealthhistory',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_DIAGNOSTICINSTANCE_COMITE_PERSONALHEALTHHISTORY_FROM_COMITE_DIAGNOSTICINSTANCE_TITLE',
);
