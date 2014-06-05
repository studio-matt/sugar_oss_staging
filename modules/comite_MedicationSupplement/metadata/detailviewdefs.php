<?php
$module_name = 'comite_MedicationSupplement';
$viewdefs[$module_name] = array(
        'DetailView' => array(
                'templateMeta' => array(
                        'form' => array(
                                'buttons' => array(
                                        0 => 'EDIT',
                                        1 => 'DUPLICATE',
                                        2 => 'DELETE',
                                        3 => 'FIND_DUPLICATES'
                                )
                        ),
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
                        'useTabs' => false,
                        'syncDetailEditViews' => true
                ),
                'panels' => array(
                        'default' => array(
                                0 => array(
                                        0 => 'name',
                                        1 => array(
                                                'name' => 'type',
                                                'studio' => 'visible',
                                                'label' => 'LBL_TYPE'
                                        )
                                ),
                                1 => array(
                                        0 => array(
                                                'name' => 'dosage'
                                        ),
                                        1 => array(
                                                'name' => 'dosage_unit'
                                        )
                                ),
                                2 => array(
                                        0 => array(
                                                'name' => 'quantity'
                                        ),
                                        1 => array(
                                                'name' => 'quantity_unit'
                                        )
                                )
                        )
                )
        )
);
?>
