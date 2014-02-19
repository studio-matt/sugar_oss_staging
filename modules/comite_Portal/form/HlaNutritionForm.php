<?php
include_once(dirname(__FILE__).'/HlaForm.php');

class HlaNutritionForm extends HlaForm {
  public function __construct($user) {
    parent::__construct($user);

    /**
     * Populate Data Needed for Form
     */

    # Populate: comite_NutritionExercise -  one2one, not present until we create it here
    $this->contact->get_linked_beans('comite_nutritionexercise_contacts', 'comite_NutritionExercise');
    if (isset($this->contact->comite_nutritionexercise_contacts) && count($this->contact->comite_nutritionexercise_contacts->beans)) {
      $this->nutrition_exercise = $this->contact->comite_nutritionexercise_contacts->beans[reset(array_keys($this->contact->comite_nutritionexercise_contacts->beans))];
    } else {
      $this->nutrition_exercise = new comite_NutritionExercise();
      $this->nutrition_exercise->name = $this->contact->name . "'s Nutrition & Exercise";
      $this->nutrition_exercise->save();
    }

    # Populate: comite_ExerciseSummary
    $this->nutrition_exercise->get_linked_beans('comite_exercisesummary_comite_nutritionexercise', 'comite_ExerciseSummary');
    foreach($GLOBALS['app_list_strings']['exercise_summary_list'] as $value => $name) {
      $saved_object = null;
      if(isset($this->nutrition_exercise->comite_exercisesummary_comite_nutritionexercise) && count($this->nutrition_exercise->comite_exercisesummary_comite_nutritionexercise->beans)) { # User has these saved
        foreach($this->nutrition_exercise->comite_exercisesummary_comite_nutritionexercise->beans as $object) {
          if($object->name == $value) {
            $saved_object = $object;
            break;
          }
        }
      }
      if(!$saved_object) {
         $saved_object = new comite_ExerciseSummary();
         $saved_object->name = $value;
         $saved_object->answer = '0';
         $saved_object->description = '';
      }
      $this->exercisesummary[] = $saved_object;
    }

    # Populate: comite_FitnessActivity
    $this->nutrition_exercise->get_linked_beans('comite_fitnessactivity_comite_nutritionexercise', 'comite_FitnessActivity');
    foreach($GLOBALS['app_list_strings']['fitness_accessment_list'] as $value => $name) {
      $saved_object = null;
      if(isset($this->nutrition_exercise->comite_fitnessactivity_comite_nutritionexercise) && count($this->nutrition_exercise->comite_fitnessactivity_comite_nutritionexercise->beans)) { # User has these saved
        foreach($this->nutrition_exercise->comite_fitnessactivity_comite_nutritionexercise->beans as $object) {
          if($object->name == $value) {
            $saved_object = $object;
            break;
          }
        }
      }
      if(!$saved_object) {
         $saved_object = new comite_FitnessActivity();
         $saved_object->name = $value;
         $saved_object->answer = '';
      }
      $this->fitnessactivity[] = $saved_object;
    }

    # Populate: comite_NutritionalSummary
    $this->nutrition_exercise->get_linked_beans('comite_nutrionalsummary_comite_nutritionexercise', 'comite_NutrionalSummary');
    foreach($GLOBALS['app_list_strings']['nutritional_summary_list'] as $value => $name) {
      $saved_object = null;
      if(isset($this->nutrition_exercise->comite_nutrionalsummary_comite_nutritionexercise) && count($this->nutrition_exercise->comite_nutrionalsummary_comite_nutritionexercise->beans)) { # User has these saved
        foreach($this->nutrition_exercise->comite_nutrionalsummary_comite_nutritionexercise->beans as $object) {
          if($object->name == $value) {
            $saved_object = $object;
            break;
          }
        }
      }
      if(!$saved_object) {
         $saved_object = new comite_NutrionalSummary();
         $saved_object->name = $value;
         $saved_object->answer = '';
      }
      $this->nutrionalsummary[] = $saved_object;
    }

    # Populate: comite_NutritionalIntake - Healthiest
    $this->nutrition_exercise->get_linked_beans('comite_nutritionalintake_comite_nutritionexercise', 'comite_NutritionalIntake');
    foreach($GLOBALS['app_list_strings']['meals_list'] as $value => $name) {
      $saved_object = null;
      if(isset($this->nutrition_exercise->comite_nutritionalintake_comite_nutritionexercise) && count($this->nutrition_exercise->comite_nutritionalintake_comite_nutritionexercise->beans)) { # User has these saved
        foreach($this->nutrition_exercise->comite_nutritionalintake_comite_nutritionexercise->beans as $object) {
          if($object->name == $value && $object->day_type == 'Healthiest') {
            $saved_object = $object;
            break;
          }
        }

      }
      if(!$saved_object) {
         $saved_object = new comite_NutritionalIntake();
         $saved_object->name = $value;
         $saved_object->food = '';
         $saved_object->portion_size = '';
         $saved_object->day_type = 'Healthiest';
      }
      $this->nutritionalintake[] = $saved_object;
    }

    # Populate: comite_NutritionalIntake - UnHealthiest
    $this->nutrition_exercise->get_linked_beans('comite_nutritionalintake_comite_nutritionexercise', 'comite_NutritionalIntake');
    foreach($GLOBALS['app_list_strings']['meals_list'] as $value => $name) {
      $saved_object = null;
      if(isset($this->nutrition_exercise->comite_nutritionalintake_comite_nutritionexercise) && count($this->nutrition_exercise->comite_nutritionalintake_comite_nutritionexercise->beans)) { # User has these saved
        foreach($this->nutrition_exercise->comite_nutritionalintake_comite_nutritionexercise->beans as $object) {
          if($object->name == $value && $object->day_type == 'UnHealthiest') {
            $saved_object = $object;
            break;
          }
        }

      }
      if(!$saved_object) {
         $saved_object = new comite_NutritionalIntake();
         $saved_object->name = $value;
         $saved_object->food = '';
         $saved_object->portion_size = '';
         $saved_object->day_type = 'UnHealthiest';
      }
      $this->nutritionalintake[] = $saved_object;
    }
  }

