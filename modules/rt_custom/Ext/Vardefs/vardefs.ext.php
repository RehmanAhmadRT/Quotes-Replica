<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/rt_custom/Ext/Vardefs/OpportunitiesRelate.php

$dictionary['rt_custom']['fields']['opportunities_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'opportunities_name',
    'vname'     => 'LBL_SUBSCRIBER_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'opportunities_id',
    'join_name' => 'opportunities',
    'link'      => 'opportunities',
    'table'     => 'opportunities',
    'isnull'    => 'true',
    'module'    => 'Opportunities',
    );
$dictionary['rt_custom']['fields']['opportunities_id'] = array(
    'name'              => 'opportunities_id',
    'rname'             => 'id',
    'vname'             => 'LBL_SUBSCRIBER_ID',
    'type'              => 'id',
    'table'             => 'opportunities',
    'isnull'            => 'true',
    'module'            => 'Opportunities',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
    );
$dictionary['rt_custom']['fields']['opportunities'] = array(
  	'name'          => 'opportunities',
    'type'          => 'link',
    'relationship'  => 'rtcustom_Opportunities',
    'module'        => 'Opportunities',
    'bean_name'     => 'Opportunities',
    'source'        => 'non-db',
    'vname'         => 'LBL_SUBSCRIBERS',
    );
$dictionary['rt_custom']['relationships']['rtcustom_Opportunities'] = array(
    'rhs_module'		=> 'rt_custom',
    'rhs_table'			=> 'rt_custom',
    'rhs_key'			=> 'opportunities_id',
    'lhs_module'		=> 'Opportunities',
    'lhs_table'			=> 'opportunities',
    'lhs_key'			=> 'id',
    'relationship_type'	=> 'one-to-many',
    );

?>
<?php
// Merged from custom/Extension/modules/rt_custom/Ext/Vardefs/ContactsRelate.php

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

?>
<?php
// Merged from custom/Extension/modules/rt_custom/Ext/Vardefs/ShippingAccountRelate.php

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

?>
<?php
// Merged from custom/Extension/modules/rt_custom/Ext/Vardefs/ShippingContactsRelate.php

$dictionary['rt_custom']['fields']['shipping_contacts_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'shipping_contacts_name',
    'vname'     => 'LBL_SUBSCRIBER_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'shipping_contacts_id',
    'join_name' => 'contacts',
    'link'      => 'contacts',
    'table'     => 'contacts',
    'isnull'    => 'true',
    'module'    => 'Contacts',
    );
$dictionary['rt_custom']['fields']['shipping_contacts_id'] = array(
    'name'              => 'shipping_contacts_id',
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
    'relationship'  => 'rtcustom_Contacts_Shipping',
    'module'        => 'Contacts',
    'bean_name'     => 'Contacts',
    'source'        => 'non-db',
    'vname'         => 'LBL_SUBSCRIBERS',
    );
$dictionary['rt_custom']['relationships']['rtcustom_Contacts_Shipping'] = array(
    'rhs_module'		=> 'rt_custom',
    'rhs_table'			=> 'rt_custom',
    'rhs_key'			=> 'contacts_id',
    'lhs_module'		=> 'Contacts',
    'lhs_table'			=> 'Contacts',
    'lhs_key'			=> 'id',
    'relationship_type'	=> 'one-to-many',
    );

?>
<?php
// Merged from custom/Extension/modules/rt_custom/Ext/Vardefs/TaxRatesRelate.php

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

?>
<?php
// Merged from custom/Extension/modules/rt_custom/Ext/Vardefs/ShippersRelate.php

$dictionary['rt_custom']['fields']['shippers_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'shippers_name',
    'vname'     => 'LBL_SUBSCRIBER_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'shippers_id',
    'join_name' => 'shippers',
    'link'      => 'shippers',
    'table'     => 'shippers',
    'isnull'    => 'true',
    'module'    => 'Shippers',
    );
