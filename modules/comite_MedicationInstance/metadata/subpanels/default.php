<?php
$module_name='comite_MedicationInstance';
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
      'popup_module' => 'comite_MedicationInstance',
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
    'frequency' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_FREQUENCY',
      'width' => '10%',
    ),
    'time_of_day' => 
    array (
      'type' => 'multienum',
      'studio' => 'visible',
      'vname' => 'LBL_TIME_OF_DAY',
      'width' => '10%',
      'default' => true,
    ),
    'dosage' => 
    array (
      'type' => 'decimal',
      'vname' => 'LBL_DOSAGE',
      'width' => '10%',
      'default' => true,
    ),
    'dosage_unit' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_DOSAGE_UNIT',
      'width' => '10%',
    ),
    'quantity' => 
    array (
      'type' => 'decimal',
      'vname' => 'LBL_QUANTITY',
      'width' => '10%',
      'default' => true,
    ),
    'quantity_unit' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_QUANTITY_UNIT',
      'width' => '10%',
    ),
    'source' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_SOURCE',
      'width' => '10%',
    ),
    'notes_patient' => 
    array (
      'type' => 'text',
      'studio' => 'visible',
      'vname' => 'LBL_NOTES_PATIENT',
      'sortable' => false,
      'width' => '10%',
      'default' => true,
    ),
    'notes_doctor' => 
    array (
      'type' => 'text',
      'studio' => 'visible',
      'vname' => 'LBL_NOTES_DOCTOR',
      'sortable' => false,
      'width' => '10%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'widget_class' => 'SubPanelEditButton',
      'module' => 'comite_MedicationInstance',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'comite_MedicationInstance',
      'width' => '5%',
      'default' => true,
    ),
  ),
);