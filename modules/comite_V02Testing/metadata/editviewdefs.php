<?php
$module_name = 'comite_V02Testing';
$viewdefs [$module_name] =
array (
  'EditView' =>
  array (
    'templateMeta' =>
    array (
      'form' =>
      array (
        'enctype' => 'multipart/form-data',
        'hidden' =>
        array (
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
      'syncDetailEditViews' => false,
    ),
      'javascript' => '{sugar_getscript file="include/javascript/popup_parent_helper.js"}
	{sugar_getscript file="cache/include/javascript/sugar_grp_jsolait.js"}
	{sugar_getscript file="modules/Documents/documents.js"}',
    'panels' =>
    array (
      'default' =>
      array (
        0 =>
        array (
          0 => 'document_name',
        ),
        1 =>
        array (
          0 => 'description',
          1 => '',
        ),
        2 =>
        array (
          0 =>
          array (
            'name' => 'comite_v02testing_comite_drnotesnutritionexercise_name',
          ),
        ),
      ),
      'lbl_editview_panel1' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'v02max',
            'label' => 'LBL_V02MAX',
          ),
          1 =>
          array (
            'name' => 'incline',
            'label' => 'LBL_INCLINE',
          ),
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'restrate',
            'label' => 'LBL_RESTRATE',
          ),
          1 =>
          array (
            'name' => 'rer',
            'label' => 'LBL_RER',
          ),
        ),
        2 =>
        array (
          0 =>
          array (
            'name' => 'maxrate',
            'label' => 'LBL_MAXRATE',
          ),
          1 =>
          array (
            'name' => 'speed',
            'label' => 'LBL_SPEED',
          ),
        ),
        3 =>
        array (
          0 =>
          array (
            'name' => 'ventilation',
            'label' => 'LBL_VENTILATION',
          ),
          1 =>
          array (
            'name' => 'work_rate',
            'label' => 'LBL_WORK_RATE',
          ),
        ),
      ),
      'lbl_editview_panel2' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'uploadfile',
          ),
        ),
      ),
    ),
  ),
);
?>
