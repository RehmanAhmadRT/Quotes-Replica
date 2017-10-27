<?php
$dictionary['rt_custom']['fields']['shippers_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'shippers_name',
    'vname'     => 'LBL_SUBSCRIBER_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'shippers_id',
    'join_name' => 'shippers',
    'link'      => 'shippers',
    'table'     => 'shippers',
    'isnull'    => 'true',
    'module'    => 'Shippers',
    );
$dictionary['rt_custom']['fields']['shippers_id'] = array(
    'name'              => 'shippers_id',
    'rname'             => 'id',
    'vname'             => 'LBL_SUBSCRIBER_ID',
    'type'              => 'id',
    'table'             => 'shippers',
    'isnull'            => 'true',
    'module'            => 'Shippers',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
    );
$dictionary['rt_custom']['fields']['shippers'] = array(
  	'name'          => 'shippers',
    'type'          => 'link',
    'relationship'  => 'rtcustom_Shippers',
    'module'        => 'Shippers',
    'bean_name'     => 'Shippers',
    'source'        => 'non-db',
    'vname'         => 'LBL_SUBSCRIBERS',
    );
$dictionary['rt_custom']['relationships']['rtcustom_Shippers'] = array(
    'rhs_module'		=> 'rt_custom',
    'rhs_table'			=> 'rt_custom',
    'rhs_key'			=> 'taxrates_id',
    'lhs_module'		=> 'Shippers',
    'lhs_table'			=> 'Shippers',
    'lhs_key'			=> 'id',
    'relationship_type'	=> 'one-to-many',
    );
