<?php
$module_name = 'comite_Spirometry';
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
        ),
      ),
      'lbl_quickcreate_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'forced_vital_capacity',
            'label' => 'LBL_FORCED_VITAL_CAPACITY',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'forced_expiratory_volume',
            'label' => 'LBL_FORCED_EXPIRATORY_VOLUME',
          ),
          1 => 
          array (
            'name' => 'fec_fvc',
            'label' => 'LBL_FEC_FVC',
          ),
        ),
      ),
    ),
  ),
);
?>
