<?php
// created: 2012-08-02 20:16:20
$dictionary["Meeting"]["fields"]["comite_planlocation_meetings"] = array (
  'name' => 'comite_planlocation_meetings',
  'type' => 'link',
  'relationship' => 'comite_planlocation_meetings',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_PLANLOCATION_MEETINGS_FROM_COMITE_PLANLOCATION_TITLE',
  'id_name' => 'comite_planlocation_meetingscomite_planlocation_ida',
);
$dictionary["Meeting"]["fields"]["comite_planlocation_meetings_name"] = array (
  'name' => 'comite_planlocation_meetings_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_PLANLOCATION_MEETINGS_FROM_COMITE_PLANLOCATION_TITLE',
  'save' => true,
  'id_name' => 'comite_planlocation_meetingscomite_planlocation_ida',
  'link' => 'comite_planlocation_meetings',
  'table' => 'comite_planlocation',
  'module' => 'comite_PlanLocation',
  'rname' => 'name',
);
$dictionary["Meeting"]["fields"]["comite_planlocation_meetingscomite_planlocation_ida"] = array (
  'name' => 'comite_planlocation_meetingscomite_planlocation_ida',
  'type' => 'link',
  'relationship' => 'comite_planlocation_meetings',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_PLANLOCATION_MEETINGS_FROM_MEETINGS_TITLE',
);
