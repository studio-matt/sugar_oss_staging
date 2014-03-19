<?php

require_once('data/SugarBean.php');
require_once('modules/Users/User.php');
require_once('include/utils.php');

class ContactHook {

    /**
     * Save the user for this contact. Contacts can login to a portal.
     *
     * Create a new user
     * Associate the Contact with the User (1 to 1)
     * Set the User's theme to ComiteMDPortal
     * Set the User's role to "Patient"
     *
     * @param Contact $contact
     * @param string $event
     * @param array $arguments
     */
    function saveContact(&$contact, $event, $arguments) {

        $role = 'Patient';
        $status = 'Patient';


        # Check if we have a User for this Contact, if not create it
        $contact->load_relationship('contacts_users_1');
        if ($event == 'after_save' && !$contact->get_linked_beans('contacts_users_1', 'User')) {
            $user = new User();

            // Only use the made up username of first_name + last_name + rand()
            // Check for collision on duplicate username
            // Set password to something long and random and impossible.
            $username = $this->_generateUserName($contact->first_name, $contact->last_name);
            $password = User::generatePassword();

            $user->id = create_guid();
            $user->new_with_id = true;
            $user->first_name = $contact->first_name;
            $user->last_name = $contact->last_name;
            $user->user_name = $username;
            $user->show_on_employees = 0;
            $user->is_admin = 'off';
            $user->status = $status;
            $user->user_password = $user->encrypt_password($password);
            $user->system_generated_password = 1;
            $user->user_hash = strtolower(md5($password));
            $user->save();

            $user->setPreference('timezone', 'America/New_York');
            $user->setPreference('user_theme', 'comiteMDPortal');
            $user->setPreference('ut', 1);
            $user->savePreferencesToDB();

            $contact->contacts_users_1->add($user);
            $contact->save();

            $query = "SELECT id FROM acl_roles WHERE name = '" . $user->db->quote($role) . "'";
            $result = $user->db->query($query, true);
            if ($user->db->getRowCount($result) == 1) {
                $row = $user->db->fetchByAssoc($result);
                $user->load_relationship('aclroles');
                $user->aclroles->add($row['id']);
                require_once('modules/ACL/install_actions.php');
            } else {
                sugar_die("Role '" . $user->db->quote($role) . "' does not exist! Contact the system administrator");
            }

            $this->_sendWelcomeEmail($user, $password);
        }

        // get the user & sync the e-mail addresses
        $users = $contact->get_linked_beans('contacts_users_1', 'User');
        $user = $users[0];

        $user->emailAddress->addresses = $contact->emailAddress->addresses;
        $user->emailAddress->save($user->id, $user->module_dir);

        # Check if we have a comite_FamilyHealthHistory for this Contact, if not create it
        $contact->load_relationship('comite_familyhealthhistory_contacts');
        if ($event == 'after_save' && !$contact->get_linked_beans('comite_familyhealthhistory_contacts', 'comite_FamilyHealthHistory')) {
            $object = new comite_FamilyHealthHistory();
            $object->name = $contact->name . "'s Family Health History";
            $object->save();
            $contact->comite_familyhealthhistory_contacts->add($object);
            $contact->save();
        }

        # Check if we have a comite_PersonalHealthHistory for this Contact, if not create it
        $contact->load_relationship('comite_personalhealthhistory_contacts');
        if ($event == 'after_save' && !$contact->get_linked_beans('comite_personalhealthhistory_contacts', 'comite_PersonalHealthHistory')) {
            $object = new comite_PersonalHealthHistory();
            $object->name = $contact->name . "'s Personal Health History";
            $object->save();
            $contact->comite_personalhealthhistory_contacts->add($object);
            $contact->save();
        }

        # Check if we have a comite_LifeStyle for this Contact, if not create it
        $contact->load_relationship('comite_lifestyle_contacts');
        if ($event == 'after_save' && !$contact->get_linked_beans('comite_lifestyle_contacts', 'comite_LifeStyle')) {
            $object = new comite_LifeStyle();
            $object->name = $contact->name . "'s Lifestyle";
            $object->save();
            $contact->comite_lifestyle_contacts->add($object);
            $contact->save();
        }

        # Check if we have a comite_NutritionExercise for this Contact, if not create it
        $contact->load_relationship('comite_nutritionexercise_contacts');
        if ($event == 'after_save' && !$contact->get_linked_beans('comite_nutritionexercise_contacts', 'comite_NutritionExercise')) {
            $object = new comite_NutritionExercise();
            $object->name = $contact->name . "'s Nutrition & Exercise";
            $object->save();
            $contact->comite_nutritionexercise_contacts->add($object);
            $contact->save();
        }

        # Check if we have a comite_PharmacyLog for this Contact, if not create it
        $contact->load_relationship('comite_pharmacylog_contacts');
        if ($event == 'after_save' && !$contact->get_linked_beans('comite_pharmacylog_contacts', 'comite_PharmacyLog')) {
            $object = new comite_PharmacyLog();
            $object->name = $contact->name . "'s Pharmacy Log";
            $object->save();
            $contact->comite_pharmacylog_contacts->add($object);
            $contact->save();
        }

        # Check if we have a comite_DrNotesNutritionExercise for this Contact, if not create it
        $contact->load_relationship('comite_drnotesnutritionexercise_contacts');
        if ($event == 'after_save' && !$contact->get_linked_beans('comite_drnotesnutritionexercise_contacts', 'comite_DrNotesNutritionExercise')) {
            $object = new comite_DrNotesNutritionExercise();
            $object->name = $contact->name . "'s Dr. Note's Nutrition & Exercise";
            $object->save();
            $contact->comite_drnotesnutritionexercise_contacts->add($object);
            $contact->save();
        }
    }

