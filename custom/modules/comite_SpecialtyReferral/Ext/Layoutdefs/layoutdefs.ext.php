<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2012-08-15 17:36:42
$layout_defs["comite_SpecialtyReferral"]["subpanel_setup"]['comite_specialtyreferral_meetings'] = array (
  'order' => 100,
  'module' => 'Meetings',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_COMITE_SPECIALTYREFERRAL_MEETINGS_FROM_MEETINGS_TITLE',
  'get_subpanel_data' => 'comite_specialtyreferral_meetings',
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

?>