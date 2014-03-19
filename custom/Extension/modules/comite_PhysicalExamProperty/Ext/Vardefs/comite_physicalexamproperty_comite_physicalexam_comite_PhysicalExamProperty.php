<?php
// created: 2012-07-30 18:34:01
$dictionary["comite_PhysicalExamProperty"]["fields"]["comite_physicalexamproperty_comite_physicalexam"] = array (
  'name' => 'comite_physicalexamproperty_comite_physicalexam',
  'type' => 'link',
  'relationship' => 'comite_physicalexamproperty_comite_physicalexam',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_PHYSICALEXAMPROPERTY_COMITE_PHYSICALEXAM_FROM_COMITE_PHYSICALEXAM_TITLE',
  'id_name' => 'comite_phy93fccalexam_ida',
);
$dictionary["comite_PhysicalExamProperty"]["fields"]["comite_physicalexamproperty_comite_physicalexam_name"] = array (
  'name' => 'comite_physicalexamproperty_comite_physicalexam_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_PHYSICALEXAMPROPERTY_COMITE_PHYSICALEXAM_FROM_COMITE_PHYSICALEXAM_TITLE',
  'save' => true,
  'id_name' => 'comite_phy93fccalexam_ida',
  'link' => 'comite_physicalexamproperty_comite_physicalexam',
  'table' => 'comite_physicalexam',
  'module' => 'comite_PhysicalExam',
  'rname' => 'name',
);
$dictionary["comite_PhysicalExamProperty"]["fields"]["comite_phy93fccalexam_ida"] = array (
  'name' => 'comite_phy93fccalexam_ida',
  'type' => 'link',
  'relationship' => 'comite_physicalexamproperty_comite_physicalexam',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_PHYSICALEXAMPROPERTY_COMITE_PHYSICALEXAM_FROM_COMITE_PHYSICALEXAMPROPERTY_TITLE',
);
