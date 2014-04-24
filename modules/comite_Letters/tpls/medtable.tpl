<style type="text/css">
    {$css}
</style>

<div class="pdf" id="medtable">
    <p class="company">
        <img src="{$base}/custom/include/images/logo_print.png" />
        55 East 86th Street, 1B, New York, NY 10028 ~ 202.288.8123 & 212.288.8126 
    </p>

    <p class="title">Medication Table</p>

    <p class="date">{$date}</p>

    <p class="patient">
        {if $CONTACT->salutation}<span class="salutation">{$CONTACT->salutation} </span>{/if}
        <span class="name">{$CONTACT->last_name}</span><br />
    </p>

    <p class="description">Your Medications and Supplements:</p>

    <table>
        <tr class="header medication_header">
            <th>Medication</th>
            <th>Dosage</th>
            <th>Quantity</th>
            <th>Frequency</th>
            <th>AM</th>
            <th>Noon</th>
            <th>PM</th>
            <th>Bed</th>
            <th>Source</th>
            <th>Notes</th>
        </tr>
{foreach from=$MEDSUPPINSTANCES key=MSI_IDX item=MEDSUPPINSTANCE}
    {assign var=BEANS value=$MEDSUPPINSTANCE->comite_medsuppinstance_comite_medsupp->beans}
    {assign var=MEDSUPP_ID value=$MEDSUPPINSTANCE->comite_med8f3bplement_ida}
    {assign var=MEDSUPP value=$BEANS[$MEDSUPP_ID]}
    {assign var=SOURCE value=$MEDSUPPINSTANCE->source}
    {assign var=frequency_index value=$MEDSUPPINSTANCE->frequency}
    {assign var=quantity_index value=$MEDSUPPINSTANCE->quantity_unit}
    {assign var=dosage_index value=$MEDSUPPINSTANCE->dosage_unit}
    {if $MEDSUPP->type == "medication"}
        <tr class="medication">
            <td>
                {$MEDSUPP->name}
                {if $MEDSUPPINSTANCE->comite_new}<span class="red">(new)</span>{/if}
                {if $MEDSUPPINSTANCE->comite_change_name}<span class="red">(name change)</span>{/if}
                {if $MEDSUPPINSTANCE->comite_change_dosage}<span class="red">(dosage {$MEDSUPPINSTANCE->comite_change_dosage})</span>{/if}
                {if $MEDSUPPINSTANCE->comite_change_quantity}<span class="red">(quantity {$MEDSUPPINSTANCE->comite_change_quantity})</span>{/if}
                {if $MEDSUPPINSTANCE->comite_change_frequency}<span class="red">(frequency {$MEDSUPPINSTANCE->comite_change_frequency})</span>{/if}
            </td>
            <td>{$MEDSUPPINSTANCE->dosage|rtrim:'0'|rtrim:'.'} {$app_list_strings.dosage_unit_list[$dosage_index]}</td>
            <td>{$MEDSUPPINSTANCE->quantity|rtrim:'0'|rtrim:'.'} {$app_list_strings.quantity_unit_list[$quantity_index]}{if $MEDSUPPINSTANCE->quantity > 1}s{/if}</td>
            <td>{if $MEDSUPPINSTANCE->frequency}{$app_list_strings.frequency_list[$frequency_index]}{else}&nbsp;{/if}</td>
            <td>{if $MEDSUPPINSTANCE->time_of_day|strstr:"am" || $MEDSUPPINSTANCE->time_of_day|strstr:"early morning" || $MEDSUPPINSTANCE->time_of_day|strstr:"morning"}X{else}&nbsp;{/if}</td>
            <td>{if $MEDSUPPINSTANCE->time_of_day|strstr:"noon" || $MEDSUPPINSTANCE->time_of_day|strstr:"afternoon" || $MEDSUPPINSTANCE->time_of_day|strstr:"late-afternoon"}X{else}&nbsp;{/if}</td>
            <td>{if $MEDSUPPINSTANCE->time_of_day|strstr:"pm" || $MEDSUPPINSTANCE->time_of_day|strstr:"early evening" || $MEDSUPPINSTANCE->time_of_day|strstr:"evening"}X{else}&nbsp;{/if}</td>
            <td>{if $MEDSUPPINSTANCE->time_of_day|strstr:"bed_time"}X{else}&nbsp;{/if}</td>
            <td>{$app_list_strings.medication_suppliments_source_list[$SOURCE]}</td>
            <td>{if $MEDSUPPINSTANCE->notes_doctor}{$MEDSUPPINSTANCE->notes_doctor}{else}&nbsp;{/if}</td>
        </tr>
    {/if}
{/foreach}
{foreach from=$DISCONTINUE_MEDICATIONS key=MSI_IDX item=MEDSUPPINSTANCE}
        <tr class="medication">
            <td>
                {$MEDSUPPINSTANCE.name}
                <span class="red">(discontinue)</span>
            </td>
            <td colspan="9">{if $MEDSUPPINSTANCE.notes_doctor}{$MEDSUPPINSTANCE.notes_doctor}{else}&nbsp;{/if}</td>
        </tr>
{/foreach}
        <tr class="header supplement_header">
            <th>Supplement</th>
            <th>Dosage</th>
            <th>Quantity</th>
            <th>Frequency</th>
            <th>AM</th>
            <th>Noon</th>
            <th>PM</th>
            <th>Bed</th>
            <th>Source</th>
            <th>Notes</th>
        </tr>
{foreach from=$MEDSUPPINSTANCES key=MSI_IDX item=MEDSUPPINSTANCE}
    {assign var=BEANS value=$MEDSUPPINSTANCE->comite_medsuppinstance_comite_medsupp->beans}
    {assign var=MEDSUPP_ID value=$MEDSUPPINSTANCE->comite_med8f3bplement_ida}
    {assign var=MEDSUPP value=$BEANS[$MEDSUPP_ID]}
    {assign var=SOURCE value=$MEDSUPPINSTANCE->source}
    {assign var=frequency_index value=$MEDSUPPINSTANCE->frequency}
    {assign var=quantity_index value=$MEDSUPPINSTANCE->quantity_unit}
    {assign var=dosage_index value=$MEDSUPPINSTANCE->dosage_unit}
    {if $MEDSUPP->type == "supplement"}
        <tr class="supplement">
            <td>
                {$MEDSUPP->name}
                {if $MEDSUPPINSTANCE->comite_new}<span class="red">(new)</span>{/if}
                {if $MEDSUPPINSTANCE->comite_change_name}<span class="red">(name change)</span>{/if}
                {if $MEDSUPPINSTANCE->comite_change_dosage}<span class="red">(dosage {$MEDSUPPINSTANCE->comite_change_dosage})</span>{/if}
                {if $MEDSUPPINSTANCE->comite_change_quantity}<span class="red">(quantity {$MEDSUPPINSTANCE->comite_change_quantity})</span>{/if}
                {if $MEDSUPPINSTANCE->comite_change_frequency}<span class="red">(frequency {$MEDSUPPINSTANCE->comite_change_frequency})</span>{/if}
            </td>
            <td>{$MEDSUPPINSTANCE->dosage|rtrim:'0'|rtrim:'.'} {$app_list_strings.dosage_unit_list[$dosage_index]}</td>
            <td>{$MEDSUPPINSTANCE->quantity|rtrim:'0'|rtrim:'.'} {$app_list_strings.quantity_unit_list[$quantity_index]}{if $MEDSUPPINSTANCE->quantity > 1}s{/if}</td>
            <td>{if $MEDSUPPINSTANCE->frequency}{$app_list_strings.frequency_list[$frequency_index]}{else}&nbsp;{/if}</td>
            <td>{if $MEDSUPPINSTANCE->time_of_day|strstr:"am" || $MEDSUPPINSTANCE->time_of_day|strstr:"early morning" || $MEDSUPPINSTANCE->time_of_day|strstr:"morning"}X{else}&nbsp;{/if}</td>
            <td>{if $MEDSUPPINSTANCE->time_of_day|strstr:"noon" || $MEDSUPPINSTANCE->time_of_day|strstr:"afternoon" || $MEDSUPPINSTANCE->time_of_day|strstr:"late-afternoon"}X{else}&nbsp;{/if}</td>
            <td>{if $MEDSUPPINSTANCE->time_of_day|strstr:"pm" || $MEDSUPPINSTANCE->time_of_day|strstr:"early evening" || $MEDSUPPINSTANCE->time_of_day|strstr:"evening"}X{else}&nbsp;{/if}</td>
            <td>{if $MEDSUPPINSTANCE->time_of_day|strstr:"bed_time"}X{else}&nbsp;{/if}</td>
            <td>{$app_list_strings.medication_suppliments_source_list[$SOURCE]}</td>
            <td>{if $MEDSUPPINSTANCE->notes_doctor}{$MEDSUPPINSTANCE->notes_doctor}{else}&nbsp;{/if}</td>
        </tr>
    {/if}
{/foreach}
{foreach from=$DISCONTINUE_SUPPLEMENTS key=MSI_IDX item=MEDSUPPINSTANCE}
        <tr class="supplement">
            <td>
                {$MEDSUPPINSTANCE.name}
                <span class="red">(discontinue)</span>
            </td>
            <td colspan="9">{if $MEDSUPPINSTANCE.notes_doctor}{$MEDSUPPINSTANCE.notes_doctor}{else}&nbsp;{/if}</td>
        </tr>
{/foreach}
    </table>