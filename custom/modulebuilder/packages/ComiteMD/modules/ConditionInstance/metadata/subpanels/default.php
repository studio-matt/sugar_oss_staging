<?php
$module_name='comite_ConditionInstance';
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
      'popup_module' => 'comite_ConditionInstance',
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
    'comite_conditioninstance_comite_relative_name' =>
    array (
      'vname' => 'Relative',
      'width' => '45%',
      'default' => true,
    ),
    'note_patient' =>
    array (
      'type' => 'text',
      'studio' => 'visible',
      'vname' => 'LBL_NOTE_PATIENT',
      'sortable' => false,
      'width' => '10%',
      'default' => true,
    ),
    'note_doctor' =>
    array (
      'type' => 'text',
      'studio' => 'visible',
      'vname' => 'LBL_NOTE_DOCTOR',
      'sortable' => false,
      'width' => '10%',
      'default' => true,
    ),
    'edit_button' =>
    array (
      'widget_class' => 'SubPanelEditButton',
      'module' => 'comite_ConditionInstance',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' =>
    array (
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'comite_ConditionInstance',
      'width' => '5%',
      'default' => true,
    ),
  ),
);