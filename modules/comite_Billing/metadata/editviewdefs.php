<?php
$module_name = 'comite_Billing';
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
            'name' => 'type',
            'studio' => 'visible',
            'label' => 'LBL_TYPE',
          ),
          1 => 
          array (
            'name' => 'rank',
            'label' => 'LBL_RANK',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'name_on_card',
            'label' => 'LBL_NAME_ON_CARD',
          ),
          1 => 
          array (
            'name' => 'zip_code',
            'label' => 'LBL_ZIP_CODE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'cc_numbers',
            'label' => 'LBL_CC_NUMBERS',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'expiration_month',
            'studio' => 'visible',
            'label' => 'LBL_EXPIRATION_MONTH',
          ),
          1 => 
          array (
            'name' => 'expiration_year',
            'label' => 'LBL_EXPIRATION_YEAR',
          ),
        ),
        5 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
