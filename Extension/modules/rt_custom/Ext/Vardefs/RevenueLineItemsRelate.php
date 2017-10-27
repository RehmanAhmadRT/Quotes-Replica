<?php
$dictionary['rt_custom']['fields']['revenue_line_items_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'revenue_line_items_name',
    'vname'     => 'LBL_SUBSCRIBER_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'revenue_line_items_id',
    'join_name' => 'revenue_line_items',
    'link'      => 'revenue_line_items',
    'table'     => 'revenue_line_items',
    'isnull'    => 'true',
    'module'    => 'RevenueLineItems',
    );
$dictionary['rt_custom']['fields']['revenue_line_items_id'] = array(
    'name'              => 'revenue_line_items_id',
    'rname'             => 'id',
    'vname'             => 'LBL_SUBSCRIBER_ID',
    'type'              => 'id',
    'table'             => 'revenue_line_items',
    'isnull'            => 'true',
    'module'            => 'RevenueLineItems',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
    );
$dictionary['rt_custom']['fields']['revenue_line_items'] = array(
  	'name'          => 'revenue_line_items',
    'type'          => 'link',
    'relationship'  => 'rtcustom_RevenueLineItems',
    'module'        => 'RevenueLineItems',
    'bean_name'     => 'RevenueLineItems',
    'source'        => 'non-db',
    'vname'         => 'LBL_SUBSCRIBERS',
    );
$dictionary['rt_custom']['relationships']['rtcustom_RevenueLineItems'] = array(
    'rhs_module'		=> 'rt_custom',
    'rhs_table'			=> 'rt_custom',
    'rhs_key'			=> 'revenue_line_items_id',
    'lhs_module'		=> 'RevenueLineItems',
    'lhs_table'			=> 'RevenueLineItems',
    'lhs_key'			=> 'id',
    'relationship_type'	=> 'one-to-many',
    );
