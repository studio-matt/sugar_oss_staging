<?php
 // created: 2012-07-13 11:30:16
$layout_defs["comite_NutritionExercise"]["subpanel_setup"]['comite_nutrionalsummary_comite_nutritionexercise'] = array (
  'order' => 100,
  'module' => 'comite_NutrionalSummary',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_COMITE_NUTRIONALSUMMARY_COMITE_NUTRITIONEXERCISE_FROM_COMITE_NUTRIONALSUMMARY_TITLE',
  'get_subpanel_data' => 'comite_nutrionalsummary_comite_nutritionexercise',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
