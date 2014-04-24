<h2>Personal Health History</h2>
        <h4>Estimated time to complete this section: 60 Minutes</h4>
        <p>All of the information provided below will remain strictly confidential, and your contact information will be used for medically related and financial correspondence only.</p>

        {if $FORM->errors}
        <div class="alert error">
          <h4>There was an error with your information</h4>
          <ul class="errors">
            {foreach from=$FORM->errors key=FIELD item=ERROR}
            <li><label for="{$FIELD}">{'<br />'|implode:$ERROR}</label></li>
            {/foreach}
          </ul>
        </div>
        {/if}

        <fieldset>
            <legend>Personal Health History</legend>
            <fieldset>
              <legend>General Questions</legend>
                <div>
                    {php}$this->assign('LABEL_PARAMS', array('class' => 'large', '_html' => 'When was the last time you went to the doctor for a general check up or an illness?'));{/php}
                    {form_input_text name="personalhealthhistory__last_doctor_visit" id="personalhealthhistory__last_doctor_visit" _label=$LABEL_PARAMS value=$FORM->personalhealthhistory->last_doctor_visit _form=$FORM}
                </div>
                <div>
                    {php}$this->assign('LABEL_PARAMS', array('class' => 'large', '_html' => 'Within the past 12 months, how many times did you see a medical doctor about your health?'));{/php}
                    {form_input_text name="personalhealthhistory__doctor_visits_within_year" id="personalhealthhistory__doctor_visits_within_year" _label=$LABEL_PARAMS value=$FORM->personalhealthhistory->doctor_visits_within_year _form=$FORM}
                </div>
                <div class="controlset">
		    <p>Which of the following do you do on a regular basis?  Check all that apply.</p>
                    {foreach from=$FORM->app_list_strings.dental_health_list key=KEY item=VALUE name=health_loop}
                    <input type="checkbox" name="personalhealthhistory__dental_health[{$KEY}]" id="personalhealthhistory__dental_health__{$KEY}" value="{$KEY}" {if in_array($KEY, $FORM->personalhealthhistory->dental_health)}checked="checked" {/if}/>
                    <label for="personalhealthhistory__dental_health__{$KEY}">{$VALUE}</label>
                    {if !$smarty.foreach.health_loop.last}
                    <br />
                    {/if}
                    {/foreach}
                </div>
                <div>
                    {php}$this->assign('LABEL_PARAMS', array('class' => 'large', '_html' => 'During the past year, how many days did you miss from work, or have your regular activities curtailed, due to illness?'));{/php}
                    {form_input_text name="personalhealthhistory__sick_days" id="personalhealthhistory__sick_days" _label=$LABEL_PARAMS value=$FORM->personalhealthhistory->sick_days _form=$FORM}
               </div>
                <div>
		  <div class="controlset">
                    {php}$this->assign('LABEL_PARAMS', array('class' => 'large', '_html' => 'In the past 12 months, how many days were you in the hospital?'));{/php}
                    {form_select name="personalhealthhistory__hospital_days" id="personalhealthhistory__hospital_days" class="6_or_more sel_showhide" _value=$FORM->personalhealthhistory->hospital_days _label=$LABEL_PARAMS _empty=true _options=$FORM->app_list_strings.hospital_days_list _form=$FORM}
		  </div>

                   <div id="hospitl_joindays_C"{if $FORM->personalhealthhistory->hospital_days == '0' || $FORM->personalhealthhistory->hospital_days == '' } style="display:none;"{/if} class="sel_showhide_more_content highlight">
		    {php}$this->assign('LABEL_PARAMS', array('class' => 'large', '_html' => 'If so, please list the reason(s)'));{/php}
                    {form_textarea name="personalhealthhistory__hosptial_days_explanation" id="personalhealthhistory__hosptial_days_explanation" _label=$LABEL_PARAMS _value=$FORM->personalhealthhistory->hosptial_days_explanation rows="4" _form=$FORM}
		    </div>
		</div>
                <div>
		    {php}$this->assign('LABEL_PARAMS', array('class' => 'large', '_html' => 'Please list any surgical procedures you have had, including plastic surgery, along with the approximate date.'));{/php}
                    {form_textarea name="personalhealthhistory__surgical_procedures" id="personalhealthhistory__surgical_procedures" _label=$LABEL_PARAMS _value=$FORM->personalhealthhistory->surgical_procedures rows="4" _form=$FORM}
		</div>
                <div>
		    {php}$this->assign('LABEL_PARAMS', array('class' => 'large', '_html' => 'Please list any history of trauma that you have experienced (i.e. car accidents, head injuries, broken bones)'));{/php}
                    {form_textarea name="personalhealthhistory__trauma_history" id="personalhealthhistory__trauma_history" _label=$LABEL_PARAMS _value=$FORM->personalhealthhistory->trauma_history rows="4" _form=$FORM}
		</div>
                <div class="controlset">
		   {php}$this->assign('LABEL_PARAMS', array('class' => 'large', '_html' => 'Have you ever had a blood transfusion?'));{/php}
                   {form_radio name="personalhealthhistory__blood_transfusion" id="personalhealthhistory__blood_transfusion" class="blood_transfusion_C check_showhide" _label=$LABEL_PARAMS _value=$FORM->personalhealthhistory->blood_transfusion _options=$FORM->app_list_strings.yes_no_list _form=$FORM}
		</div>
		<div id="blood_transfusion_C" {if $FORM->personalhealthhistory->blood_transfusion != 'yes'}style="display:none;"{/if} class="highlight">
                   {php}$this->assign('LABEL_PARAMS', array('class' => 'large', '_html' => 'If so, please list the approximate date(s) and reason(s)'));{/php}
                   {form_textarea name="personalhealthhistory__blood_transfusion_explanation" id="personalhealthhistory__blood_transfusion_explanation" _label=$LABEL_PARAMS _value=$FORM->personalhealthhistory->blood_transfusion_explanation rows="4" _form=$FORM}
		</div>
                <div>
		    <p>Please indicate if you are currently receiving any of the following:</p>
		    <div class="controlset">
                     <input type="checkbox" name="personalhealthhistory__radiation_therapy" id="personalhealthhistory__radiation_therapy" class="radiation_therapy_C check_showhide" value="yes" {if $FORM->personalhealthhistory->radiation_therapy == yes || $FORM->personalhealthhistory->radiation_therapy == 1}checked="checked"{/if} />
		     {form_label for="personalhealthhistory__radiation_therapy" _html="Radiation Therapy" _form=$FORM}
                    </div>
                    <div id="radiation_therapy_C" {if $FORM->personalhealthhistory->radiation_therapy != 1}style="display:none; clear:both;"{/if} class="highlight">
	           {php}$this->assign('LABEL_PARAMS', array('class' => 'large', '_html' => 'Please describe your condition'));{/php}
                   {form_textarea name="personalhealthhistory__radiation_therapy_reason" id="personalhealthhistory__radiation_therapy_reason" _label=$LABEL_PARAMS _value=$FORM->personalhealthhistory->radiation_therapy_reason rows="4" _form=$FORM}
		 </div>
		    <div class="controlset">
                    <input type="checkbox" name="personalhealthhistory__chemotherapy" id="personalhealthhistory__chemotherapy" class="chemotherapy_C check_showhide" value="yes" {if $FORM->personalhealthhistory->chemotherapy == yes || $FORM->personalhealthhistory->chemotherapy == 1}checked="checked"{/if} />
                    {form_label for="personalhealthhistory__chemotherapy" _html="Chemotherapy" _form=$FORM}
                    </div>
                    <div id="chemotherapy_C" {if $FORM->personalhealthhistory->chemotherapy != 1}style="display:none; clear:both;"{/if} class="highlight">
                    {php}$this->assign('LABEL_PARAMS', array('class' => 'large', '_html' => 'Please describe your condition'));{/php}
                    {form_textarea name="personalhealthhistory__chemotherapy_explanation" id="personalhealthhistory__chemotherapy_explanation" _label=$LABEL_PARAMS _value=$FORM->personalhealthhistory->chemotherapy_explanation rows="4" _form=$FORM}
                    </div>
		</div>
            </fieldset>
        </fieldset>

        <fieldset>
          <legend>Exposures</legend>
          <h4>Please provide the date and length of exposure, if any, to the environmental risks listed below.</h4>
          <div>
            <table class="data-table">
              <thead>
                <tr>
                  <th width="20%">Exposure</th>
                  <th width="40%">Date(s)</th>
                  <th width="40%">Length of Exposure</th>
                </tr>
              </thead>
              <tbody>
                {foreach from=$FORM->exposureinstances key=OBJECT_IDX item=OBJECT}
                <tr id="exposureinstances__{$KEY}" class="exposureinstances">
                  <td>
                    {assign var="mykey" value="`$OBJECT->name`"}
                    {form_label for="exposureinstances__`$OBJECT_IDX`__dates" class="large" _html="`$FORM->app_list_strings.exposure_list.$mykey`" _form=$FORM}
                    <input type="hidden" name="exposureinstances[{$OBJECT_IDX}][record]" id="exposureinstances__{$OBJECT_IDX}__record" value="{$OBJECT->id}" />
                    <input type="hidden" name="exposureinstances[{$OBJECT_IDX}][name]" id="exposureinstances__{$OBJECT_IDX}__name" value="{$OBJECT->name}" /></td>
                  <td>
                    {form_input_text name="exposureinstances[`$OBJECT_IDX`][dates]" id="exposureinstances__`$OBJECT_IDX`__dates" value=$OBJECT->dates _form=$FORM}
                  </td>
                  <td>
                    {form_input_text name="exposureinstances[`$OBJECT_IDX`][length]" id="exposureinstances__`$OBJECT_IDX`__length" value=$OBJECT->length _form=$FORM}
                  </td>
                </tr>
                {/foreach}
              </tbody>
            </table>
          </div>
          <div>
            {php}$this->assign('LABEL_PARAMS', array('class' => 'large', '_html' => 'Please list any additional exposures you have had. Provide the approximate date, length, and description.'));{/php}
            {form_textarea name="personalhealthhistory__exposure_additional" id="personalhealthhistory__exposure_additional" _label=$LABEL_PARAMS _value=$FORM->personalhealthhistory->exposure_additional rows="4" _form=$FORM}
          </div>
        </fieldset>

        <fieldset>
          <legend>Diagnostics</legend>
          <h4>Please provide the most recent date and results for the tests listed below.</h4>
          <div>
            <table class="data-table">
              <thead>
                <tr>
                  <th width="20%">Diagnostic Test</th>
                  <th width="40%"><strong>Date(s)</th>
                  <th width="40%"><strong>Results </th>
                </tr>
              </thead>
              <tbody>
                {foreach from=$FORM->diagnosticinstances key=OBJECT_IDX item=OBJECT}
{if ($FORM->personalhealthhistory->gender == 'female' && $OBJECT->name != 'prostate_exam' && $OBJECT->name != 'psa') || ($FORM->personalhealthhistory->gender == 'male' && $OBJECT->name != 'pap_smear' && $OBJECT->name != 'pelvic_exam' && $OBJECT->name != 'breast_exam' && $OBJECT->name != 'mammogram') }
                <tr id="diagnosticinstances__{$OBJECT_IDX}" class="diagnosticinstances">
                  <td>
                    {assign var="mykey" value="`$OBJECT->name`"}
                    {form_label for="diagnosticinstances__`$OBJECT_IDX`__dates" class="large" _html="`$FORM->app_list_strings.diagnostic_list.$mykey`" _form=$FORM}
                    <input type="hidden" name="diagnosticinstances[{$OBJECT_IDX}][record]" id="diagnosticinstances__{$OBJECT_IDX}__record" value="{$OBJECT->id}" />
                    <input type="hidden" name="diagnosticinstances[{$OBJECT_IDX}][name]" id="diagnosticinstances__{$OBJECT_IDX}__name" value="{$OBJECT->name}" /></td>
                  <td>
                    {form_input_text name="diagnosticinstances[`$OBJECT_IDX`][dates]" id="diagnosticinstances__`$OBJECT_IDX`__dates" value=$OBJECT->dates _form=$FORM}
                  </td>
                  <td>
                    {form_input_text name="diagnosticinstances[`$OBJECT_IDX`][results]" id="diagnosticinstances__`$OBJECT_IDX`__results" value=$OBJECT->results _form=$FORM}
                  </td>
                </tr>
{/if}
                {/foreach}
              </tbody>
            </table>
          </div>
          <div>
            {php}$this->assign('LABEL_PARAMS', array('class' => 'large', '_html' => "Please list any additional diagnostic procedures you have had. Provide the approximate date, reason for the procedure, and result."));{/php}
            {form_textarea name="personalhealthhistory__diagnostic_proc_additiona" id="personalhealthhistory__diagnostic_proc_additiona" _value=$FORM->personalhealthhistory->diagnostic_proc_additiona rows="4" _label=$LABEL_PARAMS _form=$FORM}
          </div>
        </fieldset>

        <fieldset>
          <legend>Medications and Supplements</legend>
            <h4>Please list all medication including dosage and frequency (prescription and/or over-the-counter) you currently take and the condition for which it is taken.</h4>
	    <p><em>Note, An option is to copy the labels and forward them to our office.</em></p>
            <div>
          <fieldset>
            <legend>Medications</legend>

                <div class="controlset">
                  <input type="checkbox" name="is_no_current_medications" id="is_no_current_medications" value="yes" {if $FORM->personalhealthhistory->is_no_current_medications == 'yes'}checked="checked"{/if} onclick="{literal}javascript:if($(this).attr('checked')) { $('#medicationinstances').hide(); } else { $('#medicationinstances').show(); }{/literal}" />
                  <label for="is_no_current_medications">No Current Medications</label>
                </div>

