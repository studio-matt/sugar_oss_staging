<?php
$module_name = 'comite_ExposureInstance';
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
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'comite_exposureinstance_comite_personalhealthhistory_name',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'dates',
            'label' => 'LBL_DATES',
          ),
          1 => 
          array (
            'name' => 'length',
            'label' => 'LBL_LENGTH',
          ),
        ),
      ),
    ),
  ),
);
?>
