<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2012-07-13 11:30:19
$layout_defs["comite_NutritionExercise"]["subpanel_setup"]['comite_fitnessactivity_comite_nutritionexercise'] = array (
  'order' => 100,
  'module' => 'comite_FitnessActivity',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_COMITE_FITNESSACTIVITY_COMITE_NUTRITIONEXERCISE_FROM_COMITE_FITNESSACTIVITY_TITLE',
  'get_subpanel_data' => 'comite_fitnessactivity_comite_nutritionexercise',
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


 // created: 2012-07-13 11:30:29
$layout_defs["comite_NutritionExercise"]["subpanel_setup"]['comite_exercisesummary_comite_nutritionexercise'] = array (
  'order' => 100,
  'module' => 'comite_ExerciseSummary',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_COMITE_EXERCISESUMMARY_COMITE_NUTRITIONEXERCISE_FROM_COMITE_EXERCISESUMMARY_TITLE',
  'get_subpanel_data' => 'comite_exercisesummary_comite_nutritionexercise',
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


 // created: 2012-07-13 11:30:15
$layout_defs["comite_NutritionExercise"]["subpanel_setup"]['comite_nutritionalintake_comite_nutritionexercise'] = array (
  'order' => 100,
  'module' => 'comite_NutritionalIntake',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_COMITE_NUTRITIONALINTAKE_COMITE_NUTRITIONEXERCISE_FROM_COMITE_NUTRITIONALINTAKE_TITLE',
  'get_subpanel_data' => 'comite_nutritionalintake_comite_nutritionexercise',
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



$layout_defs["comite_NutritionExercise"]["subpanel_setup"]['comite_exercisesummary_comite_nutritionexercise'] ['order'] = 100;
$layout_defs["comite_NutritionExercise"]["subpanel_setup"]['comite_fitnessactivity_comite_nutritionexercise'] ['order'] = 101;
$layout_defs["comite_NutritionExercise"]["subpanel_setup"]['comite_nutrionalsummary_comite_nutritionexercise'] ['order'] = 102;
$layout_defs["comite_NutritionExercise"]["subpanel_setup"]['comite_nutritionalintake_comite_nutritionexercise'] ['order'] = 103;





# Change Default Order
$data = array(
    'sort_order' => 'desc',
    'sort_by' => 'answer',
);

$layout_defs["comite_NutritionExercise"]["subpanel_setup"]['comite_exercisesummary_comite_nutritionexercise'] =
array_merge($layout_defs["comite_NutritionExercise"]["subpanel_setup"]['comite_exercisesummary_comite_nutritionexercise'], $data);

$layout_defs["comite_NutritionExercise"]["subpanel_setup"]['comite_fitnessactivity_comite_nutritionexercise'] =
array_merge($layout_defs["comite_NutritionExercise"]["subpanel_setup"]['comite_fitnessactivity_comite_nutritionexercise'], $data);

$layout_defs["comite_NutritionExercise"]["subpanel_setup"]['comite_nutrionalsummary_comite_nutritionexercise'] =
array_merge($layout_defs["comite_NutritionExercise"]["subpanel_setup"]['comite_nutrionalsummary_comite_nutritionexercise'], $data);
?>