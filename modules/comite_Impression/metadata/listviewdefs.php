<?php
$module_name = 'comite_Impression';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => true,
  ),
);
?>
