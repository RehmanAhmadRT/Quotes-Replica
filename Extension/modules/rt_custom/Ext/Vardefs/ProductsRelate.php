<?php
$dictionary['rt_custom']['fields']['products_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'products_name',
    'vname'     => 'LBL_SUBSCRIBER_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'products_id',
    'join_name' => 'products',
    'link'      => 'products',
    'table'     => 'products',
    'isnull'    => 'true',
    'module'    => 'Products',
    );
$dictionary['rt_custom']['fields']['products_id'] = array(
    'name'              => 'products_id',
    'rname'             => 'id',
    'vname'             => 'LBL_SUBSCRIBER_ID',
    'type'              => 'id',
    'table'             => 'products',
    'isnull'            => 'true',
    'module'            => 'Products',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
    );
$dictionary['rt_custom']['fields']['products'] = array(
  	'name'          => 'products',
    'type'          => 'link',
    'relationship'  => 'rtcustom_Products',
    'module'        => 'Products',
    'bean_name'     => 'Products',
    'source'        => 'non-db',
    'vname'         => 'LBL_SUBSCRIBERS',
    );
$dictionary['rt_custom']['relationships']['rtcustom_Products'] = array(
    'rhs_module'		=> 'rt_custom',
    'rhs_table'			=> 'rt_custom',
    'rhs_key'			=> 'products_id',
    'lhs_module'		=> 'Products',
    'lhs_table'			=> 'Products',
    'lhs_key'			=> 'id',
    'relationship_type'	=> 'one-to-many',
    );