$dictionary['rt_custom']['fields']['shippers_id'] = array(
    'name'              => 'shippers_id',
    'rname'             => 'id',
    'vname'             => 'LBL_SUBSCRIBER_ID',
    'type'              => 'id',
    'table'             => 'shippers',
    'isnull'            => 'true',
    'module'            => 'Shippers',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
    );
$dictionary['rt_custom']['fields']['shippers'] = array(
  	'name'          => 'shippers',
    'type'          => 'link',
    'relationship'  => 'rtcustom_Shippers',
    'module'        => 'Shippers',
    'bean_name'     => 'Shippers',
    'source'        => 'non-db',
    'vname'         => 'LBL_SUBSCRIBERS',
    );
$dictionary['rt_custom']['relationships']['rtcustom_Shippers'] = array(
    'rhs_module'		=> 'rt_custom',
    'rhs_table'			=> 'rt_custom',
    'rhs_key'			=> 'taxrates_id',
    'lhs_module'		=> 'Shippers',
    'lhs_table'			=> 'Shippers',
    'lhs_key'			=> 'id',
    'relationship_type'	=> 'one-to-many',
    );

?>
<?php
// Merged from custom/Extension/modules/rt_custom/Ext/Vardefs/TeamsRelate.php

$dictionary['rt_custom']['fields']['teams_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'teams_name',
    'vname'     => 'LBL_SUBSCRIBER_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'teams_id',
    'join_name' => 'teams',
    'link'      => 'teams_rt',
    'table'     => 'teams',
    'isnull'    => 'true',
    'module'    => 'Teams',
    );
$dictionary['rt_custom']['fields']['teams_id'] = array(
    'name'              => 'teams_id',
    'rname'             => 'id',
    'vname'             => 'LBL_SUBSCRIBER_ID',
    'type'              => 'id',
    'table'             => 'teams',
    'isnull'            => 'true',
    'module'            => 'Teams',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
    );
$dictionary['rt_custom']['fields']['teams_rt'] = array(
  	'name'          => 'teams_rt',
    'type'          => 'link',
    'relationship'  => 'rtcustom_Teams',
    'module'        => 'Teams',
    'bean_name'     => 'Teams',
    'source'        => 'non-db',
    'vname'         => 'LBL_SUBSCRIBERS',
    );
$dictionary['rt_custom']['relationships']['rtcustom_Teams'] = array(
    'rhs_module'		=> 'rt_custom',
    'rhs_table'			=> 'rt_custom',
    'rhs_key'			=> 'teams_id',
    'lhs_module'		=> 'Teams',
    'lhs_table'			=> 'Teams',
    'lhs_key'			=> 'id',
    'relationship_type'	=> 'one-to-many',
    );

?>
<?php
// Merged from custom/Extension/modules/rt_custom/Ext/Vardefs/UsersRelate.php

$dictionary['rt_custom']['fields']['users_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'users_name',
    'vname'     => 'LBL_SUBSCRIBER_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'users_id',
    'join_name' => 'users',
    'link'      => 'users_rt',
    'table'     => 'users',
    'isnull'    => 'true',
    'module'    => 'Users',
    );
$dictionary['rt_custom']['fields']['users_id'] = array(
    'name'              => 'users_id',
    'rname'             => 'id',
    'vname'             => 'LBL_SUBSCRIBER_ID',
    'type'              => 'id',
    'table'             => 'users',
    'isnull'            => 'true',
    'module'            => 'Users',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
    );
$dictionary['rt_custom']['fields']['users_rt'] = array(
  	'name'          => 'users_rt',
    'type'          => 'link',
    'relationship'  => 'rtcustom_Users',
    'module'        => 'Users',
    'bean_name'     => 'Users',
    'source'        => 'non-db',
    'vname'         => 'LBL_SUBSCRIBERS',
    );
$dictionary['rt_custom']['relationships']['rtcustom_Users'] = array(
    'rhs_module'		=> 'rt_custom',
    'rhs_table'			=> 'rt_custom',
    'rhs_key'			=> 'users_id',
    'lhs_module'		=> 'Users',
    'lhs_table'			=> 'Users',
    'lhs_key'			=> 'id',
    'relationship_type'	=> 'one-to-many',
    );

