<?php
$dictionary['rt_custom']['fields']['users_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'users_name',
    'vname'     => 'LBL_SUBSCRIBER_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'users_id',
    'join_name' => 'users',
    'link'      => 'users_rt',
    'table'     => 'users',
    'isnull'    => 'true',
    'module'    => 'Users',
    );
$dictionary['rt_custom']['fields']['users_id'] = array(
    'name'              => 'users_id',
    'rname'             => 'id',
    'vname'             => 'LBL_SUBSCRIBER_ID',
    'type'              => 'id',
    'table'             => 'users',
    'isnull'            => 'true',
    'module'            => 'Users',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
    );
$dictionary['rt_custom']['fields']['users_rt'] = array(
  	'name'          => 'users_rt',
    'type'          => 'link',
    'relationship'  => 'rtcustom_Users',
    'module'        => 'Users',
    'bean_name'     => 'Users',
    'source'        => 'non-db',
    'vname'         => 'LBL_SUBSCRIBERS',
    );
$dictionary['rt_custom']['relationships']['rtcustom_Users'] = array(
    'rhs_module'		=> 'rt_custom',
    'rhs_table'			=> 'rt_custom',
    'rhs_key'			=> 'users_id',
    'lhs_module'		=> 'Users',
    'lhs_table'			=> 'Users',
    'lhs_key'			=> 'id',
    'relationship_type'	=> 'one-to-many',
    );
