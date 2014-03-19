<?php
// created: 2012-08-02 20:16:21
$dictionary["Meeting"]["fields"]["comite_planmisc_meetings"] = array (
  'name' => 'comite_planmisc_meetings',
  'type' => 'link',
  'relationship' => 'comite_planmisc_meetings',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_PLANMISC_MEETINGS_FROM_COMITE_PLANMISC_TITLE',
  'id_name' => 'comite_planmisc_meetingscomite_planmisc_ida',
);
$dictionary["Meeting"]["fields"]["comite_planmisc_meetings_name"] = array (
  'name' => 'comite_planmisc_meetings_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_PLANMISC_MEETINGS_FROM_COMITE_PLANMISC_TITLE',
  'save' => true,
  'id_name' => 'comite_planmisc_meetingscomite_planmisc_ida',
  'link' => 'comite_planmisc_meetings',
  'table' => 'comite_planmisc',
  'module' => 'comite_PlanMisc',
  'rname' => 'name',
);
$dictionary["Meeting"]["fields"]["comite_planmisc_meetingscomite_planmisc_ida"] = array (
  'name' => 'comite_planmisc_meetingscomite_planmisc_ida',
  'type' => 'link',
  'relationship' => 'comite_planmisc_meetings',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_PLANMISC_MEETINGS_FROM_MEETINGS_TITLE',
);
