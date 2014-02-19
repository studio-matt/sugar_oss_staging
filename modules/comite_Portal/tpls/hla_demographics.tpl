        <h2>Patient Contact Information</h2>
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
          <legend>Contact Information</legend>
          <fieldset class="contact_information">
            <legend>Name</legend>

            <div class="contact_salutation">
              <p class="instruct">Please enter your full name</p>
              {form_select id="contact__salutation_option" _label="Salutation" _options=$FORM->app_list_strings.salutation_dom _value=$FORM->contact->salutation _other="Other" _form=$FORM}
              <input type="text" name="contact__salutation" id="contact__salutation" size="10" value="{$FORM->contact->salutation}" {if !$FORM->contact->salutation|strip || in_array($FORM->contact->salutation|strip, array_keys($FORM->app_list_strings.salutation_dom))} style="display:none;"{/if}>
            </div>
            <div class="name_first">
              {form_input_text name="contact__first_name" id="contact__first_name" _label="First Name" value=$FORM->contact->first_name _form=$FORM}
            </div>
            <div class="middle_initial">
              {form_input_text name="contact__middle_initial_c" id="contact__middle_initial_c" _label="Middle Initial" value=$FORM->contact->middle_initial_c _form=$FORM}
            </div>
            <div class="name_last">
              {form_input_text name="contact__last_name" id="contact__last_name" _label="Last Name" value=$FORM->contact->last_name _form=$FORM}
            </div>
          </fieldset>

          <fieldset class="contact_emails">
            <legend>Email</legend>
            <p class="instruct">Please enter your preferred email.</p>
            <div class="email_primary">
              {form_input_text name="user__email1" id="user__email1" _label="Preferred Email" size="30" class="email" placeholder="email@example.com" value=$FORM->user->email1 _form=$FORM}
            </div>

            {****************************************
            NOTE: Removing temporaily until we decide to include a true "add another" email module on the front-end - ala Addressess or Phone

            <div class="email_secondary">
              {form_input_text name="user__email2" id="user__email2" _label="Second Email" size="30" class="email" placeholder="otherEmail@example.com" value=$FORM->user->email2 _form=$FORM}
            </div>

            *****************************************}
          </fieldset>

          <fieldset class="contact_addresses">
            <legend>Address</legend>
            {foreach from=$FORM->addresses key=ADDRESS_IDX item=ADDRESS}
            <div id="addresses__{$ADDRESS_IDX}" class="address">
              <input type="hidden" name="addresses[{$ADDRESS_IDX}][record]" id="addresses__{$ADDRESS_IDX}__record" value="{$ADDRESS->id}" />
              <input type="hidden" name="addresses[{$ADDRESS_IDX}][delete]" class="address_delete" id="addresses__{$ADDRESS_IDX}__delete" value="0" />

              <a href="#" class="button actionremove" title="Are you sure you want to remove this address?">
                <img src="/custom/themes/comiteMDPortal/images/x.png" />
                Remove
              </a>
              <div class="address_type">
                {form_select id="addresses__`$ADDRESS_IDX`__type" _label="Address Type" _options=$FORM->app_list_strings.address_types _value=$ADDRESS->name _error="addresses__`$ADDRESS_IDX`__name" _empty=true _other="Other" _form=$FORM}
                <input type="text" name="addresses[{$ADDRESS_IDX}][name]" id="addresses__{$ADDRESS_IDX}__name" placeholder="Other" value="{$ADDRESS->name}"{if $ADDRESS->name|strip == '' || in_array($ADDRESS->name|strip, array_keys($FORM->app_list_strings.address_types))} style="display:none;"{/if} />
              </div>
              <div class="address_1">
                {form_input_text name="addresses[`$ADDRESS_IDX`][address_1]" id="addresses__`$ADDRESS_IDX`__address_1" size="30" _label="Address 1" value=$ADDRESS->address_1 _form=$FORM}
              </div>
              <div class="address_2">
                {form_input_text name="addresses[`$ADDRESS_IDX`][address_2]" id="addresses__`$ADDRESS_IDX`__address_2" size="30" _label="Address 2" value=$ADDRESS->address_2 _form=$FORM}
              </div>
              <div class="address_3">
                {form_input_text name="addresses[`$ADDRESS_IDX`][address_3]" id="addresses__`$ADDRESS_IDX`__address_3" size="30" _label="Address 3" value=$ADDRESS->address_3 _form=$FORM}
              </div>
              <div class="address_country">
                {form_select name="addresses[`$ADDRESS_IDX`][country]"  id="addresses__`$ADDRESS_IDX`__country" _label="Country" _options=$FORM->app_list_strings.country_dom _default="US" _value=$ADDRESS->country _empty=true _form=$FORM}
              </div>
              <div class="address_city">
                {form_input_text name="addresses[`$ADDRESS_IDX`][city]" id="addresses__`$ADDRESS_IDX`__city" _label="City" placeholder="City" value=$ADDRESS->city _form=$FORM}
              </div>
              <div class="address_state">
                <label for="addresses__{$ADDRESS_IDX}__state">{if $ADDRESS->country|strip == '' || $ADDRESS->country|strip == 'US'}State{else}Province/Region{/if}</label>
                <select name="addresses[{$ADDRESS_IDX}][state]" id="addresses__{$ADDRESS_IDX}__state"{if $ADDRESS->country|strip != '' && $ADDRESS->country|strip != 'US'} style="display:none;"{/if}>
                  <option value=""></option>
                  {foreach from=$FORM->app_list_strings.state_dom key=KEY item=VALUE}
                  <option value="{$KEY}"{if $KEY == $ADDRESS->state} selected="selected"{/if}>{$VALUE}</option>
                  {/foreach}
                </select>
                <input type="text" name="addresses[{$ADDRESS_IDX}][state_international]" id="addresses__{$ADDRESS_IDX}__state_international" placeholder="Province/Region" value="{$ADDRESS->state_international}" {if $ADDRESS->country|strip == '' || $ADDRESS->country|strip == 'US'} style="display:none;"{/if}/>
              </div>
              <div class="address_postal_code">
                {if $ADDRESS->country|strip|lower == '' || $ADDRESS->country|strip|lower == 'us'}{assign var="postal_code_name" value="Zip Code"}{else}{assign var="postal_code_name" value="Postal Code"}{/if}
                {form_input_text name="addresses[`$ADDRESS_IDX`][postal_code]" id="addresses__`$ADDRESS_IDX`__postal_code" _label=$postal_code_name placeholder=$postal_code_name value=$ADDRESS->postal_code _form=$FORM}
              </div>
              <div class="address_rank">
                <div class="note controlset">
                  <input type="hidden" name="addresses[{$ADDRESS_IDX}][rank]" id="addresses__{$ADDRESS_IDX}__rank" value="{if $FORM->addresses|@count == 1}1{else}{$ADDRESS->rank}{/if}" />
                  <input type="radio" id="addresses__{$ADDRESS_IDX}__rank_option" name="addresses__rank"{if $ADDRESS->rank == 1 || $FORM->addresses|@count == 1} checked="checked"{/if}/>
                  <label for="addresses__{$ADDRESS_IDX}__rank_option">Set this as your primary address?</label>
                </div>
              </div>

              <hr />
            </div>
            {/foreach}

            <!-- add more -->
            <div class="buttonrow">
              <a href="#" id="additional_addresses" class="button actionadd">
                <img src="/custom/themes/comiteMDPortal/images/plus_inline.gif" />
                Add Another Address
              </a>
            </div>
            <p class="note">If you have any additional addresses you would like to add, click the Add Another Address button above.<br />You may add as many addresses as you like. </p>
          </fieldset>

          <fieldset class="contact_phones">
            <legend>Phone/Fax Numbers</legend>
            {foreach from=$FORM->phones key=PHONE_IDX item=PHONE}
            <div id="phones__{$PHONE_IDX}" class="phone">
              <input type="hidden" name="phones[{$PHONE_IDX}][record]" id="phones__{$PHONE_IDX}__record" value="{$PHONE->id}" />
              <input type="hidden" name="phones[{$PHONE_IDX}][delete]" id="phones__{$PHONE_IDX}__delete" value="0" />

              <a href="#" class="button actionremove" title="Are you sure you want to remove this phone?">
                <img src="/custom/themes/comiteMDPortal/images/x.png" />
                Remove
              </a>

              <div class="phone_type">
                {form_select id="phones__`$PHONE_IDX`__type" _label="Phone Type" _options=$FORM->app_list_strings.phone_types _value=$PHONE->name _error="phones__`$PHONE_IDX`__name" _empty=true _other="Other" _form=$FORM}
                <input type="text" name="phones[{$PHONE_IDX}][name]" id="phones__{$PHONE_IDX}__name" placeholder="Other" value="{$PHONE->name}"{if $PHONE->name|strip == '' || in_array($PHONE->name|strip, array_keys($FORM->app_list_strings.phone_types))} style="display:none;"{/if} />
              </div>
              <div class="phone_country_code">
                {form_select name="phones[`$PHONE_IDX`][country_code]"  id="phones__`$PHONE_IDX`__country_code" _label="Phone Country" _default=0 _options=$FORM->app_list_strings.tel_country_code_dom _value=$PHONE->country_code _empty=true _form=$FORM}
              </div>
              <div class="phone_line_number">
                {form_input_text name="phones[`$PHONE_IDX`][line_number]" id="phones__`$PHONE_IDX`__line_number" _label="Phone Number" placeholder="###-###-####" value=$PHONE->line_number _form=$FORM}
              </div>
              <div class="phone_extension">
                {form_input_text name="phones[`$PHONE_IDX`][extension]" id="phones__`$PHONE_IDX`__extension" _label="Extension" size="10" value=$PHONE->extension _form=$FORM}
              </div>
              <div class="phone_voicemail">
                <div class="note controlset">
                  <input type="checkbox" name="phones[{$PHONE_IDX}][is_voicemail_allowed]" id="phones__{$PHONE_IDX}__is_voicemail_allowed" value="">
                  <label for="phones__{$PHONE_IDX}__is_voicemail_allowed">Can we leave a voicemail at this number?</label>
                </div>
              </div>
              <div class="phone_rank">
                <div class="note controlset">
                  <input type="hidden" name="phones[{$PHONE_IDX}][rank]" id="phones__{$PHONE_IDX}__rank" value="{if $FORM->phones|@count == 1}1{else}{$PHONE->rank}{/if}" />
                  <input type="radio" id="phones__{$PHONE_IDX}__rank_option" name="phones__rank"{if $PHONE->rank == 1 || $FORM->phones|@count == 1} checked="checked"{/if}/>
                  <label for="phones__{$PHONE_IDX}__rank_option">Set this as your primary phone?</label>
                </div>
              </div>

              <hr />
            </div>
            {/foreach}

            <!-- add more -->
            <div class="buttonrow">
              <a href="#" id="additional_phones" class="button actionadd">
                <img src="/custom/themes/comiteMDPortal/images/plus_inline.gif" />
                Add Another Phone
              </a>
            </div>
            <p class="note">If you have any additional phone numbers you would like to add, click the Add Another Phone button above.<br />You may add as many phone numbers as you like. </p>
          </fieldset>

          <fieldset class="preferred_contact">
            <legend>Preferred Contact</legend>
            <div class="preferred_contact_method">
              {form_select name="contact__preferred_contact_method" id="contact__preferred_contact_method" _label="Preferred Contact Method" _options=$FORM->app_list_strings.preferred_contact_method_list _value=$FORM->contact->preferred_contact_method_c _empty=true _form=$FORM}
            </div>
          </fieldset>
        </fieldset>

        <fieldset class="personal_information">
          <legend>Personal Information</legend>
          <div class="contact_preferred_name">
            {form_input_text name="contact__preferred_name" id="contact__preferred_name" _label="Preferred Name" value=$FORM->contact->preferred_name_c _form=$FORM}
          </div>
{php}
$birthdate = $this->get_template_vars('FORM')->contact->birthdate;
if (preg_match('#^(\d{4})\-(\d{2})\-(\d{2})$#', trim($birthdate), $matches)) {
  $birthdate = $matches[2] . '/' . $matches[3] . '/' . $matches[1];
}
list($dob_month, $dob_day, $dob_year) = explode('/', substr(preg_replace('#/0#', '/', '/'.$birthdate), 1));
$this->assign('DOB', array(
  'month' => str_pad($dob_month, 2, '0', STR_PAD_LEFT),
  'day' => $dob_day,
  'year' => $dob_year,
  'days' => array_combine(range(1,31), range(1,31)),
  'years' => array_combine(range(date('Y'), date('Y')-120), range(date('Y'), date('Y')-120))
));
{/php}
          <div class="contact_birthdate">
            {form_select id="dob_year" _label="Date of Birth" _options=$DOB.years _value=$DOB.year _empty="Year" _error="contact__birthdate" _form=$FORM}
            {form_select id="dob_month" _options=$FORM->app_list_strings.date_month_list _value=$DOB.month _empty="Month" _error="contact__birthdate" _form=$FORM}
            &nbsp;
            {form_select id="dob_day" _options=$DOB.days _value=$DOB.day _empty="Day" _error="contact__birthdate" _form=$FORM}
            <input type="hidden" name="contact__birthdate" id="contact__birthdate" value="{$FORM->contact->birthdate}" />
          </div>
          <div class="contact_age">
            <label for="age_years">Age</label>
            <input type="text" id="age_years" class="age" readonly="readonly" disabled="disabled" /> Yrs, &nbsp;
            <input type="text" id="age_months" class="age" readonly="readonly" disabled="disabled" /> Months
          </div>
          <div class="personal_health_gender">
            {form_select name="personal_health__gender" id="personal_health__gender" _label="Gender" _options=$FORM->app_list_strings.gender_list _value=$FORM->personal_health->gender _empty=true _form=$FORM}
          </div>
          <div class="personal_health_height">
            {form_input_text id="height_ft" class="integer" _label="Height" _error="personal_health__height" value=$FORM->personal_health->height/12|floor _form=$FORM}
            Feet, &nbsp;
            {form_input_text id="height_in" class="integer" _error="personal_health__weight" value=$FORM->personal_health->height%12|intval _form=$FORM}
            Inches
            <input type="hidden" name="personal_health__height" id="personal_health__height" value="{$FORM->personal_health->height|intval}" />
          </div>
          <div class="personal_health_body_frame">
            {form_select name="personal_health__body_frame" id="personal_health__body_frame" _label="Body Frame" _options=$FORM->app_list_strings.body_frame_list _value=$FORM->personal_health->body_frame _empty="Select your Body Frame" _form=$FORM}
          </div>
          <div class="personal_health_weight">
            {form_input_text name="personal_health__weight" id="personal_health__weight" _label="Weight - Current" class="decimal" value=$FORM->personal_health->weight|form_value_decimal _form=$FORM}
          </div>
          <div class="personal_health_weight_highest">
            {form_input_text name="personal_health__weight_highest" id="personal_health__weight_highest" _label="Weight - Highest" class="decimal" value=$FORM->personal_health->weight_highest|form_value_decimal _form=$FORM}
          </div>
          <div class="personal_health_weight_lowest">
            {form_input_text name="personal_health__weight_lowest" id="personal_health__weight_lowest" _label="Weight - Lowest" class="decimal" value=$FORM->personal_health->weight_lowest|form_value_decimal _form=$FORM}
          </div>
          <div class="personal_health_weight_ideal">
            {form_input_text name="personal_health__weight_ideal" id="personal_health__weight_ideal" _label="Weight - Ideal" class="decimal" value=$FORM->personal_health->weight_ideal|form_value_decimal _form=$FORM}
          </div>
          <div class="personal_health_blood_type">
            {form_select name="personal_health__blood_type" id="personal_health__blood_type" _label="Blood Type<br />(if known)" _options=$FORM->app_list_strings.blood_type_list _value=$FORM->personal_health->blood_type _empty="Select your blood type" _form=$FORM}
          </div>
          <div class="personal_health_patient_rate_current_health">
            {form_select name="personal_health__patient_rate_current_health" id="personal_health__patient_rate_current_health" _label="How would you rate your current health?" _options=$FORM->app_list_strings.patient_rate_current_health_list _value=$FORM->personal_health->patient_rate_current_health _empty="Rate your current health" _form=$FORM}
          </div>
          <div class="personal_health_age_management_medical_goals">
            {form_textarea name="personal_health__age_management_medical_goals" id="personal_health__age_management_medical_goals" cols="50" rows="10" _label="What are your Age Management Medical goals?" _value=$FORM->personal_health->age_management_medical_goals _form=$FORM}
          </div>
        </fieldset>

        <fieldset class="physician_addresses">
          <legend>Primary Care Physician</legend>
          <div class="physician_name">
            {form_input_text name="personal_health__pri_physician_name" id="personal_health__pri_physician_name" _label="Physician Name" value=$FORM->personal_health->pri_physician_name _form=$FORM}
          </div>
          <div class="address_1">
            {form_input_text name="personal_health__pri_physician_address1" id="personal_health__pri_physician_address1" _label="Address 1" value=$FORM->personal_health->pri_physician_address1 _form=$FORM}
          </div>
          <div class="address_2">
            {form_input_text name="personal_health__pri_physician_address2" id="personal_health__pri_physician_address2" _label="Address 2" value=$FORM->personal_health->pri_physician_address2 _form=$FORM}
          </div>
          <div class="address_city">
            {form_input_text name="personal_health__pri_physician_city" id="personal_health__pri_physician_city" _label="City" value=$FORM->personal_health->pri_physician_city _form=$FORM}
          </div>
          <div class="address_state">
            {form_select name="personal_health__pri_physician_state" id="personal_health__pri_physician_state" _label="State" _options=$FORM->app_list_strings.state_dom _value=$FORM->personal_health->pri_physician_state _empty=true _form=$FORM}
          </div>
          <div class="address_postal_code">
            {form_input_text name="personal_health__pri_physician_zip" id="personal_health__pri_physician_zip" _label="Zip Code" placeholder="Zip Code" value=$FORM->personal_health->pri_physician_zip _form=$FORM}
          </div>
          <div class="physician_phone_office">
            {form_input_text name="personal_health__pri_physician_phone_office" id="personal_health__pri_physician_phone_office" _label="Physician Phone<br />(Office)" placeholder="###-###-####" value=$FORM->personal_health->pri_physician_phone_office _form=$FORM}
          </div>
          <div class="physician_fax">
            {form_input_text name="personal_health__pri_physician_fax" id="personal_health__pri_physician_fax" _label="Physician Fax<br />(if known)" placeholder="###-###-####" value=$FORM->personal_health->pri_physician_fax _form=$FORM}
          </div>
          <div class="physician_email">
            {form_input_text name="personal_health__pri_physician_email_office" id="personal_health__pri_physician_email_office" _label="Physician Email<br />(if known)" placeholder="doctor@example.com" value=$FORM->personal_health->pri_physician_email_office _form=$FORM}
          </div>
        </fieldset>