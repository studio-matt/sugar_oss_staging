<script type="text/javascript" src="custom/themes/comiteMD/js/patient.js"></script>

<table cellpadding="1" cellspacing="0" border="0" width="100%" class="actionsContainer">
<tr>
<td class="buttons" align="left" NOWRAP>
<form action="index.php" method="post" name="DetailView" id="form">
<input type="hidden" name="module" value="{$module}">
<input type="hidden" name="record" value="{$fields.id.value}">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab">
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="{$offset}">
<input type="hidden" name="action" value="EditView">
{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button primary" onclick="this.form.return_module.value='Contacts'; this.form.return_action.value='DetailView'; this.form.return_id.value='{$id}'; this.form.action.value='EditView';SUGAR.ajaxUI.submitForm(this.form);" type="button" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if}
{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="this.form.return_module.value='Contacts'; this.form.return_action.value='ListView'; this.form.action.value='Delete'; return confirm('{$APP.NTC_DELETE_CONFIRMATION}');" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if}
<input title="Send Welcome Email" class="button" onclick="this.form.return_module.value='Contacts'; this.form.return_action.value='DetailView'; this.form.return_id.value='{$fields.id.value}'; this.form.action.value='sendWelcomeEmail'; this.form.module.value='Contacts'; this.form.module_tab.value='Contacts';" type="submit" name="send_welcome_email" value="Send Welcome Email" />
<input title="Send EHE Letter" class="button" onclick="this.form.return_module.value='Contacts'; this.form.return_action.value='DetailView'; this.form.return_id.value='{$fields.id.value}'; this.form.action.value='sendEhe'; this.form.module.value='comite_Letters'; this.form.module_tab.value='Contacts';" type="submit" name="send_welcome_email" value="Send EHE Letter" />
</form>
</td>
<td class="buttons" align="left" NOWRAP>
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Contacts", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</td>
<td align="right" width="100%">{$ADMIN_EDIT}
{$PAGINATION}
</td>
</tr>
</table>{sugar_include include=$includes}
<div id="Contacts_detailview_tabs"
>
<div >
<div id='LBL_CONTACT_INFORMATION' class='detail view  detail508'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>{sugar_translate label='LBL_CONTACT_INFORMATION' module='Contacts'}</h4>
<table id='detailpanel_1' cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.salutation.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SALUTATION' module='Contacts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.salutation.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.salutation.options)}
<input type="hidden" class="sugar_field" id="{$fields.salutation.name}" value="{ $fields.salutation.options }">
{ $fields.salutation.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.salutation.name}" value="{ $fields.salutation.value }">
{ $fields.salutation.options[$fields.salutation.value]}
{/if}
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.first_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_FIRST_NAME' module='Contacts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.first_name.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.first_name.value) <= 0}
{assign var="value" value=$fields.first_name.default_value }
{else}
{assign var="value" value=$fields.first_name.value }
{/if}
<span class="sugar_field" id="{$fields.first_name.name}">{$fields.first_name.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.middle_initial_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_MIDDLE_INITIAL' module='Contacts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.middle_initial_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.middle_initial_c.value) <= 0}
{assign var="value" value=$fields.middle_initial_c.default_value }
{else}
{assign var="value" value=$fields.middle_initial_c.value }
{/if}
<span class="sugar_field" id="{$fields.middle_initial_c.name}">{$fields.middle_initial_c.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.last_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_LAST_NAME' module='Contacts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.last_name.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.last_name.value) <= 0}
{assign var="value" value=$fields.last_name.default_value }
{else}
{assign var="value" value=$fields.last_name.value }
{/if}
<span class="sugar_field" id="{$fields.last_name.name}">{$fields.last_name.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.preferred_name_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PREFERRED_NAME' module='Contacts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.preferred_name_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.preferred_name_c.value) <= 0}
{assign var="value" value=$fields.preferred_name_c.default_value }
{else}
{assign var="value" value=$fields.preferred_name_c.value }
{/if}
<span class="sugar_field" id="{$fields.preferred_name_c.name}">{$fields.preferred_name_c.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.preferred_contact_method_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PREFERRED_CONTACT_METHOD' module='Contacts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.preferred_contact_method_c.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.preferred_contact_method_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.preferred_contact_method_c.name}" value="{ $fields.preferred_contact_method_c.options }">
{ $fields.preferred_contact_method_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.preferred_contact_method_c.name}" value="{ $fields.preferred_contact_method_c.value }">
{ $fields.preferred_contact_method_c.options[$fields.preferred_contact_method_c.value]}
{/if}
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.birthdate.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_BIRTHDATE' module='Contacts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.birthdate.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.birthdate.value) <= 0}
{assign var="value" value=$fields.birthdate.default_value }
{else}
{assign var="value" value=$fields.birthdate.value }
{/if}
<span class="sugar_field" id="{$fields.birthdate.name}">{$fields.birthdate.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
</div>
{if $panelFieldCount == 0 && !$useTabs}}
<script>document.getElementById("LBL_CONTACT_INFORMATION").style.display='none';</script>
{/if}
<div id='LBL_EDITVIEW_PANEL1' class='detail view  detail508'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>{sugar_translate label='LBL_EDITVIEW_PANEL1' module='Contacts'}</h4>
<table id='detailpanel_2' cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.email1.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_EMAIL_ADDRESS' module='Contacts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.email1.hidden}
{counter name="panelFieldCount"}
<span id='email1_span'>
{$fields.email1.value}
</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
</div>
{if $panelFieldCount == 0 && !$useTabs}}
<script>document.getElementById("LBL_EDITVIEW_PANEL1").style.display='none';</script>
{/if}
<div id='LBL_DETAILVIEW_PANEL6' class='detail view  detail508'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>{sugar_translate label='LBL_DETAILVIEW_PANEL6' module='Contacts'}</h4>
<table id='detailpanel_3' cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.description.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPTION' module='Contacts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.description.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.description.name|escape:'html'|url2html|nl2br}">{$fields.description.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
</div>
{if $panelFieldCount == 0 && !$useTabs}}
<script>document.getElementById("LBL_DETAILVIEW_PANEL6").style.display='none';</script>
{/if}
<div id='LBL_EDITVIEW_PANEL3' class='detail view  detail508'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>{sugar_translate label='LBL_EDITVIEW_PANEL3' module='Contacts'}</h4>
<table id='detailpanel_4' cellspacing='{$gridline}'>
<tr>
    <td><a href="index.php?module=comite_Hla&action=Index&record={$id}"><span>HLA</span></a></td>
    <td><a href="index.php?module=comite_PharmacyLog&action=DetailView&record={$fields.comite_pharmacylog_contactscomite_pharmacylog_ida.value}"><span>Pharmacy Log</span></a></td>
