<?php
include_once(dirname(__FILE__).'/HlaForm.php');

class HlaLifestyleForm extends HlaForm {
  public function __construct($user) {
    parent::__construct($user);

    /**
     * Populate Data Needed for Form
     */

    # Populate: comite_LifeStyle -  one2one, not present until we create it here
    $this->contact->get_linked_beans('comite_lifestyle_contacts', 'comite_LifeStyle');
    if (isset($this->contact->comite_lifestyle_contacts) && count($this->contact->comite_lifestyle_contacts->beans)) {
      $this->life_style = $this->contact->comite_lifestyle_contacts->beans[reset(array_keys($this->contact->comite_lifestyle_contacts->beans))];
    } else {
      $this->life_style = new comite_LifeStyle();
      $this->life_style->name = $this->contact->name . "'s Life Style";
      $this->life_style->save();
    }

    # Populate: comite_Lifestyle.stress_relief_methods
    if(strlen($this->life_style->stress_relief_methods)) {
      $this->lifestyle__stress_relief_methods = self::csv2Array($this->life_style->stress_relief_methods, ',', '^');
    } else {
      $this->lifestyle__stress_relief_methods = array();
    }

    # Populate: comite_SubstanceUseInstance
    $this->life_style->get_linked_beans('comite_substanceuseinstance_comite_lifestyle', 'comite_SubstanceUseInstance');
    foreach($GLOBALS['app_list_strings']['substance_use_list'] as $value => $name) {
      $saved_object = null;
      if(isset($this->life_style->comite_substanceuseinstance_comite_lifestyle) && count($this->life_style->comite_substanceuseinstance_comite_lifestyle->beans)) { # User has these saved
        foreach($this->life_style->comite_substanceuseinstance_comite_lifestyle->beans as $object) {
          if($object->past_present !='Present') {
            continue;
          }
          if($object->name == $value) {
            $saved_object = $object;
            $saved_object->answer = 'yes';
            break;
          }
        }
      }
      if(!$saved_object) {
         $saved_object = new comite_SubstanceUseInstance();
         $saved_object->name = $value;
         $saved_object->answer = 'no';
         $saved_object->past_present = 'Present';
      }
      $this->substanceuseinstance[] = $saved_object;

      $saved_object = null;
      if(isset($this->life_style->comite_substanceuseinstance_comite_lifestyle) && count($this->life_style->comite_substanceuseinstance_comite_lifestyle->beans)) { # User has these saved
        foreach($this->life_style->comite_substanceuseinstance_comite_lifestyle->beans as $object) {
          if($object->past_present !='Past') {
            continue;
          }
          if($object->name == $value) {
            $saved_object = $object;
            $saved_object->answer = 'yes';
            break;
          }
        }
      }
      if(!$saved_object) {
         $saved_object = new comite_SubstanceUseInstance();
         $saved_object->name = $value;
         $saved_object->answer = 'no';
         $saved_object->past_present = 'Past';
      }
      $this->substanceuseinstance[] = $saved_object;
    }

    # Populate: comite_PersonalTraitInstance
    $this->life_style->get_linked_beans('comite_personaltraitinstance_comite_lifestyle', 'comite_PersonalTraitInstance');
    foreach($GLOBALS['app_list_strings']['personal_traits_list'] as $value => $name) {
      $saved_object = null;
      if(isset($this->life_style->comite_personaltraitinstance_comite_lifestyle) && count($this->life_style->comite_personaltraitinstance_comite_lifestyle->beans)) { # User has these saved
        foreach($this->life_style->comite_personaltraitinstance_comite_lifestyle->beans as $object) {
          if($object->name == $value) {
            $saved_object = $object;
            break;
          }
        }
      }
      if(!$saved_object) {
         $saved_object = new comite_PersonalTraitInstance();
         $saved_object->name = $value;
         $saved_object->answer = '';
      }
      $this->personaltraitinstance[] = $saved_object;
    }

    # Populate:  comite_AngryReactionInstance
    $this->life_style->get_linked_beans('comite_angryreactioninstance_comite_lifestyle', 'comite_AngryReactionInstance');
    foreach($GLOBALS['app_list_strings']['angry_reaction_list'] as $value => $name) {
      $saved_object = null;
      if(isset($this->life_style->comite_angryreactioninstance_comite_lifestyle) && count($this->life_style->comite_angryreactioninstance_comite_lifestyle->beans)) { # User has these saved
        foreach($this->life_style->comite_angryreactioninstance_comite_lifestyle->beans as $object) {
          if($object->name == $value) {
            $saved_object = $object;
            break;
          }
        }
      }
      if(!$saved_object) {
         $saved_object = new comite_AngryReactionInstance();
         $saved_object->name = $value;
         $saved_object->answer = '';
      }
      $this->angryreactioninstance[] = $saved_object;
    }

    # Populate:  comite_WorkFeelingInstance
    $this->life_style->get_linked_beans('comite_workfeelinginstance_comite_lifestyle', 'comite_WorkFeelingInstance');
    foreach($GLOBALS['app_list_strings']['work_feeling_list'] as $value => $name) {
      $saved_object = null;
      if(isset($this->life_style->comite_workfeelinginstance_comite_lifestyle) && count($this->life_style->comite_workfeelinginstance_comite_lifestyle->beans)) { # User has these saved
        foreach($this->life_style->comite_workfeelinginstance_comite_lifestyle->beans as $object) {
          if($object->name == $value) {
            $saved_object = $object;
            break;
          }
        }
      }
      if(!$saved_object) {
         $saved_object = new comite_WorkFeelingInstance();
         $saved_object->name = $value;
         $saved_object->answer = '';
      }
      $this->workfeelinginstance[] = $saved_object;
    }

    # Populate:  comite_SleepConditionInstance
    $this->life_style->get_linked_beans('comite_sleepconditioninstance_comite_lifestyle', 'comite_SleepConditionInstance');
    foreach($GLOBALS['app_list_strings']['sleep_condition_list'] as $value => $name) {
      $saved_object = null;
      if(isset($this->life_style->comite_sleepconditioninstance_comite_lifestyle) && count($this->life_style->comite_sleepconditioninstance_comite_lifestyle->beans)) { # User has these saved
        foreach($this->life_style->comite_sleepconditioninstance_comite_lifestyle->beans as $object) {
          if($object->name == $value) {
            $saved_object = $object;
            break;
          }
        }
      }
      if(!$saved_object) {
         $saved_object = new comite_SleepConditionInstance();
         $saved_object->name = $value;
         $saved_object->answer = '';
      }
      $this->sleepconditioninstance[] = $saved_object;
    }

    # Populate:  comite_MindEmotionInstance
    $this->life_style->get_linked_beans('comite_mindemotioninstance_comite_lifestyle', 'comite_MindEmotionInstance');
    foreach($GLOBALS['app_list_strings']['mind_and_emotion_list'] as $value => $name) {
      $saved_object = null;
      if(isset($this->life_style->comite_mindemotioninstance_comite_lifestyle) && count($this->life_style->comite_mindemotioninstance_comite_lifestyle->beans)) { # User has these saved
        foreach($this->life_style->comite_mindemotioninstance_comite_lifestyle->beans as $object) {
          if($object->name == $value) {
            $saved_object = $object;
            break;
          }
        }
      }
      if(!$saved_object) {
         $saved_object = new comite_MindEmotionInstance();
         $saved_object->name = $value;
         $saved_object->answer = '';
      }
      $this->mindemotioninstance[] = $saved_object;
    }

    # Populate: comite_LifeChangeInstance
    $this->life_style->get_linked_beans('comite_lifechangeinstance_comite_lifestyle', 'comite_LifeChangeInstance');
    foreach($GLOBALS['app_list_strings']['life_change_list'] as $value => $name) {
      $saved_object = null;
      if(isset($this->life_style->comite_lifechangeinstance_comite_lifestyle) && count($this->life_style->comite_lifechangeinstance_comite_lifestyle->beans)) { # User has these saved
        foreach($this->life_style->comite_lifechangeinstance_comite_lifestyle->beans as $object) {
          if($object->name == $value) {
            $saved_object = $object;
            break;
          }
        }
      }
      if(!$saved_object) {
         $saved_object = new comite_LifeChangeInstance();
         $saved_object->name = $value;
         $saved_object->answer = '0';
         $saved_object->description = '';
      }
      $this->lifechangeinstance[] = $saved_object;
    }
  }

