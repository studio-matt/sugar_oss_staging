<?php
$module_name = 'comite_EheRecommendations';
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
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
        ),
        1 => 
        array (
          0 => 'description',
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'ehe_exercise_regimen',
            'studio' => 'visible',
            'label' => 'LBL_EHE_EXERCISE_REGIMEN',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'ehe_aerobic_action',
            'studio' => 'visible',
            'label' => 'LBL_EHE_AEROBIC_ACTION',
          ),
          1 => 
          array (
            'name' => 'ehe_aerobic_frequency',
            'studio' => 'visible',
            'label' => 'LBL_EHE_AEROBIC_FREQUENCY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'ehe_aerobic_time',
            'studio' => 'visible',
            'label' => 'LBL_EHE_AEROBIC_TIME',
          ),
          1 => 
          array (
            'name' => 'ehe_aerobic_activity',
            'studio' => 'visible',
            'label' => 'LBL_EHE_AEROBIC_ACTIVITY',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'ehe_weight_type',
            'studio' => 'visible',
            'label' => 'LBL_EHE_WEIGHT_TYPE',
          ),
          1 => 
          array (
            'name' => 'ehe_weight_frequency',
            'studio' => 'visible',
            'label' => 'LBL_EHE_WEIGHT_FREQUENCY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'ehe_weight_format',
            'studio' => 'visible',
            'label' => 'LBL_EHE_WEIGHT_FORMAT',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