    public function beforeSave(&$bean, $event, $arguments) {

        global $beanFiles, $beanList, $current_user, $timedate;

        # Check if the lab has a meeting
        $lab_date_old = $bean->fetched_row['lab_date_c'];
        $lab_date_current = $bean->lab_date_c;
        if($lab_date_old != $lab_date_current) {
          $ts = strtotime($lab_date_current);
          $meeting_date = $timedate->swap_formats(date('Y-m-d H:i:s', $ts), 'Y-m-d H:i:s', $timedate->get_date_time_format());

          $classNameBean = $beanList['Meetings'];
          require_once($beanFiles[$classNameBean]);
          $meetingBean  = new $classNameBean();
          $meetingBean->name = 'Lab';
          $meetingBean->modified_user_id = $current_user->id;
          $meetingBean->created_by = $current_user->id;
          $meetingBean->assigned_user_id= $current_user->id;
          $meetingBean->duration_hours= 2;
          $meetingBean->duration_minutes= 0;
          $meetingBean->date_start=$meeting_date;
          $meetingBean->date_end='';
          $meetingBean->reminder_time='-1';
          $meetingBean->status='Planned';
          $meetingBean->description='description';
          $meetingBean->type='Lab';
          $meetingBean->outlook_id='';
          $meetingBean->save();
        }

    }

    /**
     * Create a unique username given the first name and last name of user to be created
     *
     * @global DBManager $db
     * @param string $firstName
     * @param string $lastName
     * @return string
     */
    function _generateUserName($firstName, $lastName) {
        global $db;

        $username = $firstName . '-' . $lastName . '-' . rand(1000, 9999);
        $query = "SELECT id FROM users WHERE user_name = '" . $username . "'";
        $result = $db->query($query, true);
        if ($db->getRowCount($result)) {
            return $this->_generateUserName($firstName, $lastName);
        }
        return $username;
    }

    function _sendWelcomeEmail($usr, $password) {
        global $sugar_config;

  	$mod_strings=return_module_language('','Users');
  	$res=$GLOBALS['sugar_config']['passwordsetting'];
	$regexmail = "/^\w+(['\.\-\+]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+\$/";

        if (!preg_match($regexmail, $usr->emailAddress->getPrimaryAddress($usr))){
		echo $mod_strings['ERR_EMAIL_INCORRECT'];
		return;
	}

        # Create Url
        global $timedate;
	$guid=create_guid();
	$url=$GLOBALS['sugar_config']['site_url']."/index.php?entryPoint=Changenewpassword&guid=$guid";
	$time_now=TimeDate::getInstance()->nowDb();
	$q = "INSERT INTO users_password_link (id, username, date_generated) VALUES('".$guid."','".$username."','".$time_now."') ";
	$usr->db->query($q);

        # Email creation
        global $current_user;
        $emailTemp_id = $res['generatepasswordtmpl'];

        $additionalData = array(
            'link'                  => isset($_POST['link']) && $_POST['link'] == '1',
            'password'              => $password,
            $additionalData['url']  => $url,
        );
        $result = $usr->sendEmailForPassword($emailTemp_id, $additionalData);
        if ($result['status'] == false && $result['message'] != '') {
            echo $result['message'];
            $new_pwd = '4';
            return;
        }
    }

}
