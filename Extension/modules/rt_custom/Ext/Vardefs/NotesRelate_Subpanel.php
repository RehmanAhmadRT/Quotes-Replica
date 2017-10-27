<?php
$dictionary['rt_custom']['fields']['notes_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'notes_name',
    'vname'     => 'LBL_SUBSCRIBER_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'notes_id',
    'join_name' => 'notes',
    'link'      => 'notes',
    'table'     => 'notes',
    'isnull'    => 'true',
    'module'    => 'Notes',
    );
$dictionary['rt_custom']['fields']['notes_id'] = array(
    'name'              => 'notes_id',
    'rname'             => 'id',
    'vname'             => 'LBL_SUBSCRIBER_ID',
    'type'              => 'id',
    'table'             => 'notes',
    'isnull'            => 'true',
    'module'            => 'Notes',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
    );
$dictionary['rt_custom']['fields']['notes'] = array(
  	'name'          => 'notes',
    'type'          => 'link',
    'relationship'  => 'rtcustom_Notes',
    'module'        => 'Notes',
    'bean_name'     => 'Notes',
    'source'        => 'non-db',
    'vname'         => 'LBL_SUBSCRIBERS',
    );
$dictionary['rt_custom']['relationships']['rtcustom_Notes'] = array(
    'rhs_module'		=> 'rt_custom',
    'rhs_table'			=> 'rt_custom',
    'rhs_key'			=> 'notes_id',
    'lhs_module'		=> 'Notes',
    'lhs_table'			=> 'notes',
    'lhs_key'			=> 'id',
    'relationship_type'	=> 'one-to-many',
    );
