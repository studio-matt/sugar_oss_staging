<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-07-28 23:57:30
$dictionary["comite_ConditionInstance"]["fields"]["comite_conditioninstance_comite_familyhealthhistory"] = array (
  'name' => 'comite_conditioninstance_comite_familyhealthhistory',
  'type' => 'link',
  'relationship' => 'comite_conditioninstance_comite_familyhealthhistory',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_CONDITIONINSTANCE_COMITE_FAMILYHEALTHHISTORY_FROM_COMITE_FAMILYHEALTHHISTORY_TITLE',
  'id_name' => 'comite_con0c71history_ida',
);
$dictionary["comite_ConditionInstance"]["fields"]["comite_conditioninstance_comite_familyhealthhistory_name"] = array (
  'name' => 'comite_conditioninstance_comite_familyhealthhistory_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_CONDITIONINSTANCE_COMITE_FAMILYHEALTHHISTORY_FROM_COMITE_FAMILYHEALTHHISTORY_TITLE',
  'save' => true,
  'id_name' => 'comite_con0c71history_ida',
  'link' => 'comite_conditioninstance_comite_familyhealthhistory',
  'table' => 'comite_familyhealthhistory',
  'module' => 'comite_FamilyHealthHistory',
  'rname' => 'name',
);
$dictionary["comite_ConditionInstance"]["fields"]["comite_con0c71history_ida"] = array (
  'name' => 'comite_con0c71history_ida',
  'type' => 'link',
  'relationship' => 'comite_conditioninstance_comite_familyhealthhistory',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_CONDITIONINSTANCE_COMITE_FAMILYHEALTHHISTORY_FROM_COMITE_CONDITIONINSTANCE_TITLE',
);


// created: 2013-04-17 11:00:13
$dictionary["comite_ConditionInstance"]["fields"]["comite_conditioninstance_comite_relative"] = array (
  'name' => 'comite_conditioninstance_comite_relative',
  'type' => 'link',
  'relationship' => 'comite_conditioninstance_comite_relative',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_CONDITIONINSTANCE_COMITE_RELATIVE_FROM_COMITE_RELATIVE_TITLE',
  'id_name' => 'comite_conditioninstance_comite_relativecomite_relative_ida',
);
$dictionary["comite_ConditionInstance"]["fields"]["comite_conditioninstance_comite_relative_name"] = array (
  'name' => 'comite_conditioninstance_comite_relative_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_CONDITIONINSTANCE_COMITE_RELATIVE_FROM_COMITE_RELATIVE_TITLE',
  'save' => true,
  'id_name' => 'comite_conditioninstance_comite_relativecomite_relative_ida',
  'link' => 'comite_conditioninstance_comite_relative',
  'table' => 'comite_relative',
  'module' => 'comite_Relative',
  'rname' => 'name',
);
$dictionary["comite_ConditionInstance"]["fields"]["comite_conditioninstance_comite_relativecomite_relative_ida"] = array (
  'name' => 'comite_conditioninstance_comite_relativecomite_relative_ida',
  'type' => 'link',
  'relationship' => 'comite_conditioninstance_comite_relative',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_CONDITIONINSTANCE_COMITE_RELATIVE_FROM_COMITE_CONDITIONINSTANCE_TITLE',
);

?>