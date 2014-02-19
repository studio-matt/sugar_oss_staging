<?php
include_once(dirname(__FILE__).'/HlaForm.php');

class HlaPersonalHealthForm extends HlaForm {
  public function __construct($user) {
    parent::__construct($user);

    /**
     * Populate Data Needed for Form
     */

    # Populate: comite_PersonalHealthHistory - one2one, not present until we create it here
    $this->contact->get_linked_beans('comite_personalhealthhistory_contacts', 'comite_PersonalHealthHistory');
    if (count($this->contact->comite_personalhealthhistory_contacts->beans)) {
      $this->personalhealthhistory = $this->contact->comite_personalhealthhistory_contacts->beans[reset(array_keys($this->contact->comite_personalhealthhistory_contacts->beans))];
    } else {
      $this->personalhealthhistory = new comite_PersonalHealthHistory();
      $this->personalhealthhistory->name = $this->contact->name . "'s Personal Health History";
      $this->personalhealthhistory->save();
      $this->contact->comite_personalhealthhistory_contacts->add($this->personalhealthhistory);
      $this->contact->save();;
    }

    # Choices for Medications and Supplements
    $comite_MedicationSupplement = new comite_MedicationSupplement();
    $meds_list = $comite_MedicationSupplement->get_list('name', 'type = "medication"', 0, -99, -99);
    foreach($meds_list['list'] as $med) {
      $this->medications[$med->id] = $med->name;
      $this->medicationObjects[$med->id] = $med;
    }
    $supps_list = $comite_MedicationSupplement->get_list('name', 'type = "supplement"', 0, -99, -99);
    foreach($supps_list['list'] as $supp) {
      $this->supplements[$supp->id] = $supp->name;
      $this->supplementObjects[$supp->id] = $supp;
    }

    # Populate: comite_MedicationInstance - one2many
    # Populate: comite_SupplementInstance - one2many
    $this->personalhealthhistory->get_linked_beans('comite_medsuppinst_comite_personalhealthhistory', 'comite_MedicationSupplementInstance');
    $this->medicationinstances = array();
    $this->supplementinstances = array();
    foreach($this->personalhealthhistory->comite_medsuppinst_comite_personalhealthhistory->beans as $medicationsupplementinstance) {

      $medicationsupplementinstance->get_linked_beans('comite_medsuppinstance_comite_medsupp', 'comite_MedicationSupplement');
      switch($medicationsupplementinstance->type) {
        case 'medication':
          $this->medicationinstances[] = $medicationsupplementinstance;
          break;
        case 'supplement':
          $this->supplementinstances[] = $medicationsupplementinstance;
          break;
      }
    }

    # Populate: comite_ReviewOverallHealth - one2many review overall health
    $this->personalhealthhistory->get_linked_beans('comite_reviewoverallhealth_comite_personalhealthhistory', 'comite_ReviewOverallHealth');
    $possibleBeans = $this->personalhealthhistory->comite_reviewoverallhealth_comite_personalhealthhistory->beans;
    $this->reviewoverallhealths = array();
    foreach($GLOBALS['app_list_strings']['review_of_overall_health_question_list'] as $value => $name) {
      $category = substr($value, 0, strpos($value, '__'));

      if($category == 'mSex' && $this->personalhealthhistory->gender != 'male') {
        continue;
      }

      if($category == 'fSex' && $this->personalhealthhistory->gender != 'female') {
        continue;
      }

      $saved_object = null;
      if(isset($this->personalhealthhistory->comite_reviewoverallhealth_comite_personalhealthhistory) && count($this->personalhealthhistory->comite_reviewoverallhealth_comite_personalhealthhistory->beans)) { # User has these saved
        foreach($possibleBeans as $id => $object) {
          if($object->question == $value) {
            $saved_object = $object;
            unset($possibleBeans[$id]);
            break;
          }
        }
      }
      if(!$saved_object) {
         $saved_object = new comite_ReviewOverallHealth();
         $saved_object->name = $name;
         $saved_object->question = $value;
         $saved_object->category = $category;
         $saved_object->answer = '';
         $saved_object->notes_patient = '';
      }
      $this->reviewoverallhealths[] = $saved_object;
    }

    # Populate:  comite_ExposureInstance
    $this->personalhealthhistory->get_linked_beans('comite_exposureinstance_comite_personalhealthhistory', 'comite_ExposureInstance');
    $this->exposureinstances = array();
    foreach($GLOBALS['app_list_strings']['exposure_list'] as $value => $name) {
      $saved_object = null;
      if(isset($this->personalhealthhistory->comite_exposureinstance_comite_personalhealthhistory) && count($this->personalhealthhistory->comite_exposureinstance_comite_personalhealthhistory->beans)) { # User has these saved
        foreach($this->personalhealthhistory->comite_exposureinstance_comite_personalhealthhistory->beans as $object) {
          if($object->name == $value) {
            $saved_object = $object;
            break;
          }
        }
      }
      if(!$saved_object) {
         $saved_object = new comite_ExposureInstance();
         $saved_object->name = $value;
         $saved_object->dates = '';
         $saved_object->length = '';
      }
      $this->exposureinstances[] = $saved_object;
    }

    # Populate: comite_DiagnosticInstance - one2many
    $this->personalhealthhistory->get_linked_beans('comite_diagnosticinstance_comite_personalhealthhistory', 'comite_DiagnosticInstance');
    $this->diagnosticinstances = array();
    foreach($GLOBALS['app_list_strings']['diagnostic_list'] as $value => $name) {
      $saved_object = null;
      if(isset($this->personalhealthhistory->comite_diagnosticinstance_comite_personalhealthhistory) && count($this->personalhealthhistory->comite_diagnosticinstance_comite_personalhealthhistory->beans)) { # User has these saved
        foreach($this->personalhealthhistory->comite_diagnosticinstance_comite_personalhealthhistory->beans as $object) {
          if($object->name == $value) {
            $saved_object = $object;
            break;
          }
        }
      }
      if(!$saved_object) {
         $saved_object = new comite_DiagnosticInstance();
         $saved_object->name = $value;
         $saved_object->dates = '';
         $saved_object->results = '';
      }
      $this->diagnosticinstances[] = $saved_object;
    }
  }

