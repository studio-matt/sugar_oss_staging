<?php
$module_name = 'comite_FitnessAssessment';
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
      'syncDetailEditViews' => false,
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
          0 => 
          array (
            'name' => 'comite_fitnessassessment_comite_drnotesnutritionexercise_name',
          ),
        ),
        2 => 
        array (
          0 => 'description',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'fit_assess_general_exercise',
            'studio' => 'visible',
            'label' => 'LBL_FIT_ASSESS_GENERAL_EXERCISE',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'fit_assess_general_exercise_re',
            'label' => 'LBL_FIT_ASSESS_GENERAL_EXERCISE_RE',
          ),
        ),
      ),
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'fit_assess_height',
            'label' => 'LBL_FIT_ASSESS_HEIGHT',
          ),
          1 => 
          array (
            'name' => 'fit_assess_heartrate',
            'label' => 'LBL_FIT_ASSESS_HEARTRATE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fit_assess_weight',
            'label' => 'LBL_FIT_ASSESS_WEIGHT',
          ),
          1 => 
          array (
            'name' => 'fit_assess_bloodpressure',
            'label' => 'LBL_FIT_ASSESS_BLOODPRESSURE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'fit_assess_waist',
            'label' => 'LBL_FIT_ASSESS_WAIST',
          ),
          1 => 
          array (
            'name' => 'fit_assess_respiration',
            'label' => 'LBL_FIT_ASSESS_RESPIRATION',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'fit_assess_pushup',
            'label' => 'LBL_FIT_ASSESS_PUSHUP',
          ),
          1 => 
          array (
            'name' => 'fit_assess_abcrunch',
            'label' => 'LBL_FIT_ASSESS_ABCRUNCH',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'fit_assess_plank',
            'label' => 'LBL_FIT_ASSESS_PLANK',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'fit_assess_grip_l',
            'label' => 'LBL_FIT_ASSESS_GRIP_L',
          ),
          1 => 
          array (
            'name' => 'fit_assess_grip',
            'label' => 'LBL_FIT_ASSESS_GRIP',
          ),
        ),
      ),
      'lbl_editview_panel6' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'fit_assess_balance_l',
            'label' => 'LBL_FIT_ASSESS_BALANCE_L',
          ),
          1 => 
          array (
            'name' => 'fit_assess_balance',
            'label' => 'LBL_FIT_ASSESS_BALANCE',
          ),
        ),
      ),
      'lbl_editview_panel9' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'fit_assess_posture',
            'studio' => 'visible',
            'label' => 'LBL_FIT_ASSESS_POSTURE',
          ),
        ),
      ),
      'lbl_editview_panel10' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'fit_assess_hamstring',
            'studio' => 'visible',
            'label' => 'LBL_FIT_ASSESS_HAMSTRING',
          ),
          1 => 
          array (
            'name' => 'fit_assess_lumbar',
            'studio' => 'visible',
            'label' => 'LBL_FIT_ASSESS_LUMBAR',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fit_assess_thotacic',
            'studio' => 'visible',
            'label' => 'LBL_FIT_ASSESS_THOTACIC',
          ),
          1 => 
          array (
            'name' => 'fit_assess_cervical',
            'studio' => 'visible',
            'label' => 'LBL_FIT_ASSESS_CERVICAL',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'fit_assess_shoulder_p',
            'studio' => 'visible',
            'label' => 'LBL_FIT_ASSESS_SHOULDER_P',
          ),
          1 => 
          array (
            'name' => 'fit_assess_shoulder_f',
            'studio' => 'visible',
            'label' => 'LBL_FIT_ASSESS_SHOULDER_F',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'fit_assess_soleus',
            'studio' => 'visible',
            'label' => 'LBL_FIT_ASSESS_SOLEUS',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'fit_assess_posture_assess',
            'studio' => 'visible',
            'label' => 'LBL_FIT_ASSESS_POSTURE_ASSESS',
          ),
        ),
      ),
      'lbl_editview_panel11' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'fit_assess_toepoint',
            'studio' => 'visible',
            'label' => 'LBL_FIT_ASSESS_TOEPOINT',
          ),
          1 => 
          array (
            'name' => 'fit_assess_knees',
            'studio' => 'visible',
            'label' => 'LBL_FIT_ASSESS_KNEES',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fit_assess_medial',
            'studio' => 'visible',
            'label' => 'LBL_FIT_ASSESS_MEDIAL',
          ),
          1 => 
          array (
            'name' => 'fit_assess_elbow',
            'studio' => 'visible',
            'label' => 'LBL_FIT_ASSESS_ELBOW',
          ),
        ),
      ),
      'lbl_editview_panel12' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'fit_assess_shoulder',
            'studio' => 'visible',
            'label' => 'LBL_FIT_ASSESS_SHOULDER',
          ),
          1 => 
          array (
            'name' => 'fit_assess_lumbar_squat',
            'studio' => 'visible',
            'label' => 'LBL_FIT_ASSESS_LUMBAR_SQUAT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fit_assess_pelvic',
            'studio' => 'visible',
            'label' => 'LBL_FIT_ASSESS_PELVIC',
          ),
          1 => 
          array (
            'name' => 'fit_assess_scapular',
            'studio' => 'visible',
            'label' => 'LBL_FIT_ASSESS_SCAPULAR',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'fit_assess_squat_assessment',
            'studio' => 'visible',
            'label' => 'LBL_FIT_ASSESS_SQUAT_ASSESSMENT',
          ),
        ),
      ),
    ),
  ),
);
?>
