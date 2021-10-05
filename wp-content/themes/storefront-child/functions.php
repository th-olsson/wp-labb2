<?php

// Add italic to product meta text
add_action('woocommerce_product_meta_start', 'tholsson_meta_start');
add_action('woocommerce_product_meta_end', 'tholsson_meta_end');

function tholsson_meta_start()
{
    echo '<i>';
}
function tholsson_meta_end()
{
    echo '</i>';
}

// Remove coupon message in checkout
remove_action('woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10);
