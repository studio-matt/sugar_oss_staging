<?php
$module_name = 'comite_Phone';
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
          0 => 'name',
          1 => 
          array (
            'name' => 'rank',
            'label' => 'LBL_RANK',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'country_code',
            'studio' => 'visible',
            'label' => 'LBL_COUNTRY_CODE',
          ),
          1 => 
          array (
            'name' => 'is_voicemail_allowed',
            'label' => 'LBL_IS_VOICEMAIL_ALLOWED',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'line_number',
            'label' => 'LBL_LINE_NUMBER',
          ),
          1 => 
          array (
            'name' => 'extension',
            'label' => 'LBL_EXTENSION',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
    ),
  ),
);
?>