?>
<?php
// Merged from custom/Extension/modules/rt_custom/Ext/Vardefs/CallsRelate_Subpanel.php

$dictionary['rt_custom']['fields']['calls_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'calls_name',
    'vname'     => 'LBL_SUBSCRIBER_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'calls_id',
    'join_name' => 'calls',
    'link'      => 'calls',
    'table'     => 'calls',
    'isnull'    => 'true',
    'module'    => 'Calls',
    );
$dictionary['rt_custom']['fields']['calls_id'] = array(
    'name'              => 'calls_id',
    'rname'             => 'id',
    'vname'             => 'LBL_SUBSCRIBER_ID',
    'type'              => 'id',
    'table'             => 'calls',
    'isnull'            => 'true',
    'module'            => 'Calls',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
    );
$dictionary['rt_custom']['fields']['calls'] = array(
  	'name'          => 'calls',
    'type'          => 'link',
    'relationship'  => 'rtcustom_Calls',
    'module'        => 'Calls',
    'bean_name'     => 'Calls',
    'source'        => 'non-db',
    'vname'         => 'LBL_SUBSCRIBERS',
    );
$dictionary['rt_custom']['relationships']['rtcustom_Calls'] = array(
    'rhs_module'		=> 'rt_custom',
    'rhs_table'			=> 'rt_custom',
    'rhs_key'			=> 'calls_id',
    'lhs_module'		=> 'Calls',
    'lhs_table'			=> 'calls',
    'lhs_key'			=> 'id',
    'relationship_type'	=> 'one-to-many',
    );

?>
<?php
// Merged from custom/Extension/modules/rt_custom/Ext/Vardefs/AccountsRelate.php

$dictionary['rt_custom']['fields']['accounts_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'accounts_name',
    'vname'     => 'LBL_SUBSCRIBER_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'accounts_id',
    'join_name' => 'accounts',
    'link'      => 'accounts',
    'table'     => 'accounts',
    'isnull'    => 'true',
    'module'    => 'Accounts',
    );
$dictionary['rt_custom']['fields']['accounts_id'] = array(
    'name'              => 'accounts_id',
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
    'relationship'  => 'rtcustom_Accounts',
    'module'        => 'Accounts',
    'bean_name'     => 'Accounts',
    'source'        => 'non-db',
    'vname'         => 'LBL_SUBSCRIBERS',
    );
$dictionary['rt_custom']['relationships']['rtcustom_Accounts'] = array(
    'rhs_module'		=> 'rt_custom',
    'rhs_table'			=> 'rt_custom',
    'rhs_key'			=> 'accounts_id',
    'lhs_module'		=> 'Accounts',
    'lhs_table'			=> 'accounts',
    'lhs_key'			=> 'id',
    'relationship_type'	=> 'one-to-many',
    );

?>
<?php
// Merged from custom/Extension/modules/rt_custom/Ext/Vardefs/MeetingsRelate_Subpanel.php

$dictionary['rt_custom']['fields']['meetings_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'meetings_name',
    'vname'     => 'LBL_SUBSCRIBER_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'meetings_id',
    'join_name' => 'meetings',
    'link'      => 'meetings',
    'table'     => 'meetings',
    'isnull'    => 'true',
    'module'    => 'Meetings',
    );
$dictionary['rt_custom']['fields']['meetings_id'] = array(
    'name'              => 'meetings_id',
    'rname'             => 'id',
    'vname'             => 'LBL_SUBSCRIBER_ID',
    'type'              => 'id',
    'table'             => 'meetings',
    'isnull'            => 'true',
    'module'            => 'Meetings',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
    );
$dictionary['rt_custom']['fields']['meetings'] = array(
  	'name'          => 'meetings',
    'type'          => 'link',
    'relationship'  => 'rtcustom_Meetings',
    'module'        => 'Meetings',
    'bean_name'     => 'Meetings',
    'source'        => 'non-db',
    'vname'         => 'LBL_SUBSCRIBERS',
    );
