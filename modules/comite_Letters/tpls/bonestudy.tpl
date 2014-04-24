{assign var=gramstolbs value=453.592}

<style type="text/css">
    {$css}
</style>

<div class="pdf" id="bonestudy">
    <p class="company">
        <img src="{$base}/custom/include/images/logo_print.png" />
        55 East 86th Street, 1B, New York, NY 10028 ~ 202.288.8123 & 212.288.8126 
    </p>

    <p class="patient">
        {if $CONTACT->salutation}<span class="salutation">{$CONTACT->salutation} </span>{/if}
        <span class="name">{$CONTACT->last_name}</span><br />
        {if $CONTACT->primary_address_street}<span class="primary_address_street">{$CONTACT->primary_address_street}</span><br />{/if}
        {if $CONTACT->primary_address_street2}<span class="primary_address_street2">{$CONTACT->primary_address_street2}</span><br />{/if}
        {if $CONTACT->primary_address_street3}<span class="primary_address_street3">{$CONTACT->primary_address_street3}</span><br />{/if}
        {if $CONTACT->primary_address_city}<span class="primary_address_city">{$CONTACT->primary_address_city}</span>, <span class="primary_address_state">{$CONTACT->primary_address_state}</span> <span class="primary_address_postalcode">{$CONTACT->primary_address_postalcode}</span><br />{/if}
    </p>

    <p class="date">{$date}</p>

    <p class="salutation">On {$testdate} you underwent the following tests:</p>
    <ul class="tests">
        <li><span class="checkbox">{if $BONESTUDY->bds_lumbar_spine}X{/if}</span> Dexa Comprehensive Bone Densiotometry (Spine, Hips and Forearms)</li>
        <li><span class="checkbox">{if $BONESTUDY->bc_subtotal_fat_percent}X{/if}</span> IVA (Vertebral Assessment)</li>
        <li><span class="checkbox">{if $BONESTUDY->bc_subtotal_fat_percent}X{/if}</span> Whole Body Composition</li>
    </ul>

    <p>The reports form these tests and data are attached.</p>

    <p class="bottom-zero">Your <strong>comprehensive bone density testing</strong> showed:</p>
    <table class="testing">
        <tr>
            <td class="blank"></td>
            <td class="head">Lumbar Spine</td>
            <td class="head" colspan="2">Femoral Neck<br /><span class="context">(narrowest region of hip joint)</span></td>
            <td class="head" colspan="2">Total Hip</td>
            <td class="head" colspan="2">Forearm</td>
        </tr>
        <tr>
            <td class="blank"></td>
            <td class="side"></td>
            <td class="side">R</td>
            <td class="side">L</td>
            <td class="side">R</td>
            <td class="side">L</td>
            <td class="side">R</td>
            <td class="side">L</td>
        </tr>
        <tr>
            <td class="level">Normal</td>
            <td class="value">{if $BONESTUDY->bds_lumbar_spine == "normal"}X{/if}</td>
            <td class="value">{if $BONESTUDY->bds_femoral_neck_right == "normal"}X{/if}</td>
            <td class="value">{if $BONESTUDY->bds_femoral_neck_left == "normal"}X{/if}</td>
            <td class="value">{if $BONESTUDY->bds_total_hip_right == "normal"}X{/if}</td>
            <td class="value">{if $BONESTUDY->bds_total_hip_left == "normal"}X{/if}</td>
            <td class="value">{if $BONESTUDY->bds_forearm_right == "normal"}X{/if}</td>
            <td class="value">{if $BONESTUDY->bds_forearm_left == "normal"}X{/if}</td>
        </tr>
        <tr>
            <td class="level">Osteopenia</td>
            <td class="value">{if $BONESTUDY->bds_lumbar_spine == "osteopenic" || $BONESTUDY->bds_lumbar_spine == "borderline_osteopenic"}X{/if}{if $BONESTUDY->bds_lumbar_spine == "borderline_osteopenic"} <span class="borderline">B</span>{/if}</td>
            <td class="value">{if $BONESTUDY->bds_femoral_neck_right == "osteopenic" || $BONESTUDY->bds_femoral_neck_right == "borderline_osteopenic"}X{/if}{if $BONESTUDY->bds_femoral_neck_right == "borderline_osteopenic"} <span class="borderline">B</span>{/if}</td>
            <td class="value">{if $BONESTUDY->bds_femoral_neck_left == "osteopenic" || $BONESTUDY->bds_femoral_neck_left == "borderline_osteopenic"}X{/if}{if $BONESTUDY->bds_femoral_neck_left == "borderline_osteopenic"} <span class="borderline">B</span>{/if}</td>
            <td class="value">{if $BONESTUDY->bds_total_hip_right == "osteopenic" || $BONESTUDY->bds_total_hip_right == "borderline_osteopenic"}X{/if}{if $BONESTUDY->bds_total_hip_right == "borderline_osteopenic"} <span class="borderline">B</span>{/if}</td>
            <td class="value">{if $BONESTUDY->bds_total_hip_left == "osteopenic" || $BONESTUDY->bds_total_hip_left == "borderline_osteopenic"}X{/if}{if $BONESTUDY->bds_total_hip_left == "borderline_osteopenic"} <span class="borderline">B</span>{/if}</td>
            <td class="value">{if $BONESTUDY->bds_forearm_right == "osteopenic" || $BONESTUDY->bds_forearm_right == "borderline_osteopenic"}X{/if}{if $BONESTUDY->bds_forearm_right == "borderline_osteopenic"} <span class="borderline">B</span>{/if}</td>
            <td class="value">{if $BONESTUDY->bds_forearm_left == "osteopenic" || $BONESTUDY->bds_forearm_left == "borderline_osteopenic"}X{/if}{if $BONESTUDY->bds_forearm_left == "borderline_osteopenic"} <span class="borderline">B</span>{/if}</td>
        </tr>
        <tr>
            <td class="level">Osteoporosis</td>
            <td class="value">{if $BONESTUDY->bds_lumbar_spine == "osteoporotic" || $BONESTUDY->bds_lumbar_spine == "borderline_osteoporotic"}X{/if}{if $BONESTUDY->bds_lumbar_spine == "borderline_osteoporotic"} <span class="borderline">B</span>{/if}</td>
            <td class="value">{if $BONESTUDY->bds_femoral_neck_right == "osteoporotic" || $BONESTUDY->bds_femoral_neck_right == "borderline_osteoporotic"}X{/if}{if $BONESTUDY->bds_femoral_neck_right == "borderline_osteoporotic"} <span class="borderline">B</span>{/if}</td>
            <td class="value">{if $BONESTUDY->bds_femoral_neck_left == "osteoporotic" || $BONESTUDY->bds_femoral_neck_left == "borderline_osteoporotic"}X{/if}{if $BONESTUDY->bds_femoral_neck_left == "borderline_osteoporotic"} <span class="borderline">B</span>{/if}</td>
            <td class="value">{if $BONESTUDY->bds_total_hip_right == "osteoporotic" || $BONESTUDY->bds_total_hip_right == "borderline_osteoporotic"}X{/if}{if $BONESTUDY->bds_total_hip_right == "borderline_osteoporotic"} <span class="borderline">B</span>{/if}</td>
            <td class="value">{if $BONESTUDY->bds_total_hip_left == "osteoporotic" || $BONESTUDY->bds_total_hip_left == "borderline_osteoporotic"}X{/if}{if $BONESTUDY->bds_total_hip_left == "borderline_osteoporotic"} <span class="borderline">B</span>{/if}</td>
            <td class="value">{if $BONESTUDY->bds_forearm_right == "osteoporotic" || $BONESTUDY->bds_forearm_right == "borderline_osteoporotic"}X{/if}{if $BONESTUDY->bds_forearm_right == "borderline_osteoporotic"} <span class="borderline">B</span>{/if}</td>
            <td class="value">{if $BONESTUDY->bds_forearm_left == "osteoporotic" || $BONESTUDY->bds_forearm_left == "borderline_osteoporotic"}X{/if}{if $BONESTUDY->bds_forearm_left == "borderline_osteoporotic"} <span class="borderline">B</span>{/if}</td>
        </tr>
    </table>

    <p>
    {if $BONESTUDY->bds_lumbar_spine == "normal"}The evaluation of the lumbar spine showed normal bone density in vertebral levels L1-L4. {/if}
    {if $BONESTUDY->bds_lumbar_spine == "osteopenic"}The evaluation of the lumbar spine showed mildly decreased bone density (osteopenia) in vertebral levels L1-L4. {/if}
    {if $BONESTUDY->bds_lumbar_spine == "borderline_osteopenic"}Your lumbar spine shows mildly decreased bone density and is borderline ostepeopenic. {/if}
    {if $BONESTUDY->bds_lumbar_spine == "osteoporotic"}The evaluation of the lumbar spine showed significantly decreased bone density (osteoporosis) in vertebral levels L1-L4. {/if}
    {if $BONESTUDY->bds_lumbar_spine == "borderline_osteoporotic"}Your lumbar spine shows moderately decreased bone density and is borderline osteoporotic. {/if}
    The bone density scores may be artificially higher in the lumbar spine due to arthritis and other spinal problems. 
    {if $BONESTUDY->bds_lumbar_spine == "osteopenic"}Your lumbar spine is {$BONESTUDY->bds_lumbar_spine|replace:'_':' '}. {/if}
    {if $BONESTUDY->bds_lumbar_spine == "borderline_osteopenic"}Your lumbar spine is {$BONESTUDY->bds_lumbar_spine|replace:'_':' '}. {/if}
    {if $BONESTUDY->bds_lumbar_spine == "osteoporotic"}Your lumbar spine is {$BONESTUDY->bds_lumbar_spine|replace:'_':' '}. {/if}
    {if $BONESTUDY->bds_lumbar_spine == "borderline_osteoporotic"}Your lumbar spine is {$BONESTUDY->bds_lumbar_spine|replace:'_':' '}. {/if}
    {if $BONESTUDY->bds_femoral_neck_right == "osteopenic"}Your right femoral neck is {$BONESTUDY->bds_femoral_neck_right|replace:'_':' '}. {/if}
    {if $BONESTUDY->bds_femoral_neck_right == "borderline_osteopenic"}Your right femoral neck is {$BONESTUDY->bds_femoral_neck_right|replace:'_':' '}. {/if}
    {if $BONESTUDY->bds_femoral_neck_right == "osteoporotic"}Your right femoral neck is {$BONESTUDY->bds_femoral_neck_right|replace:'_':' '}. {/if}
    {if $BONESTUDY->bds_femoral_neck_right == "borderline_osteoporotic"}Your right femoral neck is {$BONESTUDY->bds_femoral_neck_right|replace:'_':' '}. {/if}
    {if $BONESTUDY->bds_femoral_neck_left == "osteopenic"}Your left femoral neck is {$BONESTUDY->bds_femoral_neck_right|replace:'_':' '}. {/if}
    {if $BONESTUDY->bds_femoral_neck_left == "borderline_osteopenic"}Your left femoral neck is {$BONESTUDY->bds_femoral_neck_right|replace:'_':' '}. {/if}
    {if $BONESTUDY->bds_femoral_neck_left == "osteoporotic"}Your left femoral neck is {$BONESTUDY->bds_femoral_neck_right|replace:'_':' '}. {/if}
    {if $BONESTUDY->bds_femoral_neck_left == "borderline_osteoporotic"}Your left femoral neck is {$BONESTUDY->bds_femoral_neck_right|replace:'_':' '}. {/if}
    {if $BONESTUDY->bds_total_hip_right == "osteopenic"}Your right total hip is {$BONESTUDY->bds_total_hip_right|replace:'_':' '}. {/if}
    {if $BONESTUDY->bds_total_hip_right == "borderline_osteopenic"}Your right total hip is {$BONESTUDY->bds_total_hip_right|replace:'_':' '}. {/if}
    {if $BONESTUDY->bds_total_hip_right == "osteoporotic"}Your right total hip is {$BONESTUDY->bds_total_hip_right|replace:'_':' '}. {/if}
    {if $BONESTUDY->bds_total_hip_right == "borderline_osteoporotic"}Your right total hip is {$BONESTUDY->bds_total_hip_right|replace:'_':' '}. {/if}
    {if $BONESTUDY->bds_total_hip_left == "osteopenic"}Your left total hip is {$BONESTUDY->bds_total_hip_right|replace:'_':' '}. {/if}
    {if $BONESTUDY->bds_total_hip_left == "borderline_osteopenic"}Your left total hip is {$BONESTUDY->bds_total_hip_right|replace:'_':' '}. {/if}
    {if $BONESTUDY->bds_total_hip_left == "osteoporotic"}Your left total hip is {$BONESTUDY->bds_total_hip_right|replace:'_':' '}. {/if}
    {if $BONESTUDY->bds_total_hip_left == "borderline_osteoporotic"}Your left total hip is {$BONESTUDY->bds_total_hip_right|replace:'_':' '}. {/if}
    {if $BONESTUDY->bds_forearm_right == "osteopenic"}A region of your right forearm is {$BONESTUDY->bds_forearm_right|replace:'_':' '}. {/if}
    {if $BONESTUDY->bds_forearm_right == "borderline_osteopenic"}A region of your right forearm is {$BONESTUDY->bds_forearm_right|replace:'_':' '}. {/if}
    {if $BONESTUDY->bds_forearm_right == "osteoporotic"}A region of your right forearm is {$BONESTUDY->bds_forearm_right|replace:'_':' '}. {/if}
    {if $BONESTUDY->bds_forearm_right == "borderline_osteoporotic"}A region of your right forearm is {$BONESTUDY->bds_forearm_right|replace:'_':' '}. {/if}
    {if $BONESTUDY->bds_forearm_left == "osteopenic"}A region of your left forearm is {$BONESTUDY->bds_forearm_right|replace:'_':' '}. {/if}
    {if $BONESTUDY->bds_forearm_left == "borderline_osteopenic"}A region of your left forearm is {$BONESTUDY->bds_forearm_right|replace:'_':' '}. {/if}
    {if $BONESTUDY->bds_forearm_left == "osteoporotic"}A region of your left forearm is {$BONESTUDY->bds_forearm_right|replace:'_':' '}. {/if}
    {if $BONESTUDY->bds_forearm_left == "borderline_osteoporotic"}A region of your left forearm is {$BONESTUDY->bds_forearm_right|replace:'_':' '}. {/if}
    Bone density may be improved with increased vitamin D and
    hormone levels, and weight bearing exercise. We have made several recommendations in your
    program to prevent osteoporosis and optimize bone health.</p>

    <p>The VDA (vertebral) assessment revealed 
    {if $BONESTUDY->vda_normal == 1}normal vertebrae.{/if}
    {if $BONESTUDY->vda_mild_wedge_deformity == 1}mild wedge deformity at {$BONESTUDY->vda_mild_wedge_deformity_note}. This type of deformity may reflect a previous injury and may or may not have ever been symptomatic.{/if}
    {if $BONESTUDY->vda_moderate_wedge_deformity == 1}moderate wedge deformity at {$BONESTUDY->vda_moderate_wedge_deformity_note}. This type of deformity may reflect a previous injury and may or may not have ever been symptomatic.{/if}
    Spinal X-rays may be considered to better evaluate the entire spine and exclude other abnormalities.</p>


    <p>Your whole body composition testing was performed to determine overall percentages of
    body fat with breakdown by region. The healthy body fat range for 
    {if $age >= 50 and $PERSONALHEALTHHISTORY->gender == "male"}men over 50 years of age is between 20 and 25 percent{/if}
    {if $age < 50 and $PERSONALHEALTHHISTORY->gender == "male"}men under 50 years of age is between 14 and 20 percent{/if}
    {if $age >= 50 and $PERSONALHEALTHHISTORY->gender == "female"}women over 50 years of age is between 26 and 31 percent{/if}
    {if $age < 50 and $PERSONALHEALTHHISTORY->gender == "female"}women under 50 years of age is between 18 and 27 percent{/if}
    . Please see attached table for normal ranges corresponding to specific age ranges.</p>

    <p><strong>Your overall body fat is {$BONESTUDY->bc_subtotal_fat_percent}%.</strong></p>

    <p>Regional breakdown shows: {$BONESTUDY->bc_left_arm_fat_percent} in the left arm, {$BONESTUDY->bc_right_arm_fat_percent} in the right
    arm, {$BONESTUDY->bc_trunk_fat_percent} in the trunk, {$BONESTUDY->bc_left_leg_fat_percent} in the left leg, and {$BONESTUDY->bc_right_leg_fat_percent} in the
    right leg.</p>

