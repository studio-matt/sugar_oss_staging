<?php
$module_name = 'comite_SleepConditionInstance';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ANSWER' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_ANSWER',
    'width' => '10%',
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
