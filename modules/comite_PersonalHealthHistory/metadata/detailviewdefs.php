<?php
$module_name = 'comite_PersonalHealthHistory';
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
          0 => 
          array (
            'name' => 'comite_personalhealthhistory_contacts_name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'patient_rate_current_health',
            'studio' => 'visible',
            'label' => 'LBL_PATIENT_RATE_CURRENT_HEALTH',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'age_management_medical_goals',
            'studio' => 'visible',
            'label' => 'LBL_AGE_MANAGEMENT_MEDICAL_GOALS',
          ),
        ),
      ),
      'lbl_editview_panel6' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'gender',
            'studio' => 'visible',
            'label' => 'LBL_GENDER',
          ),
          1 => 
          array (
            'name' => 'height',
            'label' => 'LBL_HEIGHT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'body_frame',
            'studio' => 'visible',
            'label' => 'LBL_BODY_FRAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'weight',
            'label' => 'LBL_WEIGHT',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'weight_highest',
            'label' => 'LBL_WEIGHT_HIGHEST',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'weight_lowest',
            'label' => 'LBL_WEIGHT_LOWEST',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'weight_ideal',
            'label' => 'LBL_WEIGHT_IDEAL',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'blood_type',
            'studio' => 'visible',
            'label' => 'LBL_BLOOD_TYPE',
          ),
        ),
      ),
      'lbl_editview_panel7' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'pri_physician_name',
            'label' => 'LBL_PRI_PHYSICIAN_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'pri_physician_address1',
            'label' => 'LBL_PRI_PHYSICIAN_ADDRESS1',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'pri_physician_address2',
            'label' => 'LBL_PRI_PHYSICIAN_ADDRESS2',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'pri_physician_city',
            'label' => 'LBL_PRI_PHYSICIAN_CITY',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'pri_physician_state',
            'studio' => 'visible',
            'label' => 'LBL_PRI_PHYSICIAN_STATE',
          ),
          1 => 
          array (
            'name' => 'pri_physician_zip',
            'label' => 'LBL_PRI_PHYSICIAN_ZIP',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'pri_physician_phone_office',
            'label' => 'LBL_PRI_PHYSICIAN_PHONE_OFFICE',
          ),
          1 => 
          array (
            'name' => 'pri_physician_fax',
            'label' => 'LBL_PRI_PHYSICIAN_FAX',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'pri_physician_email_office',
            'label' => 'LBL_PRI_PHYSICIAN_EMAIL_OFFICE',
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
            'name' => 'last_doctor_visit',
            'label' => 'LBL_LAST_DOCTOR_VISIT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'doctor_visits_within_year',
            'label' => 'LBL_DOCTOR_VISITS_WITHIN_YEAR',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'dental_health',
            'studio' => 'visible',
            'label' => 'LBL_DENTAL_HEALTH',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'sick_days',
            'label' => 'LBL_SICK_DAYS',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'hospital_days',
            'studio' => 'visible',
            'label' => 'LBL_HOSPITAL_DAYS',
          ),
          1 => 
          array (
            'name' => 'hosptial_days_explanation',
            'studio' => 'visible',
            'label' => 'LBL_HOSPTIAL_DAYS_EXPLANATION',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'surgical_procedures',
            'studio' => 'visible',
            'label' => 'LBL_SURGICAL_PROCEDURES',
          ),
          1 => 
          array (
            'name' => 'blood_transfusion_explanation',
            'studio' => 'visible',
            'label' => 'LBL_BLOOD_TRANSFUSION_EXPLANATION',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'trauma_history',
            'studio' => 'visible',
            'label' => 'LBL_TRAUMA_HISTORY',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'blood_transfusion',
            'studio' => 'visible',
            'label' => 'LBL_BLOOD_TRANSFUSION',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'radiation_therapy',
            'label' => 'LBL_RADIATION_THERAPY',
          ),
          1 => 
          array (
            'name' => 'radiation_therapy_reason',
            'studio' => 'visible',
            'label' => 'LBL_RADIATION_THERAPY_REASON',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'chemotherapy',
            'label' => 'LBL_CHEMOTHERAPY',
          ),
          1 => 
          array (
            'name' => 'chemotherapy_explanation',
            'studio' => 'visible',
            'label' => 'LBL_CHEMOTHERAPY_EXPLANATION',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'is_no_current_medications',
            'label' => 'LBL_IS_NO_CURRENT_MEDICATIONS',
          ),
          1 => 
          array (
            'name' => 'is_no_current_supplements',
            'label' => 'LBL_IS_NO_CURRENT_SUPPLEMENTS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fem_med_enhancementdrugs_help',
            'label' => 'LBL_FEM_MED_ENHANCEMENTDRUGS_HELP',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'men_med_testosterone_use',
            'label' => 'LBL_MEN_MED_TESTOSTERONE_USE',
          ),
          1 => 
          array (
            'name' => 'men_med_testosterone_helped',
            'label' => 'LBL_MEN_MED_TESTOSTERONE_HELPED',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'men_med_testosterone_notes',
            'studio' => 'visible',
            'label' => 'LBL_MEN_MED_TESTOSTERONE_NOTES',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'men_med_enhancementdrugs_use',
            'label' => 'LBL_MEN_MED_ENHANCEMENTDRUGS_USE',
          ),
          1 => 
          array (
            'name' => 'men_med_enhancementdrugs_has_h',
            'label' => 'LBL_MEN_MED_ENHANCEMENTDRUGS_HAS_H',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'men_med_enhancementdrugs_notes',
            'studio' => 'visible',
            'label' => 'LBL_MEN_MED_ENHANCEMENTDRUGS_NOTES',
          ),
          1 => '',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'fem_med_enhancementdrugs_use',
            'label' => 'LBL_FEM_MED_ENHANCEMENTDRUGS_USE',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'men_med_sexual_function_notes',
            'studio' => 'visible',
            'label' => 'LBL_MEN_MED_SEXUAL_FUNCTION_NOTES',
          ),
          1 => '',
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'fem_med_birthcontrol_use',
            'label' => 'LBL_FEM_MED_BIRTHCONTROL_USE',
          ),
          1 => 
          array (
            'name' => 'fem_med_birthcontrol_notes',
            'studio' => 'visible',
            'label' => 'LBL_FEM_MED_BIRTHCONTROL_NOTES',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'men_med_sexual_function_use',
            'label' => 'LBL_MEN_MED_SEXUAL_FUNCTION_USE',
          ),
          1 => 
          array (
            'name' => 'men_med_sexual_function_helped',
            'label' => 'LBL_MEN_MED_SEXUAL_FUNCTION_HELPED',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'fem_med_enhancementdrugs_notes',
            'studio' => 'visible',
            'label' => 'LBL_FEM_MED_ENHANCEMENTDRUGS_NOTES',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'exposure_additional',
            'studio' => 'visible',
            'label' => 'LBL_EXPOSURE_ADITIONAL',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'diagnostic_proc_additiona',
            'studio' => 'visible',
            'label' => 'LBL_DIAGNOSTIC_PROC_ADDITIONA',
          ),
        ),
      ),
    ),
  ),
);
?>
