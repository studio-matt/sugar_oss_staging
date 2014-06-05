<?php
$module_name = 'comite_MedicationSupplement';
$listViewDefs[$module_name] = array(
        'NAME' => array(
                'width' => '32%',
                'label' => 'LBL_NAME',
                'default' => true,
                'link' => true
        ),
        'TYPE' => array(
                'type' => 'enum',
                'default' => true,
                'studio' => 'visible',
                'label' => 'LBL_TYPE',
                'width' => '10%'
        ),
        'DOSAGE' => array(
                'vname' => 'LBL_DOSAGE',
                'width' => '10%',
                'default' => false
        ),
        'DOSAGE_UNIT' => array(
                'vname' => 'LBL_DOSAGE_UNIT',
                'width' => '10%',
                'default' => false
        ),
        'QUANTITY' => array(
                'vname' => 'LBL_QUANTITY',
                'width' => '10%',
                'default' => false
        ),
        'QUANTITY_UNIT' => array(
                'vname' => 'LBL_QUANTITY_UNIT',
                'width' => '10%',
                'default' => false
        ),
        'ASSIGNED_USER_NAME' => array(
                'width' => '9%',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'module' => 'Employees',
                'id' => 'ASSIGNED_USER_ID',
                'default' => true
        )
);
?>
