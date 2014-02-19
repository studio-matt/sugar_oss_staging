<?php

require_once('modules/Contacts/Contact.php');

$Contact = new Contact();

$Contact->retrieve($_REQUEST['record']);

$sugar_smarty = new Sugar_Smarty();

$sugar_smarty->assign("CONTACT", $Contact);

$sugar_smarty->display('modules/comite_DoctorsNote/tpls/Create.tpl');
