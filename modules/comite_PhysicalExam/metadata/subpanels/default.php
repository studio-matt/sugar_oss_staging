<?php
$module_name='comite_PhysicalExam';
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
      'popup_module' => 'comite_PhysicalExam',
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
    'pulse' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_PULSE',
      'width' => '10%',
      'default' => true,
    ),
    'lower_percentage' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_LOWER_PERCENTAGE',
      'width' => '10%',
      'default' => true,
    ),
    'weight' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_WEIGHT',
      'width' => '10%',
      'default' => true,
    ),
    'fat_mass' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_FAT_MASS',
      'width' => '10%',
      'default' => true,
    ),
    'upper_percentage' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_UPPER_PERCENTAGE',
      'width' => '10%',
      'default' => true,
    ),
    'appearance' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_APPEARANCE',
      'width' => '10%',
      'default' => true,
    ),
    'height' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_HEIGHT',
      'width' => '10%',
      'default' => true,
    ),
    'blood_pressure' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_BLOOD_PRESSURE',
      'width' => '10%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'widget_class' => 'SubPanelEditButton',
      'module' => 'comite_PhysicalExam',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'comite_PhysicalExam',
      'width' => '5%',
      'default' => true,
    ),
  ),
);