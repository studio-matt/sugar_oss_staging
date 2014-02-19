<?php
$module_name='comite_LifeStyle';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'comite_LifeStyle',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'marital_status' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_MARITAL_STATUS',
      'width' => '10%',
    ),
    'have_children' => 
    array (
      'type' => 'radioenum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_HAVE_CHILDREN',
      'width' => '10%',
    ),
    'have_children_notes' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_HAVE_CHILDREN_NOTES',
      'width' => '10%',
      'default' => true,
    ),
    'have_grandchildren' => 
    array (
      'type' => 'radioenum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_HAVE_GRANDCHILDREN',
      'width' => '10%',
    ),
    'have_grandchildren_notes' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_HAVE_GRANDCHILDREN_NOTES',
      'width' => '10%',
      'default' => true,
    ),
    'family_ties' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_FAMILY_TIES',
      'width' => '10%',
      'default' => true,
    ),
    'occupation' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_OCCUPATION',
      'width' => '10%',
      'default' => true,
    ),
    'hobbies' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_HOBBIES',
      'width' => '10%',
      'default' => true,
    ),
    'travel_international' => 
    array (
      'type' => 'radioenum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_TRAVEL_INTERNATIONAL',
      'width' => '10%',
    ),
    'travel_international_notes' => 
    array (
      'type' => 'text',
      'studio' => 'visible',
      'vname' => 'LBL_TRAVEL_INTERNATIONAL_NOTES',
      'sortable' => false,
      'width' => '10%',
      'default' => true,
    ),
    'seatbelt_user' => 
    array (
      'type' => 'radioenum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_SEATBELT_USER',
      'width' => '10%',
    ),
    'have_smoke_detector' => 
    array (
      'type' => 'radioenum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_HAVE_SMOKE_DETECTOR',
      'width' => '10%',
    ),
    'have_carbon_monoxide_detector' => 
    array (
      'type' => 'radioenum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_HAVE_CARBON_MONOXIDE_DETECTOR',
      'width' => '10%',
    ),
    'alcohol_avg_weekly_consumption' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_ALCOHOL_AVG_WEEKLY_CONSUMPTION',
      'width' => '10%',
    ),
    'tobacco_use_current' => 
    array (
      'type' => 'radioenum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_TOBACCO_USE_CURRENT',
      'width' => '10%',
    ),
    'tobacco_use_current_length' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_TOBACCO_USE_CURRENT_LENGTH',
      'width' => '10%',
      'default' => true,
    ),
    'tobacco_use_attempted_quit' => 
    array (
      'type' => 'radioenum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_TOBACCO_USE_ATTEMPTED_QUIT',
      'width' => '10%',
    ),
    'tobacco_use_past' => 
    array (
      'type' => 'radioenum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_TOBACCO_USE_PAST',
      'width' => '10%',
    ),
    'tobacco_use_past_length' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_TOBACCO_USE_PAST_LENGTH',
      'width' => '10%',
      'default' => true,
    ),
    'tobacco_use_past_quit' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_TOBACCO_USE_PAST_QUIT',
      'width' => '10%',
      'default' => true,
    ),
    'stress_under_great_deal' => 
    array (
      'type' => 'radioenum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_STRESS_UNDER_GREAT_DEAL',
      'width' => '10%',
    ),
    'stress_under_great_deal_notes' => 
    array (
      'type' => 'text',
      'studio' => 'visible',
      'vname' => 'LBL_STRESS_UNDER_GREAT_DEAL_NOTES',
      'sortable' => false,
      'width' => '10%',
      'default' => true,
    ),
    'stress_relief_methods' => 
    array (
      'type' => 'multienum',
      'studio' => 'visible',
      'vname' => 'LBL_STRESS_RELIEF_METHODS',
      'width' => '10%',
      'default' => true,
    ),
    'stress_relief_methods_other' => 
    array (
      'type' => 'text',
      'studio' => 'visible',
      'vname' => 'LBL_STRESS_RELIEF_METHODS_OTHER',
      'sortable' => false,
      'width' => '10%',
      'default' => true,
    ),
    'sleep_average_per_night' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_SLEEP_AVERAGE_PER_NIGHT',
      'width' => '10%',
      'default' => true,
    ),
    'sleep_need_per_night' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_SLEEP_NEED_PER_NIGHT',
      'width' => '10%',
      'default' => true,
    ),
    'sleep_wake_fully_rested' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_SLEEP_WAKE_FULLY_RESTED',
      'width' => '10%',
      'default' => true,
    ),
    'sleep_pattern_changes' => 
    array (
      'type' => 'radioenum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_SLEEP_PATTERN_CHANGES',
      'width' => '10%',
    ),
    'sleep_morning_difficult_out' => 
    array (
      'type' => 'radioenum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_SLEEP_MORNING_DIFFICULT_OUT',
      'width' => '10%',
    ),
    'edit_button' => 
    array (
      'widget_class' => 'SubPanelEditButton',
      'module' => 'comite_LifeStyle',
      'width' => '4%',
      'default' => true,
    ),
  ),
);