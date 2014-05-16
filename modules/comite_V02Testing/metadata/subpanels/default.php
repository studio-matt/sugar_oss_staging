<?php
$module_name='comite_V02Testing';
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
      'popup_module' => 'comite_V02Testing',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
          'object_image'=>array(
                  'vname' => 'LBL_OBJECT_IMAGE',
                  'widget_class' => 'SubPanelIcon',
                  'width' => '2%',
                  'attachment_image_only' => true,
                  'image2'=>'attachment',
                  'image2_url_field'=> array(
                          'id_field' => 'id',
                          'filename_field' => 'filename',
                  ),
          ),
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '45%',
      'default' => true,
    ),
    'v02max' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_V02MAX',
      'width' => '10%',
      'default' => true,
    ),
    'restrate' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_RESTRATE',
      'width' => '10%',
      'default' => true,
    ),
    'maxrate' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_MAXRATE',
      'width' => '10%',
      'default' => true,
    ),
    'speed' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_SPEED',
      'width' => '10%',
      'default' => true,
    ),
    'incline' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_INCLINE',
      'width' => '10%',
      'default' => true,
    ),
    'rer' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_RER',
      'width' => '10%',
      'default' => true,
    ),
    'ventilation' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_VENTILATION',
      'width' => '10%',
      'default' => true,
    ),
    'work_rate' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_WORK_RATE',
      'width' => '10%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'widget_class' => 'SubPanelEditButton',
      'module' => 'comite_V02Testing',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'comite_V02Testing',
      'width' => '5%',
      'default' => true,
    ),
          'file_url'=>array(
                  'usage'=>'query_only'
          ),
          'filename'=>array(
                  'usage'=>'query_only'
          ),
  ),
);