<?php
$module_name = 'comite_PharmacyMedicine';
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
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
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
            'name' => 'prescription_date',
            'label' => 'LBL_PRESCRIPTION_DATE',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'comite_pharmacymedicine_comite_medicationsupplement_name',
          ),
          1 => 
          array (
            'name' => 'dose',
            'label' => 'LBL_DOSE',
          ),
        ),
        2 => 
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
        3 => 
        array (
          0 => 
          array (
            'name' => 'comite_pharmacymedicine_comite_pharmacy_name',
          ),
          1 => 'description',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'comite_pharmacymedicine_comite_pharmacylog_name',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_modified',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
            'label' => 'LBL_DATE_MODIFIED',
          ),
          1 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
        ),
      ),
    ),
  ),
);
?>
