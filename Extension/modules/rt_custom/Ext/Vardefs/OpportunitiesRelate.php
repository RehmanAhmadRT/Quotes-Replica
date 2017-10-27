<?php
$dictionary['rt_custom']['fields']['opportunities_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'opportunities_name',
    'vname'     => 'LBL_SUBSCRIBER_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'opportunities_id',
    'join_name' => 'opportunities',
    'link'      => 'opportunities',
    'table'     => 'opportunities',
    'isnull'    => 'true',
    'module'    => 'Opportunities',
    );
$dictionary['rt_custom']['fields']['opportunities_id'] = array(
    'name'              => 'opportunities_id',
    'rname'             => 'id',
    'vname'             => 'LBL_SUBSCRIBER_ID',
    'type'              => 'id',
    'table'             => 'opportunities',
    'isnull'            => 'true',
    'module'            => 'Opportunities',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
    );
$dictionary['rt_custom']['fields']['opportunities'] = array(
  	'name'          => 'opportunities',
    'type'          => 'link',
    'relationship'  => 'rtcustom_Opportunities',
    'module'        => 'Opportunities',
    'bean_name'     => 'Opportunities',
    'source'        => 'non-db',
    'vname'         => 'LBL_SUBSCRIBERS',
    );
$dictionary['rt_custom']['relationships']['rtcustom_Opportunities'] = array(
    'rhs_module'		=> 'rt_custom',
    'rhs_table'			=> 'rt_custom',
    'rhs_key'			=> 'opportunities_id',
    'lhs_module'		=> 'Opportunities',
    'lhs_table'			=> 'opportunities',
    'lhs_key'			=> 'id',
    'relationship_type'	=> 'one-to-many',
    );
