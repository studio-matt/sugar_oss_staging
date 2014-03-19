<?php
// created: 2012-07-13 11:30:32
$dictionary["comite_SleepConditionInstance"]["fields"]["comite_sleepconditioninstance_comite_lifestyle"] = array (
  'name' => 'comite_sleepconditioninstance_comite_lifestyle',
  'type' => 'link',
  'relationship' => 'comite_sleepconditioninstance_comite_lifestyle',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_SLEEPCONDITIONINSTANCE_COMITE_LIFESTYLE_FROM_COMITE_LIFESTYLE_TITLE',
  'id_name' => 'comite_slee900festyle_ida',
);
$dictionary["comite_SleepConditionInstance"]["fields"]["comite_sleepconditioninstance_comite_lifestyle_name"] = array (
  'name' => 'comite_sleepconditioninstance_comite_lifestyle_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_SLEEPCONDITIONINSTANCE_COMITE_LIFESTYLE_FROM_COMITE_LIFESTYLE_TITLE',
  'save' => true,
  'id_name' => 'comite_slee900festyle_ida',
  'link' => 'comite_sleepconditioninstance_comite_lifestyle',
  'table' => 'comite_lifestyle',
  'module' => 'comite_LifeStyle',
  'rname' => 'name',
);
$dictionary["comite_SleepConditionInstance"]["fields"]["comite_slee900festyle_ida"] = array (
  'name' => 'comite_slee900festyle_ida',
  'type' => 'link',
  'relationship' => 'comite_sleepconditioninstance_comite_lifestyle',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_SLEEPCONDITIONINSTANCE_COMITE_LIFESTYLE_FROM_COMITE_SLEEPCONDITIONINSTANCE_TITLE',
);
