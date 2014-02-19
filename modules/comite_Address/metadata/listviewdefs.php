<?php
$module_name = 'comite_Address';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ADDRESS_1' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS_1',
    'width' => '10%',
    'default' => true,
  ),
  'ADDRESS_2' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS_2',
    'width' => '10%',
    'default' => true,
  ),
  'ADDRESS_3' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS_3',
    'width' => '10%',
    'default' => true,
  ),
  'CITY' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CITY',
    'width' => '10%',
    'default' => true,
  ),
  'STATE' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_STATE',
    'width' => '10%',
    'default' => true,
  ),
  'STATE_INTERNATIONAL' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_STATE_INTERNATIONAL',
    'width' => '10%',
    'default' => true,
  ),
  'COUNTRY' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_COUNTRY',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
);
?>
