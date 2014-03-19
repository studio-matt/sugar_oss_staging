<?php
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
