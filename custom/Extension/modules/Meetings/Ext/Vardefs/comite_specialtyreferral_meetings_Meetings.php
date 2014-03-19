<?php
// created: 2012-08-15 17:36:42
$dictionary["Meeting"]["fields"]["comite_specialtyreferral_meetings"] = array (
  'name' => 'comite_specialtyreferral_meetings',
  'type' => 'link',
  'relationship' => 'comite_specialtyreferral_meetings',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_SPECIALTYREFERRAL_MEETINGS_FROM_COMITE_SPECIALTYREFERRAL_TITLE',
  'id_name' => 'comite_specialtyreferral_meetingscomite_specialtyreferral_ida',
);
$dictionary["Meeting"]["fields"]["comite_specialtyreferral_meetings_name"] = array (
  'name' => 'comite_specialtyreferral_meetings_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_SPECIALTYREFERRAL_MEETINGS_FROM_COMITE_SPECIALTYREFERRAL_TITLE',
  'save' => true,
  'id_name' => 'comite_specialtyreferral_meetingscomite_specialtyreferral_ida',
  'link' => 'comite_specialtyreferral_meetings',
  'table' => 'comite_specialtyreferral',
  'module' => 'comite_SpecialtyReferral',
  'rname' => 'name',
);
$dictionary["Meeting"]["fields"]["comite_specialtyreferral_meetingscomite_specialtyreferral_ida"] = array (
  'name' => 'comite_specialtyreferral_meetingscomite_specialtyreferral_ida',
  'type' => 'link',
  'relationship' => 'comite_specialtyreferral_meetings',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_SPECIALTYREFERRAL_MEETINGS_FROM_MEETINGS_TITLE',
);
