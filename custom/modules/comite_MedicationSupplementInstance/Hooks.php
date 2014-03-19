<?php

require_once('data/SugarBean.php');
require_once('modules/Users/User.php');
require_once('include/utils.php');
require_once('custom/application/Ext/Language/en_us.lang.ext.php');

class comite_MedicationSupplementInstanceHooks {

  /**
    * Called on preSave
    *
    * @param comite_MedicationSupplementInstance $object
    * @param string $event
    * @param array $arguments
    */
  function preSave(&$object, $event, $arguments) {

    # Save the name field if we have a related object
    $object->load_relationship('comite_medsuppinstance_comite_medsupp');
    $relatedObject = $object->comite_medsuppinstance_comite_medsupp->beans[reset(array_keys($object->comite_medsuppinstance_comite_medsupp->beans))];
    $object->name = $relatedObject->name;
    $object->type = $relatedObject->type;

    foreach($object->comite_medsuppinstance_comite_medsupp->beans as $relatedBean) {
        if ($relatedBean->id != $relatedObject->id) {
            $object->comite_medsuppinstance_comite_medsupp->delete($object->id, $relatedBean->id);
        }
    }
  }
}
