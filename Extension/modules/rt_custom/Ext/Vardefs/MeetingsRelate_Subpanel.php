<?php
$dictionary['rt_custom']['fields']['meetings_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'meetings_name',
    'vname'     => 'LBL_SUBSCRIBER_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'meetings_id',
    'join_name' => 'meetings',
    'link'      => 'meetings',
    'table'     => 'meetings',
    'isnull'    => 'true',
    'module'    => 'Meetings',
    );
$dictionary['rt_custom']['fields']['meetings_id'] = array(
    'name'              => 'meetings_id',
    'rname'             => 'id',
    'vname'             => 'LBL_SUBSCRIBER_ID',
    'type'              => 'id',
    'table'             => 'meetings',
    'isnull'            => 'true',
    'module'            => 'Meetings',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
    );
$dictionary['rt_custom']['fields']['meetings'] = array(
  	'name'          => 'meetings',
    'type'          => 'link',
    'relationship'  => 'rtcustom_Meetings',
    'module'        => 'Meetings',
    'bean_name'     => 'Meetings',
    'source'        => 'non-db',
    'vname'         => 'LBL_SUBSCRIBERS',
    );
$dictionary['rt_custom']['relationships']['rtcustom_Meetings'] = array(
    'rhs_module'		=> 'rt_custom',
    'rhs_table'			=> 'rt_custom',
    'rhs_key'			=> 'meetings_id',
    'lhs_module'		=> 'Meetings',
    'lhs_table'			=> 'meetings',
    'lhs_key'			=> 'id',
    'relationship_type'	=> 'one-to-many',
    );
