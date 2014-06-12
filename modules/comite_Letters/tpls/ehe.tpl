<style type="text/css">
    {$css}
</style>

<div class="pdf" id="ehe">
    <p class="company">
        <img src="{$base}/custom/include/images/logo_print.png" />
        55 East 86th Street, 1B, New York, NY 10028 ~ 212.288.8123 & 212.288.8126 fax
    </p>

    <p class="title">ComiteMD - Exercise &amp Nutrition Report</p>

    <p class="date">{$date}</p>

    <p class="patient">
        Dear {if $CONTACT->salutation}<span class="salutation">{$CONTACT->salutation} </span>{/if}
        <span class="name">{$CONTACT->last_name}</span>,
    </p>

    {assign var=datavar value='description'}
    <p class="description editable" data-var="{$datavar}">
    {if $VARS[$datavar]}{$VARS[$datavar]}
    {else}
        It was a pleasure meeting with you, and learning about your nutrition and exercise goals. Our conversation and review of your exercise nutritional pattern revealed that you
    {/if}
    </p>
    {assign var=datavar value='regimen'}
    <p class="regimen editable" data-var="{$datavar}">
    {if $VARS[$datavar]}{$VARS[$datavar]}
    {else}
        {if $EHE_RECOMMENDATIONS->ehe_exercise_regimen == "ehe_exercise_regiment_solid_foundation"}Your exercise regimen is currently well-balanced. Small improvements over time will help you attain more specific goals.
        {elseif $EHE_RECOMMENDATIONS->ehe_exercise_regimen == "ehe_exercise_regiment_needs_improvement"}Your exercise regimen would be further beneficial with the inclusion of cardiovascular, weight, and flexibility training. These three areas together form the basis for a balanced exercise foundation.
        {elseif $EHE_RECOMMENDATIONS->ehe_exercise_regimen == "ehe_exercise_regiment_no_execise"}Although you do not exercise regularly, being physically active on a regular basis is an essential part of your program. Doing small amounts of exercise regularly will give you the momentum to build up your endurance over time. {/if}
    {/if}
    </p>

    <h2 class="vo2_label">VO2 Comparison</h2>
    <table class="vo2">
        <tr>
            <th>Date</th>
            <th>VO2 Max</th>
            <th>Ventilation</th>
            <th>Work Rate</th>
        </tr>
    {foreach from=$VO2_TESTINGS key=VO2_IDX item=VO2ITEM}
        <tr>
            <td>{$VO2ITEM->document_name}</td>
            <td>{$VO2ITEM->v02max}</td>
            <td>{$VO2ITEM->ventilation}</td>
            <td>{$VO2ITEM->work_rate}</td>
        </tr>
    {/foreach}
    </table>

    <p>In light of these factors, please see our recommendations for nutrition and exercise, below.</p>

    <h2>Nutrition Guidelines:</h2>
    <ol>
        <li><strong>Choose natural foods.</strong>
            <ul>
                <li class="editable" data-var="natural_foods">If it grows from the ground, falls from the trees, runs, flies, or swims, it is an optimal choice.</li>
            </ul>
        </li>
        <li><strong>Keep the Glycemic Index of all food below 45.</strong>
            <ul>
                <li class="editable" data-var="glycemic_1">Limit rice, potatoes, bread and pasta to once a week.</li>
                <li class="editable" data-var="glycemic_2">Do not skip meals, since doing so would lower your metabolism.</li>
                <li class="editable" data-var="glycemic_3">Add 1-2 tablespoons of all seeds and nuts (walnuts, almonds, cashews, pistachios, and macadamias) to your daily diet for essential fats. It is best for all seeds and nuts to be unsalted and unroasted.</li>
            </ul>
        </li>
        <li><strong>Use Stevia&reg; as a sweetener.</strong> <span class="editable" data-var="sweetner"> Avoid sugar, syrups, and artificial sweeteners.</span></li>
        <li><strong>Eliminate or reduce carbonated beverages.</strong></li>
        <li><strong>Water is your beverage of choice.</strong>
            <ul>
                <li class="editable" data-var="beverage_1">Drink 1/2 your body weight in ounces daily; more with alcohol, caffeine, exercise, or when in the heat.</li>
                <li class="editable" data-var="beverage_2">Coffee is limited to 2-3 (6oz) cups in the morning.</li>
                <li class="editable" data-var="beverage_3">1 serving of dry red wine daily is optimal for most individuals.</li>
                <li class="editable" data-var="beverage_4">Low sodium vegetable juice and herbal teas are good too.</li>
            </ul>
        </li>
        <li><strong>As we discussed, remember portion sizes.</strong></li>
        <li><strong>Eat small meals, every 3-4 hours, totaling 5-6 small meals a day.</strong></li>
            <ul>
                <li class="editable" data-var="meals_1">Balance meals with all three macronutrients (proteins, fats, & carbohydrates)</li>
                <li><span  class="editable" data-var="meals_2">Eat natural, low glycemic fruits and vegetables:</span>
                    <ul>
                        <li class="editable" data-var="meals_3">For vegetables, try lettuce, cucumbers, tomatoes, onions, broccoli, asparagus, green beans, spinach, squash, zucchini, cauliflower, etc.</li>
                        <li class="editable" data-var="meals_4">i.e. plums, apples, pears, dried apricots, berries</li>
                    </ul>
                <li class="editable" data-var="meals_5">Lean Proteins:
                    <ul>
                        <li class="editable" data-var="meals_6">i.e. fish, chicken, turkey, egg whites, non-fat cottage cheese, protein shakes</li>
                    </ul>
                </li>
                <li class="editable" data-var="meals_7">Good Fats:
                    <ul>
                        <li class="editable" data-var="meals_8">apple w/ nuts, pears w/ cheese, V8 w/ string cheese, celery w/ natural nut butter</li>
                    </ul>
                </li>
            </ul>
        <li><strong>Eat two small snacks daily.</strong>
            <ul>
                <li class="editable" data-var="snacks_1">This can include a protein or a fat eaten alone, such as protein shake, nuts, meat & cheese, nitrate-free jerky</li>
                <li class="editable" data-var="snacks_2">Never eat a carbohydrate by itself. Always balance it with a protein or a good fat, such as apples with nuts, pears with cheese, V8 with string cheese, & celery with natural peanut butter.</li>
            </ul>
        </li>
        <li><strong>Daily Protein Intake:</strong>
            <ul>
                {assign var=datavar value='protein_intake'}
                <li class="editable" data-var="{$datavar}">
                {if $VARS[$datavar]}{$VARS[$datavar]}
                {else}
                    grams
                {/if}
                </li>
                <li>No more than 35 grams in one sitting</li>
            </ul>
        </li>
{if $MEDSUPPINSTANCES}
        <li><strong>Supplementation:</strong>
            <ul>
{foreach from=$MEDSUPPINSTANCES key=MSI_IDX item=MEDSUPPINSTANCE}
    {assign var=BEANS value=$MEDSUPPINSTANCE->comite_medsuppinstance_comite_medsupp->beans}
    {assign var=MEDSUPP_ID value=$MEDSUPPINSTANCE->comite_med8f3bplement_ida}
    {assign var=MEDSUPP value=$BEANS[$MEDSUPP_ID]}
    {assign var=SOURCE value=$MEDSUPPINSTANCE->source}
    {if $MEDSUPP->type == "supplement"}
        {* @TODO add a field? $MEDSUPP->purpose ?? *}
        {if $MEDSUPP->name == "Prime Alpha" || $MEDSUPP->name == "Prime Alpha Plus" || $MEDSUPP->name == "Prime Power" || $MEDSUPP->name == "Prime Strength"}
        <li class="editable" data-var="supplementation_1">{if $MEDSUPPINSTANCE->comite_new}Begin{else}Continue{/if} {$MEDSUPP->name} 
            {if $MEDSUPP->name == "Prime Alpha"}for improved endothelial function and growth hormone delivery{/if}
            {if $MEDSUPP->name == "Prime Alpha Plus"}before bed for additional improvement of growth hormone delivery{/if}
            {if $MEDSUPP->name == "Prime Power"}for general well-being{/if}
            {if $MEDSUPP->name == "Prime Strength"}for enhanced bone and joint health{/if}</li>
        {/if}
    {/if}
{/foreach}
			<li class="editable" data-var="supplementation_2"></li>
            </ul>
        </li>
{/if}
    </ol>

    <h2>Exercise Prescription:</h2>
    <ol>
        <li><strong>Aerobic Training:</strong>
            <ul>
                {assign var=A value=$EHE_RECOMMENDATIONS->ehe_aerobic_action}
                {assign var=B value=$EHE_RECOMMENDATIONS->ehe_aerobic_frequency}
                <li><span class="editable" data-var="frequency">Frequency: {$app_list_strings.ehe_aerobic_action_list[$A]} cardiovascular training {$app_list_strings.ehe_aerobic_frequency_list[$B]|strtolower} weekly</span>
                    <ul>
                        <li class="editable" data-var="frequency_1">Longer duration CV once per week</li>
                        <li class="editable" data-var="frequency_2">Interval based CV training once per week</li>
                    </ul>
                </li>
                <li><span class="editable" data-var="intensity">Intensity:</span>
                    <ul>
                        {assign var=datavar value='aerobic_duration'}
                        <li class="editable" data-var="{$datavar}">
                        {if $VARS[$datavar]}{$VARS[$datavar]}
                        {else}
                            Longer duration CV: 60-80% heart rate reserve - {math equation="x*y" x=$VO2_TESTING->maxrate|intval y=0.6 format="%.0f"} to {math equation="x*y" x=$VO2_TESTING->maxrate|intval y=0.8 format="%.0f"} beats per minute
                        {/if}
                        </li>
                        {assign var=datavar value='aerobic_interval'}
                        <li class="editable" data-var="{$datavar}">
                        {if $VARS[$datavar]}{$VARS[$datavar]}
                        {else}
                            Interval based CV: 90-95% heart rate reserve - {math equation="x*y" x=$VO2_TESTING->maxrate|intval y=0.9 format="%.0f"} to {math equation="x*y" x=$VO2_TESTING->maxrate|intval y=0.95 format="%.0f"} beats per minute
                        {/if}
                        </li>
                    </ul>
                </li>
                {assign var=A value=$EHE_RECOMMENDATIONS->ehe_aerobic_time}
                <li><span class="editable" data-var="time">Time:</span>
                    <ul>
                        {assign var=datavar value='aerobic_time'}
                        <li class="editable" data-var="{$datavar}">
                        {if $VARS[$datavar]}{$VARS[$datavar]}
                        {else}
                            Longer duration CV: {$app_list_strings.ehe_aerobic_time_list[$A]} minutes
                        {/if}
                        </li>
                        <li class="editable" data-var="time_2">Interval based CV: 9-21 intervals of 30 seconds at a high intensity (90-95% heart rate reserve) and 30 seconds active recovery at a low intensity</li>
                    </ul>
                </li>
                {assign var=A value=$EHE_RECOMMENDATIONS->ehe_aerobic_activity}
                {assign var=datavar value='aerobic_activity_type'}
                <li class="editable" data-var="{$datavar}">
                {if $VARS[$datavar]}{$VARS[$datavar]}
                {else}
                    Type: {$app_list_strings.ehe_aerobic_activity_list[$A]}
                {/if}
                </li>
            </ul>
        </li>
        <li><strong>Weight Training:</strong>
            <ul>
                {assign var=A value=$EHE_RECOMMENDATIONS->ehe_weight_frequency}
                {assign var=B value=$EHE_RECOMMENDATIONS->ehe_weight_format}
                <li class="editable" data-var="weight_training_1">Frequency: {$app_list_strings.ehe_weight_frequency_list[$A]} per week, following the {$app_list_strings.ehe_weight_format_list[$B]} format</li>
                <li class="editable" data-var="weight_training_2">Duration: 3 sets of 1 to 2 different exercises (totaling 3 to 6 sets) for each body part or muscle group</li>
                <li class="editable" data-var="weight_training_3">Intensity: 8 to 10 repetitions per set. When you can perform 10 reps in any one set, increase the weight for that set so that you can perform at least 8 reps. Continue to increase the reps to 10 before adding weight.</li>
                {assign var=A value=$EHE_RECOMMENDATIONS->ehe_weight_type}
                {assign var=datavar value='weight_type'}
                <li class="editable" data-var="{$datavar}">
                {if $VARS[$datavar]}{$VARS[$datavar]}
                {else}
                    Type: {$app_list_strings.ehe_weight_type_list[$A]}
                {/if}
                </li>
            </ul>
        </li>
        <li><strong>Stretching - Incorporate into your training.</strong> The ACSM recommends flexibility training a minimum 2 to 3 days per week, holding each stretch for 10 to 30 seconds to mild discomfort; 3 to 4 repetitions per stretch.</li>
        <li><strong>Do not forget your core!</strong> Choose 3 exercises from the <em>Core Work</em> file and perform them after your aerobic training, but before you begin the stretching portion of your training.</li>
    </ol>

    <p>During your office visit, we did a series of fitness assessments. The VO2 assessment, which is designed to show the efficiency of your cardiovascular and pulmonary systems, provides us with a good understanding of your metabolic profile. The EndoPat test, which measures endothelial function, is an indicator of vascular health. We plan to track your progress with follow-up testing, as you continue to implement and sustain a consistent exercise and nutrition regimen.</p>
    <p class="editable" data-var="footer_greetings">Please understand that this is a process, and should be incorporated into your life gradually. Feel free to contact the ComiteMD team at any time with questions or concerns regarding exercise and nutrition, by phone, or by e-mail.</p>

    <p>To your good health!</p>

    <p>Regards,</p>

    <div class="signature first">
        <img src="{$base}/custom/include/images/tim-coyle.png" />
        <p>Tim Coyle M.S.Ed.<br />
        Exercise Physiologist<br />
        A.C.E.<br />
        TCoyle@ComiteMD.com</p>
    </div>
    <div class="signature">
        <img src="{$base}/custom/include/images/steven-villagomez.png" />
        <p>Steven Villagomez M.Ed.<br />
        Exercise Physiologist<br />
        A.C.S.M - R.C.E.P<br />
        N.S.C.A - C.S.C.S<br />
        SVillagomez@ComiteMD.com</p>
    </div>
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