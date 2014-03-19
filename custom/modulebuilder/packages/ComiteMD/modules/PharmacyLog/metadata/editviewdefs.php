<?php
$module_name = 'comite_PharmacyLog';
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
          1 => 
          array (
            'name' => 'comite_pharmacylog_contacts_name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'insurance_info',
            'studio' => 'visible',
            'label' => 'LBL_INSURANCE_INFO',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
