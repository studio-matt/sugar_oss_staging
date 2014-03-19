<?php
 // created: 2012-07-13 11:30:32
$layout_defs["comite_LifeStyle"]["subpanel_setup"]['comite_sleepconditioninstance_comite_lifestyle'] = array (
  'order' => 100,
  'module' => 'comite_SleepConditionInstance',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_COMITE_SLEEPCONDITIONINSTANCE_COMITE_LIFESTYLE_FROM_COMITE_SLEEPCONDITIONINSTANCE_TITLE',
  'get_subpanel_data' => 'comite_sleepconditioninstance_comite_lifestyle',
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
