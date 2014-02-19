<?php
$module_name = 'comite_PharmacyMedicine';
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
            'name' => 'comite_pharmacymedicine_comite_medicationsupplement_name',
            'label' => 'LBL_COMITE_PHARMACYMEDICINE_COMITE_MEDICATIONSUPPLEMENT_FROM_COMITE_MEDICATIONSUPPLEMENT_TITLE',
          ),
          1 =>
          array (
            'name' => 'dose',
            'label' => 'LBL_DOSE',
          ),
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'refills',
            'label' => 'LBL_REFILLS',
          ),
          1 =>
          array (
            'name' => 'initials',
            'label' => 'LBL_INITIALS',
          ),
        ),
        2 =>
        array (
          0 =>
          array (
            'name' => 'prescription_date',
            'label' => 'LBL_PRESCRIPTION_DATE',
          ),
          1 => '',
        ),
        3 =>
        array (
          0 =>
          array (
            'name' => 'comite_pharmacymedicine_comite_pharmacy_name',
            'label' => 'LBL_COMITE_PHARMACYMEDICINE_COMITE_PHARMACY_FROM_COMITE_PHARMACY_TITLE',
          ),
          1 =>
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'studio' => 'visible',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
    ),
  ),
);
?>
