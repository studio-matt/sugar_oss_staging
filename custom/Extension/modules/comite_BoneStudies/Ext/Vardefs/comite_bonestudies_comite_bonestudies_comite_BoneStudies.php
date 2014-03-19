<?php
// created: 2013-04-23 17:32:17
$dictionary["comite_BoneStudies"]["fields"]["comite_bonestudies_comite_bonestudies"] = array (
  'name' => 'comite_bonestudies_comite_bonestudies',
  'type' => 'link',
  'relationship' => 'comite_bonestudies_comite_bonestudies',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_BONESTUDIES_COMITE_BONESTUDIES_FROM_COMITE_BONESTUDIES_L_TITLE',
  'id_name' => 'comite_bonestudies_comite_bonestudiescomite_bonestudies_ida',
);
$dictionary["comite_BoneStudies"]["fields"]["comite_bonestudies_comite_bonestudies_name"] = array (
  'name' => 'comite_bonestudies_comite_bonestudies_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_BONESTUDIES_COMITE_BONESTUDIES_FROM_COMITE_BONESTUDIES_L_TITLE',
  'save' => true,
  'id_name' => 'comite_bonestudies_comite_bonestudiescomite_bonestudies_ida',
  'link' => 'comite_bonestudies_comite_bonestudies',
  'table' => 'comite_bonestudies',
  'module' => 'comite_BoneStudies',
  'rname' => 'document_name',
);
$dictionary["comite_BoneStudies"]["fields"]["comite_bonestudies_comite_bonestudiescomite_bonestudies_ida"] = array (
  'name' => 'comite_bonestudies_comite_bonestudiescomite_bonestudies_ida',
  'type' => 'link',
  'relationship' => 'comite_bonestudies_comite_bonestudies',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_BONESTUDIES_COMITE_BONESTUDIES_FROM_COMITE_BONESTUDIES_R_TITLE',
);
