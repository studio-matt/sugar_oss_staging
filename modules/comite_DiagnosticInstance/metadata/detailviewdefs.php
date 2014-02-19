<?php
$module_name = 'comite_DiagnosticInstance';
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
          1 => 
          array (
            'name' => 'comite_diagnosticinstance_comite_personalhealthhistory_name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'dates',
            'label' => 'LBL_DATES',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'results',
            'label' => 'LBL_RESULTS',
          ),
          1 => 'description',
        ),
      ),
    ),
  ),
);
?>
