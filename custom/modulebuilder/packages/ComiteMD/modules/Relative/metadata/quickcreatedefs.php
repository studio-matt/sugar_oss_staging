<?php
$module_name = 'comite_Relative';
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
            'name' => 'relation',
            'studio' => 'visible',
            'label' => 'LBL_RELATION',
          ),
          1 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_born',
            'label' => 'LBL_DATE_BORN',
          ),
          1 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'studio' => 'visible',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'is_deceased',
            'label' => 'LBL_IS_DECEASED',
          ),
          1 => 
          array (
            'name' => 'date_deceased',
            'label' => 'LBL_DATE_DECEASED',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'deceased_explanation',
            'studio' => 'visible',
            'label' => 'LBL_DECEASED_EXPLANATION',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
