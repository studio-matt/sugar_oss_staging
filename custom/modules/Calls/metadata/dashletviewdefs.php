<?php
$dashletData['CallsDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'status' => 
  array (
    'default' => 
    array (
      0 => 'Planned',
    ),
  ),
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_start' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'type' => 'assigned_user_name',
    'label' => 'LBL_ASSIGNED_TO',
    'default' => 'Stephen Ostrow',
  ),
);
$dashletData['CallsDashlet']['columns'] = array (
  'set_complete' => 
  array (
    'width' => '5%',
    'label' => 'LBL_LIST_CLOSE',
    'default' => true,
    'sortable' => false,
    'related_fields' => 
    array (
      0 => 'status',
    ),
    'name' => 'set_complete',
  ),
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_SUBJECT',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'status' => 
  array (
    'width' => '8%',
    'label' => 'LBL_STATUS',
    'default' => true,
    'name' => 'status',
  ),
  'date_start' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE',
    'default' => true,
    'related_fields' => 
    array (
      0 => 'time_start',
    ),
    'name' => 'date_start',
  ),
  'contact_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'studio' => 
    array (
      'required' => false,
      'listview' => true,
      'visible' => false,
    ),
    'label' => 'LBL_CONTACT_NAME',
    'id' => 'CONTACT_ID',
    'width' => '10%',
    'default' => true,
  ),
  'duration' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DURATION',
    'sortable' => false,
    'related_fields' => 
    array (
      0 => 'duration_hours',
      1 => 'duration_minutes',
    ),
    'name' => 'duration',
    'default' => false,
  ),
  'direction' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DIRECTION',
    'name' => 'direction',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'name' => 'date_entered',
    'default' => false,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'set_accept_links' => 
  array (
    'width' => '10%',
    'label' => 'Accept?',
    'sortable' => false,
    'related_fields' => 
    array (
      0 => 'status',
    ),
    'default' => false,
    'name' => 'set_accept_links',
  ),
  'parent_name' => 
  array (
    'width' => '29%',
    'label' => 'LBL_LIST_RELATED_TO',
    'sortable' => false,
    'dynamic_module' => 'PARENT_TYPE',
    'link' => true,
    'id' => 'PARENT_ID',
    'ACLTag' => 'PARENT',
    'related_fields' => 
    array (
      0 => 'parent_id',
      1 => 'parent_type',
    ),
    'default' => false,
    'name' => 'parent_name',
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
