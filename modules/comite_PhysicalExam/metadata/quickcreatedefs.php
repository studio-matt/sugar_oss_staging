<?php
$module_name = 'comite_PhysicalExam';
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
        ),
      ),
      'lbl_quickcreate_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'appearance',
            'label' => 'LBL_APPEARANCE',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fat_mass',
            'label' => 'LBL_FAT_MASS',
          ),
          1 => 
          array (
            'name' => 'height',
            'label' => 'LBL_HEIGHT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'upper_percentage',
            'label' => 'LBL_UPPER_PERCENTAGE',
          ),
          1 => 
          array (
            'name' => 'lower_percentage',
            'label' => 'LBL_LOWER_PERCENTAGE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'blood_pressure',
            'label' => 'LBL_BLOOD_PRESSURE',
          ),
          1 => 
          array (
            'name' => 'weight',
            'label' => 'LBL_WEIGHT',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'pulse',
            'label' => 'LBL_PULSE',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
