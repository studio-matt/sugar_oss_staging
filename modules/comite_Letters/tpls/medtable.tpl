<style type="text/css">
    {$css}
</style>

<div id="medtable">
    <p class="company">
        <img src="{$base}/custom/include/images/logo_small.png" />
        55 East 86th Street, 1B<br />
        New York, NY 10028
    </p>

    <p class="date">{$date}</p>
    <p class="title">Medication Table</p>

    <p class="patient">
        {if $CONTACT->salutation}<span class="salutation">{$CONTACT->salutation} </span>{/if}
        <span class="name">{$CONTACT->last_name}</span><br />
    </p>

    <p class="description">Your Medications and Supplements:</p>
{php}
$count = 0;
$perpage = 15;
function echoHeader($type) {
    echo '<tr class="header ' . $type . '_header">
            <th>' . ucwords($type) . '</th>
            <th>Dosage</th>
            <th>Quantity</th>
            <th>Frequency</th>
            <th>AM</th>
            <th>Noon</th>
            <th>PM</th>
            <th>Bed</th>
            <th>Source</th>
            <th>Notes</th>
    </tr>';
}
function echoPage($type) {
    echo '</table>
    <table style="page-break-before:always">';
    echoHeader($type);
}
{/php}

    <table>
{php}
echoHeader('medication');
{/php}
{foreach from=$MEDSUPPINSTANCES key=MSI_IDX item=MEDSUPPINSTANCE}
    {assign var=BEANS value=$MEDSUPPINSTANCE->comite_medsuppinstance_comite_medsupp->beans}
    {assign var=MEDSUPP_ID value=$MEDSUPPINSTANCE->comite_med8f3bplement_ida}
    {assign var=MEDSUPP value=$BEANS[$MEDSUPP_ID]}
    {assign var=SOURCE value=$MEDSUPPINSTANCE->source}
    {if $MEDSUPP->type == "hormone"}
{php}
if ($count && $count % $perpage == 0) { echoPage('medication'); }
$count++;
{/php}
        <tr class="hormone">
            <td>
                {$MEDSUPP->name}
                {if $MEDSUPPINSTANCE->comite_new}<span class="red">(new)</span>{/if}
                {if $MEDSUPPINSTANCE->comite_change_name}<span class="red">(name change)</span>{/if}
                {if $MEDSUPPINSTANCE->comite_change_dosage}<span class="red">(dosage {$MEDSUPPINSTANCE->comite_change_dosage})</span>{/if}
                {if $MEDSUPPINSTANCE->comite_change_quantity}<span class="red">(quantity {$MEDSUPPINSTANCE->comite_change_quantity})</span>{/if}
                {if $MEDSUPPINSTANCE->comite_change_frequency}<span class="red">(frequency {$MEDSUPPINSTANCE->comite_change_frequency})</span>{/if}
            </td>
            <td>{$MEDSUPPINSTANCE->dosage|rtrim:'0'|rtrim:'.'} {$MEDSUPPINSTANCE->dosage_unit}</td>
            <td>{$MEDSUPPINSTANCE->quantity|rtrim:'0'|rtrim:'.'} {$MEDSUPPINSTANCE->quantity_unit}</td>
            <td>{if $MEDSUPPINSTANCE->frequency}{$MEDSUPPINSTANCE->frequency}{else}&nbsp;{/if}</td>
            <td>{if $MEDSUPPINSTANCE->time_of_day|strstr:"am" || $MEDSUPPINSTANCE->time_of_day|strstr:"early morning" || $MEDSUPPINSTANCE->time_of_day|strstr:"morning"}X{else}&nbsp;{/if}</td>
            <td>{if $MEDSUPPINSTANCE->time_of_day|strstr:"noon" || $MEDSUPPINSTANCE->time_of_day|strstr:"afternoon" || $MEDSUPPINSTANCE->time_of_day|strstr:"late-afternoon"}X{else}&nbsp;{/if}</td>
            <td>{if $MEDSUPPINSTANCE->time_of_day|strstr:"pm" || $MEDSUPPINSTANCE->time_of_day|strstr:"early evening" || $MEDSUPPINSTANCE->time_of_day|strstr:"evening"}X{else}&nbsp;{/if}</td>
            <td>{if $MEDSUPPINSTANCE->time_of_day|strstr:"bed_time"}X{else}&nbsp;{/if}</td>
            <td>{$app_list_strings.medication_suppliments_source_list[$SOURCE]}</td>
            <td>{if $MEDSUPPINSTANCE->notes_doctor}{$MEDSUPPINSTANCE->notes_doctor}{else}&nbsp;{/if}</td>
        </tr>
    {/if}
{/foreach}
{foreach from=$MEDSUPPINSTANCES key=MSI_IDX item=MEDSUPPINSTANCE}
    {assign var=BEANS value=$MEDSUPPINSTANCE->comite_medsuppinstance_comite_medsupp->beans}
    {assign var=MEDSUPP_ID value=$MEDSUPPINSTANCE->comite_med8f3bplement_ida}
    {assign var=MEDSUPP value=$BEANS[$MEDSUPP_ID]}
    {assign var=SOURCE value=$MEDSUPPINSTANCE->source}
    {if $MEDSUPP->type == "medication"}
{php}
if ($count && $count % $perpage == 0) { echoPage('medication'); }
$count++;
{/php}
        <tr class="medication">
            <td>
                {$MEDSUPP->name}
                {if $MEDSUPPINSTANCE->comite_new}<span class="red">(new)</span>{/if}
                {if $MEDSUPPINSTANCE->comite_change_name}<span class="red">(name change)</span>{/if}
                {if $MEDSUPPINSTANCE->comite_change_dosage}<span class="red">(dosage {$MEDSUPPINSTANCE->comite_change_dosage})</span>{/if}
                {if $MEDSUPPINSTANCE->comite_change_quantity}<span class="red">(quantity {$MEDSUPPINSTANCE->comite_change_quantity})</span>{/if}
                {if $MEDSUPPINSTANCE->comite_change_frequency}<span class="red">(frequency {$MEDSUPPINSTANCE->comite_change_frequency})</span>{/if}
            </td>
            <td>{$MEDSUPPINSTANCE->dosage|rtrim:'0'|rtrim:'.'} {$MEDSUPPINSTANCE->dosage_unit}</td>
            <td>{$MEDSUPPINSTANCE->quantity|rtrim:'0'|rtrim:'.'} {$MEDSUPPINSTANCE->quantity_unit}</td>
            <td>{if $MEDSUPPINSTANCE->frequency}{$MEDSUPPINSTANCE->frequency}{else}&nbsp;{/if}</td>
            <td>{if $MEDSUPPINSTANCE->time_of_day|strstr:"am" || $MEDSUPPINSTANCE->time_of_day|strstr:"early morning" || $MEDSUPPINSTANCE->time_of_day|strstr:"morning"}X{else}&nbsp;{/if}</td>
            <td>{if $MEDSUPPINSTANCE->time_of_day|strstr:"noon" || $MEDSUPPINSTANCE->time_of_day|strstr:"afternoon" || $MEDSUPPINSTANCE->time_of_day|strstr:"late-afternoon"}X{else}&nbsp;{/if}</td>
            <td>{if $MEDSUPPINSTANCE->time_of_day|strstr:"pm" || $MEDSUPPINSTANCE->time_of_day|strstr:"early evening" || $MEDSUPPINSTANCE->time_of_day|strstr:"evening"}X{else}&nbsp;{/if}</td>
            <td>{if $MEDSUPPINSTANCE->time_of_day|strstr:"bed_time"}X{else}&nbsp;{/if}</td>
            <td>{$app_list_strings.medication_suppliments_source_list[$SOURCE]}</td>
            <td>{if $MEDSUPPINSTANCE->notes_doctor}{$MEDSUPPINSTANCE->notes_doctor}{else}&nbsp;{/if}</td>
        </tr>
    {/if}
{/foreach}
{php}
echoHeader('supplement');
$first = true;
{/php}
{foreach from=$MEDSUPPINSTANCES key=MSI_IDX item=MEDSUPPINSTANCE}
    {assign var=BEANS value=$MEDSUPPINSTANCE->comite_medsuppinstance_comite_medsupp->beans}
    {assign var=MEDSUPP_ID value=$MEDSUPPINSTANCE->comite_med8f3bplement_ida}
    {assign var=MEDSUPP value=$BEANS[$MEDSUPP_ID]}
    {assign var=SOURCE value=$MEDSUPPINSTANCE->source}
    {if $MEDSUPP->type == "supplement"}
{php}
if (!$first && $count && $count % $perpage == 0) { echoPage('supplement'); }
$count++;
$first = false;
{/php}
        <tr class="supplement">
            <td>
                {$MEDSUPP->name}
                {if $MEDSUPPINSTANCE->comite_new}<span class="red">(new)</span>{/if}
                {if $MEDSUPPINSTANCE->comite_change_name}<span class="red">(name change)</span>{/if}
                {if $MEDSUPPINSTANCE->comite_change_dosage}<span class="red">(dosage {$MEDSUPPINSTANCE->comite_change_dosage})</span>{/if}
                {if $MEDSUPPINSTANCE->comite_change_quantity}<span class="red">(quantity {$MEDSUPPINSTANCE->comite_change_quantity})</span>{/if}
                {if $MEDSUPPINSTANCE->comite_change_frequency}<span class="red">(frequency {$MEDSUPPINSTANCE->comite_change_frequency})</span>{/if}
            </td>
            <td>{$MEDSUPPINSTANCE->dosage|rtrim:'0'|rtrim:'.'} {$MEDSUPPINSTANCE->dosage_unit}</td>
            <td>{$MEDSUPPINSTANCE->quantity|rtrim:'0'|rtrim:'.'} {$MEDSUPPINSTANCE->quantity_unit}</td>
            <td>{if $MEDSUPPINSTANCE->frequency}{$MEDSUPPINSTANCE->frequency}{else}&nbsp;{/if}</td>
            <td>{if $MEDSUPPINSTANCE->time_of_day|strstr:"am" || $MEDSUPPINSTANCE->time_of_day|strstr:"early morning" || $MEDSUPPINSTANCE->time_of_day|strstr:"morning"}X{else}&nbsp;{/if}</td>
            <td>{if $MEDSUPPINSTANCE->time_of_day|strstr:"noon" || $MEDSUPPINSTANCE->time_of_day|strstr:"afternoon" || $MEDSUPPINSTANCE->time_of_day|strstr:"late-afternoon"}X{else}&nbsp;{/if}</td>
            <td>{if $MEDSUPPINSTANCE->time_of_day|strstr:"pm" || $MEDSUPPINSTANCE->time_of_day|strstr:"early evening" || $MEDSUPPINSTANCE->time_of_day|strstr:"evening"}X{else}&nbsp;{/if}</td>
            <td>{if $MEDSUPPINSTANCE->time_of_day|strstr:"bed_time"}X{else}&nbsp;{/if}</td>
            <td>{$app_list_strings.medication_suppliments_source_list[$SOURCE]}</td>
            <td>{if $MEDSUPPINSTANCE->notes_doctor}{$MEDSUPPINSTANCE->notes_doctor}{else}&nbsp;{/if}</td>
        </tr>
    {/if}
{/foreach}
    </table>