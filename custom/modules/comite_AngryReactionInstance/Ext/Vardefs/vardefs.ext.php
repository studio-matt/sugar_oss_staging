<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-07-13 11:30:26
$dictionary["comite_AngryReactionInstance"]["fields"]["comite_angryreactioninstance_comite_lifestyle"] = array (
  'name' => 'comite_angryreactioninstance_comite_lifestyle',
  'type' => 'link',
  'relationship' => 'comite_angryreactioninstance_comite_lifestyle',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_ANGRYREACTIONINSTANCE_COMITE_LIFESTYLE_FROM_COMITE_LIFESTYLE_TITLE',
  'id_name' => 'comite_ang25d7festyle_ida',
);
$dictionary["comite_AngryReactionInstance"]["fields"]["comite_angryreactioninstance_comite_lifestyle_name"] = array (
  'name' => 'comite_angryreactioninstance_comite_lifestyle_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_ANGRYREACTIONINSTANCE_COMITE_LIFESTYLE_FROM_COMITE_LIFESTYLE_TITLE',
  'save' => true,
  'id_name' => 'comite_ang25d7festyle_ida',
  'link' => 'comite_angryreactioninstance_comite_lifestyle',
  'table' => 'comite_lifestyle',
  'module' => 'comite_LifeStyle',
  'rname' => 'name',
);
$dictionary["comite_AngryReactionInstance"]["fields"]["comite_ang25d7festyle_ida"] = array (
  'name' => 'comite_ang25d7festyle_ida',
  'type' => 'link',
  'relationship' => 'comite_angryreactioninstance_comite_lifestyle',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_ANGRYREACTIONINSTANCE_COMITE_LIFESTYLE_FROM_COMITE_ANGRYREACTIONINSTANCE_TITLE',
);

?>