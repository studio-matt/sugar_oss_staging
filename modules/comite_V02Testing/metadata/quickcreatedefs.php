<?php
$module_name = 'comite_V02Testing';
$viewdefs[$module_name] = array(
        'QuickCreate' => array(
                'templateMeta' => array(
                        'maxColumns' => '2',
                        'widths' => array(
                                0 => array(
                                        'label' => '10',
                                        'field' => '30'
                                ),
                                1 => array(
                                        'label' => '10',
                                        'field' => '30'
                                )
                        ),
                        'useTabs' => false
                ),
                'panels' => array(
                        'default' => array(
                                0 => array(
                                        0 => 'document_name'
                                ),
                                1 => array(
                                        0 => array(
                                                'name' => 'description',
                                                'comment' => 'Full text of the note',
                                                'studio' => 'visible',
                                                'label' => 'LBL_DESCRIPTION'
                                        )
                                )
                        ),
                        'lbl_quickcreate_panel1' => array(
                                0 => array(
                                        0 => array(
                                                'name' => 'v02max',
                                                'label' => 'LBL_V02MAX'
                                        ),
                                        1 => array(
                                                'name' => 'incline',
                                                'label' => 'LBL_INCLINE'
                                        )
                                ),
                                1 => array(
                                        0 => array(
                                                'name' => 'restrate',
                                                'label' => 'LBL_RESTRATE'
                                        ),
                                        1 => array(
                                                'name' => 'rer',
                                                'label' => 'LBL_RER'
                                        )
                                ),
                                2 => array(
                                        0 => array(
                                                'name' => 'maxrate',
                                                'label' => 'LBL_MAXRATE'
                                        ),
                                        1 => array(
                                                'name' => 'speed',
                                                'label' => 'LBL_SPEED'
                                        )
                                ),
                                3 => array(
                                        0 => array(
                                                'name' => 'ventilation',
                                                'label' => 'LBL_VENTILATION'
                                        ),
                                        1 => array(
                                                'name' => 'work_rate',
                                                'label' => 'LBL_WORK_RATE'
                                        )
                                )
                        ),
                        'lbl_editview_panel2' => array(
                                0 => array(
                                        0 => array(
                                                'name' => 'uploadfile'
                                        )
                                )
                        )
                )
        )
);
?>
