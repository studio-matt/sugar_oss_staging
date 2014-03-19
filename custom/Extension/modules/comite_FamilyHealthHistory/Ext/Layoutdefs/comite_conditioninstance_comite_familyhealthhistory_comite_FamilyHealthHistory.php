<?php
 // created: 2012-07-28 23:57:29
$layout_defs["comite_FamilyHealthHistory"]["subpanel_setup"]['comite_conditioninstance_comite_familyhealthhistory'] = array (
  'order' => 100,
  'module' => 'comite_ConditionInstance',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_COMITE_CONDITIONINSTANCE_COMITE_FAMILYHEALTHHISTORY_FROM_COMITE_CONDITIONINSTANCE_TITLE',
  'get_subpanel_data' => 'comite_conditioninstance_comite_familyhealthhistory',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
