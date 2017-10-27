<?php
$dictionary['rt_custom']['fields']['taxrates_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'taxrates_name',
    'vname'     => 'LBL_SUBSCRIBER_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'taxrates_id',
    'join_name' => 'taxrates',
    'link'      => 'taxrates',
    'table'     => 'taxrates',
    'isnull'    => 'true',
    'module'    => 'TaxRates',
    );
$dictionary['rt_custom']['fields']['taxrates_id'] = array(
    'name'              => 'taxrates_id',
    'rname'             => 'id',
    'vname'             => 'LBL_SUBSCRIBER_ID',
    'type'              => 'id',
    'table'             => 'taxrates',
    'isnull'            => 'true',
    'module'            => 'TaxRates',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
    );
$dictionary['rt_custom']['fields']['taxrates'] = array(
  	'name'          => 'taxrates',
    'type'          => 'link',
    'relationship'  => 'rtcustom_TaxRates',
    'module'        => 'TaxRates',
    'bean_name'     => 'TaxRates',
    'source'        => 'non-db',
    'vname'         => 'LBL_SUBSCRIBERS',
    );
$dictionary['rt_custom']['relationships']['rtcustom_TaxRates'] = array(
    'rhs_module'		=> 'rt_custom',
    'rhs_table'			=> 'rt_custom',
    'rhs_key'			=> 'taxrates_id',
    'lhs_module'		=> 'TaxRates',
    'lhs_table'			=> 'TaxRates',
    'lhs_key'			=> 'id',
    'relationship_type'	=> 'one-to-many',
    );
