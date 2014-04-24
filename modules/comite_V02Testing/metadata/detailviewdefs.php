<?php
$module_name = 'comite_V02Testing';
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
    ),
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
      'lbl_detailview_panel1' =>
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
      'lbl_detailview_panel3' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'uploadfile',
            'displayParams' =>
            array (
              'link' => 'uploadfile',
              'id' => 'id',
            ),
          ),
        ),
      ),
      'lbl_detailview_panel2' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 =>
          array (
            'name' => 'date_modified',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
    ),
  ),
);
?>
