<?php
// created: 2013-04-15 17:40:38
$subpanel_layout['list_fields'] = array (
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
  'comite_pharmacymedicine_comite_pharmacy_name' =>
  array(
    'name' => 'pharmacy',
    'vname' => 'Pharmacy',
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
);