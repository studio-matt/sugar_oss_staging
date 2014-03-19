<?php
 // created: 2012-07-06 15:23:28
$layout_defs["comite_ConditionInstance"]["subpanel_setup"]['comite_conditioninstance_comite_relative'] = array (
  'order' => 100,
  'module' => 'comite_Relative',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_COMITE_CONDITIONINSTANCE_COMITE_RELATIVE_FROM_COMITE_RELATIVE_TITLE',
  'get_subpanel_data' => 'comite_conditioninstance_comite_relative',
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