$dictionary['rt_custom']['relationships']['rtcustom_Meetings'] = array(
    'rhs_module'		=> 'rt_custom',
    'rhs_table'			=> 'rt_custom',
    'rhs_key'			=> 'meetings_id',
    'lhs_module'		=> 'Meetings',
    'lhs_table'			=> 'meetings',
    'lhs_key'			=> 'id',
    'relationship_type'	=> 'one-to-many',
    );

?>
<?php
// Merged from custom/Extension/modules/rt_custom/Ext/Vardefs/EmailsRelate_Subpanel.php

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

?>
<?php
// Merged from custom/Extension/modules/rt_custom/Ext/Vardefs/TasksRelate_Subpanel.php

$dictionary['rt_custom']['fields']['tasks_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'tasks_name',
    'vname'     => 'LBL_SUBSCRIBER_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'tasks_id',
    'join_name' => 'tasks',
    'link'      => 'tasks',
    'table'     => 'tasks',
    'isnull'    => 'true',
    'module'    => 'Tasks',
    );
$dictionary['rt_custom']['fields']['tasks_id'] = array(
    'name'              => 'tasks_id',
    'rname'             => 'id',
    'vname'             => 'LBL_SUBSCRIBER_ID',
    'type'              => 'id',
    'table'             => 'tasks',
    'isnull'            => 'true',
    'module'            => 'Tasks',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
    );
$dictionary['rt_custom']['fields']['tasks'] = array(
  	'name'          => 'tasks',
    'type'          => 'link',
    'relationship'  => 'rtcustom_Tasks',
    'module'        => 'Tasks',
    'bean_name'     => 'Tasks',
    'source'        => 'non-db',
    'vname'         => 'LBL_SUBSCRIBERS',
    );
$dictionary['rt_custom']['relationships']['rtcustom_Tasks'] = array(
    'rhs_module'		=> 'rt_custom',
    'rhs_table'			=> 'rt_custom',
    'rhs_key'			=> 'tasks_id',
    'lhs_module'		=> 'Tasks',
    'lhs_table'			=> 'tasks',
    'lhs_key'			=> 'id',
    'relationship_type'	=> 'one-to-many',
    );

?>
<?php
// Merged from custom/Extension/modules/rt_custom/Ext/Vardefs/NotesRelate_Subpanel.php

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

?>
<?php
// Merged from custom/Extension/modules/rt_custom/Ext/Vardefs/DocumentsRelate_Subpanel.php

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

?>
<?php
// Merged from custom/Extension/modules/rt_custom/Ext/Vardefs/ProductsRelate.php

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

?>
<?php
// Merged from custom/Extension/modules/rt_custom/Ext/Vardefs/CurrenciesRelate.php

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

?>
<?php
// Merged from custom/Extension/modules/rt_custom/Ext/Vardefs/RevenueLineItemsRelate.php

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

?>
<?php
// Merged from custom/Extension/modules/rt_custom/Ext/Vardefs/ProductBundlesRelate.php

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

?>
<?php
// Merged from custom/Extension/modules/rt_custom/Ext/Vardefs/customFields.php

$dictionary['rt_custom']['fields']['quote_name']['name'] = 'quote_name';
$dictionary['rt_custom']['fields']['quote_name']['vname'] = 'quote_name';
$dictionary['rt_custom']['fields']['quote_name']['type'] = 'varchar';

$dictionary['rt_custom']['fields']['order_num']['name'] = 'order_num';
$dictionary['rt_custom']['fields']['order_num']['vname'] = 'order_num';
$dictionary['rt_custom']['fields']['order_num']['type'] = 'varchar';

$dictionary['rt_custom']['fields']['date_quote_expected_closed']['name'] = 'date_quote_expected_closed';
$dictionary['rt_custom']['fields']['date_quote_expected_closed']['vname'] = 'date_quote_expected_closed';
$dictionary['rt_custom']['fields']['date_quote_expected_closed']['type'] = 'date';