</tr>
<tr>
    <td><a href="#"><span>Lab Results</span></a></td>
    <td><a href="index.php?module=comite_DrNotesNutritionExercise&action=DetailView&record={$fields.comite_drn0c29xercise_ida.value}"><span>Nutrition &amp; Exercise</span></a></td>
</tr>
<tr>
    <td><a href="#"><span>Medication Table</span></a></td>
    <td><a href="#"><span>TM Summaries / Letters</span></a></td>
</tr>
<tr>
    <td><a href="#"><span>Consults & Diagnostics</span></a></td>
    <td><a href="#"><span>Superbills</span></a></td>
</tr>
</table>
</div>
<div id='LBL_DETAILVIEW_PANEL5' class='detail view  detail508'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>{sugar_translate label='LBL_DETAILVIEW_PANEL5' module='Contacts'}</h4>
<table id='detailpanel_5' cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.lab_location_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_LAB_LOCATION' module='Contacts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.lab_location_c.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.lab_location_c.value) && ($fields.lab_location_c.value != '^^')}
<input type="hidden" class="sugar_field" id="{$fields.lab_location_c.name}" value="{$fields.lab_location_c.value}">
{multienum_to_array string=$fields.lab_location_c.value assign="vals"}
{foreach from=$vals item=item}
<li style="margin-left:10px;">{ $fields.lab_location_c.options.$item }</li>
{/foreach}
{/if}
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.lab_date_c.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_LAB_DATE' module='Contacts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.lab_date_c.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.lab_date_c.value) <= 0}
{assign var="value" value=$fields.lab_date_c.default_value }
{else}
{assign var="value" value=$fields.lab_date_c.value }
{/if}
<span class="sugar_field" id="{$fields.lab_date_c.name}">{$fields.lab_date_c.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
</div>
{if $panelFieldCount == 0 && !$useTabs}}
<script>document.getElementById("LBL_DETAILVIEW_PANEL5").style.display='none';</script>
{/if}
<div id='LBL_EDITVIEW_PANEL4' class='detail view  detail508'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>{sugar_translate label='LBL_EDITVIEW_PANEL4' module='Contacts'}</h4>
<table id='detailpanel_6' cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.date_entered.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_ENTERED' module='Contacts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.date_entered.hidden}
{counter name="panelFieldCount"}
<span id="date_entered" class="sugar_field">{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.date_modified.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_MODIFIED' module='Contacts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.date_modified.hidden}
{counter name="panelFieldCount"}
<span id="date_modified" class="sugar_field">{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.assigned_user_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Contacts'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.assigned_user_name.hidden}
{counter name="panelFieldCount"}

<span id="assigned_user_id" class="sugar_field">{$fields.assigned_user_name.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
</div>
{if $panelFieldCount == 0 && !$useTabs}}
<script>document.getElementById("LBL_EDITVIEW_PANEL4").style.display='none';</script>
{/if}
</div></div>

</form>
<script>SUGAR.util.doWhen("document.getElementById('form') != null",
function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script>