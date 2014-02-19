        <h2>Nutrition & Exercise Information</h2>
        <h4>Estimated time to complete this section: 30 Minutes</h4>

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
          <legend>Exercise Summary</legend>
          <h4>On a regular basis, over the last 3 months, <em>indicate the number of days per week</em> you performed the following activities.</h4>
          <table class="data-table" width="70%">
           <thead>
             <tr>
               <th width="70%"><strong>Exercise</strong></th>
               <th width="30%"><strong>Number of days per week</strong></th>
             </tr>
           </thead>

           <tbody>
             {foreach from=$FORM->exercisesummary key=OBJECT_IDX item=OBJECT}
             {if $OBJECT->name == "Aerobic exercises"}
             <tr>
               <td>
                <input type="hidden" name="exercisesummary[{$OBJECT_IDX}][record]" id="exercisesummary__{$OBJECT_IDX}__record" value="{$OBJECT->id}" />
                <input type="hidden" name="exercisesummary[{$OBJECT_IDX}][delete]" id="exercisesummary__{$OBJECT_IDX}__delete" value="0" />
                <input type="hidden" name="exercisesummary[{$OBJECT_IDX}][name]" value="{$OBJECT->name}" />
                  {assign var=namekey value=$OBJECT->name}
                  {$FORM->app_list_strings.exercise_summary_list.$namekey}
                  <br/>
                  <div id="exercisesummary__{$OBJECT_IDX}_C" {if $OBJECT->answer == 0||$OBJECT->answer == ''}style="display: none;"{/if} class="highlight">
                    {php}
                      $object = $this->get_template_vars('OBJECT');
                      $object_description = $object->description;

                      $descriptionBegin = 0;
                      $descriptionEnd = strpos($object_description, 'Intensity  of Aeorbic Exercise:');
                      $description = substr($object_description, $descriptionBegin, ($descriptionEnd!==false?$descriptionEnd:strlen($object_description)));
                      $this->assign('description', trim($description));

                      $intensityBegin = strpos($object_description, 'Intensity  of Aeorbic Exercise:') + strlen('Intensity  of Aeorbic Exercise:');
                      $intensity = substr($object_description, $intensityBegin);
                      $this->assign('intensity', trim($intensity));
                    {/php}
                    {form_label for="exercisesummary__`$OBJECT_IDX`__description" _html="Please describe your current aerobic exercise program. Include type of activity, duration and average distance." class="large" _form=$FORM}
                    {form_textarea name="exercisesummary[`$OBJECT_IDX`][description]" id="exercisesummary__`$OBJECT_IDX`__description" _value=$description cols="70" rows="" placeholder="Please describe:" _form=$FORM}
                    <br />
                    {form_label for="exercisesummary__`$OBJECT_IDX`__description_extra" _html="What is the intensity of your aerobic exercise?" class="large" _form=$FORM}
                    <input type="hidden" id="exercisesummary__{$OBJECT_IDX}__description_extra" value="" />
                    <table class="data-table">
                      <tbody>
                        <tr>
                          <td width="20%">
                            <input type="radio" class="activated" name="exercisesummary[{$OBJECT_IDX}][description_extra]" id="exercisesummary_{$OBJECT_IDX}__description_extra_VeryLight" value="Very Light" {if $intensity=="Very Light"}checked="checked"{/if}/>
                            <label for="exercisesummary_{$OBJECT_IDX}__description__extra_VeryLight">Very Light</label>
                          </td>
                          <td width="80%">
                            Stretching
                          </td>
                        </tr>
                        <tr>
                          <td width="20%">
                            <input type="radio" class="activated" name="exercisesummary[{$OBJECT_IDX}][description_extra]" id="exercisesummary_{$OBJECT_IDX}__description_extra_Light" value="Light" {if $intensity=="Light"}checked="checked"{/if}/>
                            <label for="exercisesummary_{$OBJECT_IDX}__description_extra_Light">Light</label>
                          </td>
                          <td width="80%">
                            Includes some movement as in leisure walking
                          </td>
                        </tr>
                        <tr>
                          <td width="20%">
                            <input type="radio" class="activated" name="exercisesummary[{$OBJECT_IDX}][description_extra]" id="exercisesummary_{$OBJECT_IDX}__description_extra_Moderate" value="Moderate" {if $intensity=="Moderate"}checked="checked"{/if}/>
                            <label for="exercisesummary_{$OBJECT_IDX}__description_extra_Moderate">Moderate</label>
                          </td>
                          <td width="80%">
                            Continuous movement causing increase in heart rate (brisk walking, leisure swimming)
                          </td>
                        </tr>
                        <tr>
                          <td width="20%">
                            <input type="radio" class="activated" name="exercisesummary[{$OBJECT_IDX}][description_extra]" id="exercisesummary_{$OBJECT_IDX}__description_extra_Heavy" value="Heavy" {if $intensity=="Heavy"}checked="checked"{/if}/>
                            <label for="exercisesummary_{$OBJECT_IDX}__description_extra_Heavy">Heavy</label>
                          </td>
                          <td width="80%">
                            Continuous movement involving fluctuation in intensity from moderate to heavy with significant increases in heart rate
                          </td>
                        </tr>
                        <tr>
                          <td width="20%">
                            <input type="radio" class="activated" name="exercisesummary[{$OBJECT_IDX}][description_extra]" id="exercisesummary_{$OBJECT_IDX}__description_extra_VeryHeavy" value="Very Heavy" {if $intensity=="Very Heavy"}check="checked"{/if}/>
                            <label for="exercisesummary_{$OBJECT_IDX}__description_extra_VeryHeavy">Very Heavy</label>
                          </td>
                          <td width="80%">
                            Continuous movement causing heaving breathing, sweating, marked increases in heart rate, etc. (swimming laps, interval training, running, cycling, stationary bike, spin cycling, etc.)
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
               </td>
               <td>
                {form_select name="exercisesummary[`$OBJECT_IDX`][answer]" id="exercisesummary__`$OBJECT_IDX`__answer" _value=$OBJECT->answer label="Number of days per week" _empty=false _options=$FORM->app_list_strings.days_per_week_list _form=$FORM  onchange="show_hide_select('exercisesummary__`$OBJECT_IDX`', '__answer', 0, false);"}
               </td>
             </tr>
             {else}
             <tr>
               <td>
                <input type="hidden" name="exercisesummary[{$OBJECT_IDX}][record]" id="exercisesummary__{$OBJECT_IDX}__record" value="{$OBJECT->id}" />
                <input type="hidden" name="exercisesummary[{$OBJECT_IDX}][delete]" id="exercisesummary__{$OBJECT_IDX}__delete" value="0" />
                <input type="hidden" name="exercisesummary[{$OBJECT_IDX}][name]" value="{$OBJECT->name}" />
                  {assign var=namekey value=$OBJECT->name}
                  {form_label for="exercisesummary__`$OBJECT_IDX`__answer" _html=$FORM->app_list_strings.exercise_summary_list.$namekey class="large" _form=$FORM}
                 <br/>
                  <div id="exercisesummary__{$OBJECT_IDX}_C" {if $OBJECT->answer == 0||$OBJECT->answer == ''}style="display: none;"{/if} class="highlight">
                    {form_label for="exercisesummary__`$OBJECT_IDX`__description" _html="Please describe your current program. Include type of activity, duration and intensity." class="large" _form=$FORM}
                    {form_textarea name="exercisesummary[`$OBJECT_IDX`][description]" id="exercisesummary__`$OBJECT_IDX`__description" _value=$OBJECT->description cols="70" rows="" placeholder="Please describe:" _form=$FORM}
                  </div>
               </td>
               <td>
                {form_select name="exercisesummary[`$OBJECT_IDX`][answer]" id="exercisesummary__`$OBJECT_IDX`__answer" _value=$OBJECT->answer label="Number of days per week" _empty=false _options=$FORM->app_list_strings.days_per_week_list _form=$FORM  onchange="show_hide_select('exercisesummary__`$OBJECT_IDX`', '__answer', 0, false);"}
               </td>
             </tr>
             {/if}
             {/foreach}
           </tbody>
          </table>

          <div class="controlset">
              {form_radio name="nutrition_exercise__exercise_injury_year" id="nutrition_exercise__exercise_injury_year" _value=$FORM->nutrition_exercise->exercise_injury_year _label="During the last year, have you experienced any injuries?" _options=$FORM->app_list_strings.yes_no_list _form=$FORM onclick="showhide('nutrition_exercise__exercise_injury_year', '__yes')"}
          </div>

          <div id="nutrition_exercise__exercise_injury_year_C" {if $FORM->nutrition_exercise->exercise_injury_year != 'yes'}style="display:none;"{/if} class="highlight">
            {form_label for="nutrition_exercise__exercise_injury_year_describe" _html="If yes, please describe your injury" class="large" _form=$FORM}
            {form_textarea name="nutrition_exercise__exercise_injury_year_describe" id="nutrition_exercise__exercise_injury_year_describe" _value=$FORM->nutrition_exercise->exercise_injury_year_describe _form=$FORM}
            <br />
            <div class="controlset">
              {form_radio name="nutrition_exercise__exercise_injury_result" id="nutrition_exercise__exercise_injury_result" _value=$FORM->nutrition_exercise->exercise_injury_result _label="Did this injury occur as a result of exercising?" _options=$FORM->app_list_strings.yes_no_list _form=$FORM}
            </div>
            <div class="controlset">
              {form_radio name="nutrition_exercise__exercise_injury_stop_regimen" id="nutrition_exercise__exercise_injury_stop_regimen" _value=$FORM->nutrition_exercise->exercise_injury_stop_regimen _label="Did this injury cause you to modify or stop your exercise regimen?" _options=$FORM->app_list_strings.yes_no_list _form=$FORM onclick="showhide('nutrition_exercise__exercise_injury_stop_regimen', '__yes')"}
            </div>
            <div id="nutrition_exercise__exercise_injury_stop_regimen_C" {if $FORM->nutrition_exercise->exercise_injury_stop_regimen!='yes'}style="display:none;"{/if} class="highlight">
              {form_label for="nutrition_exercise__exercise_injury_stop_period" _html="If yes, for what period of time did you stop exercising?" class="large" _form=$FORM}
              {form_input_text name="nutrition_exercise__exercise_injury_stop_period" id="nutrition_exercise__exercise_injury_stop_period" value=$FORM->nutrition_exercise->exercise_injury_stop_period _form=$FORM}
            </div>
          </div>
        </fieldset>

        <fieldset>
          <legend>Fitness Activity Assessment</legend>
          <table class="data-table">
            <thead>
              <tr>
                <th width="70%">&nbsp;</th>
                {foreach from=$FORM->app_list_strings.yes_no_list key=answer_value item=answer_name}
                <th width="15%"><strong>{$answer_name}</strong></th>
                {/foreach}
              </tr>
            </thead>
            <tbody>
            {foreach from=$FORM->fitnessactivity key=OBJECT_IDX item=OBJECT}
              <tr>
                {assign var="mykey" value="`$OBJECT->name`"}
                <td>
                <input type="hidden" name="fitnessactivity[{$OBJECT_IDX}][record]" id="fitnessactivity__{$OBJECT_IDX}__record" value="{$OBJECT->id}" />
                <input type="hidden" name="fitnessactivity[{$OBJECT_IDX}][delete]" id="fitnessactivity__{$OBJECT_IDX}__delete" value="0" />
                <input type="hidden" name="fitnessactivity[{$OBJECT_IDX}][answer]" id="fitnessactivity__{$OBJECT_IDX}__answer" />
                <input type="hidden" name="fitnessactivity[{$OBJECT_IDX}][name]" value="{$OBJECT->name}" />
                {form_label for="fitnessactivity__`$OBJECT_IDX`__answer" class="large" _html="`$FORM->app_list_strings.fitness_accessment_list.$mykey`" _form=$FORM}
                <span id="fitnessactivity__{$OBJECT_IDX}_C" {if $OBJECT->answer == 'no' ||$OBJECT->answer == ''}style="display: none;"{/if}>
                   {if $OBJECT->name eq 'Have you ever been a member of a health club in the past'}
                   {assign var='dplaceholder' value='Why did you discontinue being a member in the past?'}
                   {else}
                   {assign var='dplaceholder' value='Please Describe'}
                   {/if}
                    {* @ TODO Make this store in the db.*}
                    {* show hide on yes/no *}
                    {if $OBJECT->name eq "Are you currently a member of a health club"}
                    {php}
                      $object = $this->get_template_vars('OBJECT');
                      $object_description = $object->description;

                      $descriptionBegin = 0;
                      $descriptionEnd = strpos($object_description, 'Currently a member:');
                      $description = substr($object_description, $descriptionBegin, ($descriptionEnd!==false?$descriptionEnd:strlen($object_description)));
                      $this->assign('description', trim($description));

                      $currently_a_memberBegin = strpos($object_description, 'Currently a member:') + strlen('Currently a member:');
                      $currently_a_member = substr($object_description, $currently_a_memberBegin);
                      $this->assign('currently_a_member', trim($currently_a_member));
                    {/php}
                    {form_textarea name="fitnessactivity[`$OBJECT_IDX`][description]" id="fitnessactivity__`$OBJECT_IDX`__description" _value=$description cols="70" rows="" placeholder="$dplaceholder" _form=$FORM}
                    <div class="controlset">
                    {form_label for="fitnessactivity__`$OBJECT_IDX`__currently_a_member" _html="For how long have you been a member of this health club?" class="large" _form=$FORM}
                    {form_textarea name="fitnessactivity[$OBJECT_IDX][currently_a_member]" id="fitnessactivity__`$OBJECT_IDX`__currently_a_member" placeholder="Please Describe" _value=$currently_a_member _form=$FORM}
                    </div>
                   {* @ TODO Make this store in the db. Get rid of AA*}
                   {* show hide on yes/no *}
                   {elseif $OBJECT->name eq "Are you currently working out with a personal trainer"}
                   {php}
                      $object = $this->get_template_vars('OBJECT');
                      $object_description = $object->description;

                      $descriptionBegin = 0;
                      $descriptionEnd = strpos($object_description, 'Personal Trainer A:');
                      $description = substr($object_description, $descriptionBegin, ($descriptionEnd!==false?$descriptionEnd:strlen($object_description)));
                      $this->assign('description', trim($description));

                      $how_long_work_outBegin = strpos($object_description, 'Personal Trainer A:') + strlen('Personal Trainer A:');
                      $how_long_work_outEnd= strlen($object_description);
                      $how_long_work_out = substr($object_description, $how_long_work_outBegin, ($how_long_work_outEnd!==false?$how_long_work_outEnd:strlen($object_description)));
                      $this->assign('how_long_work_out', trim($how_long_work_out));
                   {/php}
                    {form_textarea name="fitnessactivity[`$OBJECT_IDX`][description]" id="fitnessactivity__`$OBJECT_IDX`__description" _value=$description cols="70" rows="" placeholder="$dplaceholder" _form=$FORM}
                    <div class="controlset">
                    {form_label for="fitnessactivity__`$OBJECT_IDX`__how_long_work_out" _html="For how long have you been working out?" class="large" _form=$FORM}
                    {form_textarea name="fitnessactivity[`$OBJECT_IDX`][how_long_work_out]" id="fitnessactivity__`$OBJECT_IDX`__how_long_work_out" placeholder="Please Describe" _value=$how_long_work_out _form=$FORM}
                   </div>
                   {else}
                   {form_textarea name="fitnessactivity[`$OBJECT_IDX`][description]" id="fitnessactivity__`$OBJECT_IDX`__description" _value=$OBJECT->description cols="70" rows="" placeholder="$dplaceholder" _form=$FORM}
                   {/if}
                </span>
                </td>
                {foreach from=$FORM->app_list_strings.yes_no_list key=answer_value item=answer_name}
                <td><input type="radio" name="fitnessactivity[{$OBJECT_IDX}][answer]" id="fitnessactivity__{$OBJECT_IDX}__{$answer_value}" value="{$answer_value}" {if $answer_value == $OBJECT->answer}checked="checked" {/if} class="fitnessactivity__{$OBJECT_IDX}_C check_showhide" /></td>
                {/foreach}
                </tr>
             {/foreach}
            </tbody>
          </table>
          <div class="controlset">
            {form_label for="nutrition_exercise__exercise_not_weekly_reasons" _html="If exercise is not part of your weekly routine, please explain the reasons." class="large" _form=$FORM}
            {form_textarea name="nutrition_exercise__exercise_not_weekly_reasons" id="nutrition_exercise__exercise_not_weekly_reasons" placeholder="Please Describe" cols="70" _value=$FORM->nutrition_exercise->exercise_not_weekly_reasons _form=$FORM}
          </div>
        </fieldset>

        <fieldset>
          <legend>Nutrition</legend>
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
              {foreach from=$FORM->nutrionalsummary key=OBJECT_IDX item=OBJECT}
              {if $OBJECT->name == "Are you a vegetarian"}

              <tr>
                <input type="hidden" name="nutrionalsummary[{$OBJECT_IDX}][record]" id="nutrionalsummary__{$OBJECT_IDX}__record" value="{$OBJECT->id}" />
                <input type="hidden" name="nutrionalsummary[{$OBJECT_IDX}][delete]" id="nutrionalsummary__{$OBJECT_IDX}__delete" value="0" />
                <input type="hidden" name="nutrionalsummary[{$OBJECT_IDX}][answer]" id="nutrionalsummary__{$OBJECT_IDX}__answer" />
                <input type="hidden" name="nutrionalsummary[{$OBJECT_IDX}][name]" value="{$OBJECT->name}" />
                {assign var="mykey" value="`$OBJECT->name`"}
                <td>{form_label for="nutrionalsummary__`$OBJECT_IDX`__answer" class="large" _html="`$FORM->app_list_strings.nutritional_summary_list.$mykey`" _form=$FORM}

                  <span id="nutrionalsummary__{$OBJECT_IDX}_C" style="display: none;">
                    {form_textarea name="nutrionalsummary[`$OBJECT_IDX`][description]" id="nutrionalsummary__`$OBJECT_IDX`_description" _value=$OBJECT->description cols="70" rows="" placeholder="Please describe" _form=$FORM}

                    <div class="controlset">
                      <label for="checkbox" class="large">What type?</label>

                      <input type="radio" class="activated" name="nutrionalsummary[{$OBJECT_IDX}][description_extra]" id="nutrionalsummary__{$OBJECT_IDX}__description_extra_Vegan" value="Vegan"/>
                      <label for="nutrionalsummary__{$OBJECT_IDX}__description__extra_Vegan">Vegan (plant products only)</label>
                      <br />
                      <input type="radio" class="activated" name="nutrionalsummary[{$OBJECT_IDX}][description_extra]" id="nutrionalsummary__{$OBJECT_IDX}__description_extra_Lactovegetarian" value="Lactovegetarian"/>
                      <label for="nutrionalsummary__{$OBJECT_IDX}__description__extra_Lactovegetarian">Lactovegetarian (plant and dairy products)</label>
                      <br />
                      <input type="radio" class="activated" name="nutrionalsummary[{$OBJECT_IDX}][description_extra]" id="nutrionalsummary__{$OBJECT_IDX}__description_extra_Ovolactovegetarian" value="Ovolactovegetarian"/>
                      <label for="nutrionalsummary__{$OBJECT_IDX}__description__extra_Ovolactovegetarian">Ovolactovegetarian (plant, dairy and egg products)</label>
                      <br />
                      <input type="radio" class="activated" name="nutrionalsummary[{$OBJECT_IDX}][description_extra]" id="nutrionalsummary__{$OBJECT_IDX}__description_extra_Fruitarian" value="Fruitarian"/>
                      <label for="nutrionalsummary__{$OBJECT_IDX}__description__extra_Fruitarian">Fruitarian (fruits, nuts, honey, and vegetables only)</label>
                      <br />
                    </div>
                  </span>

                </td>
                {foreach from=$FORM->app_list_strings.yes_no_list key=answer_value item=answer_name}
                <td><input type="radio" name="nutrionalsummary[{$OBJECT_IDX}][answer]" id="nutrionalsummary__{$OBJECT_IDX}__{$answer_value}" value="{$answer_value}" {if $answer_value == $OBJECT->answer}checked="checked" {/if} onclick="showhide('nutrionalsummary__{$OBJECT_IDX}', '__yes')"/></td>
                {/foreach}
              </tr>
              {else}
              <tr>
                <input type="hidden" name="nutrionalsummary[{$OBJECT_IDX}][record]" id="nutrionalsummary__{$OBJECT_IDX}__record" value="{$OBJECT->id}" />
                <input type="hidden" name="nutrionalsummary[{$OBJECT_IDX}][delete]" id="nutrionalsummary__{$OBJECT_IDX}__delete" value="0" />
                <input type="hidden" name="nutrionalsummary[{$OBJECT_IDX}][answer]" id="nutrionalsummary__{$OBJECT_IDX}__answer" />
                <input type="hidden" name="nutrionalsummary[{$OBJECT_IDX}][name]" value="{$OBJECT->name}" />
                {assign var="mykey" value="`$OBJECT->name`"}
                <td>{form_label for="nutrionalsummary__`$OBJECT_IDX`__answer" class="large" _html="`$FORM->app_list_strings.nutritional_summary_list.$mykey`" _form=$FORM}

                  <span id="nutrionalsummary__{$OBJECT_IDX}_C" {if $OBJECT->answer!='yes'}style="display: none;"{/if}>
                    {form_textarea name="nutrionalsummary[`$OBJECT_IDX`][description]" id="nutrionalsummary__`$OBJECT_IDX`__description" _value=$OBJECT->description cols="70" rows="" placeholder="Please describe:" _form=$FORM}
                  </span>

                </td>
                {foreach from=$FORM->app_list_strings.yes_no_list key=answer_value item=answer_name}
                <td><input type="radio" name="nutrionalsummary[{$OBJECT_IDX}][answer]" id="nutrionalsummary__{$OBJECT_IDX}__{$answer_value}" value="{$answer_value}" {if $answer_value == $OBJECT->answer}checked="checked" {/if} onclick="showhide('nutrionalsummary__{$OBJECT_IDX}', '__yes')"/></td>
                {/foreach}
              </tr>
              {/if}
              {/foreach}
            </tbody>
          </table>

          <h4>Note:  A serving is defined as a 12-ounce beer, 5-ounce glass of wine, or 1.5 ounces of liquor.</h4>
          <table class="data-table">
              <thead>
                  <tr>
                      <th width="50%">Beverage</th>
                      <th width="50%">Serving(s)</th>
                  </tr>
              </thead>
              {* @TODO because the db field defaults to zero "0" doesn't validate. *}
              <tbody>
                  <tr>
                      <td>{form_label for="nutrition_exercise__nutrition_tea_cups_per_day" _html="How many cups of tea do you drink per day?" class="large" _form=$FORM}</td>
                      <td>{form_input_text name="nutrition_exercise__nutrition_tea_cups_per_day" id="nutrition_exercise__nutrition_tea_cups_per_day" class="large" value=$FORM->nutrition_exercise->nutrition_tea_cups_per_day _form=$FORM}</td>
                  </tr>
                  <tr>
                      <td>{form_label for="nutrition_exercise__nutrition_coffee_cups_per_day" _html="How many cups of coffee do you drink per day?" class="large" _form=$FORM}</td>
                      <td>{form_input_text name="nutrition_exercise__nutrition_coffee_cups_per_day" id="nutrition_exercise__nutrition_coffee_cups_per_day" class="large" value=$FORM->nutrition_exercise->nutrition_coffee_cups_per_day _form=$FORM}</td>
                  </tr>
                  <tr>
                      <td>{form_label for="nutrition_exercise__nutrition_diet_soda_cups_per_day" _html="How many diet sodas or other drinks with aspartame do you drink per day?" class="large" _form=$FORM}</td>
                      <td>{form_input_text name="nutrition_exercise__nutrition_diet_soda_cups_per_day" id="nutrition_exercise__nutrition_diet_soda_cups_per_day" class="large" value=$FORM->nutrition_exercise->nutrition_diet_soda_cups_per_day _form=$FORM}</td>
                  </tr>
                  <tr>
                      <td>{form_label for="nutrition_exercise__nutrition_water_cups_per_day" _html="How many 8 oz. glasses of water do you drink per day?" class="large" _form=$FORM}</td>
                      <td>{form_input_text name="nutrition_exercise__nutrition_water_cups_per_day" id="nutrition_exercise__nutrition_water_cups_per_day" class="large" value=$FORM->nutrition_exercise->nutrition_water_cups_per_day _form=$FORM}</td>
                  </tr>
                  <tr>
                      <td>{form_label for="nutrition_exercise__nutrition_high_sugar_per_day" _html="How many high sugar foods do you eat per day (i.e. cakes, cookies, breads, pasta)?" class="large" _form=$FORM}</td>
                      <td>{form_input_text name="nutrition_exercise__nutrition_high_sugar_per_day" id="nutrition_exercise__nutrition_high_sugar_per_day" class="large" value=$FORM->nutrition_exercise->nutrition_high_sugar_per_day _form=$FORM}</td>
                  </tr>
                   <tr>
                      <td>{form_label for="nutrition_exercise__nutrition_alcoholic_servings_per_day" _html="How many servings of an alcoholic beverage do you consume in an average week?" class="large" _form=$FORM}</td>
                      <td>{form_input_text name="nutrition_exercise__nutrition_alcoholic_servings_per_day" id="nutrition_exercise__nutrition_alcoholic_servings_per_day" class="large" value=$FORM->nutrition_exercise->nutrition_alcoholic_servings_per_day _form=$FORM}</td>
                  </tr>
              </tbody>
          </table>
        </fieldset>

        <fieldset>
          <legend>Current Nutritional Intake</legend>
          <h4>Instructions</h4>
          <p>In order to accurately assess your current nutrient intake, we need to understand your current eating habits. Please fill out the following nutritional summary in detail for what you consider your average healthy eating day and most unhealthy eating day. This will give us an idea of your strengths and weaknesses and enable us to make suggestions for positive change.  List the foods and portions you eat, not those you plan to eat.<br /><br /></p>
          <p>Be specific with portion sizes.  If you don't know how many ounces or cups something is, give us a reference. For example: 1 large apple (baseball sized), broiled chicken (about the size of two decks of cards).<br /><br /></p>
          <p>Include any extras you may consume, such as cream or sugar in your coffee, after dinner mints, nibbles of baked goods, candy, etc.<br /><br /></p>
          <p>Don't forget to list beverages (Diet Coke, coffee, water, green tea, etc.).</p>
          {foreach from=$FORM->app_list_strings.nutritional_intake_day_type_list key=KEY item=VALUE}
          <h4>{$VALUE} Day</h4>
          <table class="data-table">
              <thead>
                  <tr>
                      <th width="20%">Meal/Snack</th>
                      <th width="20%">Time</th>
                      <th width="30%">Food</th>
                      <th width="30%">Portion size or estimation</th>
                  </tr>
              </thead>
              <tbody>
              {foreach from=$FORM->nutritionalintake key=OBJECT_IDX item=OBJECT}
                {if $OBJECT->day_type == $KEY}
              <tr>
                <td>
                  <input type="hidden" name="nutritionalintake[{$OBJECT_IDX}][record]" id="nutritionalintake__{$OBJECT_IDX}__record" value="{$OBJECT->id}" />
                  <input type="hidden" name="nutritionalintake[{$OBJECT_IDX}][delete]" id="nutritionalintake__{$OBJECT_IDX}__delete" value="0" />
                  <input type="hidden" name="nutritionalintake[{$OBJECT_IDX}][answer]" id="nutritionalintake__{$OBJECT_IDX}__answer" />
                  <input type="hidden" name="nutritionalintake[{$OBJECT_IDX}][name]" id="nutritionalintake__{$OBJECT_IDX}__name" value="{$OBJECT->name}" />
                  <input type="hidden" name="nutritionalintake[{$OBJECT_IDX}][day_type]" value="{$OBJECT->day_type}" />
                  {assign var="mykey" value="`$OBJECT->day_type`"}
                  {form_label for="nutritionalintake__`$OBJECT_IDX`__answer" class="large" _html="`$OBJECT->name`" _form=$FORM}
                </td>
                <td>
                  {php} $this->assign('time_opts', array('00:30 AM','01:00 AM','01:30 AM','02:00 AM','02:30 AM','03:00 AM','03:30 AM','04:00 AM','04:30 AM','05:00 AM','05:30 AM','06:00 AM','06:30 AM','07:00 AM','07:30 AM','08:00 AM','08:30 AM','09:00 AM','09:30 AM','10:00 AM','10:30 AM','11:00 AM','11:30 AM','12:00 PM', '12:30 PM','01:00 PM','01:30 PM','02:00 PM','02:30 PM','03:00 PM','03:30 PM','04:00 PM','04:30 PM','05:00 PM','05:30 PM','06:00 PM','06:30 PM','07:00 PM','07:30 PM','08:00 PM','08:30 PM','09:00 PM','09:30 PM','10:00 PM','10:30 PM','11:00 PM', '11:30 PM','12:00 AM'));{/php}
                  {form_select name="nutritionalintake[`$OBJECT_IDX`][time]" id="nutritionalintake[$OBJECT_IDX][name]" _value=$OBJECT->time _empty="None" _options=$time_opts _form=$FORM}
                </td>
                <td>
                  {form_textarea name="nutritionalintake[`$OBJECT_IDX`][food]" id="nutritionalintake__`$OBJECT_IDX`__food" _value=$OBJECT->food cols="90" rows="3" placeholder="Please describe:" _form=$FORM}
                </td>
                <td>
                  {form_textarea name="nutritionalintake[`$OBJECT_IDX`][portion_size]" id="nutritionalintake__`$OBJECT_IDX`__portion_size" _value=$OBJECT->portion_size cols="90" rows="3" placeholder="Please describe:" _form=$FORM}
                </td>
             </tr>
               {/if}
              {/foreach}
              </tbody>
            </table>
              {/foreach}
            <div class="controlset">
              {form_label for="nutrition_exercise__nutrition_days_per_week_healthiest" class="large" _html="Approximately how many days per week reflect your healthiest day (1-7):" _form=$FORM}
              {form_select name="nutrition_exercise__nutrition_days_per_week_healthiest" id="nutrition_exercise__nutrition_days_per_week_healthiest" _value=$FORM->nutrition_exercise->nutrition_days_per_week_healthiest _options=$FORM->app_list_strings.days_per_week_list _empty=true _form=$FORM}
              <br />
              {form_label for="nutrition_exercise__nutrition_days_per_week_unhealthiest" class="large" _html="Approximately how many days per week reflect your most unhealthy day (1-7):" _form=$FORM}
              {form_select name="nutrition_exercise__nutrition_days_per_week_unhealthiest" id="nutrition_exercise__nutrition_days_per_week_unhealthiest" _value=$FORM->nutrition_exercise->nutrition_days_per_week_unhealthiest _options=$FORM->app_list_strings.days_per_week_list _empty=true _form=$FORM}
              <br />
              {* TODO DB FIELD IS '0' set to null *}
              {form_label for="nutrition_exercise__nutrition_foods_overeaten" class="large" _html="Please note any specific problem foods you consistently overeat, including the frequency (i.e. daily, weekly, or monthly)." _form=$FORM}
              {form_textarea name="nutrition_exercise__nutrition_foods_overeaten" id="nutrition_exercise__nutrition_foods_overeaten" _value=$FORM->nutrition_exercise->nutrition_foods_overeaten cols="90" rows="3" placeholder="Please describe:" _form=$FORM}
              <br />
              {form_label for="nutrition_exercise__nutrition_situational_overeating" class="large" _html="Note situations, moods, or occasions that cause you to eat or drink more than you should." _form=$FORM}
              {form_textarea name="nutrition_exercise__nutrition_situational_overeating" id="nutrition_exercise__nutrition_situational_overeating" _value=$FORM->nutrition_exercise->nutrition_situational_overeating cols="90" rows="3" placeholder="Please describe:" _form=$FORM}
          </div>
        </fieldset>
