        <h2>Health &amp; Lifestyle Assessment</h2>
        <h4>Estimated time to complete this section: 60 Minutes</h4>

        <p>All of the information provided below will remain strictly confidential, and your contact information
        will be used for medically related and financial correspondence only.</p>

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
          <legend>Lifestyle</legend>
          <fieldset class="contact_name">
            <legend>General Information</legend>

            <div class="controlset">
                {form_radio name="lifestyle__marital_status" id="lifestyle__marital_status" _value=$FORM->life_style->marital_status _label="Marital Status" _options=$FORM->app_list_strings.marital_status_list _form=$FORM}
            </div>

            <div class="controlset">
                {form_radio name="lifestyle__have_children" id="lifestyle__have_children" _value=$FORM->life_style->have_children _label="Do you have children?" _options=$FORM->app_list_strings.yes_no_list _form=$FORM onclick="showhide('lifestyle__have_children', '__yes')"}
            </div>

            <div id="lifestyle__have_children_C"{if $FORM->life_style->have_children|trim != 'yes'} style="display: none;" class="highlight"{/if}>
                {form_input_text name="lifestyle__have_children_notes" id="lifestyle__have_children_notes" value=$FORM->life_style->have_children_notes placeholder="If so, how many?" _form=$FORM}
            </div>

            <div class="controlset">
                {form_radio name="lifestyle__have_grandchildren" id="lifestyle__have_grandchildren" _value=$FORM->life_style->have_grandchildren _label="Do you have grandchildren?" _options=$FORM->app_list_strings.yes_no_list _form=$FORM onclick="showhide('lifestyle__have_grandchildren', '__yes')"}
            </div>

            <div id="lifestyle__have_grandchildren_C"{if $FORM->life_style->have_grandchildren|trim != 'yes'} style="display: none;" class="highlight"{/if}>
                {form_input_text name="lifestyle__have_grandchildren_notes" id="lifestyle__have_grandchildren_notes" value=$FORM->life_style->have_grandchildren_notes placeholder="If so, how many?" _form=$FORM}
            </div>

            <div>
                {form_label for="lifestyle__family_ties" _html="How close are your ties to your family and friends?" class="large" _form=$FORM}
                {form_input_text name="lifestyle__family_ties" id="lifestyle__family_ties" value=$FORM->life_style->family_ties _form=$FORM}
            </div>

            <div>
                {form_label for="lifestyle__occupation" _html="What is your occupation?" class="large" _form=$FORM}
                {form_input_text name="lifestyle__occupation" id="lifestyle__occupation" value=$FORM->life_style->occupation _form=$FORM}
            </div>

            <div>
                {form_label for="lifestyle__hobbies" _html="What are your hobbies?" class="large" _form=$FORM}
                {form_input_text name="lifestyle__hobbies" id="lifestyle__hobbies" value=$FORM->life_style->hobbies _form=$FORM}
            </div>

            <div class="controlset">
                {form_radio name="lifestyle__travel_international" id="lifestyle__travel_international" _value=$FORM->life_style->travel_international _label="Do you travel outside the country?" _options=$FORM->app_list_strings.yes_no_list _form=$FORM onclick="showhide('lifestyle__travel_international', '__yes')"}
            </div>

            <div id="lifestyle__travel_international_C"{if $FORM->life_style->travel_international|trim != 'yes'} style="display: none;" class="highlight"{/if}>
                {form_textarea name="lifestyle__travel_international_notes" id="lifestyle__travel_international_notes" _value=$FORM->life_style->travel_international_notes rows="3" placeholder="Please list  the countries you have visited in the last 5 years." _form=$FORM}
            </div>

            <div class="controlset">
                {form_radio name="lifestyle__seatbelt_user" id="lifestyle__seatbelt_user" _value=$FORM->life_style->seatbelt_user _label="Do you use a seatbelt?" _options=$FORM->app_list_strings.seatbelt_use_list _form=$FORM}
            </div>

            <div class="controlset">
                {form_radio name="lifestyle__have_smoke_detector" id="lifestyle__have_smoke_detector" _value=$FORM->life_style->have_smoke_detector _label="Do you have a working smoke detector?" _options=$FORM->app_list_strings.yes_no_list _form=$FORM}
            </div>

            <div class="controlset">
                {form_radio name="lifestyle__have_carbon_monoxide_detector" id="lifestyle__have_carbon_monoxide_detector" _value=$FORM->life_style->have_carbon_monoxide_detector _label="Do you have a working carbon monoxide detector?" _options=$FORM->app_list_strings.yes_no_list _form=$FORM}
            </div>
          </fieldset><!-- /General Information -->

          <fieldset class="contact_name">
            <legend>Substance Use</legend>

            <div class="controlset">
              {form_select name="lifestyle__alcohol_avg_weekly_consumption" id="lifestyle__alcohol_avg_weekly_consumption" _value=$FORM->life_style->alcohol_avg_weekly_consumption _label="How many servings of an alcoholic beverage do you consume in an average week?" _empty=true _options=$FORM->app_list_strings.alcohol_weekly_consumption_list _form=$FORM}
            </div>



            <div class="controlset">
                {form_radio name="lifestyle__tobacco_use_current" id="lifestyle__tobacco_use_current" _value=$FORM->life_style->tobacco_use_current _label="Do you currently use tobacco?" _options=$FORM->app_list_strings.yes_no_list _form=$FORM onclick="showhide('lifestyle__tobacco_use_current', '__yes')"}
            </div>

            <div id="lifestyle__tobacco_use_current_C" class="controlset highlight"{if $FORM->life_style->tobacco_use_current|lower != 'yes'} style="display:none;"{/if}>
              <label for="checkbox" class="large">If yes, what type? (Check all that apply)</label>

          {************************************************
            @TODO
            Contact->LifeStyle->SubstanceUseInstance
            * name (substance_use_list)
            * past_present (past_present) = Present
            * per_day
          *************************************************}

              {foreach from=$FORM->substanceuseinstance key=OBJECT_IDX item=OBJECT}
                {if $OBJECT->past_present|lower == 'present'}
                <input type="hidden" name="substanceuseinstance[{$OBJECT_IDX}][record]" id="substanceuseinstance__{$OBJECT_IDX}__record" value="{$OBJECT->id}" />
                <input type="hidden" name="substanceuseinstance[{$OBJECT_IDX}][delete]" id="substanceuseinstance__{$OBJECT_IDX}__delete" value="0" />
                <input type="hidden" name="substanceuseinstance[{$OBJECT_IDX}][answer]" id="substanceuseinstance__{$OBJECT_IDX}__answer_fake" />
                <input type="hidden" name="substanceuseinstance[{$OBJECT_IDX}][name]" value="{$OBJECT->name}" />
                <input type="hidden" name="substanceuseinstance[{$OBJECT_IDX}][past_present]" value="Present" />
                <input type="checkbox" name="substanceuseinstance[{$OBJECT_IDX}][answer]" id="substanceuseinstance__{$OBJECT_IDX}__answer" value="yes" {if 'yes' == $OBJECT->answer}checked="checked" {/if} onclick="showhide('substanceuseinstance__{$OBJECT_IDX}', '__answer')"/>
                {form_label for="substanceuseinstance__`$OBJECT_IDX`__answer" _html=$OBJECT->name _form=$FORM}

                <div id="substanceuseinstance__{$OBJECT_IDX}_C"{if $OBJECT->answer|lower != 'yes'} style="display: none;"{/if}>
                  <input name="substanceuseinstance[{$OBJECT_IDX}][per_day]" type="text" value="{$OBJECT->per_day}" id="substanceuseinstance__{$OBJECT_IDX}__per_day" placeholder="How many per day on average?"/>
                </div>

                <br />
                {/if}
              {/foreach}

              {form_label for="lifestyle__tobacco_use_current_length" _html="How long have you used tobacco?" class="large" _form=$FORM}
              {form_input_text name="lifestyle__tobacco_use_current_length" id="lifestyle__tobacco_use_current_length" value=$FORM->life_style->tobacco_use_current_length _form=$FORM}
              <br />
              {form_radio name="lifestyle__tobacco_use_attempted_quit" id="lifestyle__tobacco_use_attempted_quit" _value=$FORM->life_style->tobacco_use_attempted_quit _label="Have you ever tried to quit?" _options=$FORM->app_list_strings.yes_no_list _form=$FORM}
            </div>



            <div class="controlset">
                {form_radio name="lifestyle__tobacco_use_past" id="lifestyle__tobacco_use_past" _value=$FORM->life_style->tobacco_use_past _label="Have you ever used any type of tobacco in the past?" _options=$FORM->app_list_strings.yes_no_list _form=$FORM onclick="showhide('lifestyle__tobacco_use_past', '__yes')"}
            </div>

            <div id="lifestyle__tobacco_use_past_C" class="controlset highlight"{if $FORM->life_style->tobacco_use_past|lower != 'yes'} style="display:none;"{/if}>
              <label for="checkbox" class="large">If yes, what type? (Check all that apply)</label>


          {************************************************
            @TODO
            Contact->LifeStyle->SubstanceUseInstance
            * name (substance_use_list)
            * past_present (past_present) = Past
            * per_day
          *************************************************}

              {foreach from=$FORM->substanceuseinstance key=OBJECT_IDX item=OBJECT}
                {if $OBJECT->past_present|lower == 'past'}
                <input type="hidden" name="substanceuseinstance[{$OBJECT_IDX}][record]" id="substanceuseinstance__{$OBJECT_IDX}__record" value="{$OBJECT->id}" />
                <input type="hidden" name="substanceuseinstance[{$OBJECT_IDX}][delete]" id="substanceuseinstance__{$OBJECT_IDX}__delete" value="0" />
                <input type="hidden" name="substanceuseinstance[{$OBJECT_IDX}][answer]" id="substanceuseinstance__{$OBJECT_IDX}__answer_fake" />
                <input type="hidden" name="substanceuseinstance[{$OBJECT_IDX}][name]" value="{$OBJECT->name}" />
                <input type="hidden" name="substanceuseinstance[{$OBJECT_IDX}][past_present]" value="Past" />
                <input type="checkbox" name="substanceuseinstance[{$OBJECT_IDX}][answer]" id="substanceuseinstance__{$OBJECT_IDX}__answer" value="yes" {if 'yes' == $OBJECT->answer}checked="checked" {/if} onclick="showhide('substanceuseinstance__{$OBJECT_IDX}', '__answer')"/>
                {form_label for="substanceuseinstance__`$OBJECT_IDX`__answer" _html=$OBJECT->name _form=$FORM}

                <div id="substanceuseinstance__{$OBJECT_IDX}_C"{if $OBJECT->answer|lower != 'yes'} style="display: none;"{/if}>
                  <input name="substanceuseinstance[{$OBJECT_IDX}][per_day]" type="text" value="{$OBJECT->per_day}" id="substanceuseinstance__{$OBJECT_IDX}__per_day" placeholder="How many per day on average?"/>
                </div>

                <br />
                {/if}
              {/foreach}

              {form_label for="lifestyle__tobacco_use_past_length" _html="How long did you use tobacco?" class="large" _form=$FORM}
              {form_input_text name="lifestyle__tobacco_use_past_length" id="lifestyle__tobacco_use_past_length" value=$FORM->life_style->tobacco_use_past_length _form=$FORM}
              <br />
              {form_label for="lifestyle__tobacco_use_past_quit" _html="When did you quit?" class="large" _form=$FORM}
              {form_input_text name="lifestyle__tobacco_use_past_quit" id="lifestyle__tobacco_use_past_quit" value=$FORM->life_style->tobacco_use_past_quit _form=$FORM}
            </div>

          </fieldset><!-- /Substance Use -->
        </fieldset><!-- /Lifestyle -->

        <fieldset>
          <legend>Personal Assessment &amp; Stress Management</legend>
          <fieldset class="contact_name">
            <legend>Personal Assessment</legend>
            <h4>The list below contains several traits that describe people.  Select the answer that best describes you.  Select only one response for each trait.</h4>
            <table class="data-table">
              <thead>
                <tr>
                  <th width="40%"><strong></strong></th>
                  {foreach from=$FORM->app_list_strings.personal_traits_answer_list key=answer_value item=answer_name}
                  <th width="15%"><strong>{$answer_name}</strong></th>
                  {/foreach}
                </tr>
              </thead>
              <tbody>
                {foreach from=$FORM->personaltraitinstance key=OBJECT_IDX item=OBJECT}
                <tr>
                  <input type="hidden" name="personaltraitinstance[{$OBJECT_IDX}][record]" id="personaltraitinstance__{$OBJECT_IDX}__record" value="{$OBJECT->id}" />
                  <input type="hidden" name="personaltraitinstance[{$OBJECT_IDX}][delete]" id="personaltraitinstance__{$OBJECT_IDX}__delete" value="0" />
                  <input type="hidden" name="personaltraitinstance[{$OBJECT_IDX}][answer]" id="personaltraitinstance__{$OBJECT_IDX}__answer" />
                  <input type="hidden" name="personaltraitinstance[{$OBJECT_IDX}][name]" value="{$OBJECT->name}" />
                  <td>{form_label for="personaltraitinstance__`$OBJECT_IDX`__answer" class="large" _html=$OBJECT->name _form=$FORM}</td>
                  {foreach from=$FORM->app_list_strings.personal_traits_answer_list key=answer_value item=answer_name}
                  <td><input type="radio" name="personaltraitinstance[{$OBJECT_IDX}][answer]" id="personaltraitinstance__{$OBJECT_IDX}__{$answer_value}" value="{$answer_value}" {if $answer_value == $OBJECT->answer}checked="checked" {/if}/></td>
                  {/foreach}
                </tr>
                {/foreach}
              </tbody>
            </table>

            <h4>When you are very angry or upset about something, rate each response according to the likelihood of having the listed reaction.</h4>
            <table class="data-table">
              <thead>
                <tr>
                  <th width="40%"><strong></strong></th>
                  {foreach from=$FORM->app_list_strings.angry_reaction_answer_list key=answer_value item=answer_name}
                  <th width="20%"><strong>{$answer_name}</strong></th>
                  {/foreach}
                </tr>
              </thead>
              <tbody>
                {foreach from=$FORM->angryreactioninstance key=OBJECT_IDX item=OBJECT}
                <tr>
                  <input type="hidden" name="angryreactioninstance[{$OBJECT_IDX}][record]" id="angryreactioninstance__{$OBJECT_IDX}__record" value="{$OBJECT->id}" />
                  <input type="hidden" name="angryreactioninstance[{$OBJECT_IDX}][delete]" id="angryreactioninstance__{$OBJECT_IDX}__delete" value="0" />
                  <input type="hidden" name="angryreactioninstance[{$OBJECT_IDX}][answer]" id="angryreactioninstance__{$OBJECT_IDX}__answer" />
                  <input type="hidden" name="angryreactioninstance[{$OBJECT_IDX}][name]" value="{$OBJECT->name}" />
                  {assign var="mykey" value="`$OBJECT->name`"}
                  <td>{form_label for="angryreactioninstance__`$OBJECT_IDX`__answer" class="large" _html="`$FORM->app_list_strings.angry_reaction_list.$mykey`." _form=$FORM}</td>
                  {foreach from=$FORM->app_list_strings.angry_reaction_answer_list key=answer_value item=answer_name}
                  <td><input type="radio" name="angryreactioninstance[{$OBJECT_IDX}][answer]" id="angryreactioninstance__{$OBJECT_IDX}__answer__{$answer_value}" value="{$answer_value}" {if $answer_value == $OBJECT->answer}checked="checked" {/if}/></td>
                  {/foreach}
                </tr>
                {/foreach}
              </tbody>
            </table>

            <h4>On an average workday, how do you generally feel? If you are a homemaker, refer to your household duties; if you are unemployed or retired, think back to your last position.</h4>
            <table class="data-table">
              <thead>
                <tr>
                  <th width="70%"><strong></strong></th>
                  {foreach from=$FORM->app_list_strings.yes_no_list key=answer_value item=answer_name}
                  <th width="15%"><strong>{$answer_name}</strong></th>
                  {/foreach}
                </tr>
              </thead>
              <tbody>
                {foreach from=$FORM->workfeelinginstance key=OBJECT_IDX item=OBJECT}
                <tr>
                  <input type="hidden" name="workfeelinginstance[{$OBJECT_IDX}][record]" id="workfeelinginstance__{$OBJECT_IDX}__record" value="{$OBJECT->id}" />
                  <input type="hidden" name="workfeelinginstance[{$OBJECT_IDX}][delete]" id="workfeelinginstance__{$OBJECT_IDX}__delete" value="0" />
                  <input type="hidden" name="workfeelinginstance[{$OBJECT_IDX}][answer]" id="workfeelinginstance__{$OBJECT_IDX}__answer" />
                  <input type="hidden" name="workfeelinginstance[{$OBJECT_IDX}][name]" value="{$OBJECT->name}" />
                  {assign var="mykey" value="`$OBJECT->name`"}
                  <td>{form_label for="workfeelinginstance__`$OBJECT_IDX`__answer" class="large" _html="`$FORM->app_list_strings.work_feeling_list.$mykey`." _form=$FORM}

                    <div id="workfeelinginstance__{$OBJECT_IDX}_C"{if $OBJECT->answer|trim != 'yes'} style="display: none;"{/if} class="highlight">
                      {form_textarea name="workfeelinginstance[`$OBJECT_IDX`][description]" id="workfeelinginstance__`$OBJECT_IDX`_description" _value=$OBJECT->description cols="70" rows="" placeholder="Please describe:" _form=$FORM}
                    </div>

                  </td>
                  {foreach from=$FORM->app_list_strings.yes_no_list key=answer_value item=answer_name}
                  <td><input type="radio" name="workfeelinginstance[{$OBJECT_IDX}][answer]" id="workfeelinginstance__{$OBJECT_IDX}__{$answer_value}" value="{$answer_value}" {if $answer_value == $OBJECT->answer}checked="checked" {/if} onclick="showhide('workfeelinginstance__{$OBJECT_IDX}', '__yes')"/></td>
                  {/foreach}
                </tr>
                {/foreach}
              </tbody>
            </table>

          </fieldset><!-- /Personal Assessment -->

          <fieldset class="contact_name">
            <legend>Stress Management</legend>
            <div class="controlset">
                {form_radio name="lifestyle__stress_under_great_deal" id="lifestyle__stress_under_great_deal" _value=$FORM->life_style->stress_under_great_deal _label="Do you consider yourself to be under a great deal of stress?" _options=$FORM->app_list_strings.yes_no_list _form=$FORM onclick="showhide('lifestyle__stress_under_great_deal', '__yes')"}
            </div>

            <div id="lifestyle__stress_under_great_deal_C"{if $FORM->life_style->stress_under_great_deal|trim != 'yes'} style="display: none;" class="highlight"{/if}>
                {form_textarea name="lifestyle__stress_under_great_deal_notes" id="lifestyle__stress_under_great_deal_notes" _value=$FORM->life_style->stress_under_great_deal_notes rows="3" placeholder="If yes, please explain." _form=$FORM}
            </div>

            <div class="controlset column_checkbox">
              <label for="lifestyle_stress_relieve" class="large">From the list, select all the methods you use to relieve tension and/or stress:</label>
              <input type="hidden" name="lifestyle__stress_relief_methods[]" />
              <ul>
                {foreach from=$FORM->app_list_strings.stress_relief_methods_list item=value key=name}
                <li>
                  <input type="checkbox" name="lifestyle__stress_relief_methods[]"  value="{$value}" id="lifestyle__stress_relief_methods__{$name}" {if in_array($name, $FORM->lifestyle__stress_relief_methods)} checked="checked"{/if}/>
                  <label for="lifestyle__stress_relief_methods__{$name}">{$value}</label>
                  {if $value == 'Other'}
                  <div id="{$name}_C" class="highlight" style="">
                    <label for="lifestyle__stress_relief_methods_other" class="large">Please explain</label>
                    {form_textarea name="lifestyle__stress_relief_methods_other" id="lifestyle__stress_relief_methods_other" _value=$FORM->life_style->stress_relief_methods_other rows="3" placeholder="" _form=$FORM}
                  </div>
                  {/if}
                </li>
                {/foreach}
              </ul>
            </div>


          </fieldset><!-- /Stress Management -->

          <fieldset class="contact_name">
            <legend>Sleep Habits</legend>
            <div>
                {form_label for="lifestyle__sleep_average_per_night" _html="On an average, how many hours of restful sleep do you get per night?" class="large" _form=$FORM}
                {form_input_text name="lifestyle__sleep_average_per_night" id="lifestyle__sleep_average_per_night" value=$FORM->life_style->sleep_average_per_night _form=$FORM}
            </div>

            <div>
                {form_label for="lifestyle__sleep_need_per_night" _html="How many hours of sleep do you think you need?" class="large" _form=$FORM}
                {form_input_text name="lifestyle__sleep_need_per_night" id="lifestyle__sleep_need_per_night" value=$FORM->life_style->sleep_need_per_night _form=$FORM}
            </div>

            <div>
                <p>Do you suffer from any of the following:</p>

          {************************************************
            @TODO
            Contact->LifeStyle->SleepConditionInstance
            * name (sleep_condition_list)
            * answer (true/false) [Just don't save this if it's not yes]
            * description
          *************************************************}
                {foreach from=$FORM->sleepconditioninstance key=OBJECT_IDX item=OBJECT}
                {*foreach from=$FORM->app_list_strings.sleep_condition_list item=value key=name*}
                <input type="hidden" name="sleepconditioninstance[{$OBJECT_IDX}][record]" id="sleepconditioninstance__{$OBJECT_IDX}__record" value="{$OBJECT->id}" />
                <input type="hidden" name="sleepconditioninstance[{$OBJECT_IDX}][delete]" id="sleepconditioninstance__{$OBJECT_IDX}__delete" value="0" />
                <input type="hidden" name="sleepconditioninstance[{$OBJECT_IDX}][answer]" id="sleepconditioninstance__{$OBJECT_IDX}__answer_default" value="no" />
                <input type="hidden" name="sleepconditioninstance[{$OBJECT_IDX}][name]" value="{$OBJECT->name}" />
                <div class="controlset">
                  <input type="checkbox" name="sleepconditioninstance[{$OBJECT_IDX}][answer]" id="sleepconditioninstance__{$OBJECT_IDX}__answer" value="yes"{if $OBJECT->answer|lower == 'yes'} checked="checked"{/if} onclick="showhide('sleepconditioninstance__{$OBJECT_IDX}', '__answer');"/>
                  <label for="sleepconditioninstance__{$OBJECT_IDX}__answer">{$OBJECT->name}</label>
                </div>
                <div id="sleepconditioninstance__{$OBJECT_IDX}_C" class="highlight" style="{if $OBJECT->answer|lower != 'yes'}display: none; {/if}clear:both;">
                  <label id="sleepconditioninstance__{$OBJECT_IDX}__description" for="sleepconditioninstance__{$OBJECT_IDX}__description" class="large">Please describe your condition</label>
                  <textarea name="sleepconditioninstance[{$OBJECT_IDX}][description]" id="sleepconditioninstance__{$OBJECT_IDX}__description" rows="3" id="{$name}_description" />{$OBJECT->description}</textarea>
                </div>
                {/foreach}
            </div>

            <div>
                {form_label for="lifestyle__sleep_wake_fully_rested" _html="During the past month, what percent of the time would you say you wake up feeling fresh and fully rested?" class="large" _form=$FORM}
                {form_input_text name="lifestyle__sleep_wake_fully_rested" id="lifestyle__sleep_wake_fully_rested" value=$FORM->life_style->sleep_wake_fully_rested _form=$FORM}
            </div>

            <div class="controlset">
                {form_radio name="lifestyle__sleep_pattern_changes" id="lifestyle__sleep_pattern_changes" _value=$FORM->life_style->sleep_pattern_changes _label="Have there been any major changes in your sleep patterns in the last year?" _options=$FORM->app_list_strings.yes_no_list _form=$FORM}
            </div>

            <div class="controlset">
                {form_radio name="lifestyle__sleep_morning_difficult_out" id="lifestyle__sleep_morning_difficult_out" _value=$FORM->life_style->sleep_pattern_changes _label="Do you find it difficult to get out of bed in the morning?" _options=$FORM->app_list_strings.yes_no_list _form=$FORM}
            </div>
          </fieldset><!-- /Sleep Habits -->
        </fieldset><!-- /Personal Assessment &amp; Stress Management -->

        <fieldset>
          <legend>Mind and Emotions</legend>
          <h4>Select "yes" if you are experiencing the listed symptom to a substantial or unusual degree.</h4>
          <table class="data-table">
            <thead>
              <tr>
                <th width="70%"><strong></strong></th>
                {foreach from=$FORM->app_list_strings.yes_no_list key=answer_value item=answer_name}
                <th width="15%"><strong>{$answer_name}</strong></th>
                {/foreach}
              </tr>
            </thead>
            <tbody>
              {foreach from=$FORM->mindemotioninstance key=OBJECT_IDX item=OBJECT}
              <tr>
                <input type="hidden" name="mindemotioninstance[{$OBJECT_IDX}][record]" id="mindemotioninstance__{$OBJECT_IDX}__record" value="{$OBJECT->id}" />
                <input type="hidden" name="mindemotioninstance[{$OBJECT_IDX}][delete]" id="mindemotioninstance__{$OBJECT_IDX}__delete" value="0" />
                <input type="hidden" name="mindemotioninstance[{$OBJECT_IDX}][answer]" id="mindemotioninstance__{$OBJECT_IDX}__answer" />
                <input type="hidden" name="mindemotioninstance[{$OBJECT_IDX}][name]" value="{$OBJECT->name}" />
                {assign var="mykey" value="`$OBJECT->name`"}
                <td>{form_label for="mindemotioninstance__`$OBJECT_IDX`__answer" class="large" _html="`$FORM->app_list_strings.mind_and_emotion_list.$mykey`" _form=$FORM}

                  <div id="mindemotioninstance__{$OBJECT_IDX}_C"{if $OBJECT->answer|trim != 'yes'} style="display: none;"{/if} class="highlight">
                    {form_textarea name="mindemotioninstance[`$OBJECT_IDX`][description]" id="mindemotioninstance__`$OBJECT_IDX`_description" _value=$OBJECT->description cols="70" rows="" placeholder="Please describe:" _form=$FORM}
                  </div>

                </td>
                {foreach from=$FORM->app_list_strings.yes_no_list key=answer_value item=answer_name}
                <td><input type="radio" name="mindemotioninstance[{$OBJECT_IDX}][answer]" id="mindemotioninstance__{$OBJECT_IDX}__{$answer_value}" value="{$answer_value}" {if $answer_value == $OBJECT->answer}checked="checked" {/if} onclick="showhide('mindemotioninstance__{$OBJECT_IDX}', '__yes')"/></td>
                {/foreach}
              </tr>
              {/foreach}
            </tbody>
          </table>
        </fieldset><!-- /Mind and Emotions -->

        <fieldset>
          <legend>Holmes-Rahe Life Changes Scale</legend>
          <h4>Please review the events below.  Beside each one, indicate the number of times each event occurred in the past year only.</h4>
          <table class="data-table" width="70%">
           <thead>
             <tr>
               <th width="70%"><strong>Event</strong></th>
               <th width="30%"><strong>Number of times in past year</strong></th>
             </tr>
           </thead>

           <tbody>
             {foreach from=$FORM->lifechangeinstance key=OBJECT_IDX item=OBJECT}
             <tr>
               <td>
                <input type="hidden" name="lifechangeinstance[{$OBJECT_IDX}][record]" id="lifechangeinstance__{$OBJECT_IDX}__record" value="{$OBJECT->id}" />
                <input type="hidden" name="lifechangeinstance[{$OBJECT_IDX}][delete]" id="lifechangeinstance__{$OBJECT_IDX}__delete" value="0" />
                <input type="hidden" name="lifechangeinstance[{$OBJECT_IDX}][name]" value="{$OBJECT->name}" />
                  {assign var=namekey value=$OBJECT->name}
                  {form_label for="lifechangeinstance__`$OBJECT_IDX`__answer" _html=$FORM->app_list_strings.life_change_list.$namekey class="large" _form=$FORM}
                  <div id="lifechangeinstance__{$OBJECT_IDX}_C" class="highlight"{if $OBJECT->answer|trim < 1} style="display: none;"{/if}>
                    {form_label for="lifechangeinstance__`$OBJECT_IDX`__description" _html="Please describe:" class="large" _form=$FORM}
                    {form_textarea name="lifechangeinstance[`$OBJECT_IDX`][description]" id="lifechangeinstance__`$OBJECT_IDX`__description" _value=$OBJECT->description cols="70" rows="" _form=$FORM}
                  </div>
               </td>
               <td>
                {form_select name="lifechangeinstance[`$OBJECT_IDX`][answer]" id="lifechangeinstance__`$OBJECT_IDX`__answer" _value=$OBJECT->answer label="Number of times in past year" _empty=false _options=$FORM->app_list_strings.life_change_answer_list _form=$FORM  onchange="show_hide_select('lifechangeinstance__`$OBJECT_IDX`', '__answer', 0, false);"}
               </td>
             </tr>
             {/foreach}
           </tbody>
          </table>

          <p><em>Holmes & Rahe (1967), Holmes-Rahe life changes scale.  Journal of Psychosomatic Research, Vol. 11, pp. 213-218.</em></p>
        </fieldset><!-- /Holmes-Rahe Life Changes Scale -->
