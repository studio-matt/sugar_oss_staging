<?php
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

 
require_once 'modules/Contacts/Contact.php';

class SugarTestContactUtilities
{
    private static $_createdContacts = array();

    private function __construct() {}

    public static function createContact($id = '') 
    {
        $time = mt_rand();
    	$first_name = 'SugarContactFirst';
    	$last_name = 'SugarContactLast';
    	$email1 = 'contact@sugar.com';
    	$contact = new Contact();
        $contact->first_name = $first_name . $time;
        $contact->last_name = $last_name ;
        $contact->email1 = 'contact@'. $time. 'sugar.com';
        if(!empty($id))
        {
            $contact->new_with_id = true;
            $contact->id = $id;
        }
        $contact->save();
        self::$_createdContacts[] = $contact;
        $GLOBALS['db']->commit();
        return $contact;
    }

    public static function setCreatedContact($contact_ids) {
    	foreach($contact_ids as $contact_id) {
    		$contact = new Contact();
    		$contact->id = $contact_id;
        	self::$_createdContacts[] = $contact;
    	} // foreach
    } // fn
    
    public static function removeAllCreatedContacts() 
    {
        $contact_ids = self::getCreatedContactIds();
        $GLOBALS['db']->query('DELETE FROM contacts WHERE id IN (\'' . implode("', '", $contact_ids) . '\')');
    }

    /**
     * removeCreatedContactsEmailAddresses
     *
     * This function removes email addresses that may have been associated with the contacts created
     *
     * @static
     * @return void
     */
    public static function removeCreatedContactsEmailAddresses(){
    	$contact_ids = self::getCreatedContactIds();
        $GLOBALS['db']->query('DELETE FROM email_addresses WHERE id IN (SELECT DISTINCT email_address_id FROM email_addr_bean_rel WHERE bean_module =\'Contacts\' AND bean_id IN (\'' . implode("', '", $contact_ids) . '\'))');
        $GLOBALS['db']->query('DELETE FROM emails_beans WHERE bean_module=\'Contacts\' AND bean_id IN (\'' . implode("', '", $contact_ids) . '\')');
        $GLOBALS['db']->query('DELETE FROM email_addr_bean_rel WHERE bean_module=\'Contacts\' AND bean_id IN (\'' . implode("', '", $contact_ids) . '\')');
    }

    public static function removeCreatedContactsUsersRelationships(){
    	$contact_ids = self::getCreatedContactIds();
        $GLOBALS['db']->query('DELETE FROM contacts_users WHERE contact_id IN (\'' . implode("', '", $contact_ids) . '\')');
    }
    
    public static function getCreatedContactIds() 
    {
        $contact_ids = array();
        foreach (self::$_createdContacts as $contact) {
            $contact_ids[] = $contact->id;
        }
        return $contact_ids;
    }
}
?>