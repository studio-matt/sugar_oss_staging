<style type="text/css">
    {$css}
	{literal}
	ul li.editable{
		margin-bottom: 10px;
	}
	{/literal}
</style>

<div class="pdf" id="tmsummary">
    <p class="company">
        <img src="{$base}/custom/include/images/logo_print.png" />
        55 East 86th Street, 1B, New York, NY 10028 ~ 212.288.8123 & 212.288.8126 fax
    </p>

    <p class="date">{$date}</p>

    <p class="patient">
        Dear {if $CONTACT->salutation}<span class="salutation">{$CONTACT->salutation} </span>{/if}
        <span class="name">{$CONTACT->last_name}</span>,
    </p>

    <p class="description editable" data-var="description">
    This letter follows your appointment on {$DRNOTE->date_entered|strtotime|date_format:'%B %e, %Y'}
    {if $DRNOTE->appointment_type|strtolower|trim == 'telemedicine'}
        to review your labs,
    {/if}
    {if $DRNOTE->appointment_type|strtolower|trim == 'ehe'}
        for your annual Precision Health Analysis,
    {/if}
    {if $DRNOTE->appointment_type|strtolower|trim == 'office_visit'}
        in the office,
    {/if}
	{if $DRNOTE->appointment_type|strtolower|trim == 'follow_up'}
        to follow up with you,
    {/if}
    and summarizes the medication adjustments and follow-up recommendations.  This summary is based on your clinical progress and contains input from the ComiteMD Team: our physician, Dr. Florence Comite, our Physician Assistants, Jennifer Braun and Nicole McDermott, and our Exercise Physiologists, Timothy Coyle and Steven Villagomez.
	</p>

    <ol>
        {if $HORMONES|count || $DISCONTINUE_HORMONES|count}
        <li><strong><span class="editable">Prescribed Injectable and Other Hormones</span></strong>
            <ul>
            {php}
            $hcg = false;
            $testosterone = false;
            {/php}
            {foreach from=$HORMONES key=MSI_IDX item=MEDSUPPINSTANCE}
                {assign var=BEANS value=$MEDSUPPINSTANCE->comite_medsuppinstance_comite_medsupp->beans}
                {assign var=MEDSUPP_ID value=$MEDSUPPINSTANCE->comite_med8f3bplement_ida}
                {assign var=MEDSUPP value=$BEANS[$MEDSUPP_ID]}
                {php}
                if (stristr('hcg', $this->get_template_vars('MEDSUPP')->name)) {
                    $hcg = true;
                }
                if (stristr('testosterone', $this->get_template_vars('MEDSUPP')->name)) {
                    $testosterone = true;
                }
                {/php}
                {assign var=frequency_index value=$MEDSUPPINSTANCE->frequency}
                {assign var=quantity_index value=$MEDSUPPINSTANCE->quantity_unit}
                {assign var=dosage_index value=$MEDSUPPINSTANCE->dosage_unit}
                {assign var=datavar value='hormone_'|cat:$MSI_IDX}
                <li class="editable" data-var="{$datavar}" style="font-weight: bold;">
                {if $VARS[$datavar]}{$VARS[$datavar]}
                {else}
                    {if $MEDSUPPINSTANCE->comite_change_name}(Name Change) {/if}{if $MEDSUPPINSTANCE->comite_change_dosage}(Dosage {$MEDSUPPINSTANCE->comite_change_dosage}) {/if}{if $MEDSUPPINSTANCE->comite_change_quantity}(Quantity {$MEDSUPPINSTANCE->comite_change_quantity}) {/if}{if $MEDSUPPINSTANCE->comite_change_frequency}(Frequency {$MEDSUPPINSTANCE->comite_change_frequency}) {/if}{$MEDSUPP->name}, {$MEDSUPPINSTANCE->dosage|rtrim:'0'|rtrim:'.'} {$app_list_strings.dosage_unit_list[$dosage_index]}, {$MEDSUPPINSTANCE->quantity|rtrim:'0'|rtrim:'.'} {$app_list_strings.quantity_unit_list[$quantity_index]}, {if $MEDSUPPINSTANCE->frequency}{$app_list_strings.frequency_list[$frequency_index]}{/if}{if $MEDSUPPINSTANCE->notes_doctor}, {$MEDSUPPINSTANCE->notes_doctor}{/if}, We have noted your days of injection are {literal}{day1 of injection} and {day 2 of injection}{/literal}.
                {/if}
                </li>
            {/foreach}
            {foreach from=$DISCONTINUE_HORMONES key=MSI_IDX item=MSI}
                {assign var=datavar value='hormone_discontinue_'|cat:$MSI_IDX}
                <li class="editable" data-var="{$datavar}"  style="font-weight: bold;">
                {if $VARS[$datavar]}{$VARS[$datavar]}
                    {else}Discontinue {$MSI.name}
                {/if}
                </li>
            {/foreach}
            </ul>

            {php}
            if ($hcg && $testosterone) {
                $this->assign('CYCLE', true);
            } else {
                $this->assign('CYCLE', false);
            }
            $this->assign('HCG', false);
            if ($hcg) {
                $this->assign('HCG', true);
            }
            $this->assign('TESTOSTERONE', false);
            if ($testosterone) {
                $this->assign('TESTOSTERONE', true);
            }
            {/php}
            <strong><u><span class="editable">For cycling the Testosterone & hCG:</span></u></strong>
            <ul>
                <li class="editable" style="font-weight: bold;">Decrease Testosterone subcutaneous injection to DOSE once a week for 10 weeks.</li>
                <li class="editable" style="font-weight: bold;">Start hCG DOSE IU, two times weekly for two weeks every 10 weeks.</li>
                <li class="editable" style="font-weight: bold;">Resume Testosterone after two weeks of hCG.</li>
            </ul>
        </li>
        {/if}

        {if $MEDICATIONS|count || $DISCONTINUE_MEDICATIONS|count}
        <li><strong><span class="editable">Other Medications - <em>Please continue to take your medications as before, with the following changes:</em></span></strong>
            <ul>
            {foreach from=$MEDICATIONS key=MSI_IDX item=MEDSUPPINSTANCE}
                {assign var=BEANS value=$MEDSUPPINSTANCE->comite_medsuppinstance_comite_medsupp->beans}
                {assign var=MEDSUPP_ID value=$MEDSUPPINSTANCE->comite_med8f3bplement_ida}
                {assign var=MEDSUPP value=$BEANS[$MEDSUPP_ID]}
                {assign var=frequency_index value=$MEDSUPPINSTANCE->frequency}
                {assign var=quantity_index value=$MEDSUPPINSTANCE->quantity_unit}
                {assign var=dosage_index value=$MEDSUPPINSTANCE->dosage_unit}
                {assign var=datavar value='medication_'|cat:$MSI_IDX}
                <li class="editable" data-var="{$datavar}" style="font-weight: bold;">
                {if $VARS[$datavar]}{$VARS[$datavar]}
                {else}
                    {if $MEDSUPPINSTANCE->comite_change_name}(Name Change) {/if}{if $MEDSUPPINSTANCE->comite_change_dosage}(Dosage {$MEDSUPPINSTANCE->comite_change_dosage}) {/if}{if $MEDSUPPINSTANCE->comite_change_quantity}(Quantity {$MEDSUPPINSTANCE->comite_change_quantity}) {/if}{if $MEDSUPPINSTANCE->comite_change_frequency}(Frequency {$MEDSUPPINSTANCE->comite_change_frequency}) {/if}{$MEDSUPP->name}, {$MEDSUPPINSTANCE->dosage|rtrim:'0'|rtrim:'.'} {$app_list_strings.dosage_unit_list[$dosage_index]}, {$MEDSUPPINSTANCE->quantity|rtrim:'0'|rtrim:'.'} {$app_list_strings.quantity_unit_list[$quantity_index]}{if $MEDSUPPINSTANCE->quantity > 1}s{/if}, {if $MEDSUPPINSTANCE->frequency}{$app_list_strings.frequency_list[$frequency_index]}{/if}{if $MEDSUPPINSTANCE->notes_doctor}, {$MEDSUPPINSTANCE->notes_doctor}{/if}.
                {/if}
                </li>
            {/foreach}
            {foreach from=$DISCONTINUE_MEDICATIONS key=MSI_IDX item=MSI}
                {assign var=datavar value='medication_discontinue_'|cat:$MSI_IDX}
                <li class="editable" data-var="{$datavar}" style="font-weight: bold;">
                {if $VARS[$datavar]}{$VARS[$datavar]}
                {else}
                    Discontinue {$MSI.name}
                {/if}
                </li>
            {/foreach}
            </ul>
        </li>
        {/if}

        {if $SUPPLEMENTS|count || $DISCONTINUE_SUPPLEMENTS|count}
        <li><strong><span class="editable">Supplement Program - <em>Please continue to take your vitamins and supplements as before, with the following changes:</em></span></strong>
            <ul>

            {foreach from=$SUPPLEMENTS key=MSI_IDX item=MEDSUPPINSTANCE}
                {assign var=BEANS value=$MEDSUPPINSTANCE->comite_medsuppinstance_comite_medsupp->beans}
                {assign var=MEDSUPP_ID value=$MEDSUPPINSTANCE->comite_med8f3bplement_ida}
                {assign var=MEDSUPP value=$BEANS[$MEDSUPP_ID]}
                {assign var=frequency_index value=$MEDSUPPINSTANCE->frequency}
                {assign var=quantity_index value=$MEDSUPPINSTANCE->quantity_unit}
                {assign var=dosage_index value=$MEDSUPPINSTANCE->dosage_unit}
                {assign var=datavar value='supplement_'|cat:$MSI_IDX}
                <li class="editable" data-var="{$datavar}" style="font-weight: bold;">
                {if $VARS[$datavar]}{$VARS[$datavar]}
                {else}
                    {if $MEDSUPPINSTANCE->comite_change_name}(Name Change) {/if}{if $MEDSUPPINSTANCE->comite_change_dosage}(Dosage {$MEDSUPPINSTANCE->comite_change_dosage}) {/if}{if $MEDSUPPINSTANCE->comite_change_quantity}(Quantity {$MEDSUPPINSTANCE->comite_change_quantity}) {/if}{if $MEDSUPPINSTANCE->comite_change_frequency}(Frequency {$MEDSUPPINSTANCE->comite_change_frequency}) {/if}{$MEDSUPP->name}, {$MEDSUPPINSTANCE->dosage} {$app_list_strings.dosage_unit_list[$dosage_index]}, {$MEDSUPPINSTANCE->quantity} {$app_list_strings.quantity_unit_list[$quantity_index]}{if $MEDSUPPINSTANCE->quantity > 1}s{/if}, {if $MEDSUPPINSTANCE->frequency}{$app_list_strings.frequency_list[$frequency_index]}{/if}{if $MEDSUPPINSTANCE->notes_doctor}, {$MEDSUPPINSTANCE->notes_doctor}{/if}.
                {/if}
                </li>
            {/foreach}
            {foreach from=$DISCONTINUE_SUPPLEMENTS key=MSI_IDX item=MSI}
                {assign var=datavar value='supplement_discontinue_'|cat:$MSI_IDX}
                <li class="editable" data-var="{$datavar}"  style="font-weight: bold;">
                {if $VARS[$datavar]}{$VARS[$datavar]}
                {else}
                    (Discontinue) {$MSI.name}
                {/if}
                </li>
            {/foreach}
            </ul>
        </li>
        {/if}

        {if $DRNOTE->appointment_type|strtolower|trim == 'ehe' && $PHYSICALEXAM}
        {assign var=PEP_REMARKS value=""}
        {assign var=ALL_YES value="1"}
        {assign var=ALL_NO value="1"}
        {foreach from=$PHYSICALEXAMPROPERTIES key=PEP_IDX item=PHYSICALEXAMPROPERTY}
            {if $PHYSICALEXAMPROPERTY->is_normal|strtolower|trim == 'no'}
				{assign var=ALL_YES value="0"}
                {assign var=K value=$PHYSICALEXAMPROPERTY->name}
                {if $PEP_REMARKS != ""}
                    {assign var=PEP_REMARKS value="`$PEP_REMARKS` "}
                {/if}
				{if $PHYSICALEXAMPROPERTY->description != ''}
                    {assign var=PEP_REMARKS value="`$PEP_REMARKS``$PHYSICALEXAMPROPERTY->description` in your `$app_list_strings.physical_exam_list[$K]`,"}
				{/if}
			{else}
				{if $PHYSICALEXAMPROPERTY->is_normal|strtolower|trim == 'yes'}
					{assign var=ALL_NO value="0"}
				{/if}
            {/if}
        {/foreach}
        {assign var=datavar value='physical_exam'}
        <li class="editable" data-var="{$datavar}">
        {if $VARS[$datavar]}{$VARS[$datavar]}
        {else}
            During your evaluation, you underwent a physical exam. Your blood pressure was {$PHYSICALEXAM->blood_pressure}, which was {$PHYSICALEXAM->fat_mass}, and your pulse was {$PHYSICALEXAM->pulse}.
            {if $PEP_REMARKS != "" && $ALL_NO eq 1}
            	Your physical exam demonstrated {$PEP_REMARKS}.{literal}Based on these findings, please see our recommendations below.{/literal}
			{elseif $ALL_YES eq 1}
				Your physical exam demonstrated no abnormalities.
            {/if}
        {/if}
        </li>
		<br>
    {/if}


	{*
    {if $DRNOTE->appointment_type|strtolower|trim == 'ehe'}
        {assign var=datavar value='exercises'}
        <li class="editable" data-var="{$datavar}">
        {if $VARS[$datavar]}{$VARS[$datavar]}{else}
            You met with our Exercise Specialists, Steven Villagomez and Timothy Coyle, during your evaluation to review your current exercise
            and dietary pattern, and to plan a balanced fitness and nutrition program based on your particular metabolic make-up and individual
            needs.  We wish to emphasize that healthy nutrition is essential for both your metabolism and for disease prevention.  In general, meals
            should consist of natural, minimally processed (i.e., whole, fresh) foods, with emphasis on lean protein and low-glycemic fruits and
            vegetables. Eating 5 to 6 small meals and snacks throughout the day (rather than 3 large meals, or skipping meals) will improve your
            metabolism and energy levels. Staying well-hydrated by drinking plenty of water through the day is essential, as well.  Steven and Tim's
            report with detailed fitness and nutrition recommendations is enclosed.
        {/if}
        </li>
    {/if}
    {if $DRNOTE->appointment_type|strtolower|trim == 'ehe' && $PREVIOUSBONESTUDY}
        {assign var=datavar value='previous_bonestudy'}
        <li class="editable" data-var="{$datavar}">
        {if $VARS[$datavar]}{$VARS[$datavar]}
        {else}
            You had a bone density and body composition scan done on {$PREVIOUSBONESTUDY->test_date|strtotime|date_format:'%B %e, %Y'}.
            Several aspects of your program are designed to work synergistically to maintain and increase bone density, as well as lean muscle mass.
            Follow-up bone density testing should be planned for 1-2 years from these scans, and a repeat body composition in 3-6 months, to monitor changes.
        {/if}
        </li>
    {/if}
	*}
	
	{foreach from=$MEETINGS key=MTG_IDX item=MEETING}
        {if $MEETING->plan_type_c|strtolower|trim == 'specialty'}
            {assign var=datavar value='meeting_'|cat:$MEETING->id}
            <li class="editable" data-var="{$datavar}">
			{if $VARS[$datavar]}{$VARS[$datavar]}
            {else}
                {assign var=K value=$MEETING->specialty_type_c}
                {assign var=SPECIALTYREFERRAL value=$MEETING->comite_specialtyreferral_meetings->beans|@reset}
                {if $MEETING->status|strtolower|trim == 'recommended'}We recommend a{/if}
                {if $MEETING->status|strtolower|trim == 'planned'}You are scheduled for a{/if}
                {if $MEETING->status|strtolower|trim == 'completed'}You had a{/if} 
                {$MEETING->name}{if $SPECIALTYREFERRAL->name} with {$SPECIALTYREFERRAL->name} a {$app_list_strings.specialty_type_list[$K]}{/if}{if $MEETING->description}, in light of your {$MEETING->description}{/if}.
                {if $MEETING->status|strtolower|trim == 'planned'}
                    This appointment will take place on {$MEETING->date_start|strtotime|date_format:'%B %e, %Y'} at {$MEETING->time_start|strtotime|date_format:'%l:%M%p'|strtolower}.
                {/if}
                {if $MEETING->status|strtolower|trim == 'recommended' || $MEETING->status|strtolower|trim == 'planned'}
                    {if $SPECIALTYREFERRAL->name}{$SPECIALTYREFERRAL->name} is located at {$SPECIALTYREFERRAL->address}, and the phone number is {$SPECIALTYREFERRAL->phone}.{/if}{/if}Please contact our office if you need any assistance with this referral. Please have all records from your visit sent to our office.
            {/if}
            </li>
			<br>
        {/if}	
    {/foreach}

	{foreach from=$MEETINGS key=MTG_IDX item=MEETING}
        {if $MEETING->plan_type_c|trim == 'study' && ($MEETING->studies_study_c|trim == 'bone_density__body_comp' || $MEETING->studies_study_c|trim == 'body_composition')}
            {assign var=datavar value='meeting_'|cat:$MEETING->id}
            <li class="editable" data-var="{$datavar}">
            {if $VARS[$datavar]}{$VARS[$datavar]}
            {else}
                {if $MEETING->status|strtolower|trim == 'planned'}Your follow-up {if $MEETING->studies_study_c|trim == 'body_composition'}body composition{else}bone study{/if} will also be performed on {$MEETING->date_start|strtotime|date_format:'%B %e, %Y'} at {$MEETING->time_start|strtotime|date_format:'%l:%M%p'|strtolower} to monitor your progress. This appointment is at the Metabolic Bone Health Center located at 429 E 75th Street on the Lower Level, New York, NY (between First and York Avenues).{/if}
                {if $MEETING->status|strtolower|trim == 'recommended'}You are due for a {if $MEETING->studies_study_c|trim == 'body_composition'}body composition{else}bone study{/if} in {$MEETING->date_start|strtotime|date_format:'%B'}, to monitor your progress. This appointment is at the Metabolic Bone Health Center located at 429 E 75th Street on the Lower Level, New York, NY (between First and York Avenues). Please let us know your availability so that we can best coordinate your appointments.{/if}
            {/if}
            </li>
			<br>
        {/if}
    {/foreach}

    {foreach from=$MEETINGS key=MTG_IDX item=MEETING}
        {if $MEETING->plan_type_c|trim == 'study' && $MEETING->studies_study_c|trim != 'bone_density__body_comp' && $MEETING->studies_study_c|trim != 'body_composition'}
            {assign var=datavar value='meeting_'|cat:$MEETING->id}
            <li class="editable" data-var="{$datavar}">
            {if $VARS[$datavar]}{$VARS[$datavar]}
            {else}
                {if $MEETING->status|strtolower|trim == 'recommended'}We recommend a{/if}
                {if $MEETING->status|strtolower|trim == 'planned'}You are scheduled for a{/if}
                {if $MEETING->status|strtolower|trim == 'completed'}You had a{/if} 
                {$MEETING->name}{if $MEETING->description} in light of your {$MEETING->description}.{/if}
                {if $MEETING->status|strtolower|trim == 'planned'}
                       This appointment will take place on {$MEETING->date_start|strtotime|date_format:'%B %e, %Y'} at {$MEETING->time_start|strtotime|date_format:'%l:%M%p'|strtolower}.
                {/if}
                {if $MEETING->status|strtolower|trim == 'recommended' || $MEETING->status|strtolower|trim == 'planned'}
                {literal}{Specialty referral} is located at {address}, and the phone number is {phone}. {/literal}		
                {/if}
				{if $MEETING->studies_study_c|trim == 'sleep_study'}
					A tiny recording device with instructors will be provided to you. An interpretive report and recommendations will follow.
                {/if}
				{if $MEETING->studies_study_c|trim == 'therapeutic_phlebotomy'}
					A requisition has already been sent to the Blood Donor Center for this draw.Additionally, we recommend a repeat Complete Blood Count with differential two to four weeks after your Therapeutic Phlebotomy. Please do not hesitate to contact our office should you have any questions or need any help with coordination.
                {/if}
				Please contact our office if you need any assistance with this referral. Please have all records from your visit sent to our office.
            {/if}
            </li>
        {/if}
    {/foreach}


    {foreach from=$MEETINGS key=MTG_IDX item=MEETING}
        {if $MEETING->plan_type_c|trim == 'misc'}
               {assign var=datavar value='meeting_'|cat:$MEETING->id}
                <li class="editable" data-var="{$datavar}">
                {if $VARS[$datavar]}{$VARS[$datavar]}
                {else}
                    We recommend {$MEETING->name} {if $MEETING->description}, in light of your {$MEETING->description}{/if}.
                {/if}
                </li>
            {/if}
    {/foreach}
    
    {foreach from=$MEETINGS key=MTG_IDX item=MEETING}

        {if ($MEETING->plan_type_c|trim == 'test' && ($MEETING->tests_test_c == 'vo2' || $MEETING->tests_test_c == 'endopat' || $MEETING->tests_test_c == 'vo2_endopat')) || $MEETING->plan_type_c|trim == 'vo2' ||  $MEETING->plan_type_c|trim == 'endopat' || $MEETING->plan_type_c|trim == 'vo2_endopat'}
            <li>
                {assign var=K value=$MEETING->tests_test_c}
                {assign var=datavar value='meeting_'|cat:$MEETING->id}
                <span class="editable" data-var="{$datavar}">
                {if $VARS[$datavar]}{$VARS[$datavar]}
                {else}
                    {if $MEETING->status|strtolower|trim == 'recommended'}Please schedule to meet with one of our Exercise Physiologists, Steven Villagomez or Timothy Coyle, in {$MEETING->date_start|strtotime|date_format:'%B'} to evaluate your current exercise pattern, including
                    {/if}
                    {if $MEETING->status|strtolower|trim == 'planned'}ou are scheduled to meet with one of our Exercise Physiologists, Steven Villagomez or Timothy Coyle, on {$MEETING->date_start|strtotime|date_format:'%B %e, %Y'} at {$MEETING->time_start|strtotime|date_format:'%l:%M%p'|strtolower} to evaluate your current exercise pattern, including
                    {/if}
					
                    {if $MEETING->plan_type_c|trim == 'vo2' || $MEETING->tests_test_c == 'vo2'}a follow-up VO2 assessment{/if}{if $MEETING->plan_type_c|trim == 'endopat' || $MEETING->tests_test_c == 'endopat'}an EndoPAT test{/if}{if $MEETING->plan_type_c|trim == 'vo2_endopat' || $MEETING->tests_test_c == 'vo2_endopat'}an EndoPAT test and follow-up VO2 assessment{/if}, in order to determine the next steps in your training program. This evaluation is at our office.
					Please observe the following prior to your appointment:
                {/if}
                </span>
				<strong>
                <ul>
                    {assign var=datavar value='meeting_'|cat:$MEETING->id|cat:'_1'}
                    <li class="editable" data-var="{$datavar}">
                    {if $VARS[$datavar]}{$VARS[$datavar]}
                    {else}
                        Avoid all caffeine and L-Arginine/Citrulline for six hours.
                    {/if}
                    </li>
                    {assign var=datavar value='meeting_'|cat:$MEETING->id|cat:'_2'}
                    <li class="editable" data-var="{$datavar}">
                    {if $VARS[$datavar]}{$VARS[$datavar]}
                    {else}
                        Eat a protein-based meal (i.e. Greek yogurt, protein shake, omelet, etc.) two hours before your appointment, after which you should fast (drinking only water).
                    {/if}
                    </li>
                </ul>
				</strong>
            </li>
        {/if}
    {/foreach}
	
    
    {foreach from=$MEETINGS key=MTG_IDX item=MEETING}
        {if $MEETING->plan_type_c|trim == 'ehe'}
            <li>
                {assign var=datavar value='meeting_'|cat:$MEETING->id}
                <span class="editable" data-var="{$datavar}">
                {if $VARS[$datavar]}{$VARS[$datavar]}
                {else}
                    {if $MEETING->status|strtolower|trim == 'recommended'}
                        You are due for your Precision Health Analysis in {$MEETING->date_start|strtotime|date_format:'%B'} as you enter the {$MEETING->description} year of our program.Please let us know your availability so that we can best coordinate your appointment.
                    {/if}
                    {if $MEETING->status|strtolower|trim == 'planned'}
                        You are scheduled for a Precision Health Analysis on {$MEETING->date_start|strtotime|date_format:'%B %e, %Y'} at {$MEETING->time_start|strtotime|date_format:'%l:%M%p'|strtolower}, as you enter the {$MEETING->description} year of our program. During this evaluation, you will meet with one of our Exercise Physiologists, Timothy Coyle or Steven Villagomez, to evaluate your current exercise pattern, including an EndoPAT test and follow-up VO2 assessment, in order to determine the next steps in your training program. This evaluation is at our office. Please observe the following prior to your appointment:
                    {/if}
                {/if}
                </span>
                {if $MEETING->status|strtolower|trim == 'planned'}
				<strong>
                <ul>
                    {assign var=datavar value='meeting_'|cat:$MEETING->id|cat:'_1'}
                    <li class="editable" data-var="{$datavar}">
                    {if $VARS[$datavar]}{$VARS[$datavar]}
                    {else}
                        Avoid all caffeine and L-Arginine/Citrulline for six hours.
                    {/if}
                    </li>
                    {assign var=datavar value='meeting_'|cat:$MEETING->id|cat:'_1'}
                    <li class="editable" data-var="{$datavar}">
                    {if $VARS[$datavar]}{$VARS[$datavar]}
                    {else}
                        Eat a protein-based meal (i.e. Greek yogurt, protein shake, omelet, etc.) two hours before your appointment, after which you should fast (drinking only water).
                    {/if}
                    </li>
                </ul>
				</strong>
                {/if}
            </li>
        {/if}

    {/foreach}

    {foreach from=$MEETINGS key=MTG_IDX item=MEETING}
        {if $MEETING->plan_type_c|trim == 'bd'}
            {assign var=datavar value='meeting_'|cat:$MEETING->id}
            <li class="editable" data-var="{$datavar}">
            {if $VARS[$datavar]}{$VARS[$datavar]}
            {else}
                Your follow-up Comprehensive Labs are due on {$MEETING->date_start|strtotime|date_format:'%B %e, %Y'}{if $MEETING->description}, {$MEETING->description}{/if}. This should be done after a 10-12 hour fast (drink plenty of water during this time){strip}
                {if $TESTOSTERONE && !$HCG}
                    , on the day of your testosterone dose, before your Testosterone Cypionate injection
                {/if}
                {if !$TESTOSTERONE && $HCG}
