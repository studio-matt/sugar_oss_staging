<?php
include_once(dirname(__FILE__).'/HlaForm.php');

class HlaDemographicsForm extends HlaForm {
  public function __construct($user) {
    parent::__construct($user);

    // many2many
    $this->contact->get_linked_beans('comite_address_contacts', 'Address');
    $this->addresses = array();
    foreach($this->contact->comite_address_contacts->beans as $address) {
      $this->addresses[] = $address;
    }

    // many2many
    $this->contact->get_linked_beans('comite_phone_contacts', 'Phone');
    $this->phones = array();
    foreach($this->contact->comite_phone_contacts->beans as $phone) {
      $this->phones[] = $phone;
    }

    // one2one, not present until we create it here
    $this->contact->get_linked_beans('comite_personalhealthhistory_contacts', 'comite_personalhealthhistory');
    if (count($this->contact->comite_personalhealthhistory_contacts->beans)) {
      $this->personal_health = $this->contact->comite_personalhealthhistory_contacts->beans[reset(array_keys($this->contact->comite_personalhealthhistory_contacts->beans))];
    } else {
      $this->personal_health = new comite_PersonalHealthHistory();
      $this->personal_health->name = $this->contact->name . "'s Personal Health History";
      $this->personal_health->save();
    }

    # Fix Gender Values
    unset($this->app_list_strings['gender_list']['__']);
  }

