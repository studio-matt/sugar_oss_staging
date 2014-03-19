<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2013-04-02 13:37:46
$layout_defs["comite_MedicationSupplement"]["subpanel_setup"]['comite_pharmacymedicine_comite_medicationsupplement'] = array (
  'order' => 100,
  'module' => 'comite_PharmacyMedicine',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_COMITE_PHARMACYMEDICINE_COMITE_MEDICATIONSUPPLEMENT_FROM_COMITE_PHARMACYMEDICINE_TITLE',
  'get_subpanel_data' => 'comite_pharmacymedicine_comite_medicationsupplement',
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


 // created: 2012-08-30 16:32:12
$layout_defs["comite_MedicationSupplement"]["subpanel_setup"]['comite_medsuppinstance_comite_medsupp'] = array (
  'order' => 100,
  'module' => 'comite_MedicationSupplementInstance',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_COMITE_MEDSUPPINSTANCE_COMITE_MEDSUPP_FROM_COMITE_MEDICATIONSUPPLEMENTINSTANCE_TITLE',
  'get_subpanel_data' => 'comite_medsuppinstance_comite_medsupp',
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