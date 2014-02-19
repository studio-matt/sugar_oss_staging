<?php
$module_name = 'comite_Address';
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
            'name' => 'comite_address_contacts_name',
          ),
        ),
        1 => 
        array (
          0 => 'name',
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
            'name' => 'address_1',
            'label' => 'LBL_ADDRESS_1',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'address_2',
            'label' => 'LBL_ADDRESS_2',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'address_3',
            'label' => 'LBL_ADDRESS_3',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'city',
            'label' => 'LBL_CITY',
          ),
          1 => 
          array (
            'name' => 'state',
            'studio' => 'visible',
            'label' => 'LBL_STATE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'postal_code',
            'label' => 'LBL_POSTAL_CODE',
          ),
          1 => 
          array (
            'name' => 'state_international',
            'label' => 'LBL_STATE_INTERNATIONAL',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'country',
            'studio' => 'visible',
            'label' => 'LBL_COUNTRY',
          ),
        ),
        8 => 
        array (
          0 => 'description',
        ),
      ),
      'lbl_editview_panel1' => 
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
