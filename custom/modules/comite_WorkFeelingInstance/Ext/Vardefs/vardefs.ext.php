<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-07-13 11:30:16
$dictionary["comite_WorkFeelingInstance"]["fields"]["comite_workfeelinginstance_comite_lifestyle"] = array (
  'name' => 'comite_workfeelinginstance_comite_lifestyle',
  'type' => 'link',
  'relationship' => 'comite_workfeelinginstance_comite_lifestyle',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_WORKFEELINGINSTANCE_COMITE_LIFESTYLE_FROM_COMITE_LIFESTYLE_TITLE',
  'id_name' => 'comite_workfeelinginstance_comite_lifestylecomite_lifestyle_ida',
);
$dictionary["comite_WorkFeelingInstance"]["fields"]["comite_workfeelinginstance_comite_lifestyle_name"] = array (
  'name' => 'comite_workfeelinginstance_comite_lifestyle_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_WORKFEELINGINSTANCE_COMITE_LIFESTYLE_FROM_COMITE_LIFESTYLE_TITLE',
  'save' => true,
  'id_name' => 'comite_workfeelinginstance_comite_lifestylecomite_lifestyle_ida',
  'link' => 'comite_workfeelinginstance_comite_lifestyle',
  'table' => 'comite_lifestyle',
  'module' => 'comite_LifeStyle',
  'rname' => 'name',
);
$dictionary["comite_WorkFeelingInstance"]["fields"]["comite_workfeelinginstance_comite_lifestylecomite_lifestyle_ida"] = array (
  'name' => 'comite_workfeelinginstance_comite_lifestylecomite_lifestyle_ida',
  'type' => 'link',
  'relationship' => 'comite_workfeelinginstance_comite_lifestyle',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_WORKFEELINGINSTANCE_COMITE_LIFESTYLE_FROM_COMITE_WORKFEELINGINSTANCE_TITLE',
);

?>