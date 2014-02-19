<?php
$module_name = 'comite_Address';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'address_1' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_ADDRESS_1',
        'width' => '10%',
        'default' => true,
        'name' => 'address_1',
      ),
      'address_2' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_ADDRESS_2',
        'width' => '10%',
        'default' => true,
        'name' => 'address_2',
      ),
      'address_3' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_ADDRESS_3',
        'width' => '10%',
        'default' => true,
        'name' => 'address_3',
      ),
      'city' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CITY',
        'width' => '10%',
        'default' => true,
        'name' => 'city',
      ),
      'state' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_STATE',
        'width' => '10%',
        'default' => true,
        'name' => 'state',
      ),
      'state_international' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_STATE_INTERNATIONAL',
        'width' => '10%',
        'default' => true,
        'name' => 'state_international',
      ),
      'postal_code' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_POSTAL_CODE',
        'width' => '10%',
        'default' => true,
        'name' => 'postal_code',
      ),
      'country' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_COUNTRY',
        'width' => '10%',
        'name' => 'country',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
