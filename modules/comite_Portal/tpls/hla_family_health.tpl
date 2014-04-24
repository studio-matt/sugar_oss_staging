        <h2>Family Health History</h2>
        <h4>Estimated time to complete this section: 30 Minutes</h4>

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
          <legend>Family Health History</legend>

          <h4>Special Instructions</h4>
          <p>Below you can enter all health history that you know of for your family. Start at the top and select a family member from the drop-down if you are aware of them suffering from that illness or condition. If you do not have any family history select "None Available". When done click the "Next" button to move on. If you select an incorrect family member by accident you may un-check the checkbox to remove them.</p>

          <dl id="history" class="ui-accordion ui-widget ui-helper-reset ui-accordion-icons">
          {foreach from=$FORM->app_list_strings.health_condition key=KEY item=VALUE}
            <dt class="title ui-accordion-header ui-helper-reset ui-state-default ui-corner-all" role="tab" aria-expanded="false" aria-selected="false" tabindex="-1">
              <span class="ui-icon ui-icon-triangle-1-s"></span>
              <a href="#">{$VALUE}</a>
            </dt>
            <dd class="clearfix">
              <ul class="people clearfix" id="condition_{$KEY}">
              {foreach from=$FORM->conditioninstances key=CI_IDX item=CONDITIONINSTANCE}
                {if $CONDITIONINSTANCE->name == $KEY}
                <li class="conditioninstance clearfix"{if $CONDITIONINSTANCE->delete} style="display:none;"{/if}>
                  <input type="hidden" name="conditioninstances[{$CI_IDX}][record]" id="conditioninstances__{$CI_IDX}__record" value="{$CONDITIONINSTANCE->id}" />
                  <input type="hidden" name="conditioninstances[{$CI_IDX}][delete]" id="conditioninstances__{$CI_IDX}__delete" class="conditioninstace_delete" value="{$CONDITIONINSTANCE->delete}" />
                  <input type="hidden" name="conditioninstances[{$CI_IDX}][name]" class="condition_name" id="conditioninstances__{$CI_IDX}__name" value="{$KEY}" />

                  <a href="#" class="button actionremove" title="Are you sure you want to remove this condition?">
                    <img src="/custom/themes/comiteMDPortal/images/x.png">
                    Remove
                  </a>

                  {php}
                  $select_options = array();
                  $select_value = '';
                  if ($relative = $this->get_template_vars('CONDITIONINSTANCE')->_relative) {
                    $relative->_many_key = 'relatives__' . str_replace('relatives__', '', $relative->_many_key);
                    $select_options[$relative->_many_key] = $relative->relation . ' - ' .$relative->name;
                    $select_value = $relative->_many_key;
                  }
                  $this->assign('SELECT_OPTIONS', $select_options);
                  $this->assign('SELECT_VALUE', $select_value);
                  {/php}
                  {form_select name="conditioninstances[`$CI_IDX`][relative]" id="conditioninstances__`$CI_IDX`__relative" class="conditioninstance_relative" _label="Relative" _options=$SELECT_OPTIONS _value=$SELECT_VALUE _empty=true _form=$FORM}
                  <a href="#" class="button edit_relative actionedit"style="display:none">
                    <img src="/custom/themes/comiteMDPortal/images/edit.gif" />
                    Edit
                  </a>

                  {form_textarea name="conditioninstances[`$CI_IDX`][note_patient]" id="conditioninstances__`$CI_IDX`__note_patient" _label="History" placeholder="Add notes..." _value=$CONDITIONINSTANCE->note_patient _form=$FORM}<br />
                  <p class="note">Please include the history of your Relative and the contidition listed above.</p>
                </li>
                {/if}
              {/foreach}
              </ul>

              <!-- add more -->
              <div class="buttonrow">
                <input type="hidden" class="condition_name" value="{$KEY}" />
                <a href="#" class="button actionadd additional_conditioninstance">
                  <img src="/custom/themes/comiteMDPortal/images/plus_inline.gif" />
                  Add Another Relative with this Condition
                </a>
              </div>

              <input type="button" class="next actionadd" value="Open The Next Condition &rarr;" />
            </dd>
            {/foreach}
          </dl>
        </fieldset>
        <fieldset class="relatives" id="relatives">
          <legend>Relatives</legend>
          <h4>Instructions</h4>
          <p>As you add relatives, they will appear in the list below.  Add any additional information, including if the member of the family is living or deceased.</p>

          {foreach from=$FORM->relatives key=RELATIVE_IDX item=RELATIVE}
          <div id="relatives__{$RELATIVE_IDX}" class="relative"{if $RELATIVE->delete} style="display:none;"{/if}>
            <input type="hidden" name="relatives[{$RELATIVE_IDX}][record]" id="relatives__{$RELATIVE_IDX}__record" value="{$RELATIVE->id}" />
            <input type="hidden" name="relatives[{$RELATIVE_IDX}][delete]" id="relatives__{$RELATIVE_IDX}__delete" class="relative_delete" value="{$RELATIVE->delete}" />

            <a href="#" class="button actionremove" title="Are you sure you want to remove this relative?">
              <img src="/custom/themes/comiteMDPortal/images/x.png">
              Remove
            </a>

            <div class="relative_relation">
              {form_label for="relatives__`$RELATIVE_IDX`__relation" _html="Relation" _form=$FORM}
              <select id="relatives__{$RELATIVE_IDX}__relation" name="relatives[{$RELATIVE_IDX}][relation]">
                <option value=""></option>
                {foreach from=$FORM->app_list_strings.relationship key=KEY item=VALUE}
                <option value="{$KEY}"{if $KEY|trim|lower == $RELATIVE->relation|trim|lower} selected="selected"{/if}>{$VALUE}</option>
                {/foreach}
              </select>
            </div>
            <div class="relative_name">
              {form_label for="relatives__`$RELATIVE_IDX`__name" _html="Name" _form=$FORM}
              <input type="text" name="relatives[{$RELATIVE_IDX}][name]" id="relatives__{$RELATIVE_IDX}__name" value="{$RELATIVE->name}" />
            </div>

