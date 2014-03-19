<?php
$module_name='comite_Spirometry';
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
      'popup_module' => 'comite_Spirometry',
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
    'forced_vital_capacity' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_FORCED_VITAL_CAPACITY',
      'width' => '10%',
      'default' => true,
    ),
    'forced_expiratory_volume' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_FORCED_EXPIRATORY_VOLUME',
      'width' => '10%',
      'default' => true,
    ),
    'fec_fvc' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_FEC_FVC',
      'width' => '10%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'widget_class' => 'SubPanelEditButton',
      'module' => 'comite_Spirometry',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'comite_Spirometry',
      'width' => '5%',
      'default' => true,
    ),
  ),
);