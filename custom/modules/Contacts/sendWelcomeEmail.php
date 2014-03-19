<?php

SugarApplication::redirect("index.php?action=DetailView&module={$_REQUEST['return_module']}&action={$_REQUEST['return_action']}&record={$_REQUEST['return_id']}");


/**
 * Send new password or link to user
 *
 * @param string $templateId Id of email template
 * @param array $additionalData additional params: link, url, password
 * @return array status: true|false, message: error message, if status = false and message = '' it means that send method has returned false
 */
function sendEmail($templateId, array $additionalData = array())
{
     global $sugar_config, $current_user;
     $mod_strings = return_module_language('', 'Users');
     $result = array(
         'status' => false,
         'message' => ''
     );

     $emailTemp = new EmailTemplate();
     $emailTemp->disable_row_level_security = true;
     if ($emailTemp->retrieve($templateId) == '')
     {
         $result['message'] = $mod_strings['LBL_EMAIL_TEMPLATE_MISSING'];
         return $result;
     }

     //replace instance variables in email templates
     $htmlBody = $emailTemp->body_html;
     $body = $emailTemp->body;
     if (isset($additionalData['link']) && $additionalData['link'] == true)
     {
         $htmlBody = str_replace('$contact_user_link_guid', $additionalData['url'], $htmlBody);
         $body = str_replace('$contact_user_link_guid', $additionalData['url'], $body);
     }
     else
     {
         $htmlBody = str_replace('$contact_user_user_hash', $additionalData['password'], $htmlBody);
         $body = str_replace('$contact_user_user_hash', $additionalData['password'], $body);
     }
     // Bug 36833 - Add replacing of special value $instance_url
     $htmlBody = str_replace('$config_site_url', $sugar_config['site_url'], $htmlBody);
     $body = str_replace('$config_site_url', $sugar_config['site_url'], $body);

     $htmlBody = str_replace('$contact_user_user_name', $this->user_name, $htmlBody);
     $htmlBody = str_replace('$contact_user_pwd_last_changed', TimeDate::getInstance()->nowDb(), $htmlBody);
     $body = str_replace('$contact_user_user_name', $this->user_name, $body);
     $body = str_replace('$contact_user_pwd_last_changed', TimeDate::getInstance()->nowDb(), $body);
     $emailTemp->body_html = $htmlBody;
     $emailTemp->body = $body;

     $itemail = $this->emailAddress->getPrimaryAddress($this);
     //retrieve IT Admin Email
     //_ppd( $emailTemp->body_html);
     //retrieve email defaults
     $emailObj = new Email();
     $defaults = $emailObj->getSystemDefaultEmail();
     require_once('include/SugarPHPMailer.php');
     $mail = new SugarPHPMailer();
     $mail->setMailerForSystem();
     //$mail->IsHTML(true);
     $mail->From = $defaults['email'];
     $mail->FromName = $defaults['name'];
     $mail->ClearAllRecipients();
     $mail->ClearReplyTos();
     $mail->Subject = from_html($emailTemp->subject);
     if ($emailTemp->text_only != 1)
     {
         $mail->IsHTML(true);
         $mail->Body = from_html($emailTemp->body_html);
         $mail->AltBody = from_html($emailTemp->body);
     }
     else
     {
         $mail->Body_html = from_html($emailTemp->body_html);
         $mail->Body = from_html($emailTemp->body);
     }
     if ($mail->Body == '' && $current_user->is_admin)
     {
         global $app_strings;
         $result['message'] = $app_strings['LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT'];
         return $result;
     }
     if ($mail->Mailer == 'smtp' && $mail->Host =='' && $current_user->is_admin)
     {
         $result['message'] = $mod_strings['ERR_SERVER_SMTP_EMPTY'];
         return $result;
     }

     $mail->prepForOutbound();
     $hasRecipients = false;

     if (!empty($itemail))
     {
         if ($hasRecipients)
         {
             $mail->AddBCC($itemail);
         }
         else
         {
             $mail->AddAddress($itemail);
         }
         $hasRecipients = true;
     }
     if ($hasRecipients)
     {
         $result['status'] = @$mail->Send();
     }

     if ($result['status'] == true)
     {
         $emailObj->team_id = 1;
         $emailObj->to_addrs = '';
         $emailObj->type = 'archived';
         $emailObj->deleted = '0';
         $emailObj->name = $mail->Subject ;
         $emailObj->description = $mail->Body;
         $emailObj->description_html = null;
         $emailObj->from_addr = $mail->From;
         $emailObj->parent_type = 'User';
         $emailObj->date_sent = TimeDate::getInstance()->nowDb();
         $emailObj->modified_user_id = '1';
         $emailObj->created_by = '1';
         $emailObj->status = 'sent';
         $emailObj->save();
         if (!isset($additionalData['link']) || $additionalData['link'] == false)
         {
             $user_hash = strtolower(md5($additionalData['password']));
             $this->setPreference('loginexpiration', '0');
             $this->setPreference('lockout', '');
             $this->setPreference('loginfailed', '0');
             $this->savePreferencesToDB();
             //set new password
             $now=TimeDate::getInstance()->nowDb();
             $query = "UPDATE $this->table_name SET user_hash='$user_hash', system_generated_password='1', pwd_last_changed='$now' where id='$this->id'";
             $this->db->query($query, true, "Error setting new password for $this->user_name: ");
         }
     }

     return $result;
 }