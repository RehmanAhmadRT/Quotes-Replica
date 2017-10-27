<?php
$dictionary['rt_custom']['fields']['teams_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'teams_name',
    'vname'     => 'LBL_SUBSCRIBER_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'teams_id',
    'join_name' => 'teams',
    'link'      => 'teams_rt',
    'table'     => 'teams',
    'isnull'    => 'true',
    'module'    => 'Teams',
    );
$dictionary['rt_custom']['fields']['teams_id'] = array(
    'name'              => 'teams_id',
    'rname'             => 'id',
    'vname'             => 'LBL_SUBSCRIBER_ID',
    'type'              => 'id',
    'table'             => 'teams',
    'isnull'            => 'true',
    'module'            => 'Teams',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
    );
$dictionary['rt_custom']['fields']['teams_rt'] = array(
  	'name'          => 'teams_rt',
    'type'          => 'link',
    'relationship'  => 'rtcustom_Teams',
    'module'        => 'Teams',
    'bean_name'     => 'Teams',
    'source'        => 'non-db',
    'vname'         => 'LBL_SUBSCRIBERS',
    );
$dictionary['rt_custom']['relationships']['rtcustom_Teams'] = array(
    'rhs_module'		=> 'rt_custom',
    'rhs_table'			=> 'rt_custom',
    'rhs_key'			=> 'teams_id',
    'lhs_module'		=> 'Teams',
    'lhs_table'			=> 'Teams',
    'lhs_key'			=> 'id',
    'relationship_type'	=> 'one-to-many',
    );
