<?php

include_once('include/SubPanel/SubPanel.php');

class SubPanelMedTable extends SubPanel {

    public function display() {


        if(isset($this->listview)){
            $ListView =& $this->listview;
        }else{
            $ListView = new ListView();
            $this->listview =& $ListView;
        }
        $layout_manager = $this->listview->getLayoutManager();

        /*
         * Taken from parent::display()
         */
		global $timedate;
		global $mod_strings;
		global $app_strings;
		global $app_list_strings;
		global $beanList;
		global $beanFiles;
		global $current_language;

		$result_array = array();

		$return_string = $this->ProcessSubPanelListView($this->template_file,$result_array);
		/*
		 * / Taken from parent::display()
		 */

        /*
         * Create the MedTable
         */
        $meds = array();

        $PersonalHealthHistory = new comite_PersonalHealthHistory();
        $PersonalHealthHistory->retrieve($this->parent_bean->id);
        $PersonalHealthHistory->get_linked_beans('comite_medsuppinst_comite_personalhealthhistory', 'comite_MedicationSupplementInstance');

                    # Get PersonalHealthHistory
        $PersonalHealthHistory->load_relationship('comite_personalhealthhistory_contacts');
        $Contact = reset($PersonalHealthHistory->comite_personalhealthhistory_contacts->beans);

        if($this->parent_record_id != $this->parent_bean->id) {
            $doctorsNote = new comite_DoctorsNote();
            $doctorsNote->retrieve($this->parent_record_id);
        } elseif (isset($_REQUEST['originalModule']) && $_REQUEST['originalModule'] == 'comite_DoctorsNote' && isset($_REQUEST['originalRecord'])) {
            $doctorsNote = new comite_DoctorsNote();
            $doctorsNote->retrieve($_REQUEST['originalRecord']);
        } else {
            # Find drnote
            $Contact->load_relationship('comite_doctorsnote_contacts');
            $doctorsNote = end($Contact->comite_doctorsnote_contacts->beans);
        }

        foreach($PersonalHealthHistory->comite_medsuppinst_comite_personalhealthhistory->beans as $Med) {
            $current = $Med;

            # Check for New
            $current->different = false;
            $current->newer = false;
            if(isset($doctorsNote->date_entered) && $doctorsNote->date_entered && strtotime($doctorsNote->date_entered) < strtotime($Med->date_entered)) {
                $current->newer = true;
            }

            # Make Edit Button
            $thepanel = $this->subpanel_defs;
            $fields = $thepanel->get_list_fields();
            $fields['ID'] = $current->id;
            $list_field = $thepanel->panel_definition['list_fields']['edit_button'];
            $list_field['fields'] = $fields;
//             $list_field['module'] = $aItem->module_dir;
//             $list_field['start_link_wrapper'] = $this->start_link_wrapper;
//             $list_field['end_link_wrapper'] = $this->end_link_wrapper;
//             $list_field['subpanel_id'] = $this->subpanel_id;
            $list_field['DetailView'] = true; //$aItem->ACLAccess('DetailView');
            $list_field['ListView'] = true; //$aItem->ACLAccess('ListView');
            $list_field['EditView'] = true; //$aItem->ACLAccess('EditView');
            $list_field['Delete'] = true; //$aItem->ACLAccess('Delete');
            $widget_contents = $layout_manager->widgetDisplay($list_field);
            $Med->editButton = $widget_contents;

            # Make Delete Button
            $thepanel = $this->subpanel_defs;
            $fields = $thepanel->get_list_fields();
            $fields['ID'] = $current->id;
            $list_field = $thepanel->panel_definition['list_fields']['remove_button'];
            $list_field['linked_field'] = $thepanel->get_data_source_name();
            $list_field['linked_field_set'] = $thepanel->get_data_source_name(true);
            $list_field['fields'] = $fields;
//             $list_field['module'] = $aItem->module_dir;
//             $list_field['start_link_wrapper'] = $this->start_link_wrapper;
//             $list_field['end_link_wrapper'] = $this->end_link_wrapper;
            $list_field['subpanel_id'] = $this->subpanel_id;
            $list_field['DetailView'] = true; //$aItem->ACLAccess('DetailView');
            $list_field['ListView'] = true; //$aItem->ACLAccess('ListView');
            $list_field['EditView'] = true; //$aItem->ACLAccess('EditView');
            $list_field['Delete'] = true; //$aItem->ACLAccess('Delete');
            $widget_contents = $layout_manager->widgetDisplay($list_field);
//             var_dump($widget_contents);
            $Med->deleteButton = $widget_contents;

            # Get Previous
            $previous = clone $current;
            if(!$current->newer) {

                $db = $current->db;
                $resp = $db->query('SELECT * FROM comite_medicationsupplementinstance_audit WHERE parent_id = "'.$current->id.'"');
                while($row = $resp->fetch_assoc()) {
                    if(strtotime($row['date_created']) > strtotime($doctorsNote->fetched_row['date_entered'])) {
                        $previous->different = true;
                        $previous->{$row['field_name']} = $row['before_value_string'];
                    }
                }
            }

            array_push($meds, array('current' => $current, 'previous' => isset($previous) ? $previous : false));
        }

        usort($meds, array($this, 'sortMeds'));
        # Get Deleted
        $deleted = array();
        if ($doctorsNote) {
            $db = $doctorsNote->db;
            $query = '
                SELECT 
                    m.* 
                FROM comite_medsuppinst_comite_personalhealthhistory_c mp
                LEFT JOIN comite_medicationsupplementinstance m ON m.id = mp.comite_meda66fnstance_idb
                WHERE 
                    m.id IS NOT NULL
                        AND m.date_modified > "' . $doctorsNote->fetched_row['date_entered'] . '"
                        AND mp.deleted = 1
                        AND mp.comite_med5d7ehistory_ida = "'.$PersonalHealthHistory->id.'"
                GROUP BY m.name
            ';
            $resp = $db->query($query);
            while($row = $resp->fetch_assoc()) {
                $deleted[] = $row;
            }
        }

        $x = new Sugar_Smarty();
        $x->assign('meds', $meds);
        $x->assign('app_list_strings', $app_list_strings);
        $x->assign('parent_id', $this->parent_record_id);
        $x->assign('parent_module', $this->parent_module);
        $x->assign('deleted', $deleted);
        $medtable = $x->fetch('custom/include/SubPanel/SubPanelMedTable.tpl');

        /*
         * / Create the MedTable
         */

        /*
         * Substitute in the MedTable and Print
         */
		$return_string = substr($return_string, 0, strpos($return_string, '<tr height="20">')).'%MEDTABLE%</tbody></table>';
		$return_string = strtr($return_string, array('%MEDTABLE%' => $medtable));
		print $return_string;
    }

    /**
     * Sort by: new state desc, type name asc;
     * e.g. 
     * new med, (white)
     * new med, (white)
     * new med, (white)
     * cont/chg med, (yellow)
     * old med, (grey)
     * new supp, (white)
     * cont/chg supp, (yellow)
     * old supp, (grey)
     */
    public function sortMeds($a, $b) {
        if (!$a['current']->newer && $b['current']->newer) {
            return 1;
        }
        if ($a['current']->newer && !$b['current']->newer) {
            return -1;
        }

        if ($a['current']->type != 'hormone' && $b['current']->type == 'hormone') {
            return 1;
        }
        if ($a['current']->type == 'hormone' && $b['current']->type != 'hormone') {
            return -1;
        }
        if ($a['current']->type != 'medication' && $b['current']->type == 'medication') {
            return 1;
        }
        if ($a['current']->type == 'medication' && $b['current']->type != 'medication') {
            return -1;
        }
        if ($a['current']->type != 'supplement' && $b['current']->type == 'supplement') {
            return 1;
        }
        if ($a['current']->type == 'supplement' && $b['current']->type != 'supplement') {
            return -1;
        }
        return strcasecmp($a['current']->name, $b['current']->name);
    }
}
