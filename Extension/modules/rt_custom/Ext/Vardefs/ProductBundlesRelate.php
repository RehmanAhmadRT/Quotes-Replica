<?php
$dictionary['rt_custom']['fields']['product_bundles_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'product_bundles_name',
    'vname'     => 'LBL_SUBSCRIBER_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'product_bundles_id',
    'join_name' => 'product_bundles',
    'link'      => 'product_bundles',
    'table'     => 'product_bundles',
    'isnull'    => 'true',
    'module'    => 'ProductBundles',
    );
$dictionary['rt_custom']['fields']['product_bundles_id'] = array(
    'name'              => 'product_bundles_id',
    'rname'             => 'id',
    'vname'             => 'LBL_SUBSCRIBER_ID',
    'type'              => 'id',
    'table'             => 'product_bundles',
    'isnull'            => 'true',
    'module'            => 'ProductBundles',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
    );
$dictionary['rt_custom']['fields']['product_bundles'] = array(
  	'name'          => 'product_bundles',
    'type'          => 'link',
    'relationship'  => 'rtcustom_ProductBundles',
    'module'        => 'ProductBundles',
    'bean_name'     => 'ProductBundle',
    'source'        => 'non-db',
    'vname'         => 'LBL_SUBSCRIBERS',
    );
$dictionary['rt_custom']['relationships']['rtcustom_ProductBundles'] = array(
    'rhs_module'		=> 'rt_custom',
    'rhs_table'			=> 'rt_custom',
    'rhs_key'			=> 'product_bundles_id',
    'lhs_module'		=> 'ProductBundles',
    'lhs_table'			=> 'ProductBundles',
    'lhs_key'			=> 'id',
    'relationship_type'	=> 'one-to-many',
    );
