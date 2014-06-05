<?php
// created: 2012-07-03 21:05:29
$layout_defs["Contacts"]["subpanel_setup"]['comite_med_table_contacts'] = array(
        'order' => 5,
        'module' => 'comite_MedicationSupplementInstance',
        'subpanel_name' => 'default',
        'sort_order' => 'desc',
        'sort_by' => 'date_entered',
        'title_key' => 'LBL_COMITE_MEDICATION_TABLE',
        'get_subpanel_data' => 'function:get_med_table_contacts',
        'generate_select' => true,
        'function_parameters' => array(
                'return_as_array' => 'true',
                'import_function_file' => 'custom/modules/Contacts/customMedTableSubpanel.php',
                'contact_id' => $this->_focus->id,
        ),
        'top_buttons' => array(
                0 => array(
                        'widget_class' => 'SubPanelTopButtonQuickCreate'
                ),
                1 => array(
                        'widget_class' => 'SubPanelTopSelectButton',
                        'mode' => 'MultiSelect'
                )
        )
);
