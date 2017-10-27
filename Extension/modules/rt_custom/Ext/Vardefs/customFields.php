<?php
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
