<?php
$module_name = 'comite_LifeChangeInstance';
$viewdefs [$module_name] = 
array (
  'EditView' => 
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
            'name' => 'comite_lifechangeinstance_comite_lifestyle_name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'studio' => 'visible',
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'answer',
            'studio' => 'visible',
            'label' => 'LBL_ANSWER',
          ),
        ),
        2 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'doctors_note',
            'studio' => 'visible',
            'label' => 'LBL_DOCTORS_NOTE',
          ),
        ),
      ),
    ),
  ),
);
?>