{******************************************************************************
 @TODO Contact 1-1 PersonalHealthHistory 1-m MedicationInstance
*******************************************************************************}
                <div id="medicationinstances" {if $FORM->personalhealthhistory->is_no_current_medications == 'yes'}style="display:none;"{/if}>
                  <table class="data-table">
                    <thead>
                      <tr>
                        <th width="19%">Medication</th>
                        <th width="19%">Reason</th>
                        <th width="19%">Dosage</th>
                        <th width="19%">Quantity</th>
                        <th width="19%">Frequency</th>
                        <th width="5%"></th>
                      </tr>
                    </thead>
                    <tbody>
                      {foreach from=$FORM->medicationinstances key=MEDICATION_IDX item=MEDICATION}
                      <tr id="medicationinstances__{$MEDICATION_IDX}" class="medicationinstance"{if $MEDICATION->delete} style="display:none;"{/if}>
                        <input type="hidden" name="medicationinstances[{$MEDICATION_IDX}][record]" id="medicationinstances__{$MEDICATION_IDX}__record" value="{$MEDICATION->id}" />
                        <input type="hidden" name="medicationinstances[{$MEDICATION_IDX}][delete]" class="medicationinstance_delete" id="medicationinstances__{$MEDICATION_IDX}__delete" value="{$MEDICATION->delete}" />

                        <td width="19%">
                          {form_select id="medicationinstances__`$MEDICATION_IDX`__medication" _label="Medication" class="medication_name" _options=$FORM->medications _error="medicationinstances__`$MEDICATION_IDX`__name" _value=$MEDICATION->comite_med8f3bplement_ida _other="Other" _empty=true _form=$FORM}
                          <input type="text" name="medicationinstances[{$MEDICATION_IDX}][name]" class="other" id="medicationinstances__{$MEDICATION_IDX}__name" value="{$MEDICATION->comite_med8f3bplement_ida}" {if !$MEDICATION->comite_med8f3bplement_ida|strip || in_array($MEDICATION->comite_med8f3bplement_ida|strip, array_keys($FORM->medications))} style="display:none;"{/if}>
                        </td>
                        <td width="19%">
                          {form_textarea name="medicationinstances[$MEDICATION_IDX][notes_patient]" id="medicationinstances__`$MEDICATION_IDX`__notes_patient" cols="50" rows="10" _label="Reason" _value=$MEDICATION->notes_patient _form=$FORM}
                        </td>
                        <td width="19%">
                          {form_input_text name="medicationinstances[$MEDICATION_IDX][dosage]" id="medicationinstances__`$MEDICATION_IDX`__dosage" _label="Dosage" value=$MEDICATION->dosage _form=$FORM}
                          {form_select name="medicationinstances[$MEDICATION_IDX][dosage_unit]" id="medicationinstances__`$MEDICATION_IDX`__dosage_unit" _options=$FORM->app_list_strings.dosage_unit_list _value=$MEDICATION->dosage_unit _form=$FORM}
                        </td>
                        <td width="19%">
                          {form_input_text name="medicationinstances[$MEDICATION_IDX][quantity]" id="medicationinstances__`$MEDICATION_IDX`__quantity" _label="Quantity" value=$MEDICATION->quantity _form=$FORM}
                          {form_select name="medicationinstances[$MEDICATION_IDX][quantity_unit]" id="medicationinstances__`$MEDICATION_IDX`__quantity_unit" _options=$FORM->app_list_strings.quantity_unit_list _value=$MEDICATION->quantity_unit _form=$FORM}
                        </td>
                        <td width="19%">
                          {form_select name="medicationinstances[$MEDICATION_IDX][frequency]" id="medicationinstances__`$MEDICATION_IDX`__frequency" _label="Frequency" _options=$FORM->app_list_strings.frequency_list _value=$MEDICATION->frequency _form=$FORM}
                        </td>
                        <td width="5%">
                          <a href="#" class="button actionremove" title="Are you sure you want to remove this medication?">
                            <img src="/custom/themes/comiteMDPortal/images/x.png" />
                            Remove
                          </a>
                        </td>
                      </tr>
                      {/foreach}
                    </tbody>
                  </table>

                  <div class="buttonrow">
                    <a href="#" id="additional_medications" class="button actionadd">
                      <img src="/custom/themes/comiteMDPortal/images/plus_inline.gif" />
                      Add Another Medication
                    </a>
                  </div>
                </div><!-- /#no_medication_C -->
          </fieldset>

          <fieldset>
            <legend>Supplements</legend>
            <h4>Please list all supplements including dosage and frequency (i.e. vitamins, herbs, nutritional supplements) you currently take and the condition for which it is taken.</h4>
	    <p><em>Note, An option is to copy the labels and forward them to our office.</em></p>

              <div class="controlset">
                <input type="checkbox" name="is_no_current_supplements" id="is_no_current_supplements" value="yes" {if $FORM->personalhealthhistory->is_no_current_supplements == 'yes'}checked="checked"{/if} onclick="{literal}javascript:if($(this).attr('checked')) { $('#supplementinstances').hide(); } else { $('#supplementinstances').show(); }{/literal}" />
                <label for="is_no_current_supplements">No Current Supplements</label>
              </div>

              <div id="supplementinstances" {if $FORM->personalhealthhistory->is_no_current_supplements == 'yes'}style="display:none;"{/if}>
                <table class="data-table" width="50%">
                  <thead>
                    <tr>
                      <th width="10%" height="30"><strong>Supplement</strong></th>
                      <th width="10%"><strong>Reason</strong></th>
                      <th width="10%"><strong>Dosage</strong></th>
                      <th width="10%"><strong>Quantity</strong></th>
                      <th width="10%"><strong>Frequency</strong></th>
                      <th><strong>&nbsp;</strong></th>
                    </tr>
                  </thead>
                  <tbody>
                   {foreach from=$FORM->supplementinstances key=SUPPLEMENT_IDX item=SUPPLEMENT}
                    <tr id="supplementinstances__{$SUPPLEMENT_IDX}" class="supplementinstance"{if $SUPPLEMENT->delete} style="display:none;"{/if}>
                        <input type="hidden" name="supplementinstances[{$SUPPLEMENT_IDX}][record]" id="supplementinstances__{$SUPPLEMENT_IDX}__record" value="{$SUPPLEMENT->id}" />
                        <input type="hidden" name="supplementinstances[{$SUPPLEMENT_IDX}][delete]" class="supplementinstance_delete" id="supplementinstances__{$SUPPLEMENT_IDX}__delete" value="{$SUPPLEMENT->delete}" />
                        <td width="20%">
                          {form_select id="supplementinstances__`$SUPPLEMENT_IDX`__supplement" _label="Supplement" class="supplement_name" _options=$FORM->supplements _error="supplementinstances__`$SUPPLEMENT_IDX`__name" _value=$SUPPLEMENT->comite_med8f3bplement_ida _other="Other" _empty=true _form=$FORM}
                          <input type="text" name="supplementinstances[{$SUPPLEMENT_IDX}][name]" class="other" id="supplementinstances__{$SUPPLEMENT_IDX}__name" value="{$SUPPLEMENT->comite_med8f3bplement_ida}" {if !$SUPPLEMENT->comite_med8f3bplement_ida|strip || in_array($SUPPLEMENT->comite_med8f3bplement_ida|strip, array_keys($FORM->supplements))} style="display:none;"{/if}>
                        </td>
                        <td width="20%">
                          {form_textarea name="supplementinstances[$SUPPLEMENT_IDX][notes_patient]" rows="10" cols="50" id="supplementinstances__`$SUPPLEMENT_IDX`__notes_patient" _label="Reason" _value=$SUPPLEMENT->notes_patient _form=$FORM}
                        </td>
                        <td width="20%">
                          {form_input_text name="supplementinstances[$SUPPLEMENT_IDX][dosage]" id="supplementinstances__`$SUPPLEMENT_IDX`__dosage" _label="Dosage" value=$SUPPLEMENT->dosage _form=$FORM}
                          {form_select name="supplementinstances[$SUPPLEMENT_IDX][dosage_unit]" id="supplementinstances__`$SUPPLEMENT_IDX`__dosage_unit" _options=$FORM->app_list_strings.dosage_unit_list _value=$SUPPLEMENT->dosage_unit _form=$FORM}
                        </td>
                        <td width="20%">
                          {form_input_text name="supplementinstances[$SUPPLEMENT_IDX][quantity]" id="supplementinstances__`$SUPPLEMENT_IDX`__quantity" _label="Quantity" value=$SUPPLEMENT->quantity _form=$FORM}
                          {form_select name="supplementinstances[$SUPPLEMENT_IDX][quantity_unit]" id="supplementinstances__`$SUPPLEMENT_IDX`__quantity_unit" _options=$FORM->app_list_strings.quantity_unit_list _value=$SUPPLEMENT->quantity_unit _form=$FORM}
                        </td>
                        <td width="15%">
                         {form_select name="supplementinstances[$SUPPLEMENT_IDX][frequency]" id="supplementinstances__`$SUPPLEMENT_IDX`__frequency" _options=$FORM->app_list_strings.frequency_list _value=$SUPPLEMENT->frequency _form=$FORM}
                        </td>
                         <td width="5%">
                          <a href="#" class="button actionremove" title="Are you sure you want to remove this supplement?">
                            <img src="/custom/themes/comiteMDPortal/images/x.png" />
                            Remove
                          </a>
                        </td>
                   </tr>
                   {/foreach}
                  </tbody>
                </table>

                  <div class="buttonrow">
                    <a href="#" id="additional_supplements" class="button actionadd">
                      <img src="/custom/themes/comiteMDPortal/images/plus_inline.gif" />
                      Add Another Supplement
                    </a>
                  </div>
                </div>
                </fieldset>
              </div>
          </fieldset>

          <fieldset>
{if $FORM->personalhealthhistory->gender == 'male'}
            <div class="male_only">
              <legend>Male Medication Questions</legend>
              <div>
                <table class="data-table male_medical_questions" width="70%">
                  <thead>
                    <tr>
                      <th width="80%"><strong>Medication</strong></th>
                      {foreach from=$FORM->app_list_strings.yes_no_list key=answer_value item=answer_name}
                      <th width="10%"><strong>{$answer_name}</strong></th>
                      {/foreach}
                    </tr>
                  </thead>
                  <tbody>
                    <tr {php}if ($this->get_template_vars('FORM')->error('personalhealthhistory__men_med_enhancementdrugs_use')) echo 'class="error"'{/php}>
                        <input type="hidden" name="personalhealthhistory__men_med_enhancementdrugs_use" id="personalhealthhistory__men_med_enhancementdrugs_use_fake" value="" />
                      <td>
                        Do you use Viagra, Cialis, Levitra or any other erectile enhancement drugs?<br />
                        <div class="radio_yesno_more_content" id="medicationinstances__men_med_enhancementdrugs_notes_C" {if $FORM->personalhealthhistory->men_med_enhancementdrugs_use != 'yes'}style="display:none;"{/if}>
                          {php}$this->assign('LABEL_PARAMS', array('class' => 'large', '_html' => 'If yes, which one(s) and when?'));{/php}
                          {form_textarea name="personalhealthhistory__men_med_enhancementdrugs_notes" id="personalhealthhistory__men_med_enhancementdrugs_notes" cols="70" rows="4" _label=$LABEL_PARAMS _value=$FORM->personalhealthhistory->men_med_enhancementdrugs_notes _form=$FORM}
                          <div id="personalhealthhistory__men_med_enhancementdrugs_has_h_C" class="controlset">
                          <br class="clear" />
                          {form_radio name="personalhealthhistory__men_med_enhancementdrugs_has_h" id="personalhealthhistory__men_med_enhancementdrugs_has_h" _label="Have they helped you?" _value=$FORM->personalhealthhistory->men_med_enhancementdrugs_has_h _options=$FORM->app_list_strings.yes_no_list _form=$FORM}
                          </div>
                        </div>
                      </td>
                      <td>
                        <input type="radio" name="personalhealthhistory__men_med_enhancementdrugs_use" id="personalhealthhistory__men_med_enhancementdrugs_use" class="radio_yesno_more" value="yes" {if $FORM->personalhealthhistory->men_med_enhancementdrugs_use == 'yes'}checked="checked" {/if}/>
                      </td>
                      <td>
                        <input type="radio" name="personalhealthhistory__men_med_enhancementdrugs_use" id="personalhealthhistory__men_med_enhancementdrugs_use" class="radio_yesno_more" value="no" {if $FORM->personalhealthhistory->men_med_enhancementdrugs_use== 'no'}checked="checked" {/if}/>
                      </td>
                    </tr>
                    <tr {php}if ($this->get_template_vars('FORM')->error('personalhealthhistory__men_med_sexual_function_use')) echo 'class="error"'{/php}>
                        <input type="hidden" name="personalhealthhistory__men_med_sexual_function_use" id="personalhealthhistory__men_med_sexual_function_use_fake" value="" />
                      <td>
                        Do you use any other medication for sexual function?<br/>
                        <div class="radio_yesno_more_content highlight" id="personalhealthhistory__men_med_sexual_function_notes_C" {if $FORM->personalhealthhistory->men_med_sexual_function_use != 'yes'}style="display:none;"{/if}>
                          {php}$this->assign('LABEL_PARAMS', array('class' => 'large', '_html' => 'If yes, which one(s) and when?'));{/php}
                          {form_textarea name="personalhealthhistory__men_med_sexual_function_notes" id="personalhealthhistory__men_med_sexual_function_notes" cols="70" rows="2" _label=$LABEL_PARAMS _value=$FORM->personalhealthhistory->men_med_sexual_function_notes _form=$FORM}
                          <div id="personalhealthhistory__men_med_sexual_function_helped_C" class="controlset">
			  <br class="clear" />
                          {form_radio name="personalhealthhistory__men_med_sexual_function_helped" id="personalhealthhistory__men_med_sexual_function_helped" _label="Have they helped you?" _value=$FORM->personalhealthhistory->men_med_sexual_function_helped _options=$FORM->app_list_strings.yes_no_list _form=$FORM}
			  </div>
                        </div>

                      </td>
                      <td>
                        <input type="radio" name="personalhealthhistory__men_med_sexual_function_use" id="personalhealthhistory__men_med_sexual_function_use" class="radio_yesno_more" value="yes" {if $FORM->personalhealthhistory->men_med_sexual_function_use == 'yes'}checked="checked" {/if}/>
                      </td>
                      <td>
                        <input type="radio" name="personalhealthhistory__men_med_sexual_function_use" id="personalhealthhistory__men_med_sexual_function_use" class="radio_yesno_more" value="no" {if $FORM->personalhealthhistory->men_med_sexual_function_use == 'no'}checked="checked" {/if}/>
                      </td>
                    </tr>
                    <tr {php}if ($this->get_template_vars('FORM')->error('personalhealthhistory__men_med_testosterone_use')) echo 'class="error"'{/php}>
                        <input type="hidden" name="personalhealthhistory__men_med_testosterone_use" id="personalhealthhistory__men_med_testosterone_use_fake" value="" />
                      <td>
                        Have you ever used Testosterone, hCG, DHEA or HGH?<br/>
                        <div class="radio_yesno_more_content highlight" id="personalhealthhistory__men_med_testosterone_notes_C" {if $FORM->personalhealthhistory->men_med_testosterone_use != 'yes'}style="display:none;"{/if}>
                        {php}$this->assign('LABEL_PARAMS', array('class' => 'large', '_html' => 'If yes, which one(s) and when?'));{/php}
                        {form_textarea name="personalhealthhistory__men_med_testosterone_notes" id="personalhealthhistory__men_med_testosterone_notes" cols="70" rows="2" _label=$LABEL_PARAMS _value=$FORM->personalhealthhistory->men_med_testosterone_notes _form=$FORM}
			      <div id="personalhealthhistory__men_med_testosterone_helped_C" class="controlset">
				<br class="clear" />
                        {form_radio name="personalhealthhistory__men_med_testosterone_helped" id="personalhealthhistory__men_med_testosterone_helped" _label="Have they helped you?" _value=$FORM->personalhealthhistory->men_med_testosterone_helped _options=$FORM->app_list_strings.yes_no_list _form=$FORM}
			      </div>
                        </div>
                      </td>
                      <td>
                          <input type="radio" name="personalhealthhistory__men_med_testosterone_use" id="personalhealthhistory__men_med_testosterone_use" class="radio_yesno_more" value="yes" {if $FORM->personalhealthhistory->men_med_testosterone_use == 'yes'}checked="checked" {/if}/>
                      </td>
                      <td>
                          <input type="radio" name="personalhealthhistory__men_med_testosterone_use" id="personalhealthhistory__men_med_testosterone_use" class="radio_yesno_more" value="no" {if $FORM->personalhealthhistory->men_med_testosterone_use=='no'}checked="checked" {/if}/>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div><!-- /male_only -->
{/if}

