{assign var=gramstolbs value=453.592}
<style type="text/css">
    {$css}
</style>

<div class="pdf" id="bonestudy">
    <p class="company">
        <img src="{$base}/custom/include/images/logo_print.png" />
        55 East 86th Street, 1B, New York, NY 10028 ~ 212.288.8123 & 212.288.8126
    </p>

    <p class="patient">
        {if $CONTACT->salutation}<span class="salutation">{$CONTACT->salutation} </span>{/if}
        <span class="name">{if $CONTACT->first_name}{$CONTACT->first_name} {/if}{$CONTACT->last_name}</span><br />
        {if $CONTACT->primary_address_street}<span class="primary_address_street">{$CONTACT->primary_address_street}</span><br />{/if}
        {if $CONTACT->primary_address_street2}<span class="primary_address_street2">{$CONTACT->primary_address_street2}</span><br />{/if}
        {if $CONTACT->primary_address_street3}<span class="primary_address_street3">{$CONTACT->primary_address_street3}</span><br />{/if}
        {if $CONTACT->primary_address_city}<span class="primary_address_city">{$CONTACT->primary_address_city}</span>, <span class="primary_address_state">{$CONTACT->primary_address_state}</span> <span class="primary_address_postalcode">{$CONTACT->primary_address_postalcode}</span><br />{/if}
    </p>
    <p class="date">{$date}</p>

	<p class="patient_greeting">
        Dear {if $CONTACT->salutation}<span class="salutation">{$CONTACT->salutation} </span>{/if}
		<span class="name">{$CONTACT->last_name},</span>
	</p>

    <p class="salutation">On {$testdate} you underwent the following tests:</p>
    <ul class="tests">
        <li><span class="checkbox">{if $BONESTUDY->bds_lumbar_spine}X{/if}</span> Dexa Comprehensive Bone Densiotometry (Spine, Hips and Forearms)</li>
        <li><span class="checkbox">{if $BONESTUDY->bc_subtotal_fat_percent}X{/if}</span> IVA (Vertebral Assessment)</li>
        <li><span class="checkbox">{if $BONESTUDY->bc_subtotal_fat_percent}X{/if}</span> Whole Body Composition</li>
    </ul>

    <p>The reports form these tests and data are attached.</p>

	<p>Your <strong>whole body composition testing</strong> was performed to determine overall percentages of
