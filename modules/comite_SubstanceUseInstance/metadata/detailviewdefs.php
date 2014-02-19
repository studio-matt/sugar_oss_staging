<?php
$module_name = 'comite_SubstanceUseInstance';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'past_present',
            'studio' => 'visible',
            'label' => 'LBL_PAST_PRESENT',
          ),
          1 => 
          array (
            'name' => 'comite_substanceuseinstance_comite_lifestyle_name',
          ),
        ),
        1 => 
        array (
          0 => 'name',
          1 => 
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