{if $FORM->personalhealthhistory->gender == 'female'}
            <div class="female_only">
              <legend>Female Medication Questions</legend>
              <div>
                <table class="data-table" width="70%">
                  <thead>
                    <tr>
                      <th width="80%"><strong>Medication</strong></th>
                      {foreach from=$FORM->app_list_strings.yes_no_list key=answer_value item=answer_name}
                      <th width="10%"><strong>{$answer_name}</strong></th>
                      {/foreach}
                    </tr>
                  </thead>
                  <tbody>
                    <tr {php}if ($this->get_template_vars('FORM')->error('personalhealthhistory__fem_med_enhancementdrugs_use')) echo 'class="error"'{/php}>
                        <input type="hidden" name="personalhealthhistory__fem_med_enhancementdrugs_use" id="personalhealthhistory__fem_med_enhancementdrugs_use_fake" value="" />
                      <td>
                       Have you ever taken estrogen, progesterone, testosterone, DHEA, or hGH?<br />
                        <div class="radio_yesno_more_content highlight" id="personalhealthhistory__fem_med_enhancementdrugs_notes_C" {if $FORM->personalhealthhistory->fem_med_enhancementdrugs_use != 'yes'}style="display:none;"{/if}>
                        {php}$this->assign('LABEL_PARAMS', array('class' => 'large', '_html' => 'If yes, which one(s) and when?'));{/php}
                        {form_textarea name="personalhealthhistory__fem_med_enhancementdrugs_notes" id="personalhealthhistory__fem_med_enhancementdrugs_notes" cols="70" rows="2" _label=$LABEL_PARAMS _value=$FORM->personalhealthhistory->fem_med_enhancementdrugs_notes _form=$FORM}
                        <div id="personalhealthhistory__fem_med_enhancementdrugs_help_C" class="controlset">
				<br class="clear" />
                        {form_radio name="personalhealthhistory__fem_med_enhancementdrugs_help" id="personalhealthhistory__fem_med_enhancementdrugs_help" _label="Have they helped you?" _value=$FORM->personalhealthhistory->fem_med_enhancementdrugs_help _options=$FORM->app_list_strings.yes_no_list _form=$FORM}
                        </div>
			</div>
                      </td>
                      <td>
                        <input type="radio" name="personalhealthhistory__fem_med_enhancementdrugs_use" id="personalhealthhistory__fem_med_enhancementdrugs_use" class="radio_yesno_more" value="yes" {if $FORM->personalhealthhistory->fem_med_enhancementdrugs_use=='yes'}checked="checked" {/if}/>
                      </td>
                      <td>
                        <input type="radio" name="personalhealthhistory__fem_med_enhancementdrugs_use" id="personalhealthhistory__fem_med_enhancementdrugs_use" class="radio_yesno_more" value="no" {if $FORM->personalhealthhistory->fem_med_enhancementdrugs_use=='no'}checked="checked" {/if}/>
                      </td>
                    </tr>
                    <tr {php}if ($this->get_template_vars('FORM')->error('personalhealthhistory__fem_med_birthcontrol_use')) echo 'class="error"'{/php}>
                        <input type="hidden" name="personalhealthhistory__fem_med_birthcontrol_use" id="personalhealthhistory__fem_med_birthcontrol_use_fake" value="" />
                      <td>
                        Have you used birth control?<br/>
                        <div class="radio_yesno_more_content controlset highlight" id="personalhealthhistory__fem_med_birthcontrol_notes_C" {if $FORM->personalhealthhistory->fem_med_birthcontrol_use != 'yes'}style="display:none;"{/if}>
                            <label for="checkbox" class="large">If yes, which one(s)?</label>
                            {php}$this->assign('LABEL_PARAMS', array('class' => 'large', '_html' => 'If yes, which one(s)?'));{/php}
                            {foreach from=$FORM->app_list_strings.birth_control_list key=KEY item=VALUE name=birthcontrol_loop}
                            <input type="checkbox" name="personalhealthhistory__fem_med_birthcontrol_notes[{$KEY}]" id="personalhealthhistory__fem_med_birthcontrol_notes__{$KEY}" value="{$KEY}" {if isset($FORM->personalhealthhistory->fem_med_birthcontrol_notes) && is_array($FORM->personalhealthhistory->fem_med_birthcontrol_notes) && in_array($KEY, $FORM->personalhealthhistory->fem_med_birthcontrol_notes)}checked="checked" {/if}/>
                            <label for="personalhealthhistory__fem_med_birthcontrol_notes__{$KEY}">{$VALUE}</label>
                            <br />
                            {if !$smarty.foreach.birthcontrol_loop.last}
                            {/if}
                            {/foreach}
                        </div>
                      </td>
                      <td>
                        <input type="radio" name="personalhealthhistory__fem_med_birthcontrol_use" id="personalhealthhistory__fem_med_birthcontrol_use" class="radio_yesno_more" value="yes" {if $FORM->personalhealthhistory->fem_med_birthcontrol_use=='yes'}checked="checked" {/if}/>
                      </td>
                      <td>
                        <input type="radio" name="personalhealthhistory__fem_med_birthcontrol_use" id="personalhealthhistory__fem_med_birthcontrol_use" class="radio_yesno_more" value="no" {if $FORM->personalhealthhistory->fem_med_birthcontrol_use=='no'}checked="checked" {/if}/>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div><!-- /female_only -->
            </fieldset>
{/if}
        </fieldset>

        <fieldset>
          <legend>Review of Overall Health</legend>
          <h4>Under the categories listed below, check the &ldquo;yes&rdquo; column if you are experiencing the listed symptom to a substantial or unusual degree.</h4>

          {assign var="category" value=""}


          {foreach from=$FORM->reviewoverallhealths key=OBJECT_IDX item=OBJECT}


          {if $category != $OBJECT->category}
            {if !empty($category)}
              </tbody>
              </table>
            </div>
          </fieldset>
            {/if}

          <fieldset>
          <legend>
            {assign var="mykey" value="`$OBJECT->category`"}
            {$FORM->app_list_strings.review_of_overall_health_category_list.$mykey}
          </legend>
          <div class="">
            <table class="data-table" width="70%">
              <thead>
                <tr>
                  <th width="80%"><strong>Symptom</strong></th>
                  {foreach from=$FORM->app_list_strings.yes_no_list key=answer_value item=answer_name}
                  <th width="15%"><strong>{$answer_name}</strong></th>
                  {/foreach}
                </tr>
              </thead>
              <tbody>
          {assign var="category" value=$OBJECT->category}
          {/if}
                <tr {php}if ($this->get_template_vars('FORM')->error('reviewoverallhealths__'.$this->get_template_vars('OBJECT_IDX').'__answer')) echo 'class="error"'{/php}>
                  <input type="hidden" name="reviewoverallhealths[{$OBJECT_IDX}][record]" id="reviewoverallhealths__{$OBJECT_IDX}__record" value="{$OBJECT->id}" />
                  <input type="hidden" name="reviewoverallhealths[{$OBJECT_IDX}][name]" id="reviewoverallhealths__{$OBJECT_IDX}__name" value="{$OBJECT->name}" />
                  <input type="hidden" name="reviewoverallhealths[{$OBJECT_IDX}][category]" id="reviewoverallhealths__{$OBJECT_IDX}__category" value="{$OBJECT->category}" />
                  <input type="hidden" name="reviewoverallhealths[{$OBJECT_IDX}][question]" id="reviewoverallhealths__{$OBJECT_IDX}__question" value="{$OBJECT->question}" />
                  <input type="hidden" name="reviewoverallhealths[{$OBJECT_IDX}][answer]" id="reviewoverallhealths__{$OBJECT_IDX}__answer_fake" value="{$OBJECT->answer}" />
                  <td>
                    {assign var="mykey" value=`$OBJECT->question`}
                    {$FORM->app_list_strings.review_of_overall_health_question_list.$mykey}
                    <br />
                    <div id="reviewoverallhealths__{$OBJECT_IDX}_notes_patient_C" {if $OBJECT->answer == '' || $OBJECT->answer == 'no'}style="clear:both;display:none;"{/if} class="radio_yesno_more_content highlight">

                      {if $FORM->app_list_strings.review_of_overall_health_question_list.$mykey == "Recent Change in Menstruation"}
                      {php}
                        $dnotes_patient = $this->get_template_vars('dnotes_patient');
                        $cycleBegin = strpos($dnotes_patient, '~~ Cycle Length ~~') + strlen('~~ Cycle Length ~~');
                        $cycleEnd = (strpos($dnotes_patient, '~~ Flow ~~')-strpos($dnotes_patient, '~~ Cycle Length ~~')) - strlen('~~ Cycle Length ~~');
                        $cycleNote = substr($dnotes_patient, $cycleBegin, $cycleEnd);
                        $this->assign('cycleNote', trim($cycleNote));

                        $flowBegin = strpos($dnotes_patient, '~~ Flow ~~') + strlen('~~ Flow ~~');
                        $flowEnd = (strpos($dnotes_patient, '~~ Regularity ~~')-strpos($dnotes_patient, '~~ Flow ~~')) - strlen('~~ Flow ~~');
                        $flowNote = substr($dnotes_patient, $flowBegin, $flowEnd);
                        $this->assign('flowNote', trim($flowNote));

                        $regularityBegin = strpos($dnotes_patient, '~~ Regularity ~~') + strlen('~~ Regularity ~~');
                        $regularityNote = substr($dnotes_patient, $regularityBegin);
                        $this->assign('regularityNote', trim($regularityNote));
                      {/php}
                      {php}$this->assign('LABEL_PARAMS', array('class' => 'large', '_html' => 'Cycle Length'));{/php}
                      {form_textarea name="reviewoverallhealths[`$OBJECT_IDX`][notes_patient__cycle_length]" id="reviewoverallhealths[$rx][notes_patient__cycle_length]" cols="70" _value=$cycleNote _form=$FORM _label=$LABEL_PARAMS}
                      {php}$this->assign('LABEL_PARAMS', array('class' => 'large', '_html' => 'Flow'));{/php}
                      {form_textarea name="reviewoverallhealths[`$OBJECT_IDX`][notes_patient__flow]" id="notes_patient__flow" cols="70" _value=$flowNote _label=$LABEL_PARAMS _form=$FORM}
                      {php}$this->assign('LABEL_PARAMS', array('class' => 'large', '_html' => 'Regularity'));{/php}
                      {form_textarea name="reviewoverallhealths[`$OBJECT_IDX`][notes_patient__regularity]" _label=$LABEL_PARAMS id="reviewoverallhealths[$rx][notes_patient__regularity]" cols="70" _value=$regularityNote _form=$FORM}
                    {elseif $FORM->app_list_strings.review_of_overall_health_question_list.$mykey == "Has your last period been more than 6 months ago?"}
                    {php}
                      $this->assign('LABEL_PARAMS', array('class' => 'large', '_html' => 'Date of last period'));{/php}
                      {form_textarea name="reviewoverallhealths[`$OBJECT_IDX`][notes_patient]" id="reviewoverallhealths__`$OBJECT_IDX`__notes_patient" rows="3" _value=$OBJECT->notes_patient _label=$LABEL_PARAMS _form=$FORM}
                    {else}
                    {php}
                      $this->assign('LABEL_PARAMS', array('class' => 'large', '_html' => 'Please describe'));{/php}
                      {form_textarea name="reviewoverallhealths[`$OBJECT_IDX`][notes_patient]" id="reviewoverallhealths__`$OBJECT_IDX`__notes_patient" rows="3" _value=$OBJECT->notes_patient _label=$LABEL_PARAMS _form=$FORM}
                    {/if}
                    </div>
                  </td>
                  <td>
                    <input type="radio" name="reviewoverallhealths[{$OBJECT_IDX}][answer]" id="reviewoverallhealths__{$OBJECT_IDX}__answer" value="yes" {if $OBJECT->answer=='yes'}checked="checked"{/if} class='radio_yesno_more'/>
                  </td>
                  <td>
                    <input type="radio" name="reviewoverallhealths[{$OBJECT_IDX}][answer]" id="reviewoverallhealths__{$OBJECT_IDX}__answer" value="no" {if $OBJECT->answer=='no'}checked="checked"{/if} class='radio_yesno_more' />
                  </td>
                </tr>
        {/foreach}
              </tbody>
              </table>
            </div><!-- /male_only -->
          </fieldset>
