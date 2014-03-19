<?php
$module_name = 'comite_ReviewOverallHealth';
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
          0 => 'name',
          1 => 
          array (
            'name' => 'comite_reviewoverallhealth_comite_personalhealthhistory_name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'category',
            'studio' => 'visible',
            'label' => 'LBL_CATEGORY',
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
          0 => 
          array (
            'name' => 'notes_patient',
            'studio' => 'visible',
            'label' => 'LBL_NOTES_PATIENT',
          ),
          1 => 'description',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'question',
            'studio' => 'visible',
            'label' => 'LBL_QUESTION',
          ),
          1 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
?>
