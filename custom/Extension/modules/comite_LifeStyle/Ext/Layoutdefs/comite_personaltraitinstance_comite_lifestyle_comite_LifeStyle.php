<?php
 // created: 2012-07-13 11:30:13
$layout_defs["comite_LifeStyle"]["subpanel_setup"]['comite_personaltraitinstance_comite_lifestyle'] = array (
  'order' => 100,
  'module' => 'comite_PersonalTraitInstance',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_COMITE_PERSONALTRAITINSTANCE_COMITE_LIFESTYLE_FROM_COMITE_PERSONALTRAITINSTANCE_TITLE',
  'get_subpanel_data' => 'comite_personaltraitinstance_comite_lifestyle',
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
