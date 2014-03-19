<?php
 // created: 2012-08-09 16:42:16
$layout_defs["Contacts"]["subpanel_setup"]['contacts_meetings'] = array (
  'order' => 100,
  'module' => 'Meetings',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CONTACTS_MEETINGS_FROM_MEETINGS_TITLE',
  'get_subpanel_data' => 'contacts_meetings',
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
