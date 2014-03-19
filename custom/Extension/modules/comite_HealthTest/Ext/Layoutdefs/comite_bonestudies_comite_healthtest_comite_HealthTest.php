<?php
 // created: 2012-07-31 19:20:59
$layout_defs["comite_HealthTest"]["subpanel_setup"]['comite_bonestudies_comite_healthtest'] = array (
  'order' => 100,
  'module' => 'comite_BoneStudies',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_COMITE_BONESTUDIES_COMITE_HEALTHTEST_FROM_COMITE_BONESTUDIES_TITLE',
  'get_subpanel_data' => 'comite_bonestudies_comite_healthtest',
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
