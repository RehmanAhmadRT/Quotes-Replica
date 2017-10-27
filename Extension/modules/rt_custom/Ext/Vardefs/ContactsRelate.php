<?php
$dictionary['rt_custom']['fields']['contacts_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'contacts_name',
    'vname'     => 'LBL_SUBSCRIBER_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'contacts_id',
    'join_name' => 'contacts',
    'link'      => 'contacts',
    'table'     => 'contacts',
    'isnull'    => 'true',
    'module'    => 'Contacts',
    );
$dictionary['rt_custom']['fields']['contacts_id'] = array(
    'name'              => 'contacts_id',
    'rname'             => 'id',
    'vname'             => 'LBL_SUBSCRIBER_ID',
    'type'              => 'id',
    'table'             => 'contacts',
    'isnull'            => 'true',
    'module'            => 'Contacts',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
    );
$dictionary['rt_custom']['fields']['contacts'] = array(
  	'name'          => 'contacts',
    'type'          => 'link',
    'relationship'  => 'rtcustom_Contacts',
    'module'        => 'Contacts',
    'bean_name'     => 'Contacts',
    'source'        => 'non-db',
    'vname'         => 'LBL_SUBSCRIBERS',
    );
$dictionary['rt_custom']['relationships']['rtcustom_Contacts'] = array(
    'rhs_module'		=> 'rt_custom',
    'rhs_table'			=> 'rt_custom',
    'rhs_key'			=> 'contacts_id',
    'lhs_module'		=> 'Contacts',
    'lhs_table'			=> 'Contacts',
    'lhs_key'			=> 'id',
    'relationship_type'	=> 'one-to-many',
    );
