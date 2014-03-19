<?php
 // created: 2012-07-27 15:25:57
$layout_defs["comite_PersonalHealthHistory"]["subpanel_setup"]['comite_reviewoverallhealth_comite_personalhealthhistory'] = array (
  'order' => 100,
  'module' => 'comite_ReviewOverallHealth',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_COMITE_REVIEWOVERALLHEALTH_COMITE_PERSONALHEALTHHISTORY_FROM_COMITE_REVIEWOVERALLHEALTH_TITLE',
  'get_subpanel_data' => 'comite_reviewoverallhealth_comite_personalhealthhistory',
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
