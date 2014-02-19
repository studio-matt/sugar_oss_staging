<?php
$module_name='comite_TMFollowUpCall';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'comite_TMFollowUpCall',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '45%',
      'default' => true,
    ),
    'tm_followup_notes' => 
    array (
      'type' => 'text',
      'studio' => 'visible',
      'vname' => 'LBL_TM_FOLLOWUP_NOTES',
      'sortable' => false,
      'width' => '10%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'widget_class' => 'SubPanelEditButton',
      'module' => 'comite_TMFollowUpCall',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'comite_TMFollowUpCall',
      'width' => '5%',
      'default' => true,
    ),
  ),
);