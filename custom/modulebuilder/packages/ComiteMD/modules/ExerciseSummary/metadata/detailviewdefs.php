<?php
$module_name = 'comite_ExerciseSummary';
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
          0 => 'name',
          1 => 'description',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'answer',
            'studio' => 'visible',
            'label' => 'LBL_ANSWER',
          ),
          1 => 
          array (
            'name' => 'time_of_day',
            'studio' => 'visible',
            'label' => 'LBL_TIME_OF_DAY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'comite_exercisesummary_comite_nutritionexercise_name',
          ),
          1 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
?>
