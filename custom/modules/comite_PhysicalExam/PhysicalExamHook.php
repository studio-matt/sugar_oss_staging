<?php

require_once('data/SugarBean.php');
require_once('modules/Users/User.php');
require_once('include/utils.php');
require_once('custom/application/Ext/Language/en_us.lang.ext.php');

class comite_PhysicalExamHook {

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
  function postSave(&$physicalExam, $event, $arguments) {

    # Check if we have a User for this Contact, if not create it
    $physicalExam->load_relationship('comite_physicalexamproperty_comite_physicalexam');
    if ($event == 'after_save' && !$physicalExam->get_linked_beans('comite_physicalexamproperty_comite_physicalexam', 'comite_PhysicalExamProperty')) {

      global $app_list_strings;
      $categories = $app_list_strings['physical_exam_category_list'];
      $names = $app_list_strings['physical_exam_list'];

      foreach($names as $id => $name) {

        $category = substr($id, 0, strpos($id, '__'));
        $object = new comite_PhysicalExamProperty();
        $object->category = $category;
        $object->name = $id;
        $object->is_normal = 'yes';
        $object->save();
        $physicalExam->comite_physicalexamproperty_comite_physicalexam->add($object);
        $physicalExam->save();
      }
    }
  }
}
