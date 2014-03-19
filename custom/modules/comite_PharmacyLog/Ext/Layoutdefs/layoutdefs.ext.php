<?php 
 //WARNING: The contents of this file are auto-generated


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


//auto-generated file DO NOT EDIT
$layout_defs['comite_PharmacyLog']['subpanel_setup']['comite_pharmacymedicine_comite_pharmacylog']['override_subpanel_name'] = 'comite_PharmacyLog_subpanel_comite_pharmacymedicine_comite_pharmacylog';



$data = array(
    'sort_order' => 'desc',
    'sort_by' => 'prescription_date',
);


$layout_defs["comite_PharmacyLog"]["subpanel_setup"]['comite_pharmacymedicine_comite_pharmacylog'] =
array_merge($layout_defs["comite_PharmacyLog"]["subpanel_setup"]['comite_pharmacymedicine_comite_pharmacylog'], $data);
?>