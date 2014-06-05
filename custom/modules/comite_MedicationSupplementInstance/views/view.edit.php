<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

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


class comite_MedicationSupplementInstanceViewEdit extends ViewEdit
{
 	public function __construct()
 	{
 		parent::ViewEdit();
 		$this->useForSubpanel = true;
 	}

 	/**
 	 * @see SugarView::display()
	 *
 	 * We are overridding the display method to manipulate the sectionPanels.
 	 * If portal is not enabled then don't show the Portal Information panel.
 	 */
 	public function display()
 	{
        parent::display();
        
        echo $js = <<<EOQ
        <script type="text/javascript">
                
        if(typeof document.EditView == 'undefined'){			    
	        var formName = 'form_SubpanelQuickCreate_comite_MedicationSupplementInstance';	        
        }else{
            var formName = 'EditView';		            
        }
        
        setMedicineSupp('Edit');        
        
        document.getElementById('btn_comite_medsuppinstance_comite_medsupp_name').onclick = function(){
		var popup_request_data = {
				'call_back_function' : 'set_medication_supp_returns',
				'form_name' : formName,
				'field_to_name_array' : {
    				'id' : 'comite_med8f3bplement_ida',
    				'name' : 'comite_medsuppinstance_comite_medsupp_name',
				},
			};		
			open_popup( 'comite_MedicationSupplement',  600,  400,  '',  true,  false, popup_request_data, 'single', true );	
		}
                
        function set_medication_supp_returns(popup_reply_data){
            var name_to_value_array = popup_reply_data.name_to_value_array;
            var name = name_to_value_array['comite_medsuppinstance_comite_medsupp_name'];
            var id = name_to_value_array['comite_med8f3bplement_ida'];
             
            document.getElementById('comite_medsuppinstance_comite_medsupp_name').value=name;
			document.getElementById('comite_med8f3bplement_ida').value = id;
                
            setMedicineSupp();
        }
                
       
        if (typeof sqs_objects == 'undefined') {
            var sqs_objects = new Array;
        }
        sqs_objects[formName+'_comite_medsuppinstance_comite_medsupp_name'] = {
            "form": formName,
            "method": "query",
            "modules": ["comite_MedicationSupplement"],
            "group": "or",
            "field_list": ["name", "id"],
            "populate_list": ["comite_medsuppinstance_comite_medsupp_name", "comite_med8f3bplement_ida"],
            "required_list": ["parent_id"],
            "conditions": [{
                "name": "name",
                "op": "like_custom",
                "end": "%",
                "value": ""
            }],
            "order": "name",
            "limit": "30",
            "no_match_text": "No Match",
            "post_onblur_function" : "setMedicineSupp",
        };
                
        function setMedicineSupp(viewoption){
            if(typeof document.EditView == 'undefined'){	    
		        EditView = 'form_SubpanelQuickCreate_comite_MedicationSupplementInstance';
		        document.EditView = document.form_SubpanelQuickCreate_comite_MedicationSupplementInstance;
		        
	        }else{
	            EditView = $(document.EditView).attr('name');	            
	        }
               
            var suppliment_id = document.getElementById('comite_med8f3bplement_ida').value;
            var dosage_value = document.getElementById('dosage').value;
            var quantity_value = document.getElementById('quantity').value;
                
			var callback = {
    			success: function(o){
    				if(o.responseText != ''){
    					var response = eval('('+o.responseText+')');
                        if(response.result == 'success'){
        					var dosage = response.dosage;
                            var dosage_unit = response.dosage_unit;
                            var quantity = response.quantity;
                            var quantity_unit = response.quantity_unit;
                            
                            if(typeof viewoption == 'undefined' || viewoption != 'Edit'){
                			     document.getElementById('dosage_unit').value = dosage_unit;
                			     document.getElementById('quantity_unit').value = quantity_unit;
                            }
                                
                            if( (typeof dosage != 'undefined') && (dosage != '')){
                                var dosage = dosage.split(',');
                                var dosage_options = '';
                                for (var i=0; i < dosage.length; i++){
                                    var dosage_trim =  dosage[i].trim();
                                    dosage_options += "<option value='"+dosage_trim+"'";
                                    if(dosage_trim == dosage_value){
                                        dosage_options += " selected=selected ";
     	                            }
                                    dosage_options += ">"+dosage_trim+"</option>";
                                }
                                $('#dosage').closest('td').html('<select name="dosage" id="dosage">'+dosage_options+'</select>');
                            }else{
                                $('#dosage').closest('td').html('<input type="text" name="dosage" id="dosage" value="'+dosage_value+'">');
                            }
                                
                            if( (typeof quantity != 'undefined') && (quantity != '')){
                                var quantity = quantity.split(',');
                                var quantity_options = '';
                                for (var i=0; i < quantity.length; i++){
                                    var quantity_trim =  quantity[i].trim();
                                    var quantity_float = parseFloat(quantity_trim).toFixed(8);
                                    quantity_options += "<option value='"+quantity_float+"'";
                                    if(quantity_float == quantity_value){
                                        quantity_options += " selected=selected ";
     	                            }
                                    quantity_options += ">"+quantity_trim+"</option>";
                                }
                                $('#quantity').closest('td').html('<select name="quantity" id="quantity">'+quantity_options+'</select>');
                            }else{
                                 $('#quantity').closest('td').html('<input type="text" name="quantity" id="quantity" value="'+quantity_value+'">');
                            }
                        }else{
                            $('#dosage').closest('td').html('<input type="text" name="dosage" id="dosage" value="'+dosage_value+'">');
                            $('#quantity').closest('td').html('<input type="text" name="quantity" id="quantity" value="'+quantity_value+'">');
                        }
    				}
    			}
    		}	
    		var connectionObject = YAHOO.util.Connect.asyncRequest ('GET', 'index.php?module=comite_MedicationSupplement&action=getQuickSearch&to_pdf=true&record='+suppliment_id, callback);
        }
        </script>
EOQ;
 	}
}