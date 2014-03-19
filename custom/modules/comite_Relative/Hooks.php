<?php

require_once('data/SugarBean.php');
require_once('modules/Users/User.php');
require_once('include/utils.php');
require_once('custom/application/Ext/Language/en_us.lang.ext.php');

class comite_RelativeHooks {

    /**
     * Called on preSave
     *
     * @param comite_MedicationSupplementInstance $object
     * @param string $event
     * @param array $arguments
     */
    function preSave(&$object, $event, $arguments) {
        if (strlen(trim($object->date_born)) && strtotime($object->date_born)) {
            $object->age = date('Y') - date('Y', strtotime($object->date_born));
            $object->age_c = date('Y') - date('Y', strtotime($object->date_born));
        }
    }
}
