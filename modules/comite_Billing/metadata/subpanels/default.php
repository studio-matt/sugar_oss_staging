<?php
$module_name='comite_Billing';
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
      'popup_module' => 'comite_Billing',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'rank' => 
    array (
      'type' => 'int',
      'default' => true,
      'vname' => 'LBL_RANK',
      'width' => '10%',
    ),
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '10%',
      'default' => true,
    ),
    'type' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_TYPE',
      'width' => '10%',
    ),
    'name_on_card' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_NAME_ON_CARD',
      'width' => '10%',
      'default' => true,
    ),
    'expiration_month' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_EXPIRATION_MONTH',
      'width' => '10%',
    ),
    'expiration_year' => 
    array (
      'type' => 'int',
      'default' => true,
      'vname' => 'LBL_EXPIRATION_YEAR',
      'width' => '10%',
    ),
    'cc_numbers' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_CC_NUMBERS',
      'width' => '10%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'widget_class' => 'SubPanelEditButton',
      'module' => 'comite_Billing',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'comite_Billing',
      'width' => '5%',
      'default' => true,
    ),
  ),
);