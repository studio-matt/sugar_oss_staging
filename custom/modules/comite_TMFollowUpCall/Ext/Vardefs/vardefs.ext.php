<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-07-30 23:30:02
$dictionary["comite_TMFollowUpCall"]["fields"]["comite_tmfollowupcall_comite_drnotesnutritionexercise"] = array (
  'name' => 'comite_tmfollowupcall_comite_drnotesnutritionexercise',
  'type' => 'link',
  'relationship' => 'comite_tmfollowupcall_comite_drnotesnutritionexercise',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_TMFOLLOWUPCALL_COMITE_DRNOTESNUTRITIONEXERCISE_FROM_COMITE_DRNOTESNUTRITIONEXERCISE_TITLE',
  'id_name' => 'comite_tmf2412xercise_ida',
);
$dictionary["comite_TMFollowUpCall"]["fields"]["comite_tmfollowupcall_comite_drnotesnutritionexercise_name"] = array (
  'name' => 'comite_tmfollowupcall_comite_drnotesnutritionexercise_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_COMITE_TMFOLLOWUPCALL_COMITE_DRNOTESNUTRITIONEXERCISE_FROM_COMITE_DRNOTESNUTRITIONEXERCISE_TITLE',
  'save' => true,
  'id_name' => 'comite_tmf2412xercise_ida',
  'link' => 'comite_tmfollowupcall_comite_drnotesnutritionexercise',
  'table' => 'comite_drnotesnutritionexercise',
  'module' => 'comite_DrNotesNutritionExercise',
  'rname' => 'name',
);
$dictionary["comite_TMFollowUpCall"]["fields"]["comite_tmf2412xercise_ida"] = array (
  'name' => 'comite_tmf2412xercise_ida',
  'type' => 'link',
  'relationship' => 'comite_tmfollowupcall_comite_drnotesnutritionexercise',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_COMITE_TMFOLLOWUPCALL_COMITE_DRNOTESNUTRITIONEXERCISE_FROM_COMITE_TMFOLLOWUPCALL_TITLE',
);

?>