$dictionary['rt_custom']['fields']['quote_stage']['name'] = 'quote_stage';
$dictionary['rt_custom']['fields']['quote_stage']['vname'] = 'quote_stage';
$dictionary['rt_custom']['fields']['quote_stage']['type'] = 'enum';

$dictionary['rt_custom']['fields']['payment_terms']['name'] = 'payment_terms';
$dictionary['rt_custom']['fields']['payment_terms']['vname'] = 'payment_terms';
$dictionary['rt_custom']['fields']['payment_terms']['type'] = 'enum';

$dictionary['rt_custom']['fields']['billing_address']['name'] = 'billing_address';
$dictionary['rt_custom']['fields']['billing_address']['vname'] = 'billing_address';
$dictionary['rt_custom']['fields']['billing_address']['type'] = 'varchar';

$dictionary['rt_custom']['fields']['billing_city_address']['name'] = 'billing_city_address';
$dictionary['rt_custom']['fields']['billing_city_address']['vname'] = 'billing_city_address';
$dictionary['rt_custom']['fields']['billing_city_address']['type'] = 'varchar';

$dictionary['rt_custom']['fields']['billing_state_address']['name'] = 'billing_state_address';
$dictionary['rt_custom']['fields']['billing_state_address']['vname'] = 'billing_state_address';
$dictionary['rt_custom']['fields']['billing_state_address']['type'] = 'varchar';

$dictionary['rt_custom']['fields']['billing_postal_address']['name'] = 'billing_postal_address';
$dictionary['rt_custom']['fields']['billing_postal_address']['vname'] = 'billing_postal_address';
$dictionary['rt_custom']['fields']['billing_postal_address']['type'] = 'varchar';

$dictionary['rt_custom']['fields']['billing_country_address']['name'] = 'billing_country_address';
$dictionary['rt_custom']['fields']['billing_country_address']['vname'] = 'billing_country_address';
$dictionary['rt_custom']['fields']['billing_country_address']['type'] = 'varchar';

$dictionary['rt_custom']['fields']['shipping_address']['name'] = 'shipping_address';
$dictionary['rt_custom']['fields']['shipping_address']['vname'] = 'shipping_address';
$dictionary['rt_custom']['fields']['shipping_address']['type'] = 'varchar';

$dictionary['rt_custom']['fields']['shipping_city_address']['name'] = 'shipping_city_address';
$dictionary['rt_custom']['fields']['shipping_city_address']['vname'] = 'shipping_city_address';
$dictionary['rt_custom']['fields']['shipping_city_address']['type'] = 'varchar';

$dictionary['rt_custom']['fields']['shipping_state_address']['name'] = 'shipping_state_address';
$dictionary['rt_custom']['fields']['shipping_state_address']['vname'] = 'shipping_state_address';
$dictionary['rt_custom']['fields']['shipping_state_address']['type'] = 'varchar';

$dictionary['rt_custom']['fields']['shipping_postal_address']['name'] = 'shipping_postal_address';
$dictionary['rt_custom']['fields']['shipping_postal_address']['vname'] = 'shipping_postal_address';
$dictionary['rt_custom']['fields']['shipping_postal_address']['type'] = 'varchar';

$dictionary['rt_custom']['fields']['shipping_country_address']['name'] = 'shipping_country_address';
$dictionary['rt_custom']['fields']['shipping_country_address']['vname'] = 'shipping_country_address';
$dictionary['rt_custom']['fields']['shipping_country_address']['type'] = 'varchar';

$dictionary['rt_custom']['fields']['quote_currencies']['name'] = 'quote_currencies';
$dictionary['rt_custom']['fields']['quote_currencies']['vname'] = 'quote_currencies';
$dictionary['rt_custom']['fields']['quote_currencies']['type'] = 'enum';