  public function process() {
    if ($this->has('user__record') && $this->get('user__record') == $this->user->id) {

      /**
       * Pre-Process the form fields and make any transformations that need to happen
       */

      # PreProcess: comite_ExerciseSummary - make one notes field from 3 for
       if(isset($_REQUEST['exercisesummary'])) {
      foreach($_REQUEST['exercisesummary'] as $key => $object) {
        if($object['name'] == 'Aerobic exercises' && $_REQUEST['exercisesummary'][$key]['answer']!='0') {
          if(isset($_REQUEST['exercisesummary'][$key]['description_extra'])) {
            $_REQUEST['exercisesummary'][$key]['description'] =<<<EOF
  {$_REQUEST['exercisesummary'][$key]['description']}

Intensity  of Aeorbic Exercise: {$_REQUEST['exercisesummary'][$key]['description_extra']}
EOF;
          } else {
            $this->error('exercisesummary__'.$key.'__description_extra', 'You must select an intensity level.');
          }
          break;
        }
      }
     }

       # PreProcess: comite_FitnessActivity - make one notes field from 3 for
       if(isset($_REQUEST['fitnessactivity'])) {
      foreach($_REQUEST['fitnessactivity'] as $key => $object) {
        if($object['name'] == 'Are you currently a member of a health club' && $_REQUEST['fitnessactivity'][$key]['answer']!='no') {
          if(isset($_REQUEST['fitnessactivity'][$key]['currently_a_member']) && $_REQUEST['fitnessactivity'][$key]['currently_a_member'] != '') {
            $_REQUEST['fitnessactivity'][$key]['description'] =<<<EOF
  {$_REQUEST['fitnessactivity'][$key]['description']}

Currently a member: {$_REQUEST['fitnessactivity'][$key]['currently_a_member']}
EOF;
          } else {
            $this->error('fitnessactivity__'.$key.'__currently_a_member', 'You must enter how long have you been a member of this health club.');
          }
        }
        if($object['name'] == 'Are you currently working out with a personal trainer' && $_REQUEST['fitnessactivity'][$key]['answer']!='no') {
          if($_REQUEST['fitnessactivity'][$key]['description'] == '') {
            $this->error('fitnessactivity__'.$key.'__description', 'You must describe your current work out with a personal trainer.');
            $rerror = '1';
          }
          if($_REQUEST['fitnessactivity'][$key]['how_long_work_out'] == '') {
            $this->error('fitnessactivity__'.$key.'__how_long_work_out', 'You must enter how long you have been working out.');
            $rerror = '1';
          }

            $_REQUEST['fitnessactivity'][$key]['description'] =<<<EOF
  {$_REQUEST['fitnessactivity'][$key]['description']}

Personal Trainer A: {$_REQUEST['fitnessactivity'][$key]['how_long_work_out']}
EOF;
        break;
        }
       }
      }
      /**
       *Bind and Validate the data to the form
       */

      # BindAndValidate: comite_NutritionExercise
      $this->bind($this->nutrition_exercise, array(
        'nutrition_exercise__exercise_injury_year' => array(
          'name' => 'exercise_injury_year',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must enter an answer.'
            ),
          ),
        ),
        'nutrition_exercise__exercise_injury_year_describe' => array(
          'name' => 'exercise_injury_year_describe',
          'validators' => array(
            array(
              'callable'      => 'ComiteForm::validateRequiredIf',
              'message'       => 'You must describe your injury.',
              'field'         => 'nutrition_exercise__exercise_injury_year',
              'field_answer'  => 'yes',
            ),
          ),
        ),
        'nutrition_exercise__exercise_injury_result' => array(
          'name' => 'exercise_injury_result',
          'validators' => array(
            array(
              'callable'      => 'ComiteForm::validateRequiredIf',
              'message'       => 'You must explain if injurty was result of exercising.',
              'field'         => 'nutrition_exercise__exercise_injury_year',
              'field_answer'  => 'yes',
            ),
          ),
        ),
        'nutrition_exercise__exercise_injury_stop_regimen' => array(
          'name' => 'exercise_injury_stop_regimen',
          'validators' => array(
            array(
              'callable'      => 'ComiteForm::validateRequiredIf',
              'message'       => 'You must state if you had to moify or stop exercise regimen.',
              'field'         => 'nutrition_exercise__exercise_injury_year',
              'field_answer'  => 'yes',
            ),
          ),
        ),
        'nutrition_exercise__exercise_injury_stop_period' => array(
          'name' => 'exercise_injury_stop_period',
          'validators' => array(
            array(
              'callable'      => 'ComiteForm::validateRequiredIf',
              'message'       => 'You must state for what period of time you stopped exercising.',
              'field'         => 'nutrition_exercise__exercise_injury_stop_regimen',
              'field_answer'  => 'yes',
            ),
          ),
        ),
        'nutrition_exercise__nutrition_tea_cups_per_day' => array(
          'name' => 'nutrition_tea_cups_per_day',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must enter an answer.'
            ),
          ),
        ),
        'nutrition_exercise__nutrition_coffee_cups_per_day' => array(
          'name' => 'nutrition_coffee_cups_per_day',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must enter an answer.'
            ),
          ),
        ),
        'nutrition_exercise__nutrition_diet_soda_cups_per_day' => array(
          'name' => 'nutrition_diet_soda_cups_per_day',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must enter an answer.'
            ),
          ),
        ),
        'nutrition_exercise__nutrition_water_cups_per_day' => array(
          'name' => 'nutrition_water_cups_per_day',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must enter an answer.'
            ),
          ),
        ),
        'nutrition_exercise__nutrition_high_sugar_per_day' => array(
          'name' => 'nutrition_high_sugar_per_day',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must enter an answer.'
            ),
          ),
        ),
        'nutrition_exercise__nutrition_alcoholic_servings_per_day' => array(
          'name' => 'nutrition_alcoholic_servings_per_day',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must enter an answer.'
            ),
          ),
        ),
        'nutrition_exercise__nutrition_days_per_week_healthiest' => array(
          'name' => 'nutrition_days_per_week_healthiest',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must select how many days per week reflect your healthiest.'
            ),
          ),
        ),
        'nutrition_exercise__nutrition_days_per_week_unhealthiest' => array(
          'name' => 'nutrition_days_per_week_unhealthiest',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must select how many days per week reflect your unhealthiest.'
            ),
          ),
        ),
        'nutrition_exercise__nutrition_foods_overeaten' => array(
          'name' => 'nutrition_foods_overeaten',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must enter specific problem foods you consistently overeat.'
            ),
          ),
        ),
        'nutrition_exercise__nutrition_situational_overeating' => array(
          'name' => 'nutrition_situational_overeating',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must enter situations, moods, or occasions that cause you to eat or drink more than you should.'
            ),
          ),
        ),
        'nutrition_exercise__exercise_not_weekly_reasons' => array(
          'name' => 'exercise_not_weekly_reasons',
        )
      ));

      # BindAndValidate: comite_ExerciseSummary
      $this->bindOneToMany('exercisesummary', 'exercisesummary', 'comite_ExerciseSummary', array(
        'name' => array(
            'validators' => array(
                array(
                    'callable' => 'ComiteForm::validateRequired',
                    'message' => 'You must enter a name.'
                ),
            ),
        ),
        'answer' => array(
            'validators' => array(
                array(
                    'callable' => 'ComiteForm::validateRequired',
                    'message' => 'You must select an answer.'
                ),
            ),
        ),
        'description' => array(
            'validators' => array(),
        ),
      ));

      # BindAndValidate: comite_FitnessActivity
      $this->bindOneToMany('fitnessactivity', 'fitnessactivity', 'comite_FitnessActivity', array(
        'name' => array(
            'validators' => array(
                array(
                    'callable' => 'ComiteForm::validateRequired',
                    'message' => 'You must enter a name.'
                ),
            ),
        ),
        'answer' => array(
            'validators' => array(
                array(
                    'callable' => 'ComiteForm::validateRequired',
                    'message' => 'You must select an answer.'
                ),
            ),
        ),
        'description' => array(
            'validators' => array(
            ),
        ),
      ));

      # BindAndValidate: comite_NutrionalSummary
      $this->bindOneToMany('nutrionalsummary', 'nutrionalsummary', 'comite_NutrionalSummary', array(
        'name' => array(
            'validators' => array(
                array(
                    'callable' => 'ComiteForm::validateRequired',
                    'message' => 'You must enter a name.'
                ),
            ),
        ),
        'answer' => array(
            'validators' => array(
                array(
                    'callable' => 'ComiteForm::validateRequired',
                    'message' => 'You must select an answer.'
                ),
            ),
        ),
        'description' => array(
            'validators' => array(
            ),
        ),
      ));

      # BindAndValidate: comite_NutritionalIntake
      $this->bindOneToMany('nutritionalintake', 'nutritionalintake', 'comite_NutritionalIntake', array(
        'name' => array(
            'validators' => array(
                array(
                    'callable' => 'ComiteForm::validateRequired',
                    'message' => 'You must enter a name.'
                ),
            ),
        ),
        'time' => array(),
        'day_type' => array(),
        'food' => array(
            'validators' => array(
                array(
                    'callable' => 'ComiteForm::validateRequiredIfNotBlank',
                    'message' => 'You must enter a food item.',
                    'field'         => 'time',
                ),
            ),
        ),
        'portion_size' => array(
            'validators' => array(
                array(
                    'callable' => 'ComiteForm::validateRequiredIfNotBlank',
                    'message' => 'You must enter a portion size or estimation.',
                    'field'         => 'time',
                ),
            ),
        ),
      ));

      /**
       * Save all the data from this form
       */
      if (ComiteForm::SAVE_FORM_EVEN_ON_ERROR || !$this->errors) {

        # Save: comite_NutritionExercise
        $this->nutrition_exercise->save();
        $this->contact->comite_nutritionexercise_contacts->add($this->nutrition_exercise);

        # Save: comite_ExerciseSummary
        foreach($this->exercisesummary as $object) {
          $object->save();
          $this->nutrition_exercise->comite_exercisesummary_comite_nutritionexercise->add($object);
        }

        # Save: comite_FitnessActivity.
        foreach($this->fitnessactivity as $object) {
          $object->save();
          $this->nutrition_exercise->comite_fitnessactivity_comite_nutritionexercise->add($object);
        }

        # Save: comite_NutrionalSummary
        foreach($this->nutrionalsummary as $object) {
          $object->save();
          $this->nutrition_exercise->comite_nutrionalsummary_comite_nutritionexercise->add($object);
        }

        # Save: comite_NutrionalIntake.
        foreach($this->nutritionalintake as $object) {
          $object->save();
          $this->nutrition_exercise->comite_nutritionalintake_comite_nutritionexercise->add($object);
        }

        # Save: Contact
        if(!$this->errors) {
            $this->contact->hla_survey_step_c = 'hla_complete';
        }
        $this->contact->save();
      }
    }

    return parent::process();
  }
}
