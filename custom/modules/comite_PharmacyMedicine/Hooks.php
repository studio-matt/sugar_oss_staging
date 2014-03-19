<?php

require_once('data/SugarBean.php');
require_once('modules/Users/User.php');
require_once('include/utils.php');
require_once('custom/application/Ext/Language/en_us.lang.ext.php');

class comite_PharmacyMedicineHooks {

  /**
    * Called on preSave
    *
    * @param comite_MedicationSupplementInstance $object
    * @param string $event
    * @param array $arguments
    */
  function preSave(&$object, $event, $arguments) {

    # Save the name field if we have a related object
    $object->load_relationship('comite_pharmacymedicine_comite_medicationsupplement');
    $relatedObject = $object->comite_pharmacymedicine_comite_medicationsupplement->beans[reset(array_keys($object->comite_pharmacymedicine_comite_medicationsupplement->beans))];
    $object->name = $relatedObject->name;
    $object->type = $relatedObject->type;
  }
}
