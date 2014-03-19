<?php
 // created: 2013-04-16 14:26:45
$layout_defs["comite_PharmacyLog"]["subpanel_setup"]['comite_pharmacymedicine_comite_pharmacylog'] = array (
  'order' => 100,
  'module' => 'comite_PharmacyMedicine',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_COMITE_PHARMACYMEDICINE_COMITE_PHARMACYLOG_FROM_COMITE_PHARMACYMEDICINE_TITLE',
  'get_subpanel_data' => 'comite_pharmacymedicine_comite_pharmacylog',
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