$dictionary['rt_custom']['fields']['checkbox_line_numbers']['name'] = 'checkbox_line_numbers';
$dictionary['rt_custom']['fields']['checkbox_line_numbers']['vname'] = 'checkbox_line_numbers';
$dictionary['rt_custom']['fields']['checkbox_line_numbers']['type'] = 'bool';

$dictionary['rt_custom']['fields']['date_original_po']['name'] = 'date_original_po';
$dictionary['rt_custom']['fields']['date_original_po']['vname'] = 'date_original_po';
$dictionary['rt_custom']['fields']['date_original_po']['type'] = 'date';

$dictionary['rt_custom']['fields']['date_actual_close']['name'] = 'date_actual_close';
$dictionary['rt_custom']['fields']['date_actual_close']['vname'] = 'date_actual_close';
$dictionary['rt_custom']['fields']['date_actual_close']['type'] = 'date';

$dictionary['rt_custom']['fields']['date_shipped']['name'] = 'date_shipped';
$dictionary['rt_custom']['fields']['date_shipped']['vname'] = 'date_shipped';
$dictionary['rt_custom']['fields']['date_shipped']['type'] = 'date';

$dictionary['rt_custom']['fields']['order_stage']['name'] = 'order_stage';
$dictionary['rt_custom']['fields']['order_stage']['vname'] = 'order_stage';
$dictionary['rt_custom']['fields']['order_stage']['type'] = 'enum';


$dictionary['rt_custom']['fields']['subtotal'] = array(
    'name' => 'subtotal',
    'vname' => 'LBL_SUBTOTAL',
    'dbType' => 'decimal',
    'type' => 'currency',
    'len' => '26,6',
    'related_fields' =>
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
    'formula' => 'rollupCurrencySum($product_bundles, "subtotal")',
    'calculated' => true,
    'enforced' => true,
);


$dictionary['rt_custom']['fields']['shipping'] = array(
  'name' => 'shipping',
  'vname' => 'LBL_SHIPPING',
  'dbType' => 'decimal',
  'type' => 'currency',
  'len' => '26,6',
  'related_fields' =>
  array (
    0 => 'currency_id',
    1 => 'base_rate',
  ),
  'default' => '0',
  'formula' => 'ifElse(equal($shipping,""),"0.00",$shipping)',
  'calculated' => true,
);


$dictionary['rt_custom']['fields']['subtotal_usdollar'] = array(
  'name' => 'subtotal_usdollar',
  'group' => 'subtotal',
  'vname' => 'LBL_SUBTOTAL_USDOLLAR',
  'dbType' => 'decimal',
  'type' => 'currency',
  'is_base_currency' => true,
  'len' => '26,6',
  'audited' => true,
  'studio' =>
  array (
    'wirelesseditview' => false,
    'wirelessdetailview' => false,
    'wirelesslistview' => false,
    'wireless_basic_search' => false,
    'wireless_advanced_search' => false,
    'mobile' => false,
  ),
  'related_fields' =>
  array (
    0 => 'currency_id',
    1 => 'base_rate',
  ),
  'formula' => 'ifElse(isNumeric($subtotal), currencyDivide($subtotal,$base_rate), "")',
  'calculated' => true,
  'enforced' => true,
);


$dictionary['rt_custom']['fields']['shipping'] = array(
  'name' => 'shipping',
  'vname' => 'LBL_SHIPPING',
  'dbType' => 'decimal',
  'type' => 'currency',
  'len' => '26,6',
  'related_fields' =>
  array (
    0 => 'currency_id',
    1 => 'base_rate',
  ),
  'default' => '0',
  'formula' => 'ifElse(equal($shipping,""),"0.00",$shipping)',
  'calculated' => true,
);

