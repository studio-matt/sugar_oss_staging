<?php
$module_name='comite_PharmacyMedicine';
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
      'popup_module' => 'comite_PharmacyMedicine',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'prescription_date' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_PRESCRIPTION_DATE',
      'width' => '10%',
      'default' => true,
    ),
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '45%',
      'default' => true,
    ),
    'dose' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_DOSE',
      'width' => '10%',
      'default' => true,
    ),
    'refills' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_REFILLS',
      'width' => '10%',
      'default' => true,
    ),
    'initials' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_INITIALS',
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
      'module' => 'comite_PharmacyMedicine',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'comite_PharmacyMedicine',
      'width' => '5%',
      'default' => true,
    ),
  ),
);