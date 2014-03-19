<?php
$module_name = 'comite_PhysicalExamProperty';
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
            'name' => 'category',
            'studio' => 'visible',
            'label' => 'LBL_CATEGORY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'is_normal',
            'studio' => 'visible',
            'label' => 'LBL_IS_NORMAL',
          ),
          1 => 'description',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'comite_physicalexamproperty_comite_physicalexam_name',
          ),
          1 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
?>
