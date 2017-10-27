<?php
$dictionary['rt_custom']['fields']['currencies_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'currencies_name',
    'vname'     => 'LBL_SUBSCRIBER_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'currencies_id',
    'join_name' => 'currencies',
    'link'      => 'currencies',
    'table'     => 'currencies',
    'isnull'    => 'true',
    'module'    => 'Currencies',
    );
$dictionary['rt_custom']['fields']['currencies_id'] = array(
    'name'              => 'currencies_id',
    'rname'             => 'id',
    'vname'             => 'LBL_SUBSCRIBER_ID',
    'type'              => 'id',
    'table'             => 'currencies',
    'isnull'            => 'true',
    'module'            => 'Currencies',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
    );
$dictionary['rt_custom']['fields']['currencies'] = array(
  	'name'          => 'currencies',
    'type'          => 'link',
    'relationship'  => 'rtcustom_Currencies',
    'module'        => 'Currencies',
    'bean_name'     => 'Currencies',
    'source'        => 'non-db',
    'vname'         => 'LBL_SUBSCRIBERS',
    );
$dictionary['rt_custom']['relationships']['rtcustom_Currencies'] = array(
    'rhs_module'		=> 'rt_custom',
    'rhs_table'			=> 'rt_custom',
    'rhs_key'			=> 'currencies_id',
    'lhs_module'		=> 'Currencies',
    'lhs_table'			=> 'Currencies',
    'lhs_key'			=> 'id',
    'relationship_type'	=> 'one-to-many',
    );
