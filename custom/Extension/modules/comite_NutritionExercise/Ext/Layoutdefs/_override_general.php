<?php

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