  public function process() {
    if ($this->has('user__record') && $this->get('user__record') == $this->user->id) {

      if ($this->life_style instanceof stdClass) {
        $this->life_style = new comite_LifeStyle();
        $this->life_style->id = create_guid();
        $this->life_style->new_with_id = true;
      }

      # PrepareProperData: comite_Lifestyle.stress_relief_methods
      $_REQUEST['lifestyle__stress_relief_methods'] = self::array2Csv($_REQUEST['lifestyle__stress_relief_methods'], ',', '^');

      /**
       *Bind and Validate the data to the form
       */

      # BindAndValidate: comite_Lifestyle
      $this->bind($this->life_style, array(
        'lifestyle__marital_status' => array(
          'name' => 'marital_status',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must select your marital status.'
            ),
          ),
        ),
        'lifestyle__have_children' => array(
          'name' => 'have_children',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must select whether you have children.'
            ),
          ),
        ),
        'lifestyle__have_children_notes' => array(
          'name' => 'have_children_notes',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequiredIf',
              'message' => 'You must tell how many children.',
              'field' => 'lifestyle__have_children',
              'field_answer' => 'yes',
            ),
          ),
        ),
        'lifestyle__have_grandchildren' => array(
          'name' => 'have_grandchildren',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must select whether you have grandchildren.'
            ),
          ),
        ),
        'lifestyle__have_grandchildren_notes' => array(
          'name' => 'have_grandchildren_notes',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequiredIf',
              'message' => 'You must tell how many grandchildren.',
              'field' => 'lifestyle__have_grandchildren',
              'field_answer' => 'yes',
            ),
          ),
        ),
        'lifestyle__occupation' => array(
          'name' => 'occupation',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must supply your occupation.'
            ),
          ),
        ),
        'lifestyle__hobbies' => array(
          'name' => 'hobbies',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must supply your hobbies.'
            ),
          ),
        ),
        'lifestyle__family_ties' => array(
          'name' => 'family_ties',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must supply your family ties.'
            ),
          ),
        ),
        'lifestyle__travel_international' => array(
          'name' => 'travel_international',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must supply your international travel experience.'
            ),
          ),
        ),
        'lifestyle__travel_international_notes' => array(
          'name' => 'travel_international_notes',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequiredIf',
              'message' => 'You must supply your international travel experience details.',
              'field' => 'lifestyle__travel_international',
              'field_answer' => 'yes',
            ),
          ),
        ),
        'lifestyle__seatbelt_user' => array(
          'name' => 'seatbelt_user',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must supply your use of seatbelts.'
            ),
          ),
        ),
        'lifestyle__have_smoke_detector' => array(
          'name' => 'have_smoke_detector',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must supply your use of smoke detectors.'
            ),
          ),
        ),
        'lifestyle__have_carbon_monoxide_detector' => array(
          'name' => 'have_carbon_monoxide_detector',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must supply your use of carbon monoxide detectors.'
            ),
          ),
        ),
        'lifestyle__have_carbon_monoxide_detector' => array(
          'name' => 'have_carbon_monoxide_detector',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must supply your use of carbon monoxide detectors.'
            ),
          ),
        ),
        'lifestyle__tobacco_use_current' => array(
          'name' => 'tobacco_use_current',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must supply your use of tobacco currently.'
            ),
          ),
        ),
        'lifestyle__tobacco_use_current_length' => array(
          'name' => 'tobacco_use_current_length',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequiredIf',
              'message' => 'You must supply your length of current use of tobacco.',
              'field' => 'lifestyle__tobacco_use_current',
              'field_answer' => 'yes',
            ),
          ),
        ),
        'lifestyle__tobacco_use_attempted_quit' => array(
          'name' => 'tobacco_use_attempted_quit',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequiredIf',
              'message' => 'You must supply whether you have tried to quit using tobacco.',
              'field' => 'lifestyle__tobacco_use_current',
              'field_answer' => 'yes',
            ),
          ),
        ),
        'lifestyle__tobacco_use_past' => array(
          'name' => 'tobacco_use_past',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must supply your past use of tobacco.',
            ),
          ),
        ),
        'lifestyle__tobacco_use_past_length' => array(
          'name' => 'tobacco_use_past_length',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequiredIf',
              'message' => 'You must supply the length of use of tobacco in your past.',
              'field' => 'lifestyle__tobacco_use_past',
              'field_answer' => 'yes',
            ),
          ),
        ),
        'lifestyle__tobacco_use_past_quit' => array(
          'name' => 'tobacco_use_past_quit',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequiredIf',
              'message' => 'You must supply when you quit using tobacco.',
              'field' => 'lifestyle__tobacco_use_past',
              'field_answer' => 'yes',
            ),
          ),
        ),
        'lifestyle__alcohol_avg_weekly_consumption' => array(
          'name' => 'alcohol_avg_weekly_consumption',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must supply your consumption of alcohol.',
            ),
          ),
        ),
        'lifestyle__stress_under_great_deal' => array(
          'name' => 'stress_under_great_deal',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must supply whether your are currently under stress.',
            ),
          ),
        ),
        'lifestyle__stress_under_great_deal_notes' => array(
          'name' => 'stress_under_great_deal_notes',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequiredIf',
              'message' => 'You must supply your stress explanation.',
              'field' => 'lifestyle__stress_under_great_deal',
              'field_answer' => 'yes',
            ),
          ),
        ),
        'lifestyle__stress_relief_methods' => array(
          'name' => 'stress_relief_methods',
        ),
        'lifestyle__stress_relief_methods_other' => array(
          'name' => 'stress_relief_methods_other',
        ),
        'lifestyle__sleep_average_per_night' => array(
          'name' => 'sleep_average_per_night',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must supply your average sleep per night.'
            ),
          ),
        ),
        'lifestyle__sleep_need_per_night' => array(
          'name' => 'sleep_need_per_night',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must supply your needed sleep per night.'
            ),
          ),
        ),
        'lifestyle__sleep_wake_fully_rested' => array(
          'name' => 'sleep_wake_fully_rested',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must supply the percent you were fully rested.'
            ),
          ),
        ),
        'lifestyle__sleep_pattern_changes' => array(
          'name' => 'sleep_pattern_changes',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must supply if you had any sleep pattern changes.'
            ),
          ),
        ),
        'lifestyle__sleep_morning_difficult_out' => array(
          'name' => 'sleep_morning_difficult_out',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must supply if you a hard time waking up.'
            ),
          ),
        ),
      ));

      # PrepareProperData-Return: comite_LifeStyle.stress_relief_methods
      // Only shown if error
      $this->lifestyle__stress_relief_methods = self::csv2Array($_REQUEST['lifestyle__stress_relief_methods'], ',', '^');

      # BindAndValidate: comite_SubstanceUseInstance
      $this->bindOneToMany('substanceuseinstance', 'substanceuseinstance', 'comite_SubstanceUseInstance', array(
          'name' => array(
              'validators' => array(
              ),
          ),
          'per_day' => array(
              'validators' => array(
              ),
          ),
          'past_present' => array(
              'validators' => array(
              ),
          ),
      ), "\$postObject['answer'] == 'yes'");

      # BindAndValidate: comite_PersonalTraitInstance
      $this->bindOneToMany('personaltraitinstance', 'personaltraitinstance', 'comite_PersonalTraitInstance', array(
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
      ));

      # BindAndValidate: comite_AngryReactionInstance
      $this->bindOneToMany('angryreactioninstance', 'angryreactioninstance', 'comite_AngryReactionInstance', array(
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
      ));

      # BindAndValidate: comite_WorkFeelingInstance
      $this->bindOneToMany('workfeelinginstance', 'workfeelinginstance', 'comite_WorkFeelingInstance', array(
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

      # BindAndValidate: comite_SleepConditionInstance
      $this->bindOneToMany('sleepconditioninstance', 'sleepconditioninstance', 'comite_SleepConditionInstance', array(
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

      # BindAndValidate: comite_MindEmotionInstance
      $this->bindOneToMany('mindemotioninstance', 'mindemotioninstance', 'comite_MindEmotionInstance', array(
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

      # BindAndValidate: comite_LifeChangeInstance
      $this->bindOneToMany('lifechangeinstance', 'lifechangeinstance', 'comite_LifeChangeInstance', array(
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

      /**
       * Save all the data from this form
       */
      if (ComiteForm::SAVE_FORM_EVEN_ON_ERROR || !$this->errors) {

        # Save: comite_LifeStyle
        $this->life_style->save();
        $this->contact->comite_lifestyle_contacts->add($this->life_style);

        # Save: comite_SubstanceeUseInstance
        foreach($this->substanceuseinstance as $object) {
          $object->save();
          $this->life_style->comite_substanceuseinstance_comite_lifestyle->add($object);
        }

        # Save: PersonalTraitInstance
        foreach($this->personaltraitinstance as $object) {
          $object->save();
          $this->life_style->comite_personaltraitinstance_comite_lifestyle->add($object);
        }

        # Save: comite_AngryReactionInstance
        foreach($this->angryreactioninstance as $object) {
          $object->save();
          $this->life_style->comite_angryreactioninstance_comite_lifestyle->add($object);
        }

        # Save: comite_WorkFeelingInstance
        foreach($this->workfeelinginstance as $object) {
          $object->save();
          $this->life_style->comite_workfeelinginstance_comite_lifestyle->add($object);
        }

        # Save: comite_SleepConditionInstance
        foreach($this->sleepconditioninstance as $object) {
          $object->save();
          $this->life_style->comite_sleepconditioninstance_comite_lifestyle->add($object);
        }

        # Save: comite_MindEmotionInstance
        foreach($this->mindemotioninstance as $object) {
          $object->save();
          $this->life_style->comite_mindemotioninstance_comite_lifestyle->add($object);
        }

        # Save: comite_LifeChangeInstance
        foreach($this->lifechangeinstance as $object) {
          $object->save();
          $this->life_style->comite_lifechangeinstance_comite_lifestyle->add($object);
        }

        # Save: Contact
        if(!$this->errors) {
            $this->contact->hla_survey_step_c = 'hla_nutrition';
        }
        $this->contact->save();
      }
    }

    return parent::process();
  }
}
