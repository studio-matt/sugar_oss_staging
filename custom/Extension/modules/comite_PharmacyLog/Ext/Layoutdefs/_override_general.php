<?php

$data = array(
    'sort_order' => 'desc',
    'sort_by' => 'prescription_date',
);


$layout_defs["comite_PharmacyLog"]["subpanel_setup"]['comite_pharmacymedicine_comite_pharmacylog'] =
array_merge($layout_defs["comite_PharmacyLog"]["subpanel_setup"]['comite_pharmacymedicine_comite_pharmacylog'], $data);