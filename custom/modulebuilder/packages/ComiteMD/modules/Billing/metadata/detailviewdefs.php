<?php
$module_name = 'comite_Billing';
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
      'lbl_detailview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
    ),
  ),
);
?>
