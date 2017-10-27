<?php
$dictionary['rt_custom']['fields']['tasks_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'tasks_name',
    'vname'     => 'LBL_SUBSCRIBER_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'tasks_id',
    'join_name' => 'tasks',
    'link'      => 'tasks',
    'table'     => 'tasks',
    'isnull'    => 'true',
    'module'    => 'Tasks',
    );
$dictionary['rt_custom']['fields']['tasks_id'] = array(
    'name'              => 'tasks_id',
    'rname'             => 'id',
    'vname'             => 'LBL_SUBSCRIBER_ID',
    'type'              => 'id',
    'table'             => 'tasks',
    'isnull'            => 'true',
    'module'            => 'Tasks',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
    );
$dictionary['rt_custom']['fields']['tasks'] = array(
  	'name'          => 'tasks',
    'type'          => 'link',
    'relationship'  => 'rtcustom_Tasks',
    'module'        => 'Tasks',
    'bean_name'     => 'Tasks',
    'source'        => 'non-db',
    'vname'         => 'LBL_SUBSCRIBERS',
    );
$dictionary['rt_custom']['relationships']['rtcustom_Tasks'] = array(
    'rhs_module'		=> 'rt_custom',
    'rhs_table'			=> 'rt_custom',
    'rhs_key'			=> 'tasks_id',
    'lhs_module'		=> 'Tasks',
    'lhs_table'			=> 'tasks',
    'lhs_key'			=> 'id',
    'relationship_type'	=> 'one-to-many',
    );
