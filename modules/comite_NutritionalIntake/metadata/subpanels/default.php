<?php
$module_name='comite_NutritionalIntake';
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
      'popup_module' => 'comite_NutritionalIntake',
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
    'time' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_TIME',
      'width' => '10%',
      'default' => true,
    ),
    'food' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_FOOD',
      'width' => '10%',
      'default' => true,
    ),
    'portion_size' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_PORTION_SIZE',
      'width' => '10%',
      'default' => true,
    ),
    'day_type' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_DAY_TYPE',
      'width' => '10%',
    ),
    'edit_button' => 
    array (
      'widget_class' => 'SubPanelEditButton',
      'module' => 'comite_NutritionalIntake',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'comite_NutritionalIntake',
      'width' => '5%',
      'default' => true,
    ),
  ),
);