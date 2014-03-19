<?php
$module_name = 'comite_SubstanceUseInstance';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'past_present',
            'studio' => 'visible',
            'label' => 'LBL_PAST_PRESENT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'per_day',
            'label' => 'LBL_PER_DAY',
          ),
        ),
      ),
    ),
  ),
);
?>