$dictionary['rt_custom']['fields']['shipping_usdollar'] = array(
  'name' => 'shipping_usdollar',
  'vname' => 'LBL_SHIPPING_USDOLLAR',
  'group' => 'shipping',
  'dbType' => 'decimal',
  'type' => 'currency',
  'currency_id' => '-99',
  'is_base_currency' => true,
  'len' => '26,6',
  'studio' =>
  array (
    'wirelesseditview' => false,
    'wirelessdetailview' => false,
    'wirelesslistview' => false,
    'wireless_basic_search' => false,
    'wireless_advanced_search' => false,
    'mobile' => false,
  ),
  'related_fields' =>
  array (
    0 => 'currency_id',
    1 => 'base_rate',
  ),
  'formula' => 'ifElse(isNumeric($shipping), currencyDivide($shipping, $base_rate), "")',
  'calculated' => true,
  'enforced' => true,
);

$dictionary['rt_custom']['fields']['discount'] = array(
  'name' => 'discount',
  'vname' => 'LBL_DISCOUNT_TOTAL',
  'dbType' => 'decimal',
  'type' => 'currency',
  'len' => '26,6',
  'related_fields' =>
  array (
    0 => 'currency_id',
    1 => 'base_rate',
  )
);

$dictionary['rt_custom']['fields']['deal_tot'] = array(
  'name' => 'deal_tot',
  'vname' => 'LBL_DEAL_TOT',
  'dbType' => 'decimal',
  'type' => 'currency',
  'len' => '26,2',
  'formula' => 'rollupCurrencySum($product_bundles, "deal_tot")',
  'calculated' => true,
  'enforced' => true,
);

$dictionary['rt_custom']['fields']['deal_tot_discount_percentage'] = array(
  'name' => 'deal_tot_discount_percentage',
  'vname' => 'LBL_DEAL_TOT_PERCENTAGE',
  'dbType' => 'decimal',
  'type' => 'currency',
  'len' => '26,2',
  'formula' => 'ifElse(not(equal($subtotal_usdollar, 0)), mul(divide($deal_tot_usdollar, $subtotal_usdollar),100), 0)',
  'default' => '0',
  'calculated' => true,
  'enforced' => true,
);

$dictionary['rt_custom']['fields']['deal_tot_usdollar'] = array(
  'name' => 'deal_tot_usdollar',
  'vname' => 'LBL_DEAL_TOT_USDOLLAR',
  'dbType' => 'decimal',
  'type' => 'currency',
  'currency_id' => '-99',
  'is_base_currency' => true,
  'len' => '26,2',
  'studio' =>
  array (
    'wirelesseditview' => false,
    'wirelessdetailview' => false,
    'wirelesslistview' => false,
    'wireless_basic_search' => false,
    'wireless_advanced_search' => false,
    'mobile' => false,
  ),
  'formula' => 'ifElse(isNumeric($deal_tot), currencyDivide($deal_tot, $base_rate), "")',
  'calculated' => true,
  'enforced' => true,
);

$dictionary['rt_custom']['fields']['new_sub'] = array(
  'name' => 'new_sub',
  'vname' => 'LBL_NEW_SUB',
  'dbType' => 'decimal',
  'type' => 'currency',
  'len' => '26,6',
  'related_fields' =>
  array (
    0 => 'currency_id',
    1 => 'base_rate',
  ),
  'formula' => 'rollupCurrencySum($product_bundles, "new_sub")',
  'calculated' => true,
  'enforced' => true,
);

$dictionary['rt_custom']['fields']['new_sub_usdollar'] = array(
  'name' => 'new_sub_usdollar',
  'vname' => 'LBL_NEW_SUB_USDOLLAR',
  'dbType' => 'decimal',
  'type' => 'currency',
  'currency_id' => '-99',
  'is_base_currency' => true,
  'len' => '26,6',
  'studio' =>
  array (
    'wirelesseditview' => false,
    'wirelessdetailview' => false,
    'wirelesslistview' => false,
    'wireless_basic_search' => false,
    'wireless_advanced_search' => false,
    'mobile' => false,
  ),
  'related_fields' =>
  array (
    0 => 'currency_id',
    1 => 'base_rate',
  ),
  'formula' => 'ifElse(isNumeric($new_sub), currencyDivide($new_sub, $base_rate), "")',
  'calculated' => true,
  'enforced' => true,
);

