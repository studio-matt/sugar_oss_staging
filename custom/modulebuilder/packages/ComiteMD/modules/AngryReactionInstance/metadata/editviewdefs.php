<?php
$module_name = 'comite_AngryReactionInstance';
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
            'name' => 'answer',
            'studio' => 'visible',
            'label' => 'LBL_ANSWER',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'comite_angryreactioninstance_comite_lifestyle_name',
          ),
        ),
      ),
    ),
  ),
);
?>
