<?php
 // created: 2012-07-30 15:56:10
$layout_defs["comite_PharmacyLog"]["subpanel_setup"]['comite_pharmacy_comite_pharmacylog'] = array (
  'order' => 100,
  'module' => 'comite_Pharmacy',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_COMITE_PHARMACY_COMITE_PHARMACYLOG_FROM_COMITE_PHARMACY_TITLE',
  'get_subpanel_data' => 'comite_pharmacy_comite_pharmacylog',
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
