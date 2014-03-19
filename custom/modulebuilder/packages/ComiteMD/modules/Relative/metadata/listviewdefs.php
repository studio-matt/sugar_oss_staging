<?php
$module_name = 'comite_Relative';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'RELATION' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_RELATION',
    'width' => '10%',
  ),
  'IS_DECEASED' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_IS_DECEASED',
    'width' => '10%',
  ),
  'DATE_DECEASED' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DATE_DECEASED',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_BORN' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DATE_BORN',
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
);
?>
