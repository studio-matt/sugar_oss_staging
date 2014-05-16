<?php
$viewdefs['Contacts'] = array(
        'EditView' => array(
                'templateMeta' => array(
                        'form' => array(
                                'hidden' => array(
                                        0 => '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
                                        1 => '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
                                        2 => '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
                                        3 => '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
                                        4 => '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">'
                                )
                        ),
                        'maxColumns' => '2',
                        'widths' => array(
                                0 => array(
                                        'label' => '10',
                                        'field' => '30'
                                ),
                                1 => array(
                                        'label' => '10',
                                        'field' => '30'
                                )
                        ),
                        'useTabs' => false,
                        'syncDetailEditViews' => false
                ),
                'panels' => array(
                        'lbl_contact_information' => array(
                                0 => array(
                                        0 => array(
                                                'name' => 'first_name',
                                                'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name"  id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">'
                                        ),
                                        1 => array(
                                                'name' => 'middle_initial_c',
                                                'label' => 'LBL_MIDDLE_INITIAL'
                                        )
                                ),
                                1 => array(
                                        0 => array(
                                                'name' => 'last_name'
                                        )
                                ),
                                2 => array(
                                        0 => array(
                                                'name' => 'preferred_name_c',
                                                'label' => 'LBL_PREFERRED_NAME'
                                        )
                                ),
                                3 => array(
                                        0 => array(
                                                'name' => 'preferred_contact_method_c',
                                                'studio' => 'visible',
                                                'label' => 'LBL_PREFERRED_CONTACT_METHOD'
                                        )
                                ),
                                4 => array(
                                        0 => array(
                                                'name' => 'birthdate',
                                                'comment' => 'The birthdate of the contact',
                                                'label' => 'LBL_BIRTHDATE'
                                        ),
                                        1 => array(
                                                'name' => 'gender'
                                        )
                                )
                        ),
                        'lbl_editview_panel1' => array(
                                0 => array(
                                        0 => array(
                                                'name' => 'email1',
                                                'studio' => 'false',
                                                'label' => 'LBL_EMAIL_ADDRESS'
                                        )
                                )
                        ),
                        'lbl_editview_panel3' => array(
                                0 => array(
                                        0 => array(
                                                'name' => 'description',
                                                'label' => 'LBL_DESCRIPTION'
                                        )
                                )
                        ),
                        'lbl_editview_panel2' => array(
                                0 => array(
                                        0 => array(
                                                'name' => 'lab_location_c',
                                                'studio' => 'visible',
                                                'label' => 'LBL_LAB_LOCATION'
                                        ),
                                        1 => array(
                                                'name' => 'lab_date_c',
                                                'label' => 'LBL_LAB_DATE'
                                        )
                                )
                        )
                )
        )
);
?>