  public function process() {
    if ($this->has('user__record') && $this->get('user__record') == $this->user->id) {

      /**
       * Pre-Process the form fields and make any transformations that need to happen
       */

      # PreProcess: comite_ExerciseSummary - make one notes field from 3 for fSex__Recent_Change_in_Menstruation
        if(isset($_REQUEST['reviewoverallhealths'])) {
      foreach($_REQUEST['reviewoverallhealths'] as $key => $reviewoverallhealth) {
        if(isset($reviewoverallhealth['question']) &&  $reviewoverallhealth['question'] == 'fSex__Recent_Change_in_Menstruation') {
          $_REQUEST['reviewoverallhealths'][$key]['notes_patient'] =<<<EOF
~~ Cycle Length ~~
  {$_REQUEST['reviewoverallhealths'][$key]['notes_patient__cycle_length']}
~~ Flow ~~
  {$_REQUEST['reviewoverallhealths'][$key]['notes_patient__flow']}
~~ Regularity ~~
  {$_REQUEST['reviewoverallhealths'][$key]['notes_patient__regularity']}
EOF;
        }
      }
    }

      # pre-process csv fields
      if (array_key_exists('personalhealthhistory__dental_health', $_REQUEST)) {
        $_REQUEST['personalhealthhistory__dental_health'] = self::array2Csv($_REQUEST['personalhealthhistory__dental_health'], ',', '^');
      }
      if (array_key_exists('medicationinstances__fem_med_birthcontrol_notes', $_REQUEST)) {
        $_REQUEST['medicationinstances__fem_med_birthcontrol_notes'] = self::array2Csv($_REQUEST['medicationinstances__fem_med_birthcontrol_notes'], ',', '^');
      }

       /**
       * Bind and Validate the data to the form
       *
       **/

      # BindAndValidate: comite_PersonalHealthHistory
      $this->bind($this->personalhealthhistory, array(
        'personalhealthhistory__last_doctor_visit' => array(
          'name' => 'last_doctor_visit',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must enter your last doctor visit.'
            ),
         ),
        ),
        'personalhealthhistory__doctor_visits_within_year' => array (
          'name' => 'doctor_visits_within_year',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must enter how many times you seen a medical doctor in the past 12 months.'
            ),
         ),
        ),
        'personalhealthhistory__dental_health' => array (
          'name' => 'dental_health'
        ),
        'personalhealthhistory__sick_days' => array(
          'name' => 'sick_days',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must enter how many days you missed from work.'
            ),
         ),
        ),
        'personalhealthhistory__hospital_days' => array(
          'name' => 'hospital_days',
          'validators' => array(
            array(
            'callable' => 'ComiteForm::validateRequired',
            'message' => 'You must enter how many days you were in the hospital.'
            ),
          ),
        ),
        'personalhealthhistory__hosptial_days_explanation' => array(
          'name' => 'hosptial_days_explanation',
          'validators' => array(
                  array(
                      'callable'      => 'ComiteForm::validateRequiredIf',
                      'message'       => 'You must enter a reasons for your hospital visit.',
                      'field'         => 'hospital_days',
                      'field_answer'  => '6_or_more',
                  ),
              ),
        ),
        'personalhealthhistory__surgical_procedures' => array(
          'name' => 'surgical_procedures',
          'validators' => array(),
        ),
        'personalhealthhistory__trauma_history' => array(
          'name' => 'trauma_history',
          'validators' => array(),
        ),
       'personalhealthhistory__blood_transfusion' => array(
          'name' => 'blood_transfusion',
          'validators' => array(
            array(
            'callable' => 'ComiteForm::validateRequired',
            'message' => 'You must enter if you ever had a blood transfusion.'
            ),
          ),
        ),
        'personalhealthhistory__blood_transfusion_explanation'=> array(
          'name' => 'blood_transfusion_explanation',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequiredIf',
              'message' => 'You must list the approximate date(s) and reason(s) for blood transfusion.',
              'field' => 'personalhealthhistory__blood_transfusion',
              'field_answer' => 'yes',
            ),
          ),
        ),
        'personalhealthhistory__radiation_therapy' => array(
          'name' => 'radiation_therapy',
           'validators' => array(
            array(
            'callable' => 'ComiteForm::validateRequired',
            'message' => 'You must indicate if you are currently receiving Radiation Therapy.'
            ),
          ),
        ),
        'personalhealthhistory__radiation_therapy_reason' => array(
          'name' => 'radiation_therapy_reason',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequiredIf',
              'message' => 'You must enter a radiation therapy reason.',
              'field' => 'personalhealthhistory__radiation_therapy',
              'field_answer' => 'yes',
            ),
          ),
        ),
        'personalhealthhistory__chemotherapy' => array(
          'name' => 'chemotherapy',
          'validators' => array(
            array(
            'callable' => 'ComiteForm::validateRequired',
            'message' => 'You must indicate if you are currently receiving Chemotherapy.'
            ),
          ),
        ),
        'personalhealthhistory__chemotherapy_explanation' => array(
          'name' => 'chemotherapy_explanation',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequiredIf',
              'message' => 'You must enter a chemotherapy reason.',
              'field' => 'personalhealthhistory__chemotherapy',
              'field_answer' => 'yes',
            ),
          ),
        ),
        'personalhealthhistory__diagnostic_proc_additiona' => array(
          'name' => 'diagnostic_proc_additiona'
        ),
        'personalhealthhistory__exposure_additional' => array(
          'name' => 'exposure_additional'
        ),

        # Medicale Supplements
        'personalhealthhistory__is_no_current_medications' => array(
          'name' => 'is_no_current_medications',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must check if using any current medications.'
            ),
          ),
        ),
        'personalhealthhistory__is_no_current_supplements' => array(
          'name' => 'is_no_current_supplements',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must check if using any current supplements.'
            ),
          ),
        ),
        'personalhealthhistory__men_med_enhancementdrugs_use' => array(
        'name' => 'men_med_enhancementdrugs_use',
        'validators' => array(
          array(
          'callable' => 'ComiteForm::validateRequired',
          'message' => 'You must indicate if you use Viagra, Cialis, Levitra or any other erectile enhancement drugs.'
          ),
         ),
        ),
        'personalhealthhistory__men_med_enhancementdrugs_notes' => array(
         'name' => 'men_med_enhancementdrugs_notes',
         'validators' => array(
           array(
            'callable'      => 'ComiteForm::validateRequiredIf',
            'message'       => 'You must enter which enhancement drugs and when.',
            'field'         => 'men_med_enhancementdrugs_use',
            'field_answer'  => 'yes',
           ),
          ),
        ),
        'personalhealthhistory__men_med_enhancementdrugs_has_h' => array(
        'name' => 'men_med_enhancementdrugs_has_h',
        'validators' => array(
           array(
            'callable'      => 'ComiteForm::validateRequiredIf',
            'message'       => 'You must enter if enhancement drugs helped',
            'field'         => 'men_med_enhancementdrugs_use',
            'field_answer'  => 'yes',
           ),
          ),
        ),
        'personalhealthhistory__men_med_sexual_function_use' => array(
        'name' => 'men_med_sexual_function_use',
        'validators' => array(
          array(
          'callable' => 'ComiteForm::validateRequired',
          'message' => 'You must indicate if you use any other medication for sexual function.'
          ),
         ),
        ),
        'personalhealthhistory__men_med_sexual_function_notes' => array(
         'name' => 'men_med_sexual_function_notes',
         'validators' => array(
           array(
            'callable'      => 'ComiteForm::validateRequiredIf',
            'message'       => 'You must enter which medication and when.',
            'field'         => 'personalhealthhistory__men_med_sexual_function_use',
            'field_answer'  => 'yes',
           ),
          ),
        ),
        'personalhealthhistory__men_med_sexual_function_helped' => array(
         'name' => 'men_med_sexual_function_helped',
         'validators' => array(
           array(
            'callable'      => 'ComiteForm::validateRequiredIf',
            'message'       => 'You must enter if you use any other medication for sexual function has helped.',
            'field'         => 'men_med_sexual_function_use',
            'field_answer'  => 'yes',
           ),
          ),
        ),
        'personalhealthhistory__men_med_testosterone_use' => array(
         'name' => 'men_med_testosterone_use',
         'validators' => array(
          array(
          'callable' => 'ComiteForm::validateRequired',
          'message' => 'You must indicate if you ever used Testosterone, hCG, DHEA or HGH.'
          ),
         ),
        ),
        'personalhealthhistory__men_med_testosterone_notes' => array(
         'name' => 'men_med_testosterone_notes',
         'validators' => array(
           array(
            'callable'      => 'ComiteForm::validateRequiredIf',
            'message'       => 'You must enter if you ever used Testosterone, hCG, DHEA or HGH.',
            'field'         => 'men_med_testosterone_use',
            'field_answer'  => 'yes',
           ),
          ),
        ),
        'personalhealthhistory__men_med_testosterone_helped' => array(
        'name' => 'men_med_testosterone_helped',
        'validators' => array(
           array(
            'callable'      => 'ComiteForm::validateRequiredIf',
            'message'       => 'You must enter if Testosterone, hCG, DHEA or HGH has helped.',
            'field'         => 'men_med_testosterone_use',
            'field_answer'  => 'yes',
           ),
          ),
        ),
        'personalhealthhistory__fem_med_enhancementdrugs_use' => array(
        'name' => 'fem_med_enhancementdrugs_use',
        'validators' => array(
          array(
          'callable' => 'ComiteForm::validateRequired',
          'message' => 'You must indicate if you have ever taken estrogen, progesterone, testosterone, DHEA, or hGH.'
          ),
         ),
        ),
        'personalhealthhistory__fem_med_enhancementdrugs_notes' => array(
        'name' => 'fem_med_enhancementdrugs_notes',
        'validators' => array(
           array(
            'callable'      => 'ComiteForm::validateRequiredIf',
            'message'       => 'You must enter if you ever enhancement drugs.',
            'field'         => 'fem_med_enhancementdrugs_use',
            'field_answer'  => 'yes',
           ),
          ),
        ),
        'personalhealthhistory__fem_med_enhancementdrugs_help' => array(
        'name' => 'fem_med_enhancementdrugs_help',
        'validators' => array(
           array(
            'callable'      => 'ComiteForm::validateRequiredIf',
            'message'       => 'You must enter if enhancement drugs have helped.',
            'field'         => 'fem_med_enhancementdrugs_use',
            'field_answer'  => 'yes',
           ),
          ),
        ),
        'personalhealthhistory__fem_med_birthcontrol_use' => array(
         'name' => 'fem_med_birthcontrol_use',
         'validators' => array(
          array(
          'callable' => 'ComiteForm::validateRequired',
          'message' => 'You must indicate if you have ever taken estrogen, progesterone, testosterone, DHEA, or hGH.'
          ),
         ),
        ),
        'personalhealthhistory__fem_med_birthcontrol_notes' => array(
         'name' => 'fem_med_birthcontrol_notes',
         'validators' => array(
           array(
            'callable'      => 'ComiteForm::validateRequiredIf',
            'message'       => 'You must enter which birth control used.',
            'field'         => 'fem_med_birthcontrol_use',
            'field_answer'  => 'yes',
           ),
          ),
        ),
      ));

      # BindAndValidate: comite_MedicationInstance
      $this->bindOneToMany('medicationinstances', 'medicationinstances', 'comite_MedicationSupplementInstance', array(
        'name' => array(
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must select your medication.'
            ),
          ),
        ),
        'dosage' => array(
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must enter your dosage.'
            ),
          ),
        ),
        'dosage_unit' => array(),
        'quantity' => array(
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must enter a quantity.'
            ),
         ),
        ),
        'quantity_unit' => array(),
        'frequency' => array(),
        'time_of_day' => array(),
        'notes_doctor' => array(),
        'source' => array(),
        'notes_patient' => array(
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must enter your reason.'
            ),
         ),
        ),
      ));

      # BindAndValidate: comite_SupplementInstance
      $this->bindOneToMany('supplementinstances', 'supplementinstances', 'comite_MedicationSupplementInstance', array(
        'name' => array(
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must select your medication.'
            ),
          ),
        ),
        'dosage' => array(
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must enter a dosage.'
            ),
          ),
        ),
        'dosage_unit' => array(),
        'quantity' => array(
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must enter a quantity.'
            ),
          ),
        ),
        'quantity_unit' => array(),
        'frequency' => array(),
        'notes_patient' => array(
         'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must enter your reason.'
            ),
          ),
        ),
      ));

      # BindAndValidate: comite_ExposureInstance
      $this->bindOneToMany('exposureinstances', 'exposureinstances', 'comite_ExposureInstance', array(
        'name' => array(),
        'dates' => array(
            'validators' => array(
                  array(
                      'callable'      => 'ComiteForm::validateRequiredIfNotBlank',
                      'message'       => 'You must enter date(s) of exposure.',
                      'field'         => 'length',
                  ),
              ),
            ),
        'length' => array(
            'validators' => array(
                  array(
                      'callable'      => 'ComiteForm::validateRequiredIfNotBlank',
                      'message'       => 'You must enter a length of exposure.',
                      'field'         => 'dates',
                  ),
              ),
            ),
      ));

      # BindAndValidate: comite_SupplementInstance
      $this->bindOneToMany('diagnosticinstances', 'diagnosticinstances', 'comite_DiagnosticInstance', array(
        'name' => array(),
        'dates' => array(
            'validators' => array(
                  array(
                      'callable'      => 'ComiteForm::validateRequiredIfNotBlank',
                      'message'       => 'You must enter a date(s) of test.',
                      'field'         => 'results',
                  ),
                ),
              ),
        'results' => array(
            'validators' => array(
                  array(
                      'callable'      => 'ComiteForm::validateRequiredIfNotBlank',
                      'message'       => 'You must enter the results of test.',
                      'field'         => 'dates',
                  ),
                ),
              ),
      ));

      # BindAndValidate: comite_ReviewOverallHealth
      $this->bindOneToMany('reviewoverallhealths', 'reviewoverallhealths', 'comite_ReviewOverallHealth', array(
        'name' => array(),
        'question' => array(),
        'answer' => array(
              'validators' => array(
                  array(
                      'callable' => 'ComiteForm::validateRequired',
                      'message' => 'You must select an answer.'
                  ),
              ),
            ),
        'notes_patient' => array(
              'validators' => array(),
          ),
        'category' => array(),
      ));


      /**
       * Save all the data from this form
       */
      if (ComiteForm::SAVE_FORM_EVEN_ON_ERROR || !$this->errors) {

       # Save: comite_MedicationInstance
       foreach($this->medicationinstances as $medicationinstance) {

           # Add the medication to this instance
           $medicationId = $medicationinstance->name;
           if(isset($this->medicationObjects[$medicationId])) {
               $medicationObject = $this->medicationObjects[$medicationId];
               $medicationinstance->name = $medicationObject->name;
           } else {
               $medicationObject = new comite_MedicationSupplement();
               $medicationObject->name = $medicationinstance->name;
               $medicationObject->type = 'medication';
               $medicationObject->save();
           }

           $medicationinstance->get_linked_beans('comite_medsuppinstance_comite_medsupp', 'comite_MedicationSupplement');
           foreach($medicationinstance->comite_medsuppinstance_comite_medsupp->beans as $relatedBean) {
               $medicationinstance->comite_medsuppinstance_comite_medsupp->delete($medicationinstance->id, $relatedBean->id);
           }
           $medicationinstance->comite_medsuppinstance_comite_medsupp->add($medicationObject);

           $medicationinstance->save();
           $this->personalhealthhistory->comite_medsuppinst_comite_personalhealthhistory->add($medicationinstance);
       }

       # Save: comite_SupplementInstance
       foreach($this->supplementinstances as $supplementinstance) {

           # Add the supplement to this instance
           $supplementId = $supplementinstance->name;
           if(isset($this->supplementObjects[$supplementId])) {
               $supplementObject = $this->supplementObjects[$supplementId];
               $supplementinstance->name = $supplementObject->name;
           } else {
               $supplementObject = new comite_MedicationSupplement();
               $supplementObject->name = $supplementinstance->name;
               $supplementObject->type = 'supplement';
               $supplementObject->save();
           }

           $supplementinstance->get_linked_beans('comite_medsuppinstance_comite_medsupp', 'comite_MedicationSupplement');
           foreach($supplementinstance->comite_medsuppinstance_comite_medsupp->beans as $relatedBean) {
               $supplementinstance->comite_medsuppinstance_comite_medsupp->delete($supplementinstance->id, $relatedBean->id);
           }
           $supplementinstance->comite_medsuppinstance_comite_medsupp->add($supplementObject);

           $supplementinstance->save();
           $this->personalhealthhistory->comite_medsuppinst_comite_personalhealthhistory->add($supplementinstance);
       }

        # Save: comite_ExposureInstance
        foreach($this->exposureinstances as $exposureinstance) {
          $exposureinstance->save();
          $this->personalhealthhistory->comite_exposureinstance_comite_personalhealthhistory->add($exposureinstance);
        }

        # Save: comite_DiagnosticInstance
        foreach($this->diagnosticinstances as $diagnosticinstance) {
          $diagnosticinstance->save();
          $this->personalhealthhistory->comite_diagnosticinstance_comite_personalhealthhistory->add($diagnosticinstance);
        }

        # Save: comite_ReviewOverallHealth
        foreach($this->reviewoverallhealths as $reviewoverallhealth) {
          $reviewoverallhealth->save();
          $this->personalhealthhistory->comite_reviewoverallhealth_comite_personalhealthhistory->add($reviewoverallhealth);
        }

        # Save: comite_PersonalHealthHistory
        $this->personalhealthhistory->save();

        # Save: Contact
        $this->contact->comite_personalhealthhistory_contacts->add($this->personalhealthhistory);
        if(!$this->errors) {
            $this->contact->hla_survey_step_c = 'hla_lifestyle';
        }
        $this->contact->save();
        $this->user->save();
      }
    }

    # for template, put at least one object into the array for these fields for add another support, mark deleted so it is skipped if not used
    if (!count($this->medicationinstances)) {
        $new = new comite_MedicationSupplementInstance();
        $new->type = 'medication';
        $new->delete = 1;
        $this->medicationinstances[] = $new;
    }

    if (!count($this->supplementinstances)) {
        $new = new comite_MedicationSupplementInstance();
        $new->type = 'supplement';
        $new->delete = 1;
        $this->supplementinstances[] = $new;
    }

    /**
      * Post-Process the form fields and make any transformations that need to happen
      */

    # PostProcess: comite_PersonalHealthHistory - Convert CSV Values
    $this->personalhealthhistory->dental_health = self::csv2Array($this->personalhealthhistory->dental_health, ',', '^');

    # PostProcess: comite_PersonalHealthHistory - Convert CSV Values
    $this->personalhealthhistory->fem_med_birthcontrol_notes = self::csv2Array($this->personalhealthhistory->fem_med_birthcontrol_notes, ',', '^');

    return parent::process();
  }
}
