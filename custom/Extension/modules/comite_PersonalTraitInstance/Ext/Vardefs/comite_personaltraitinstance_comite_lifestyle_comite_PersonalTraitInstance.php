<?php
// created: 2012-07-13 11:30:13
$dictionary["comite_PersonalTraitInstance"]["fields"]["comite_personaltraitinstance_comite_lifestyle"] = array (
  'name' => 'comite_personaltraitinstance_comite_lifestyle',
  'type' => 'link',
  'relationship' => 'comite_personaltraitinstance_comite_lifestyle',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_PERSONALTRAITINSTANCE_COMITE_LIFESTYLE_FROM_COMITE_LIFESTYLE_TITLE',
  'id_name' => 'comite_perd0f2festyle_ida',
);
$dictionary["comite_PersonalTraitInstance"]["fields"]["comite_personaltraitinstance_comite_lifestyle_name"] = array (
  'name' => 'comite_personaltraitinstance_comite_lifestyle_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_PERSONALTRAITINSTANCE_COMITE_LIFESTYLE_FROM_COMITE_LIFESTYLE_TITLE',
  'save' => true,
  'id_name' => 'comite_perd0f2festyle_ida',
  'link' => 'comite_personaltraitinstance_comite_lifestyle',
  'table' => 'comite_lifestyle',
  'module' => 'comite_LifeStyle',
  'rname' => 'name',
);
$dictionary["comite_PersonalTraitInstance"]["fields"]["comite_perd0f2festyle_ida"] = array (
  'name' => 'comite_perd0f2festyle_ida',
  'type' => 'link',
  'relationship' => 'comite_personaltraitinstance_comite_lifestyle',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_PERSONALTRAITINSTANCE_COMITE_LIFESTYLE_FROM_COMITE_PERSONALTRAITINSTANCE_TITLE',
);
