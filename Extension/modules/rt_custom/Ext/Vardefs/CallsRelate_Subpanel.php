<?php
$dictionary['rt_custom']['fields']['calls_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'calls_name',
    'vname'     => 'LBL_SUBSCRIBER_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'calls_id',
    'join_name' => 'calls',
    'link'      => 'calls',
    'table'     => 'calls',
    'isnull'    => 'true',
    'module'    => 'Calls',
    );
$dictionary['rt_custom']['fields']['calls_id'] = array(
    'name'              => 'calls_id',
    'rname'             => 'id',
    'vname'             => 'LBL_SUBSCRIBER_ID',
    'type'              => 'id',
    'table'             => 'calls',
    'isnull'            => 'true',
    'module'            => 'Calls',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
    );
$dictionary['rt_custom']['fields']['calls'] = array(
  	'name'          => 'calls',
    'type'          => 'link',
    'relationship'  => 'rtcustom_Calls',
    'module'        => 'Calls',
    'bean_name'     => 'Calls',
    'source'        => 'non-db',
    'vname'         => 'LBL_SUBSCRIBERS',
    );
$dictionary['rt_custom']['relationships']['rtcustom_Calls'] = array(
    'rhs_module'		=> 'rt_custom',
    'rhs_table'			=> 'rt_custom',
    'rhs_key'			=> 'calls_id',
    'lhs_module'		=> 'Calls',
    'lhs_table'			=> 'calls',
    'lhs_key'			=> 'id',
    'relationship_type'	=> 'one-to-many',
    );
