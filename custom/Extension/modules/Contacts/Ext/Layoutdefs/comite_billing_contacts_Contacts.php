<?php
 // created: 2012-07-03 21:05:29
$layout_defs["Contacts"]["subpanel_setup"]['comite_billing_contacts'] = array (
  'order' => 100,
  'module' => 'comite_Billing',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_COMITE_BILLING_CONTACTS_FROM_COMITE_BILLING_TITLE',
  'get_subpanel_data' => 'comite_billing_contacts',
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