  public function process() {
    if ($this->has('user__record') && $this->get('user__record') == $this->user->id) {
      // @TODO validation & errors, perhaps push the code to save to a stack and run them at the end?

      // support partial changes
      $this->bind($this->contact, array(
        'contact__salutation' => array(
          'name' => 'salutation',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must provide your salutation.'
            ),
          ),
        ),
        'contact__first_name' => array(
          'name' => 'first_name',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must provide your first name.'
            ),
          ),
        ),
        'contact__middle_initial_c' => array(
          'name' => 'middle_initial_c',
          'validators' => array(),
        ),
        'contact__last_name' => array(
          'name' => 'last_name',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must provide your last name.'
            ),
          ),
        ),
        'contact__preferred_name' => array(
          'name' => 'preferred_name_c',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must enter your preferred name.'
            ),
          ),
        ),
        'contact__birthdate' => array(
          'name' => 'birthdate',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must enter your birthdate.'
            ),
          ),
        ),
        'contact__preferred_contact_method' => array(
          'name' => 'preferred_contact_method_c'
        ),
      ));
      $this->user->first_name = $this->contact->first_name;
      $this->user->last_name = $this->contact->last_name;

      $this->bind($this->user, array(
        'user__email1' => array(
          'name' => 'email1',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must provide your email.'
            ),
            array(
              'callable' => 'ComiteForm::validateEmail',
            ),
          ),
        ),
        'user__email2' => array(
          'name' => 'email2',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateNotEqual',
              'compare' => 'user__email1',
              'message' => 'You must provide a different email.'
            ),
            array(
              'callable' => 'ComiteForm::validateEmail',
            ),
          ),
        ),
      ));

      if ($this->has('user__email1') || $this->has('user__email2')) {
        $this->user->emailAddress->addresses = array();
        $this->user->emailAddress->addAddress($this->user->email1, true, null, false, false);
        $this->user->emailAddress->addAddress($this->user->email2, false, null, false, false);
      }

      $this->bindOneToMany('addresses', 'addresses', 'comite_Address', array(
        'name' => array(
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must select an address type.'
            ),
          ),
        ),
        'address_1' => array(
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must enter your address.'
            ),
          ),
        ),
        'address_2' => array(),
        'address_3' => array(),
        'country' => array(
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must select a your country.'
            ),
          ),
        ),
        'city' => array(),
        'state' => array(),
        'state_international' => array(),
        'postal_code' => array(
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must enter your postal code.'
            ),
          ),
        ),
        'rank' => array(),
       ));

      $this->bindOneToMany('phones', 'phones', 'comite_Phone', array(
        'name' => array(
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must select a phone type.'
            ),
          ),
        ),
        'country_code' => array(
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must select your country.'
            ),
          ),
        ),
        'line_number' => array(
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must enter your phone number.'
            ),
          ),
        ),
        'extension' => array(),
        'is_voicemail_allowed' => array(),
        'rank' => array(),
      ));

      if ($this->personal_health instanceof stdClass) {
        $this->personal_health = new comite_PersonalHealthHistory();
        $this->personal_health->id = create_guid();
        $this->personal_health->new_with_id = true;
      }

      $this->bind($this->personal_health, array(
        'personal_health__gender' => array(
          'name' => 'gender',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must select your gender.'
            ),
          ),
        ),
        'personal_health__height' => array(
          'name' => 'height',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must enter your height.'
            ),
            array(
              'callable' => 'ComiteForm::validateInteger',
            ),
          ),
        ),
        'personal_health__body_frame' => array(
          'name' => 'body_frame',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must select your body frame.'
            ),
          ),
        ),
        'personal_health__weight' => array(
          'name' => 'weight',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must enter your weight.'
            ),
            array(
              'callable' => 'ComiteForm::validateInteger',
            ),
          ),
        ),
        'personal_health__weight_highest' => array(
          'name' => 'weight_highest',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must enter your highest weight.'
            ),
            array(
              'callable' => 'ComiteForm::validateInteger',
            ),
          ),
        ),
        'personal_health__weight_lowest' => array(
          'name' => 'weight_lowest',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must enter your lowest weight.'
            ),
            array(
              'callable' => 'ComiteForm::validateInteger',
            ),
          ),
        ),
        'personal_health__weight_ideal' => array(
          'name' => 'weight_ideal',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must enter your ideal weight.'
            ),
            array(
              'callable' => 'ComiteForm::validateInteger',
            ),
          ),
        ),
        'personal_health__blood_type' => array(
          'name' => 'blood_type',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must select your blood type.'
            ),
          ),
        ),
        'personal_health__patient_rate_current_health' => array(
          'name' => 'patient_rate_current_health',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must rate your current health.'
            ),
          ),
        ),
        'personal_health__age_management_medical_goals' => array(
          'name' => 'age_management_medical_goals',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateRequired',
              'message' => 'You must enter your age management medical goals.'
            ),
          ),
        ),
        'personal_health__pri_physician_name' => array(
          'name' => 'pri_physician_name',
          'validators' => array(),
        ),
        'personal_health__pri_physician_address1' => array(
          'name' => 'pri_physician_address1',
          'validators' => array(),
        ),
        'personal_health__pri_physician_address2' => array(
          'name' => 'pri_physician_address2',
        ),
        'personal_health__pri_physician_city' => array(
          'name' => 'pri_physician_city',
          'validators' => array(),
        ),
        'personal_health__pri_physician_state' => array(
          'name' => 'pri_physician_state',
          'validators' => array(),
        ),
        'personal_health__pri_physician_zip' => array(
          'name' => 'pri_physician_zip',
          'validators' => array(),
        ),
        'personal_health__pri_physician_phone_office' => array(
          'name' => 'pri_physician_phone_office',
          'validators' => array(),
        ),
        'personal_health__pri_physician_fax' => array(
          'name' => 'pri_physician_fax',
        ),
        'personal_health__pri_physician_email_office' => array(
          'name' => 'pri_physician_email_office',
          'validators' => array(
            array(
              'callable' => 'ComiteForm::validateNotEqual',
              'compare' => 'user__email1',
              'message' => 'You must provide a different email.'
            ),
            array(
              'callable' => 'ComiteForm::validateEmail',
            ),
          ),
        ),


        'personal_health__sick_days' => array(
          'name' => 'sick_days',
        ),
      ));

      // actually save
      if (ComiteForm::SAVE_FORM_EVEN_ON_ERROR || !$this->errors) {
        foreach($this->addresses as $address) {
          $address->save();
          $this->contact->comite_address_contacts->add($address);
        }
        foreach($this->phones as $phone) {
          $phone->save();
          $this->contact->comite_phone_contacts->add($phone);
        }
        $this->personal_health->save();
        $this->contact->comite_personalhealthhistory_contacts->add($this->personal_health);
        if(!$this->errors) {
            $this->contact->hla_survey_step_c = 'hla_family_health';
        }
        $this->contact->save();
        $this->user->emailAddress->save($this->user->id, $this->user->module_dir);
        $this->user->save();
      }
    }

    // for template, put at least one object into the array for these fields because they are required
    if (!count($this->phones)) {
      $this->phones[] = self::stdClass();
    }
    if (!count($this->addresses)) {
      $this->addresses[] = self::stdClass();
    }

    return parent::process();
  }
}