, on the day after your hCG injection
                {/if}
                {if $TESTOSTERONE && $HCG}
, on the day after your hCG injection or, on the day of your testosterone dose, before your Testosterone Cypionate injection
                {/if}.{/strip}
                As we get closer to this date, a phlebotomist will be in contact with you to schedule your blood draw time.{if $FUTURETM} A follow-up teleconference has been {if $FUTURETM->status|trim|strtolower == 'recommended'} tentatively scheduled for the week of {$FUTURETM->date_start|strtotime|date_format:'%B %e, %Y'}
{/if}{if $FUTURETM->status|trim|strtolower == 'planned'} scheduled for {$FUTURETM->date_start|strtotime|date_format:'%B %e, %Y'} at {$FUTURETM->time_start|strtotime|date_format:'%l:%M%p'|strtolower}{/if} to discuss the results and any recommended changes to your program.{/if}
            {/if}
            </li>
        {/if}

    {/foreach}
    {foreach from=$MEETINGS key=MTG_IDX item=MEETING}
        {if $MEETING->plan_type_c|trim == 'test'}
            {assign var=K value=$MEETING->tests_test_c}
            {assign var=datavar value='meeting_'|cat:$MEETING->id}
            <li class="editable" data-var="{$datavar}">
            {if $VARS[$datavar]}{$VARS[$datavar]}
            {else}
                {if $MEETING->status|strtolower|trim == 'recommended'}
                As discussed, we recommend additional tests, which would be done at the time of next blood draw,
                {/if}
				{if $MEETING->status|strtolower|trim == 'planned'}
              	 As discussed, we will be including additional tests with your next blood draw,
                {/if}
				specifically {$MEETING->name} {if $MEETING->description} given your {$MEETING->description}{/if}
			{if $MEETING->status|strtolower|trim == 'recommended'}Please let us know if you would like to go forward with these tests.{/if}
            {/if}
            </li>
        {/if}

    {/foreach}
    </ol>

    {assign var=datavar value='closing'}
    <p class="editable" data-var="{$datavar}">
    {if $VARS[$datavar]}{$VARS[$datavar]}
    {else} 
        {$CONTACT->first_name}, it was a pleasure
        {if $DRNOTE->appointment_type|strtolower|trim == 'telemedicine' || $DRNOTE->appointment_type|strtolower|trim == 'follow_up'}speaking with you.{else}seeing you in the office.{/if} Please call us if you have any questions regarding these recommendations or instructions.
    {/if}
    </p>
    <br />
    {assign var=datavar value='signature'}
    <p class="editable" data-var="signature">
    {if $VARS[$datavar]}{$VARS[$datavar]}
    {else}
        Wishing you well!
    {/if}
    </p>
    <p>The ComiteMD Team</p>
</div>

{if !$render}
<script type="text/javascript" src="modules/comite_Letters/js/jquery.jeditable.js"></script>
<script type="text/javascript" src="modules/comite_Letters/js/edit.js"></script>
<form name="letter" id="letter" method="post" action="index.php">
    <input type="hidden" name="module" value="{$REQUEST.module}" />
    <input type="hidden" name="action" value="{$REQUEST.action}" />
    <input type="hidden" name="record" value="{$REQUEST.record}" />
    <input type="hidden" name="return_module" value="{$REQUEST.return_module}" />
    <input type="hidden" name="return_action" value="{$REQUEST.return_action}" />
    <input type="hidden" name="return_record" value="{$REQUEST.record}" />
    <input type="hidden" name="subject" id="subject" value="" />
    <input type="hidden" name="body" id="body" value="" />

    <input type="hidden" name="render" value="1" />
    <input type="submit" value="Generate PDF" />
</form>
{/if}