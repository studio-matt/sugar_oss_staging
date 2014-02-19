<?php
$module_name = 'comite_SubstanceUseInstance';
$listViewDefs [$module_name] = 
array (
  'PAST_PRESENT' => 
  array (
    'type' => 'radioenum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PAST_PRESENT',
    'width' => '10%',
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'PER_DAY' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PER_DAY',
    'width' => '10%',
    'default' => true,
  ),
);
?>
