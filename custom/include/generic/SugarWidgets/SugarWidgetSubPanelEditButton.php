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





//TODO Rename this to edit link
class SugarWidgetSubPanelEditButton extends SugarWidgetField
{
    protected static $defs = array();
    protected static $edit_icon_html;

	function displayHeaderCell($layout_def)
	{
		return '&nbsp;';
	}

	function displayList($layout_def)
	{
		global $app_strings;

		if(empty(self::$edit_icon_html)) {
		    self::$edit_icon_html = SugarThemeRegistry::current()->getImage( 'edit_inline', 'align="absmiddle" border="0"',null,null,'.gif','');//setting alt to blank on purpose on subpanels for 508
		}

        $onclick ='';
       /* if($layout_def['EditView']) {
            
            $panelName = $layout_def['module'];
            $record = $layout_def['fields']['ID'];
            
			return "<div id='".$panelName."_".$record."' class=\"white_content\" style=\"display:none;\"></div>
                    <div id=\"fade\" class=\"black_overlay\"  style=\"display:none;\"></div><a href='#' onMouseOver=\"javascript:subp_nav('".$layout_def['module']."', '".$layout_def['fields']['ID']."', 'e', this"
			. (empty($layout_def['linked_field']) ? "" : ", '{$layout_def['linked_field']}'") . ");\""
			. " onFocus=\"javascript:subp_nav('".$layout_def['module']."', '".$layout_def['fields']['ID']."', 'e', this"
			. (empty($layout_def['linked_field']) ? "" : ", '{$layout_def['linked_field']}'") . ");\""
			. ' class="listViewTdToolsS1">' . self::$edit_icon_html . '&nbsp;' . $app_strings['LNK_EDIT'] .'</a>&nbsp;';
		}*/
        
         if($layout_def['EditView']) {

            //echo '<pre>'; print_r($layout_def); echo '</pre>';
            
            $record = $layout_def['fields']['ID'];
            $target_module = $layout_def['module'];
            
            $owner_id = $_REQUEST['originalRecord'];
            $panelName = $owner_relation = $layout_def['subpanel_id'];
            
            if(empty($panelName)){
                $panelName = 'comite_medsuppinst_comite_personalhealthhistory';
            }
            
            $owner_module = $_REQUEST['module'];
            
            $text_link = self::$edit_icon_html . '&nbsp;' . $app_strings['LNK_EDIT'];
            
           $html =<<<HTML
      <form id="formformcomite_{$panelName}_contacts_{$record}" name="form" method="post" action="index.php" onsubmit="return SUGAR.subpanelUtils.sendAndRetrieve(this.id, 'subpanel_{$panelName}', 'Loading ...');">
      <input type="hidden" value="true" name="to_pdf">
            
      <input type="hidden" value="Home" name="module">
      <input type="hidden" value="SubpanelEdits" name="action">
      <input type="hidden" value="QuickCreate.tpl" name="tpl">
      <input type="hidden" value="{$record}" name="record">
            
      <input type="hidden" value="{$owner_id}" name="parent_id">
            
      <input type="hidden" value="{$owner_module}" name="parent_name">
      
      <input type="hidden" value="{$owner_module}" name="return_module">
      <input type="hidden" value="DetailView" name="return_action">
      <input type="hidden" value="{$owner_id}" name="return_id">
      <input type="hidden" value="{$owner_relation}" name="return_relationship">
            
      <input type="hidden" value="{$target_module}" name="target_module">
      <input type="hidden" value="QuickEdit" name="target_action">
      <input type="submit" value="Edit"></form>
HTML;
            return $html;
        }
        

        return '';
    }

}

?>