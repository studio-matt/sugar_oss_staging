<?php
$module_name = 'comite_NutritionalIntake';
$listViewDefs [$module_name] = 
array (
  'DAY_TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_DAY_TYPE',
    'width' => '10%',
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'TIME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TIME',
    'width' => '10%',
    'default' => true,
  ),
  'FOOD' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FOOD',
    'width' => '10%',
    'default' => true,
  ),
  'PORTION_SIZE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PORTION_SIZE',
    'width' => '10%',
    'default' => true,
  ),
);
?>
