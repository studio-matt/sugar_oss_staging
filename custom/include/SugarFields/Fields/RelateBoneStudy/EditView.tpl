{*
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2012 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

*}
{{capture name=idname assign=idname}}{{sugarvar key='name'}}{{/capture}}
{{if !empty($displayParams.idName)}}
    {{assign var=idname value=$displayParams.idName}}
{{/if}}
<input type="hidden" name="{{if !empty($displayParams.idNameHidden)}}{{$displayParams.idNameHidden}}{{/if}}{{sugarvar key='id_name'}}" 
	id="{{if !empty($displayParams.idNameHidden)}}{{$displayParams.idNameHidden}}{{/if}}{{sugarvar key='id_name'}}" 
	{{if !empty($vardef.id_name)}}value="{{sugarvar memberName='vardef.id_name' key='value'}}"{{/if}}>
{{if !empty($displayParams.allowNewValue) }}
<input type="hidden" name="{{$idname}}_allow_new_value" id="{{$idname}}_allow_new_value" value="true">
{{/if}}
<select id="options">
  <option id="options_loading">Loading...</option>
</select>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{{$idname}}']) != 'undefined'",
		enableQS
);

{literal}
var items = [];
$.getJSON('index.php?module=comite_BoneStudies&action=getUsersStudies&to_pdf=1&id={/literal}{$fields.id.value}{literal}', function(data) {
  $('#options_loading').remove();
  $options = $('#options');

  var currentId = $('#comite_bonestudies_comite_bonestudiescomite_bonestudies_ida').val();

  $.each(data, function(key, val) {
    items.push(val);
    option = $('<option value="'+val.id+'">'+val.name+' ('+val.bmd_test_date_previous+')</option>');
    if(currentId == val.id) {
      option.attr('selected','selected');
    }
    $options.append(option);
  });
});

$('#options').change(function() {

  var currentId = $(this).val();
  $(items).each(function(i, object) {
    if(object.id == currentId) {
      $('#bmd_test_date_previous').val(object.bmd_test_date_previous);
      $('#bmd_ap_spine_previous').val(object.bmd_ap_spine_previous);
      $('#bmd_total_hip_left_previous').val(object.bmd_total_hip_left_previous);
      $('#bmd_total_hip_right_previous').val(object.bmd_total_hip_right_previous);
      $('#bmd_total_forearm_left_previous').val(object.bmd_total_forearm_left_previous);
      $('#bmd_total_forearm_right_previous').val(object.bmd_total_forearm_right_previous);
      $('#comite_bonestudies_comite_bonestudiescomite_bonestudies_ida').val(object.id);
      return;
    }
  });
});
{/literal}
</script>