body fat with breakdown by region. The healthy body fat range for {$CONTACT->gender} {$age_range} is {$percent_range}. Please see attached table for normal ranges corresponding to specific age ranges.</p>

	<p><strong>Your overall body fat is {$BONESTUDY->bc_subtotal_fat_percent}%.</strong></p>

	<p>Regional breakdown shows: {$BONESTUDY->bc_left_arm_fat_percent}% in the left arm, {$BONESTUDY->bc_right_arm_fat_percent}% in the right arm, {$BONESTUDY->bc_trunk_fat_percent}% in the trunk, {$BONESTUDY->bc_left_leg_fat_percent}% in the left leg, and {$BONESTUDY->bc_right_leg_fat_percent}% in the right leg.</p>

    <p class="bottom-zero">A comparison to your {$previoustestdate} diagnostic is as follows:</p>
	<p></p>
    <table class="testing" width="90%">
        <tr>
            <td></td>
            <td>{$previoustestdate}</td>
            <td>{$testdate}</td>
            <td></td>
        </tr>

        <tr>
            <td><strong>Region</strong></td>
            <td><strong>Lean Muscle<br />(grams)</strong></td>
            <td><strong>Lean Muscle<br />(grams)</strong></td>
            <td><strong>Change Lean<br />Muscle (lbs)</strong></td>
        </tr>
        <tr>
            <td>L Arm</td>
            <td>{$BONESTUDY->bc_left_arm_lean_muscle}</td>
            <td>{$PREVIOUSBONESTUDY->bc_left_arm_lean_muscle}</td>
            <td>{$DELTA.bc_left_arm_lean_muscle}</td>
        </tr>
        <tr>
            <td>R Arm</td>
            <td>{$BONESTUDY->bc_right_arm_lean_muscle}</td>
            <td>{$PREVIOUSBONESTUDY->bc_right_arm_lean_muscle}</td>
            <td>{$DELTA.bc_right_arm_lean_muscle}</td>
        </tr>
        <tr>
            <td>Trunk</td>
            <td>{$BONESTUDY->bc_trunk_lean_muscle}</td>
            <td>{$PREVIOUSBONESTUDY->bc_trunk_lean_muscle}</td>
            <td>{$DELTA.bc_trunk_lean_muscle}</td>
        </tr>
        <tr>
            <td>L Leg</td>
            <td>{$BONESTUDY->bc_left_leg_lean_muscle}</td>
            <td>{$PREVIOUSBONESTUDY->bc_left_leg_lean_muscle}</td>
            <td>{$DELTA.bc_left_leg_lean_muscle}</td>
        </tr>
        <tr>
            <td>R Leg</td>
            <td>{$BONESTUDY->bc_right_leg_lean_muscle}</td>
            <td>{$PREVIOUSBONESTUDY->bc_right_leg_lean_muscle}</td>
            <td>{$DELTA.bc_right_leg_lean_muscle}</td>
        </tr>
        <tr>
            <td>Total</td>
            <td>{$BONESTUDY->bc_subtotal_lean_muscle}</td>
            <td>{$PREVIOUSBONESTUDY->bc_subtotal_lean_muscle}</td>
            <td>{$DELTA.bc_subtotal_lean_muscle}</td>
        </tr>
        <tr>
            <td></td>
            <td>{$previoustestdate}</td>
            <td>{$testdate}</td>
            <td></td>
        </tr>
        <tr>
            <td><strong>Region</strong></td>
            <td><strong>Fat<br />(grams)</strong></td>
            <td><strong>Fat<br />(grams)</strong></td>
            <td><strong>Change Fat<br />(lbs)</strong></td>
        </tr>
        <tr>
            <td>L Arm</td>
            <td>{$BONESTUDY->bc_left_arm_fat_mass}</td>
            <td>{$PREVIOUSBONESTUDY->bc_left_arm_fat_mass}</td>
            <td>{$DELTA.bc_left_arm_fat_mass}</td>
        </tr>
        <tr>
            <td>R Arm</td>
            <td>{$BONESTUDY->bc_right_arm_fat_mass}</td>
            <td>{$PREVIOUSBONESTUDY->bc_right_arm_fat_mass}</td>
            <td>{$DELTA.bc_right_arm_fat_mass}</td>
        </tr>
        <tr>
            <td>Trunk</td>
            <td>{$BONESTUDY->bc_trunk_fat_mass}</td>
            <td>{$PREVIOUSBONESTUDY->bc_trunk_fat_mass}</td>
            <td>{$DELTA.bc_trunk_fat_mass}</td>
        </tr>
        <tr>
            <td>L Leg</td>
            <td>{$BONESTUDY->bc_left_leg_fat_mass}</td>
            <td>{$PREVIOUSBONESTUDY->bc_left_leg_fat_mass}</td>
            <td>{$DELTA.bc_left_leg_fat_mass}</td>
        </tr>
        <tr>
            <td>R Leg</td>
            <td>{$BONESTUDY->bc_right_leg_fat_mass}</td>
            <td>{$PREVIOUSBONESTUDY->bc_right_leg_fat_mass}</td>
            <td>{$DELTA.bc_right_leg_fat_mass}</td>
        </tr>
        <tr>
            <td>Total</td>
            <td>{$BONESTUDY->bc_subtotal_fat_mass}</td>
            <td>{$PREVIOUSBONESTUDY->bc_subtotal_fat_mass}</td>
            <td>{$DELTA.bc_subtotal_fat_mass}</td>
        </tr>
        <tr>
            <td></td>
            <td>{$previoustestdate}</td>
            <td>{$testdate}</td>
            <td></td>
        </tr>
        <tr>
            <td><strong>Region<strong></td>
            <td><strong>% Fat</strong></td>
            <td><strong>% Fat</strong></td>
            <td><strong>% Fat Change</strong></td>
        </tr>
        <tr>
            <td>L Arm</td>
            <td>{$BONESTUDY->bc_left_arm_fat_percent}</td>
            <td>{$PREVIOUSBONESTUDY->bc_left_arm_fat_percent}</td>
            <td>{$DELTA.bc_left_arm_fat_percent}</td>
        </tr>
        <tr>
            <td>R Arm</td>
            <td>{$BONESTUDY->bc_right_arm_fat_percent}</td>
            <td>{$PREVIOUSBONESTUDY->bc_right_arm_fat_percent}</td>
            <td>{$DELTA.bc_right_arm_fat_percent}</td>
        </tr>
        <tr>
            <td>Trunk</td>
            <td>{$BONESTUDY->bc_trunk_fat_percent}</td>
            <td>{$PREVIOUSBONESTUDY->bc_trunk_fat_percent}</td>
            <td>{$DELTA.bc_trunk_fat_percent}</td>
        </tr>
        <tr>
            <td>L Leg</td>
            <td>{$BONESTUDY->bc_left_leg_fat_percent}</td>
            <td>{$PREVIOUSBONESTUDY->bc_left_leg_fat_percent}</td>
            <td>{$DELTA.bc_left_leg_fat_percent}</td>
        </tr>
        <tr>
            <td>R Leg</td>
            <td>{$BONESTUDY->bc_right_leg_fat_percent}</td>
            <td>{$PREVIOUSBONESTUDY->bc_right_leg_fat_percent}</td>
            <td>{$DELTA.bc_right_leg_fat_percent}</td>
        </tr>
        <tr>
            <td><strong>Total</strong></td>
            <td>{$BONESTUDY->bc_subtotal_fat_percent}</td>
            <td>{$PREVIOUSBONESTUDY->bc_subtotal_fat_percent}</td>
            <td>{$DELTA.bc_subtotal_fat_percent}</td>
        </tr>
    </table>
	<p></p>
    <p>
        {if $DELTA.bc_subtotal_fat_mass < 0}
        <strong>Congratulations on decreasing your body fat!</strong> 
        {/if}
        {if $DELTA.bc_subtotal_lean_muscle > 0}
        <strong>Congratulations on improving your body composition!</strong> 
        {/if}
     Being 
    {if $BONESTUDY->bc_subtotal_fat_percent > $perncent_range }above{/if}
    {if $BONESTUDY->bc_subtotal_fat_percent < $perncent_range }within{/if}
     the healthy range of body fat 
    {if $BONESTUDY->bc_subtotal_fat_percent > $perncent_range }increases{/if}
    {if $BONESTUDY->bc_subtotal_fat_percent < $perncent_range }reduces{/if}
    a person's risk for medical illness such as diabetes, heart disease, and certain cancers. Weight reduction, 
    a "low glycemic" diet, and a regular exercise program will reduce the risk of these illnesses. Body composition 
    may be monitored in response to diet, exercise, and medical treatments. Repeat testing is recommended in 6-12 months 
    to monitor response to treatments.</p>
	<p></p>
    <p class="salutation">Sincerely,</p>
    <p class="signature">The ComiteMD Team</p>
</div>


{if !$render}
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
