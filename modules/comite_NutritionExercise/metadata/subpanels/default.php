<?php
$module_name='comite_NutritionExercise';
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
      'popup_module' => 'comite_NutritionExercise',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '45%',
      'default' => true,
    ),
    'nutrition_tea_cups_per_day' => 
    array (
      'type' => 'varchar',
      'default' => true,
      'vname' => 'LBL_NUTRITION_TEA_CUPS_PER_DAY',
      'width' => '10%',
    ),
    'nutrition_coffee_cups_per_day' => 
    array (
      'type' => 'varchar',
      'default' => true,
      'vname' => 'LBL_NUTRITION_COFFEE_CUPS_PER_DAY',
      'width' => '10%',
    ),
    'nutrition_diet_soda_cups_per_day' => 
    array (
      'type' => 'varchar',
      'default' => true,
      'vname' => 'LBL_NUTRITION_DIET_SODA_CUPS_PER_DAY',
      'width' => '10%',
    ),
    'nutrition_water_cups_per_day' => 
    array (
      'type' => 'varchar',
      'default' => true,
      'vname' => 'LBL_NUTRITION_WATER_CUPS_PER_DAY',
      'width' => '10%',
    ),
    'nutrition_high_sugar_per_day' => 
    array (
      'type' => 'varchar',
      'default' => true,
      'vname' => 'LBL_NUTRITION_HIGH_SUGAR_PER_DAY',
      'width' => '10%',
    ),
    'nutrition_alcoholic_servings_per_day' => 
    array (
      'type' => 'varchar',
      'default' => true,
      'vname' => 'LBL_NUTRITION_ALCOHOLIC_SERVINGS_PER_DAY',
      'width' => '10%',
    ),
    'nutrition_general_diet' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_NUTRITION_GENERAL_DIET',
      'width' => '10%',
    ),
    'nutrition_days_per_week_healthiest' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_NUTRITION_DAYS_PER_WEEK_HEALTHIEST',
      'width' => '10%',
    ),
    'nutrition_days_per_week_unhealthiest' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_NUTRITION_DAYS_PER_WEEK_UNHEALTHIEST',
      'width' => '10%',
    ),
    'nutrition_foods_overeaten' => 
    array (
      'type' => 'varchar',
      'default' => true,
      'vname' => 'LBL_NUTRITION_FOODS_OVEREATEN',
      'width' => '10%',
    ),
    'nutrition_situational_overeating' => 
    array (
      'type' => 'varchar',
      'default' => true,
      'vname' => 'LBL_NUTRITION_SITUATIONAL_OVEREATING',
      'width' => '10%',
    ),
    'exercise_injury_year' => 
    array (
      'type' => 'radioenum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_EXERCISE_INJURY_YEAR',
      'width' => '10%',
    ),
    'exercise_injury_year_describe' => 
    array (
      'type' => 'text',
      'studio' => 'visible',
      'vname' => 'LBL_EXERCISE_INJURY_YEAR_DESCRIBE',
      'sortable' => false,
      'width' => '10%',
      'default' => true,
    ),
    'exercise_injury_result' => 
    array (
      'type' => 'radioenum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_EXERCISE_INJURY_RESULT',
      'width' => '10%',
    ),
    'exercise_injury_stop_regimen' => 
    array (
      'type' => 'radioenum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_EXERCISE_INJURY_STOP_REGIMEN',
      'width' => '10%',
    ),
    'exercise_injury_stop_period' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_EXERCISE_INJURY_STOP_PERIOD',
      'width' => '10%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'widget_class' => 'SubPanelEditButton',
      'module' => 'comite_NutritionExercise',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'comite_NutritionExercise',
      'width' => '5%',
      'default' => true,
    ),
  ),
);