{php}
list($dod_month, $dod_day, $dod_year) = explode('/', substr(preg_replace('#/0#', '/', '/'.$this->get_template_vars('RELATIVE')->date_deceased), 1));
$this->assign('DOD', array(
  'month' => $dod_month,
  'day' => $dod_day,
  'year' => $dod_year,
  'days' => range(1,31),
  'years' => range(date('Y'), date('Y')-120)
));
{/php}
            <div class="relative_deceased">
              {form_label for="relatives__`$RELATIVE_IDX`__deceased" _html="Deceased?" _form=$FORM}
              <select id="relatives__{$RELATIVE_IDX}__deceased" name="relatives[{$RELATIVE_IDX}][is_deceased]">
                <option value="0">No</option>
                <option value="1"{if $RELATIVE->is_deceased} selected="selected"{/if}>Yes</option>
              </select>
            </div>
            <div class="relative_date_deceased"{if !$RELATIVE->is_deceased} style="display:none;"{/if}>
              <label for="relatives__{$RELATIVE_IDX}__date_deceased">Age at Death</label>
              <input type="text" name="relatives[{$RELATIVE_IDX}][date_deceased]" id="relatives__{$RELATIVE_IDX}__date_deceased" value="{$RELATIVE->date_deceased}" />
            </div>
            <div class="relative_deceased_explanation"{if !$RELATIVE->is_deceased} style="display:none;"{/if}>
             {form_label for="relatives__`$RELATIVE_IDX`__deceased_explanation" _html="Cause of Death" _form=$FORM}
              <textarea name="relatives[{$RELATIVE_IDX}][deceased_explanation]" id="relatives__{$RELATIVE_IDX}__deceased_explanation">{$RELATIVE->deceased_explanation}</textarea>
            </div>

            <div class="relative_date_born"{if $RELATIVE->is_deceased} style="display:none;"{/if}>
              <label for="relatives__{$RELATIVE_IDX}__date_born">Current Age</label>
{php}
$date_born = $this->get_template_vars('RELATIVE')->date_born;
$age = '';
if (preg_match('#^(\d{4})-\d{2}-\d{2}$#', $date_born, $matches)) {
    $age = date('Y') - $matches[1];
}
$this->assign('AGE', $age);
{/php}
              <input type="text" name="relatives[{$RELATIVE_IDX}][date_born]" id="relatives__{$RELATIVE_IDX}__date_born" value="{$AGE}" />
            </div>

            <hr />
          </div>
          {/foreach}

          <!-- add more -->
          <div class="buttonrow">
            <a href="#" id="additional_relatives" class="button actionadd">
              <img src="/custom/themes/comiteMDPortal/images/plus_inline.gif" />
              Add Another Relative
            </a>
          </div>
          <p class="note">If you have any additional relatives you would like to add, click the Add Another Relative button above.<br />You may add as relatives as you like.</p>
        </fieldset>
