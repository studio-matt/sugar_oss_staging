<?php
$module_name='comite_ExerciseSummary';
$subpanel_layout = array (
  'sort_by' => 'answer',
  'sort_order' => 'DESC',
  'top_buttons' =>
  array (
    0 =>
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 =>
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'comite_ExerciseSummary',
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
    'description' =>
    array (
      'type' => 'text',
      'studio' => 'visible',
      'vname' => 'LBL_DESCRIPTION',
      'sortable' => false,
      'width' => '10%',
      'default' => true,
    ),
    'answer' =>
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_ANSWER',
      'width' => '10%',
    ),
    'edit_button' =>
    array (
      'widget_class' => 'SubPanelEditButton',
      'module' => 'comite_ExerciseSummary',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' =>
    array (
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'comite_ExerciseSummary',
      'width' => '5%',
      'default' => true,
    ),
  ),
);