{if $previoustestdate}
    <p>A comparison to your previous {$previoustestdate} diagnostic is as follows:</p>
    <table>
        <tr>
            <th></th>
            <th>{$previoustestdate}</th>
            <th>{$testdate}</th>
            <th></th>
        </tr>

        <tr>
            <th>Region</th>
            <th>Lean Muscle<br />(grams)</th>
            <th>Lean Muscle<br />(grams)</th>
            <th>Change Lean<br />Muscle (lbs)</th>
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
            <td colspan="4">&nbsp;</td>
        </tr>

        <tr>
            <th>Region</th>
            <th>Fat<br />(grams)</th>
            <th>Fat<br />(grams)</th>
            <th>Change Fat<br />(lbs)</th>
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
            <td colspan="4">&nbsp;</td>
        </tr>

        <tr>
            <th>Region</th>
            <th>% Fat</th>
            <th>% Fat</th>
            <th>% Fat Change</th>
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
            <td>Total</td>
            <td>{$BONESTUDY->bc_subtotal_fat_percent}</td>
            <td>{$PREVIOUSBONESTUDY->bc_subtotal_fat_percent}</td>
            <td>{$DELTA.bc_subtotal_fat_percent}</td>
        </tr>
    </table>
{/if}

    <p>{if $previoustestdate}
        {if $DELTA.bc_subtotal_fat_mass < 0}
        Congratulations on decreasing your body fat! 
        {/if}
        {if $DELTA.bc_subtotal_lean_muscle > 0}
        Congratulations on improving your body composition! 
        {/if}
    {/if}
    Being 
    {if $age >= 50 and $PERSONALHEALTHHISTORY->gender == "male" and $BONESTUDY->bc_subtotal_fat_percent <= 25}within{/if}
    {if $age >= 50 and $PERSONALHEALTHHISTORY->gender == "male" and $BONESTUDY->bc_subtotal_fat_percent > 25}above{/if}
    {if $age < 50 and $PERSONALHEALTHHISTORY->gender == "male" and $BONESTUDY->bc_subtotal_fat_percent <= 20}within{/if}
    {if $age < 50 and $PERSONALHEALTHHISTORY->gender == "male" and $BONESTUDY->bc_subtotal_fat_percent > 20}above{/if}
    {if $age >= 50 and $PERSONALHEALTHHISTORY->gender == "female" and $BONESTUDY->bc_subtotal_fat_percent <= 31}within{/if}
    {if $age >= 50 and $PERSONALHEALTHHISTORY->gender == "female" and $BONESTUDY->bc_subtotal_fat_percent > 31}above{/if}
    {if $age < 50 and $PERSONALHEALTHHISTORY->gender == "female" and $BONESTUDY->bc_subtotal_fat_percent <= 27}within{/if}
    {if $age < 50 and $PERSONALHEALTHHISTORY->gender == "female" and $BONESTUDY->bc_subtotal_fat_percent > 27}above{/if}
     the healthy range of body fat 
    {if $age >= 50 and $PERSONALHEALTHHISTORY->gender == "male" and $BONESTUDY->bc_subtotal_fat_percent <= 25}reduces{/if}
    {if $age >= 50 and $PERSONALHEALTHHISTORY->gender == "male" and $BONESTUDY->bc_subtotal_fat_percent > 25}increases{/if}
    {if $age < 50 and $PERSONALHEALTHHISTORY->gender == "male" and $BONESTUDY->bc_subtotal_fat_percent <= 20}reduces{/if}
    {if $age < 50 and $PERSONALHEALTHHISTORY->gender == "male" and $BONESTUDY->bc_subtotal_fat_percent > 20}increases{/if}
    {if $age >= 50 and $PERSONALHEALTHHISTORY->gender == "female" and $BONESTUDY->bc_subtotal_fat_percent <= 31}reduces{/if}
    {if $age >= 50 and $PERSONALHEALTHHISTORY->gender == "female" and $BONESTUDY->bc_subtotal_fat_percent > 31}increases{/if}
    {if $age < 50 and $PERSONALHEALTHHISTORY->gender == "female" and $BONESTUDY->bc_subtotal_fat_percent <= 27}reduces{/if}
    {if $age < 50 and $PERSONALHEALTHHISTORY->gender == "female" and $BONESTUDY->bc_subtotal_fat_percent > 27}increases{/if}
     a person's risk for medical illness such as diabetes, heart disease, and certain cancers. Weight reduction, 
    a "low glycemic" diet, and a regular exercise program will reduce the risk of these illnesses. Body composition 
    may be monitored in response to diet, exercise, and medical treatments. Repeat testing is recommended in 6-12 months 
    to monitor response to treatments.</p>

    <p class="salutation">Sincerely,</p>
    <p class="signature">The ComiteMD Team</p>
</div>
