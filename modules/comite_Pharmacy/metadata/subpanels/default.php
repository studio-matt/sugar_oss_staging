<?php
$module_name='comite_Pharmacy';
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
      'popup_module' => 'comite_Pharmacy',
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
    'address' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_ADDRESS',
      'width' => '10%',
      'default' => true,
    ),
    'telephone' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_TELEPHONE',
      'width' => '10%',
      'default' => true,
    ),
    'description' => 
    array (
      'type' => 'text',
      'studio' => 'visible',
      'vname' => 'LBL_DESCRIPTION',
      'sortable' => false,
      'width' => '10%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'widget_class' => 'SubPanelEditButton',
      'module' => 'comite_Pharmacy',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'comite_Pharmacy',
      'width' => '5%',
      'default' => true,
    ),
  ),
);