<?php
function get_med_table_contacts($params){
    $args = func_get_args();
    $contact_id = $args[0]['contact_id'];
    $return_array['select'] = "SELECT comite_medicationsupplementinstance.*";
    $return_array['from'] = " FROM comite_medicationsupplementinstance ";
    $return_array['where'] = " comite_medicationsupplementinstance.deleted = 0 AND comite_personalhealthhistory_contacts_c.comite_personalhealthhistory_contactscontacts_idb = '".$contact_id."' ";
    $return_array['join'] = " INNER JOIN comite_medsuppinst_comite_personalhealthhistory_c ON comite_medsuppinst_comite_personalhealthhistory_c.comite_meda66fnstance_idb = comite_medicationsupplementinstance.id AND comite_medsuppinst_comite_personalhealthhistory_c.deleted=0 LEFT JOIN comite_personalhealthhistory_contacts_c ON comite_personalhealthhistory_contacts_c.comite_per66fchistory_ida = comite_medsuppinst_comite_personalhealthhistory_c.comite_med5d7ehistory_ida AND comite_personalhealthhistory_contacts_c.deleted =0";
    $return_array['join_tables'] = "";
    
//     /$GLOBALS['log']->fatal(print_r($return_array, true));
    return $return_array;
}