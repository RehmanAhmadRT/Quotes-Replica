<?php
$dictionary['rt_custom']['fields']['accounts_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'accounts_name',
    'vname'     => 'LBL_SUBSCRIBER_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'accounts_id',
    'join_name' => 'accounts',
    'link'      => 'accounts',
    'table'     => 'accounts',
    'isnull'    => 'true',
    'module'    => 'Accounts',
    );
$dictionary['rt_custom']['fields']['accounts_id'] = array(
    'name'              => 'accounts_id',
    'rname'             => 'id',
    'vname'             => 'LBL_SUBSCRIBER_ID',
    'type'              => 'id',
    'table'             => 'accounts',
    'isnull'            => 'true',
    'module'            => 'Accounts',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
    );
$dictionary['rt_custom']['fields']['accounts'] = array(
  	'name'          => 'accounts',
    'type'          => 'link',
    'relationship'  => 'rtcustom_Accounts',
    'module'        => 'Accounts',
    'bean_name'     => 'Accounts',
    'source'        => 'non-db',
    'vname'         => 'LBL_SUBSCRIBERS',
    );
$dictionary['rt_custom']['relationships']['rtcustom_Accounts'] = array(
    'rhs_module'		=> 'rt_custom',
    'rhs_table'			=> 'rt_custom',
    'rhs_key'			=> 'accounts_id',
    'lhs_module'		=> 'Accounts',
    'lhs_table'			=> 'accounts',
    'lhs_key'			=> 'id',
    'relationship_type'	=> 'one-to-many',
    );
