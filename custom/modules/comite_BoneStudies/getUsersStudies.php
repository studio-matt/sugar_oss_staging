<?php
$user = 'cb7dd82c-6c84-7f56-63fc-502a51ecec9c';

$currentFocus = new comite_BoneStudies();
$currentFocus->retrieve($_REQUEST['id']);

$currentFocus->load_relationship('comite_bonestudies_comite_healthtest');
$healthTest = array_shift($currentFocus->comite_bonestudies_comite_healthtest->beans);

$healthTest->load_relationship('comite_healthtest_contacts');
$user = array_shift($healthTest->comite_healthtest_contacts->beans);

$healthTest->load_relationship('comite_bonestudies_comite_healthtest');
$boneStudies = $healthTest->comite_bonestudies_comite_healthtest->beans;

$data = array();
foreach($boneStudies as $boneStudy) {
  $data[] = array(
    'id'=>$boneStudy->id,
    'name'=>$boneStudy->name,
    'bmd_test_date_previous'            => $boneStudy->bmd_test_date,
    'bmd_ap_spine_previous'             => $boneStudy->bmd_ap_spine,
    'bmd_total_hip_left_previous'       => $boneStudy->bmd_total_hip_left,
    'bmd_total_hip_right_previous'      => $boneStudy->bmd_total_hip_right,
    'bmd_total_forearm_left_previous'   => $boneStudy->bmd_total_forearm_left,
    'bmd_total_forearm_right_previous'  => $boneStudy->bmd_total_forearm_right,
  );
}

$json = getJSONobj();

echo $json->encode($data);