<?php
$module_name = 'comite_BoneStudies';
$viewdefs [$module_name] =
array (
  'EditView' =>
  array (
    'templateMeta' =>
    array (
      'form' =>
      array (
        'enctype' => 'multipart/form-data',
        'hidden' =>
        array (
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
      'syncDetailEditViews' => false,
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
            'name' => 'test_date',
            'label' => 'LBL_TEST_DATE',
          ),
        ),
        1 =>
        array (
          0 => 'description',
          1 => '',
        ),
      ),
      'lbl_editview_panel1' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'bds_lumbar_spine',
            'studio' => 'visible',
            'label' => 'LBL_BDS_LUMBAR_SPINE',
          ),
          1 => '',
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'bds_femoral_neck_left',
            'studio' => 'visible',
            'label' => 'LBL_BDS_FEMORAL_NECK_LEFT',
          ),
          1 =>
          array (
            'name' => 'bds_femoral_neck_right',
            'studio' => 'visible',
            'label' => 'LBL_BDS_FEMORAL_NECK_RIGHT',
          ),
        ),
        2 =>
        array (
          0 =>
          array (
            'name' => 'bds_total_hip_left',
            'studio' => 'visible',
            'label' => 'LBL_BDS_TOTAL_HIP_LEFT',
          ),
          1 =>
          array (
            'name' => 'bds_total_hip_right',
            'studio' => 'visible',
            'label' => 'LBL_BDS_TOTAL_HIP_RIGHT',
          ),
        ),
        3 =>
        array (
          0 =>
          array (
            'name' => 'bds_forearm_left',
            'studio' => 'visible',
            'label' => 'LBL_BDS_FOREARM_LEFT',
          ),
          1 =>
          array (
            'name' => 'bds_forearm_right',
            'studio' => 'visible',
            'label' => 'LBL_BDS_FOREARM_RIGHT',
          ),
        ),
        4 =>
        array (
          0 =>
          array (
            'name' => 'bds_region_of_forearm_left',
            'studio' => 'visible',
            'label' => 'LBL_BDS_REGION_OF_FOREARM_LEFT',
          ),
          1 =>
          array (
            'name' => 'bds_region_of_forearm_right',
            'studio' => 'visible',
            'label' => 'LBL_BDS_REGION_OF_FOREARM_RIGHT',
          ),
        ),
      ),
      'lbl_editview_panel2' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'vda_normal',
            'label' => 'LBL_VDA_NORMAL',
          ),
          1 => '',
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'vda_mild_wedge_deformity',
            'label' => 'LBL_VDA_MILD_WEDGE_DEFORMITY',
          ),
          1 =>
          array (
            'name' => 'vda_mild_wedge_deformity_note',
            'label' => 'LBL_VDA_MILD_WEDGE_DEFORMITY_NOTE',
          ),
        ),
        2 =>
        array (
          0 =>
          array (
            'name' => 'vda_moderate_wedge_deformity',
            'label' => 'LBL_VDA_MODERATE_WEDGE_DEFORMITY',
          ),
          1 =>
          array (
            'name' => 'vda_moderate_wedge_deformity_note',
            'label' => 'LBL_VDA_MODERATE_WEDGE_DEFORMITY_NOTE',
          ),
        ),
      ),
      'lbl_editview_panel4' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'bc_left_arm_lean_muscle',
            'label' => 'LBL_BC_LEFT_ARM_LEAN_MUSCLE',
          ),
          1 =>
          array (
            'name' => 'bc_left_arm_fat_mass',
            'label' => 'LBL_BC_LEFT_ARM_FAT_MASS',
          ),
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'bc_left_arm_fat_percent',
            'label' => 'LBL_BC_LEFT_ARM_FAT_PERCENT',
          ),
          1 => '',
        ),
        2 =>
        array (
          0 => '',
          1 => '',
        ),
        3 =>
        array (
          0 =>
          array (
            'name' => 'bc_right_arm_lean_muscle',
            'label' => 'LBL_BC_RIGHT_ARM_LEAN_MUSCLE',
          ),
          1 =>
          array (
            'name' => 'bc_right_arm_fat_mass',
            'label' => 'LBL_BC_RIGHT_ARM_FAT_MASS',
          ),
        ),
        4 =>
        array (
          0 =>
          array (
            'name' => 'bc_right_arm_fat_percent',
            'label' => 'LBL_BC_RIGHT_ARM_FAT_PERCENT',
          ),
          1 => '',
        ),
        5 =>
        array (
          0 => '',
          1 => '',
        ),
        6 =>
        array (
          0 =>
          array (
            'name' => 'bc_trunk_lean_muscle',
            'label' => 'LBL_BC_TRUNK_LEAN_MUSCLE',
          ),
          1 =>
          array (
            'name' => 'bc_trunk_fat_mass',
            'label' => 'LBL_BC_TRUNK_FAT_MASS',
          ),
        ),
        7 =>
        array (
          0 =>
          array (
            'name' => 'bc_trunk_fat_percent',
            'label' => 'LBL_BC_TRUNK_FAT_PERCENT',
          ),
          1 => '',
        ),
        8 =>
        array (
          0 => '',
          1 => '',
        ),
        9 =>
        array (
          0 =>
          array (
            'name' => 'bc_left_leg_lean_muscle',
            'label' => 'LBL_BC_LEFT_LEG_LEAN_MUSCLE',
          ),
          1 =>
          array (
            'name' => 'bc_left_leg_fat_mass',
            'label' => 'LBL_BC_LEFT_LEG_FAT_MASS',
          ),
        ),
        10 =>
        array (
          0 =>
          array (
            'name' => 'bc_left_leg_fat_percent',
            'label' => 'LBL_BC_LEFT_LEG_FAT_PERCENT',
          ),
          1 => '',
        ),
        11 =>
        array (
          0 => '',
          1 => '',
        ),
        12 =>
        array (
          0 =>
          array (
            'name' => 'bc_right_leg_lean_muscle',
            'label' => 'LBL_BC_RIGHT_LEG_LEAN_MUSCLE',
          ),
          1 =>
          array (
            'name' => 'bc_right_leg_fat_mass',
            'label' => 'LBL_BC_RIGHT_LEG_FAT_MASS',
          ),
        ),
        13 =>
        array (
          0 =>
          array (
            'name' => 'bc_right_leg_fat_percent',
            'label' => 'LBL_BC_RIGHT_LEG_FAT_PERCENT',
          ),
          1 => '',
        ),
        14 =>
        array (
          0 =>
          array (
            'name' => 'bc_subtotal_lean_muscle',
            'label' => 'LBL_BC_SUBTOTAL_LEAN_MUSCLE',
          ),
          1 =>
          array (
            'name' => 'bc_subtotal_fat_mass',
            'label' => 'LBL_BC_SUBTOTAL_FAT_MASS',
          ),
        ),
        15 =>
        array (
          0 =>
          array (
            'name' => 'bc_subtotal_fat_percent',
            'label' => 'LBL_BC_SUBTOTAL_FAT_PERCENT',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel5' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'uploadfile',
          ),
        ),
      ),
    ),
  ),
);
?>
