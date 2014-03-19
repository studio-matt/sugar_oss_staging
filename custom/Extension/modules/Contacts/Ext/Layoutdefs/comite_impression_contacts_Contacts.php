<?php
 // created: 2012-08-01 18:02:09
$layout_defs["Contacts"]["subpanel_setup"]['comite_impression_contacts'] = array (
  'order' => 100,
  'module' => 'comite_Impression',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_COMITE_IMPRESSION_CONTACTS_FROM_COMITE_IMPRESSION_TITLE',
  'get_subpanel_data' => 'comite_impression_contacts',
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
