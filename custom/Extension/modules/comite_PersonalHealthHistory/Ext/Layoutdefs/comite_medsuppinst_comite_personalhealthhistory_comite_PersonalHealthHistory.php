<?php
 // created: 2012-08-30 16:32:12
$layout_defs["comite_PersonalHealthHistory"]["subpanel_setup"]['comite_medsuppinst_comite_personalhealthhistory'] = array (
  'order' => 100,
  'module' => 'comite_MedicationSupplementInstance',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_COMITE_MEDSUPPINST_COMITE_PERSONALHEALTHHISTORY_FROM_COMITE_MEDICATIONSUPPLEMENTINSTANCE_TITLE',
  'get_subpanel_data' => 'comite_medsuppinst_comite_personalhealthhistory',
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
