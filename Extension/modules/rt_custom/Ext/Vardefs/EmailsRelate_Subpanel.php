<?php
$dictionary['rt_custom']['fields']['emails_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'emails_name',
    'vname'     => 'LBL_SUBSCRIBER_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'emails_id',
    'join_name' => 'emails',
    'link'      => 'emails',
    'table'     => 'emails',
    'isnull'    => 'true',
    'module'    => 'Emails',
    );
$dictionary['rt_custom']['fields']['emails_id'] = array(
    'name'              => 'emails_id',
    'rname'             => 'id',
    'vname'             => 'LBL_SUBSCRIBER_ID',
    'type'              => 'id',
    'table'             => 'emails',
    'isnull'            => 'true',
    'module'            => 'Emails',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
    );
$dictionary['rt_custom']['fields']['emails'] = array(
  	'name'          => 'emails',
    'type'          => 'link',
    'relationship'  => 'rtcustom_Emails',
    'module'        => 'Emails',
    'bean_name'     => 'Emails',
    'source'        => 'non-db',
    'vname'         => 'LBL_SUBSCRIBERS',
    );
$dictionary['rt_custom']['relationships']['rtcustom_Emails'] = array(
    'rhs_module'		=> 'rt_custom',
    'rhs_table'			=> 'rt_custom',
    'rhs_key'			=> 'emails_id',
    'lhs_module'		=> 'Emails',
    'lhs_table'			=> 'emails',
    'lhs_key'			=> 'id',
    'relationship_type'	=> 'one-to-many',
    );
