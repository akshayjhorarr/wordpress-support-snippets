<?php

/*
Problem:
WooCommerce checkout pages often contain unnecessary fields that slow down the checkout process.

Solution:
Removed unnecessary checkout fields using WooCommerce filters.

Result:
Improved checkout experience and simplified customer form submission.
*/

// Remove company field from checkout
add_filter('woocommerce_checkout_fields', 'custom_remove_checkout_fields');

function custom_remove_checkout_fields($fields) {
    unset($fields['billing']['billing_company']);
    return $fields;
}