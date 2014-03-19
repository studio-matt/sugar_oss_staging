<?php

require_once('data/SugarBean.php');
require_once('modules/Users/User.php');
require_once('include/utils.php');
require_once('custom/application/Ext/Language/en_us.lang.ext.php');

class comite_ImpressionHooks {

  /**
    * Called on preSave
    *
    * @param comite_Impression $object
    * @param string $event
    * @param array $arguments
    */
  function preSave(&$object, $event, $arguments) {

    # Save the name field if we have a related object
    $object->load_relationship('comite_impression_comite_impressiontype');
    $relatedObject = $object->comite_impression_comite_impressiontype->beans[reset(array_keys($object->comite_impression_comite_impressiontype->beans))];
    $object->name = $relatedObject->name;
  }
}
