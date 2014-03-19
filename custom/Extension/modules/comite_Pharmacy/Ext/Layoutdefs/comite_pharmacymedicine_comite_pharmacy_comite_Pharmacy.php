<?php
 // created: 2012-07-30 14:50:14
$layout_defs["comite_Pharmacy"]["subpanel_setup"]['comite_pharmacymedicine_comite_pharmacy'] = array (
  'order' => 100,
  'module' => 'comite_PharmacyMedicine',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_COMITE_PHARMACYMEDICINE_COMITE_PHARMACY_FROM_COMITE_PHARMACYMEDICINE_TITLE',
  'get_subpanel_data' => 'comite_pharmacymedicine_comite_pharmacy',
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
