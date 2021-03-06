<?php
// WARNING: The contents of this file are auto-generated.


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
          'label' => 'LBL_PANEL_HEADER',
          'header' => true,
          'fields' => array(
              array(
                  'name' => 'picture',
                  'type' => 'avatar',
                  'size' => 'large',
                  'dismiss_label' => true,
                  'readonly' => true,
              ),
              array(
                  'name' => 'name',
                  'events' => array(
                      'keyup' => 'update:quote',
                  ),
                  'related_fields' => array(
                      array(
                          'name' => 'bundles',
                          //Probably don't need ALL these...
                          'fields' => array(
                              'id',
                              'bundle_stage',
                              'currency_id',
                              'base_rate',
                              'currencies',
                              'name',
                              'deal_tot',
                              'deal_tot_usdollar',
                              'deal_tot_discount_percentage',
                              'new_sub',
                              'new_sub_usdollar',
                              'position',
                              'related_records',
                              'shipping',
                              'shipping_usdollar',
                              'subtotal',
                              'subtotal_usdollar',
                              'tax',
                              'tax_usdollar',
                              'taxrate_id',
                              'team_count',
                              'team_count_link',
                              'team_name',
                              'taxable_subtotal',
                              'total',
                              'total_usdollar',
                              'default_group',
                              array(
                                  'name' => 'product_bundle_items',
                                  'fields' => array(
                                      'name',
                                      'quote_id',
                                      'description',
                                      'quantity',
                                      'product_template_name',
                                      'product_template_id',
                                      'deal_calc',
                                      'mft_part_num',
                                      'discount_price',
                                      'discount_amount',
                                      'tax',
                                      'tax_class',
                                      'subtotal',
                                      'position',
                                      'currency_id',
                                      'base_rate',
                                      'discount_select',
                                      'total_amount',
                                  ),
                                  'max_num' => -1,
                              ),
                          ),
                          'max_num' => -1,
                          'order_by' => 'position:asc',
                      ),
                  ),
              ),
              array(
                  'name' => 'favorite',
                  'label' => 'LBL_FAVORITE',
                  'type' => 'favorite',
                  'dismiss_label' => true,
              ),
              array(
                  'name' => 'follow',
                  'label' => 'LBL_FOLLOW',
                  'type' => 'follow',
                  'readonly' => true,
                  'dismiss_label' => true,
              ),
              array(
                  'name' => 'converted',
                  'label' => 'LBL_CONVERTED',
                  'type' => 'badge',
                  'readonly' => true,
                  'dismiss_label' => true,
                  'related_fields' => array(
                      'opportunity_id',
                  ),
                  'badge_compare' => array(
                      'comparison' => 'notEmpty',
                  ),
                  'badge_label_map' => array(
                      'false' => 'LBL_NOT_CONVERTED',
                      'true' => 'LBL_CONVERTED',
                  ),
                  'css_class_map' => array(
                      'false' => '',
                      'true' => 'label-success',
                  ),
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
                'assigned_user_name',
                'team_name',
                array(
                    'name' => 'tag',
                    'span' => 12,
                ),
            ),
        ),
        array(
            'name' => 'panel_shipping_body',
            'label' => 'LBL_SHIPPING_BODY',
            'panelDefault' => 'collapsed',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => array(
                'billing_account_name',
                'shipping_account_name',
                'billing_contact_name',
                'shipping_contact_name',
                array(
                    'name' => 'billing_address',
                    'type' => 'fieldset',
                    'css_class' => 'address',
                    'label' => 'LBL_BILLING_ADDRESS',
                    'fields' => array(
                        array(
                            'name' => 'billing_address_street',
                            'css_class' => 'address_street',
                            'placeholder' => 'LBL_BILLING_ADDRESS_STREET',
                        ),
                        array(
                            'name' => 'billing_address_city',
                            'css_class' => 'address_city',
                            'placeholder' => 'LBL_BILLING_ADDRESS_CITY',
                        ),
                        array(
                            'name' => 'billing_address_state',
                            'css_class' => 'address_state',
                            'placeholder' => 'LBL_BILLING_ADDRESS_STATE',
                        ),
                        array(
                            'name' => 'billing_address_postalcode',
                            'css_class' => 'address_zip',
                            'placeholder' => 'LBL_BILLING_ADDRESS_POSTAL_CODE',
                        ),
                        array(
                            'name' => 'billing_address_country',
                            'css_class' => 'address_country',
                            'placeholder' => 'LBL_BILLING_ADDRESS_COUNTRY',
                        ),
                    ),
                ),
                array(
                    'name' => 'shipping_address',
                    'type' => 'fieldset',
                    'css_class' => 'address',
                    'label' => 'LBL_SHIPPING_ADDRESS',
                    'fields' => array(
                        array(
                            'name' => 'shipping_address_street',
                            'css_class' => 'address_street',
                            'placeholder' => 'LBL_SHIPPING_ADDRESS_STREET',
                        ),
                        array(
                            'name' => 'shipping_address_city',
                            'css_class' => 'address_city',
                            'placeholder' => 'LBL_SHIPPING_ADDRESS_CITY',
                        ),
                        array(
                            'name' => 'shipping_address_state',
                            'css_class' => 'address_state',
                            'placeholder' => 'LBL_SHIPPING_ADDRESS_STATE',
                        ),
                        array(
                            'name' => 'shipping_address_postalcode',
                            'css_class' => 'address_zip',
                            'placeholder' => 'LBL_SHIPPING_ADDRESS_POSTAL_CODE',
                        ),
                        array(
                            'name' => 'shipping_address_country',
                            'css_class' => 'address_country',
                            'placeholder' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
                        ),
                        array(
                            'name' => 'copy',
                            'label' => 'NTC_COPY_BILLING_ADDRESS',
                            'type' => 'copy',
                            'mapping' => array(
                                'billing_account_name' => 'shipping_account_name',
                                'billing_account_id' => 'shipping_account_id',
                                'billing_address_street' => 'shipping_address_street',
                                'billing_address_city' => 'shipping_address_city',
                                'billing_address_state' => 'shipping_address_state',
                                'billing_address_postalcode' => 'shipping_address_postalcode',
                                'billing_address_country' => 'shipping_address_country',
                            ),
                        ),
                    ),
                ),
            ),
        ),
        array(
            'name' => 'panel_hidden',
            'label' => 'LBL_SHOW_MORE',
            'hide' => true,
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => array(
                array(
                    'name' => 'description',
                    'span' => 12,
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

            ),
        ),
    ),
);
