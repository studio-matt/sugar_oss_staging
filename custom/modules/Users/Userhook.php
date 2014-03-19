<?php

class UserHook {
    
    public function deletedRelationship(&$bean, $event, $arguments) {
        
        if($event == 'after_relationship_delete' && $arguments['relationship'] == 'contacts_users_1') {
            $bean->status = 'Inactive';
            $bean->deleted = 1;
            $bean->save();
        }
    }
}