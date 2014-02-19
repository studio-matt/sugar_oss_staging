<?php
$module_name = 'comite_SleepConditionInstance';
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
            'name' => 'comite_sleepconditioninstance_comite_lifestyle_name',
          ),
        ),
        1 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'answer',
            'label' => 'LBL_ANSWER',
          ),
        ),
        2 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
