<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/generic/SugarWidgets/SugarWidgetSubPanelTopButton.php');

class SugarWidgetSubPanelTopButtonQuickCreate2 extends SugarWidgetSubPanelTopButtonQuickCreate
{
//    function display($defines, $additionalFormFields = null)
//    {
//        $button  = "<form method='post' action='/index.php?module=MODULE_NAME&action=CUSTOM_ACTION'>";
//        $button .= "<input type='hidden' name='custom_hidden_1' value='custom_value'/>";
//        $button .= "<input class='button' type='submit' name='Custom Save' value='Custom Save' />\n</form>";
//        return $button;
//    }
  

  function &_get_form($defines, $additionalFormFields = null)
  {

    $focus = $defines['focus'];

    $focus->load_relationship('comite_doctorsnote_contacts');
    $contact = $focus->comite_doctorsnote_contacts->beans[reset(array_keys($focus->comite_doctorsnote_contacts->beans))];



    if(true) {
      $owner_module = 'Contacts';
      $owner_relation = 'comite_billing_contacts';
      $owner_id_name = 'contact_id';
      $target_module = 'comite_Billing';
      $owner_relation_id_name = 'comite_billing_contactscontacts_ida';
      $owner_id = $contact->id;
    } else {
      $contact->load_relationship('comite_lifestyle_contacts');
      $owner_module = 'comite_LifeStyle';
      $owner_relation = 'comite_lifestyle_contacts';
      $owner_id_name = 'comite_lifestyle_id';
      $target_module = 'comite_SubstanceUseInstance';
      $owner_relation_id_name = 'comite_substanceuseinstance_comite_lifestyle';
      $owner_id = $focus->$owner_relation_id_name;
    }
    
//    $owner_module = 'comite_LifeStyle';
//    $owner_relation = 'comite_lifestyle_contacts';
//    $owner_id_name = 'comite_lifestyle_id';



    $this->form_value = isset($defines['title']) ? $defines['title'] : 'Create';
    $panelName = $defines['subpanel_definition']->name;

    $html =<<<HTML
      <form id="formformcomite_{$panelName}_contacts" name="form" method="post" action="index.php" onsubmit="return SUGAR.subpanelUtils.sendAndRetrieve(this.id, 'subpanel_{$panelName}', 'Loading ...');">
      <input type="hidden" value="true" name="to_pdf">

      <input type="hidden" value="Home" name="module">
      <input type="hidden" value="SubpanelCreates" name="action">
      <input type="hidden" value="QuickCreate.tpl" name="tpl">
      <input type="hidden" value="" name="record">

      <input type="hidden" value="{$owner_module}" name="return_module">
      <input type="hidden" value="DetailView" name="return_action">
      <input type="hidden" value="{$owner_id}" name="return_id">
      <input type="hidden" value="{$owner_relation}" name="return_relationship">

      <input type="hidden" value="{$target_module}" name="target_module">
      <input type="hidden" value="QuickCreate" name="target_action">

      <input type="hidden" value="{$owner_id}" name="{$owner_id_name}">
      <input type="hidden" value="{$owner_id}" name="{$owner_relation_id_name}">
HTML;

    return $html;
  }
}