$dictionary['rt_custom']['fields']['taxable_subtotal'] = array(
  'name' => 'taxable_subtotal',
  'vname' => 'LBL_TAXABLE_SUBTOTAL',
  'type' => 'currency',
  'len' => '26,6',
  'disable_num_format' => true,
  'comment' => 'Rollup of product bundles taxable_subtotal values',
  'formula' => 'rollupCurrencySum($product_bundles, "taxable_subtotal")',
  'calculated' => true,
  'enforced' => true,
);

$dictionary['rt_custom']['fields']['tax'] = array(
  'name' => 'tax',
  'vname' => 'LBL_TAX',
  'dbType' => 'decimal',
  'type' => 'currency',
  'len' => '26,6',
  'related_fields' =>
  array (
    0 => 'currency_id',
    1 => 'base_rate',
    2 => 'taxrate_value',
    3 => 'taxable_subtotal',
  ),
  'formula' => 'currencyMultiply($taxable_subtotal, currencyDivide($taxrate_value, "100"))',
  'default' => '0',
  'calculated' => true,
  'enforced' => true,
);

$dictionary['rt_custom']['fields']['tax_usdollar'] = array(
  'name' => 'tax_usdollar',
  'vname' => 'LBL_TAX_USDOLLAR',
  'dbType' => 'decimal',
  'group' => 'tax',
  'type' => 'currency',
  'is_base_currency' => true,
  'len' => '26,6',
  'audited' => true,
  'studio' =>
  array (
    'wirelesseditview' => false,
    'wirelessdetailview' => false,
    'wirelesslistview' => false,
    'wireless_basic_search' => false,
    'wireless_advanced_search' => false,
    'mobile' => false,
  ),
  'related_fields' =>
  array (
    0 => 'currency_id',
    1 => 'base_rate',
  ),
  'formula' => 'ifElse(isNumeric($tax), currencyDivide($tax, $base_rate), "")',
  'calculated' => true,
  'enforced' => true,
);

$dictionary['rt_custom']['fields']['total'] = array(
  'name' => 'total',
  'vname' => 'LBL_TOTAL',
  'dbType' => 'decimal',
  'type' => 'currency',
  'len' => '26,6',
  'formula' => 'currencyAdd(
            rollupCurrencySum($product_bundles, "total"),
            ifElse(isNumeric($tax), $tax, "0"),
            ifElse(isNumeric($shipping), $shipping, "0")
        )',
  'calculated' => true,
  'enforced' => true,
);

$dictionary['rt_custom']['fields']['total_usdollar'] = array(
  'name' => 'total_usdollar',
  'vname' => 'LBL_TOTAL_USDOLLAR',
  'dbType' => 'decimal',
  'group' => 'total',
  'type' => 'currency',
  'currency_id' => '-99',
  'is_base_currency' => true,
  'len' => '26,6',
  'audited' => true,
  'enable_range_search' => true,
  'options' => 'numeric_range_search_dom',
  'studio' =>
  array (
    'wirelesseditview' => false,
    'wirelessdetailview' => false,
    'wirelesslistview' => false,
    'wireless_basic_search' => false,
    'wireless_advanced_search' => false,
    'mobile' => false,
  ),
  'related_fields' =>
  array (
    0 => 'currency_id',
    1 => 'base_rate',
  ),
  'formula' => 'ifElse(isNumeric($total), currencyDivide($total, $base_rate), "")',
  'calculated' => true,
  'enforced' => true,
);


$dictionary['rt_custom']['fields']['product_bundles'] = array(
    'name' => 'product_bundles',
    'type' => 'link',
    'vname' => 'LBL_PRODUCT_BUNDLES',
    'module' => 'ProductBundles',
    'bean_name' => 'ProductBundle',
    'relationship' => 'rtcustom_ProductBundles',
    'rel_fields' =>
    array (
      'bundle_index' =>
      array (
        'type' => 'integer',
      ),
    ),
    'source' => 'non-db',
);


?>
