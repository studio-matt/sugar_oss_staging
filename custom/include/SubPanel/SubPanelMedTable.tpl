
<table cellpadding='0' cellspacing='0' width='100%' border='0' class='list view'>
    <head>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Dosage</th>
            <th>Quantity</th>
            <th>Frequency</th>
            <th>Time of Day</th>
            <td class='td_alt' nowrap="nowrap" width='1%'>&nbsp;</td>
            <td class='td_alt' nowrap="nowrap" width='1%'>&nbsp;</td>
        </tr>
    </head>
    <tbody>
        {foreach from=$meds key=index item=med}
		{if $smarty.foreach.rowIteration.iteration is odd}
			{assign var='_rowColor' value='oddListRow'}
		{else}
			{assign var='_rowColor' value='evenListRow'}
		{/if}
        <tr height='20' class='{$_rowColor}S1 current {if $med.previous->different}modified{/if} {if $med.previous->newer}new{/if}'>
            <td>{$med.current->name}</td>
            {assign var='type_index' value=$med.current->type}
            <td>{$app_list_strings.medication_supplement_type_list.$type_index}</td>
            {assign var='dosage_index' value=$med.current->dosage_unit}
            <td>{$med.current->dosage} {if $med.current->dosage != ''} {$app_list_strings.dosage_unit_list.$dosage_index} {/if}</td>
            {assign var='quantity_index' value=$med.current->quantity_unit}
            <td>{$med.current->quantity|string_format:"%.3f"} {$app_list_strings.quantity_unit_list.$quantity_index}</td>
            {assign var='frequency_index' value=$med.current->frequency}
            <td>{$app_list_strings.frequency_list.$frequency_index}</td>
            {assign var='time_of_day_index' value=$med.current->time_of_day}
            <td>{$app_list_strings.time_of_day_list.$time_of_day_index}{$time_of_day_index}</td>
            <td scope="row" valign="top">
                <span sugar="slot188b">
                    {$med.current->editButton}
                    &nbsp;</span>
            </td>
            <td scope="row" valign="top">
                <span sugar="slot188b">
                    {$med.current->deleteButton}
                    &nbsp;</span>
            </td>
        </tr>
        {foreachelse}
        <tr height='20' class='{$rowColor[0]}S1'>
            <td colspan="6">
                <em>No Meds or Supplements</em>
            </td>
        </tr>
        {/foreach}
        {foreach from=$meds key=index item=med}
		{if $smarty.foreach.rowIteration.iteration is odd}
			{assign var='_rowColor' value='oddListRow'}
		{else}
			{assign var='_rowColor' value='evenListRow'}
		{/if}
        {if $med.previous->different}
        <tr height='20' class='{$_rowColor}S1 previous'>
            <td>{$med.previous->name}</td>
            {assign var='type_index' value=$med.previous->type}
            <td>{$app_list_strings.medication_supplement_type_list.$type_index}</td>
            {assign var='dosage_index' value=$med.previous->dosage_unit}
            <td>{$med.previous->dosage|string_format:"%.3f"} {$app_list_strings.dosage_unit_list.$dosage_index}</td>
            {assign var='quantity_index' value=$med.previous->quantity_unit}
            <td>{$med.previous->quantity|string_format:"%.3f"} {$app_list_strings.quantity_unit_list.$quantity_index}</td>
            {assign var='frequency_index' value=$med.previous->frequency}
            <td>{$app_list_strings.frequency_list.$frequency_index}</td>
            {assign var='time_of_day_index' value=$med.previous->time_of_day}
            <td>{$app_list_strings.time_of_day_list.$time_of_day_index}{$time_of_day_index}</td>
            <td scope="row" valign="top">
            </td>
            <td scope="row" valign="top">
            </td>
        </tr>
        {/if}
        {/foreach}
        {foreach from=$deleted key=index item=med}
            {if $smarty.foreach.rowIteration.iteration is odd}
                    {assign var='_rowColor' value='oddListRow'}
            {else}
                    {assign var='_rowColor' value='evenListRow'}
            {/if}
        <tr height='20' class='{$_rowColor}S1 remove'>
            <td>{$med.name}</td>
            {assign var='type_index' value=$med.type}
            <td>{$app_list_strings.medication_supplement_type_list.$type_index}</td>
            {assign var='dosage_index' value=$med.dosage_unit}
            <td>{$med.dosage|string_format:"%.3f"} {$app_list_strings.dosage_unit_list.$dosage_index}</td>
            {assign var='quantity_index' value=$med.quantity_unit}
            <td>{$med.quantity|string_format:"%.3f"} {$app_list_strings.quantity_unit_list.$quantity_index}</td>
            {assign var='frequency_index' value=$med.frequency}
            <td>{$app_list_strings.frequency_list.$frequency_index}</td>
            {assign var='time_of_day_index' value=$med.time_of_day}
            <td>{$app_list_strings.time_of_day_list.$time_of_day_index}{$time_of_day_index}</td>
            <td scope="row" valign="top">
            </td>
            <td scope="row" valign="top">
            </td>
        </tr>
        {/foreach}
    </tbody>
</table>
