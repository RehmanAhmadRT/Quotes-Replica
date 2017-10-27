<?php
$dictionary['rt_custom']['fields']['shipping_accounts_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'shipping_accounts_name',
    'vname'     => 'LBL_SUBSCRIBER_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'shipping_accounts_id',
    'join_name' => 'accounts',
    'link'      => 'accounts',
    'table'     => 'accounts',
    'isnull'    => 'true',
    'module'    => 'Accounts',
    );
$dictionary['rt_custom']['fields']['shipping_accounts_id'] = array(
    'name'              => 'shipping_accounts_id',
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
    'relationship'  => 'rtcustom_Accounts_Shipping',
    'module'        => 'Accounts',
    'bean_name'     => 'Accounts',
    'source'        => 'non-db',
    'vname'         => 'LBL_SUBSCRIBERS',
    );
$dictionary['rt_custom']['relationships']['rtcustom_Accounts_Shipping'] = array(
    'rhs_module'		=> 'rt_custom',
    'rhs_table'			=> 'rt_custom',
    'rhs_key'			=> 'opportunities_id',
    'lhs_module'		=> 'Opportunities',
    'lhs_table'			=> 'opportunities',
    'lhs_key'			=> 'id',
    'relationship_type'	=> 'one-to-many',
    );
