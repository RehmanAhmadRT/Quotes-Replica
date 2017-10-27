<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
$module_name = 'rt_custom';
$viewdefs[$module_name]['base']['view']['record'] = array(
    'buttons' => array(
        array(
            'type' => 'button',
            'name' => 'cancel_button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
            'showOn' => 'edit',
            'events' => array(
                'click' => 'button:cancel_button:click',
            )
        ),
        array(
            'type' => 'rowaction',
            'event' => 'button:save_button:click',
            'name' => 'save_button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'css_class' => 'btn btn-primary',
            'showOn' => 'edit',
            'acl_action' => 'edit',
        ),
        array(
            'type' => 'actiondropdown',
            'name' => 'main_dropdown',
            'primary' => true,
            'showOn' => 'view',
            'buttons' => array(
                array(
                    'type' => 'rowaction',
                    'event' => 'button:edit_button:click',
                    'name' => 'edit_button',
                    'label' => 'LBL_EDIT_BUTTON_LABEL',
                    'acl_action' => 'edit',
                ),
                array(
                    'type' => 'shareaction',
                    'name' => 'share',
                    'label' => 'LBL_RECORD_SHARE_BUTTON',
                    'acl_action' => 'view',
                ),
                array(
                    'type' => 'pdfaction',
                    'name' => 'download-pdf',
                    'label' => 'LBL_PDF_VIEW',
                    'action' => 'download',
                    'acl_action' => 'view',
                ),
                array(
                    'type' => 'pdfaction',
                    'name' => 'email-pdf',
                    'label' => 'LBL_PDF_EMAIL',
                    'action' => 'email',
                    'acl_action' => 'view',
                ),
                array(
                    'type' => 'divider',
                ),
                array(
                    'type' => 'rowaction',
                    'event' => 'button:find_duplicates_button:click',
                    'name' => 'find_duplicates_button',
                    'label' => 'LBL_DUP_MERGE',
                    'acl_action' => 'edit',
                ),
                array(
                    'type' => 'rowaction',
                    'event' => 'button:duplicate_button:click',
                    'name' => 'duplicate_button',
                    'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
                    'acl_module' => $module_name,
                    'acl_action' => 'create',
                ),
                array(
                    'type' => 'rowaction',
                    'event' => 'button:audit_button:click',
                    'name' => 'audit_button',
                    'label' => 'LNK_VIEW_CHANGE_LOG',
                    'acl_action' => 'view',
                ),
                array(
                    'type' => 'divider',
                ),
                array(
                    'type' => 'rowaction',
                    'event' => 'button:delete_button:click',
                    'name' => 'delete_button',
                    'label' => 'LBL_DELETE_BUTTON_LABEL',
                    'acl_action' => 'delete',
                ),
            ),
        ),
        array(
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
        ),
    ),
    'panels' => array(
        array(
            'name' => 'panel_header',
            'label' => 'LBL_RECORD_HEADER',
            'header' => true,
            'fields' => array(
                array(
                    'name'          => 'picture',
                    'type'          => 'avatar',
                    'width'         => 42,
                    'height'        => 42,
                    'dismiss_label' => true,
                    'readonly'      => true,
                ),
                'name',
                array(
                    'name' => 'favorite',
                    'label' => 'LBL_FAVORITE',
                    'type' => 'favorite',
                    'readonly' => true,
                    'dismiss_label' => true,
                ),
                array(
                    'name' => 'follow',
                    'label'=> 'LBL_FOLLOW',
                    'type' => 'follow',
                    'readonly' => true,
                    'dismiss_label' => true,
                ),
            ),
        ),
        array(
            'name' => 'panel_body',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => array(
              array(
                'name' => 'quote_name',
                'label' => 'LBL_QUOTE_ID',
                'readonly' => true,
              ),
              array(
                  'name' => 'opportunities_name',
                  'label' => 'LBL_OPPORTUNITY',
              ),
              array(
                  'name' => 'order_num',
                  'label' => 'LBL_ORDER_NUM',
              ),
              array (
                'name' => 'quote_stage',
                'label' => 'LBL_QUOTE_STAGE',
                'default_value' => ' ',
                'options' => 'quote_stage_dom_custom',
                'mass_update' => false,
                'len' => 100,
              ),
              array (
                'name' => 'payment_terms',
                'label' => 'LBL_PAYMENT_TERMS',
                'default_value' => ' ',
                'options' => 'quote_payment_terms',
                'mass_update' => false,
                'len' => 100,
              ),
              array (
                'name' => 'date_quote_expected_closed',
                'label' => 'LBL_DATE_QUOTE_EXPECTED_CLOSED',
                'type' => 'date',
              ),
            ),
        ),
        array(
          'name' => 'panel_billing_shipping',
          'label' => 'LBL_PANEL_BILLING_SHIPPING',
          'columns' => 2,
          'hide' => true,
          'labelsOnTop' => true,
          'placeholders' => true,
          'fields' => array(
            array(
                'name' => 'accounts_name',
                'label' => 'LBL_BILLING_ACCOUNT_NAME',
            ),
            array(
              'name' => 'shipping_accounts_name',
              'label' => 'LBL_SHIPPING_ACCOUNT',
            ),
            array(
                'name' => 'contacts_name',
                'label' => 'LBL_BILLING_CONTACT_NAME',
            ),
            array(
              'name' => 'shipping_contacts_name',
              'label' => 'LBL_SHIPPING_CONTACT',
            ),

            array(
              'name' => 'billing_address',
              'label' => 'LBL_BILLING_ADDRESS',
              'type' => 'fieldset',
              'fields' => array(
                      array(
                          'name' => 'billing_address',
                          'placeholder' => 'LBL_BILLING_ADDRESS',
                      ),
                      array(
                          'name' => 'billing_city_address',
                          'placeholder' => 'LBL_BILLING_CITY_ADDRESS',
                      ),
                      array(
                          'name' => 'billing_state_address',
                          'placeholder' => 'LBL_BILLING_STATE_ADDRESS',
                      ),
                      array(
                          'name' => 'billing_postal_address',
                          'placeholder' => 'LBL_BILLING_POSTAL_ADDRESS',
                      ),
                      array(
                          'name' => 'billing_country_address',
                          'placeholder' => 'LBL_BILLING_COUNTRY_ADDRESS',
                      ),
              ),
            ),
            array(
              'name' => 'shipping_address',
              'label' => 'LBL_SHIPPING_ADDRESS',
              'type' => 'fieldset',
              'fields' => array(
                      array(
                          'name' => 'shipping_address',
                          'placeholder' => 'LBL_SHIPPING_ADDRESS',
                      ),
                      array(
                          'name' => 'shipping_city_address',
                          'placeholder' => 'LBL_SHIPPING_CITY_ADDRESS',
                      ),
                      array(
                          'name' => 'shipping_state_address',
                          'placeholder' => 'LBL_SHIPPING_STATE_ADDRESS',
                      ),
                      array(
                          'name' => 'shipping_postal_address',
                          'placeholder' => 'LBL_SHIPPING_POSTAL_ADDRESS',
                      ),
                      array(
                          'name' => 'shipping_country_address',
                          'placeholder' => 'LBL_SHIPPING_COUNTRY_ADDRESS',
                      ),
              ),
            ),


          ),
        ),

        array(
            'name' => 'quote_settings',
            'label' => 'LBL_PANEL_QUOTE_SETTINGS',
            'hide' => true,
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => array(
              array (
                'name' => 'quote_currencies',
                'options' => 'quote_currencies',
                'label' => 'LBL_QUOTE_CURRENCIES',
                'module' => 'rt_custom',
                'default_value' => ' ',
                'mass_update' => false,

              ),
              array(
                  'name' => 'taxrates_name',
                  'label' => 'LBL_TAX_RATES',
              ),
              array(
               'name' => 'checkbox_line_numbers',
               'label' => 'LBL_CHECKBOX_LINE_NUMBERS',
               'type' => 'bool',
               'module' => 'rt_custom',
               'default_value' => true,
             ),

            ),
        ),
        array(
            'name' => 'show_more',
            'label' => 'LBL_PANEL_SHOW_MORE',
            'hide' => true,
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => array(
              array (
                'name' => 'date_original_po',
                'label' => 'LBL_DATE_ORIGINAL_PO',
                'type' => 'date',
              ),
              array (
                'name' => 'date_actual_close',
                'label' => 'LBL_DATE_ACTUAL_CLOSE',
                'type' => 'date',
              ),
              array (
                'name' => 'date_shipped',
                'label' => 'LBL_DATE_SHIPPED',
                'type' => 'date',
              ),
              array(
                  'name' => 'shippers_name',
                  'label' => 'LBL_SHIPPERS',
              ),
              array (
                'name' => 'order_stage',
                'label' => 'LBL_ORDER_STAGE',
                'default_value' => ' ',
                'options' => 'order_stage',
                'mass_update' => false,
              ),
              array(
                'name' => 'teams_name',
                'label' => 'LBL_TEAMS',
              ),
              array(
                'name' => 'users_name',
                'label' => 'LBL_USER',
              ),
              array(
                  'name' => 'date_entered_by',
                  'readonly' => true,
                  'inline' => true,
                  'type' => 'fieldset',
                  'label' => 'LBL_DATE_ENTERED',
                  'fields' => array(
                      array(
                          'name' => 'date_entered',
                      ),
                      array(
                          'type' => 'label',
                          'default_value' => 'LBL_BY',
                      ),
                      array(
                          'name' => 'created_by_name',
                      ),
                  ),
              ),
              array(
                  'name' => 'date_modified_by',
                  'readonly' => true,
                  'inline' => true,
                  'type' => 'fieldset',
                  'label' => 'LBL_DATE_MODIFIED',
                  'fields' => array(
                      array(
                          'name' => 'date_modified',
                      ),
                      array(
                          'type' => 'label',
                          'default_value' => 'LBL_BY',
                      ),
                      array(
                          'name' => 'modified_by_name',
                      ),
                  ),
              ),
            ),
        ),
    ),
);
