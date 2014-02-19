<?php
$module_name = 'comite_MedicationSupplementInstance';
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
          0 => 
          array (
            'name' => 'comite_medsuppinstance_comite_medsupp_name',
            'label' => 'LBL_COMITE_MEDSUPPINSTANCE_COMITE_MEDSUPP_FROM_COMITE_MEDICATIONSUPPLEMENT_TITLE',
          ),
          1 => 
          array (
            'name' => 'comite_medsuppinst_comite_personalhealthhistory_name',
            'label' => 'LBL_COMITE_MEDSUPPINST_COMITE_PERSONALHEALTHHISTORY_FROM_COMITE_PERSONALHEALTHHISTORY_TITLE',
          ),
        ),
        3 =>
        array (
          0 => 
          array (
            'name' => 'dosage',
            'label' => 'LBL_DOSAGE',
          ),
          1 => 
          array (
            'name' => 'dosage_unit',
            'studio' => 'visible',
            'label' => 'LBL_DOSAGE_UNIT',
          ),
        ),
        4 =>
        array (
          0 => 
          array (
            'name' => 'time_of_day',
            'studio' => 'visible',
            'label' => 'LBL_TIME_OF_DAY',
          ),
          1 => 
          array (
            'name' => 'frequency',
            'studio' => 'visible',
            'label' => 'LBL_FREQUENCY',
          ),
        ),
        5 =>
        array (
          0 => 
          array (
            'name' => 'quantity',
            'label' => 'LBL_QUANTITY',
          ),
          1 => 
          array (
            'name' => 'quantity_unit',
            'studio' => 'visible',
            'label' => 'LBL_QUANTITY_UNIT',
          ),
        ),
        6 =>
        array (
          0 => 
          array (
            'name' => 'source',
            'studio' => 'visible',
            'label' => 'LBL_SOURCE',
          ),
          1 => '',
        ),
        7 =>
        array (
          0 => 
          array (
            'name' => 'notes_patient',
            'studio' => 'visible',
            'label' => 'LBL_NOTES_PATIENT',
          ),
          1 => 
          array (
            'name' => 'notes_doctor',
            'studio' => 'visible',
            'label' => 'LBL_NOTES_DOCTOR',
          ),
        ),
      ),
    ),
  ),
);
?>
