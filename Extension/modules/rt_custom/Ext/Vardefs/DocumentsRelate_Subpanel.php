<?php
$dictionary['rt_custom']['fields']['documents_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'documents_name',
    'vname'     => 'LBL_SUBSCRIBER_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'documents_id',
    'join_name' => 'documents',
    'link'      => 'documents',
    'table'     => 'documents',
    'isnull'    => 'true',
    'module'    => 'Documents',
    );
$dictionary['rt_custom']['fields']['documents_id'] = array(
    'name'              => 'documents_id',
    'rname'             => 'id',
    'vname'             => 'LBL_SUBSCRIBER_ID',
    'type'              => 'id',
    'table'             => 'documents',
    'isnull'            => 'true',
    'module'            => 'Documents',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
    );
$dictionary['rt_custom']['fields']['documents'] = array(
  	'name'          => 'documents',
    'type'          => 'link',
    'relationship'  => 'rtcustom_Documents',
    'module'        => 'Documents',
    'bean_name'     => 'Documents',
    'source'        => 'non-db',
    'vname'         => 'LBL_SUBSCRIBERS',
    );
$dictionary['rt_custom']['relationships']['rtcustom_Documents'] = array(
    'rhs_module'		=> 'rt_custom',
    'rhs_table'			=> 'rt_custom',
    'rhs_key'			=> 'documents_id',
    'lhs_module'		=> 'Documents',
    'lhs_table'			=> 'documents',
    'lhs_key'			=> 'id',
    'relationship_type'	=> 'one-to-many',
    );
