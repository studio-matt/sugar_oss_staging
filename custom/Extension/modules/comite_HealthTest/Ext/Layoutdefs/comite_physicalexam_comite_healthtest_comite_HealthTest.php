<?php
 // created: 2012-07-30 18:34:22
$layout_defs["comite_HealthTest"]["subpanel_setup"]['comite_physicalexam_comite_healthtest'] = array (
  'order' => 100,
  'module' => 'comite_PhysicalExam',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_COMITE_PHYSICALEXAM_COMITE_HEALTHTEST_FROM_COMITE_PHYSICALEXAM_TITLE',
  'get_subpanel_data' => 'comite_physicalexam_comite_healthtest',
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
