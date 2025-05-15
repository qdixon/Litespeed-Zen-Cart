<?php
function lscache_control_headers() {
    if (!defined('LSCACHE_ENABLED') || LSCACHE_ENABLED !== 'true') return;

    $no_cache_pages = [
        'login', 'shopping_cart', 'checkout_shipping', 'checkout_payment', 'checkout_confirmation', 'account'
    ];

    $current_page = basename($_SERVER['SCRIPT_FILENAME'], '.php');

    if (in_array($current_page, $no_cache_pages)) {
        header('Cache-Control: no-cache, no-store, must-revalidate');
        header('X-LiteSpeed-Cache-Control: no-cache');
    } else {
        header('Cache-Control: public,max-age=3600');
        header('X-LiteSpeed-Cache-Control: public,max-age=3600');
    }
}

function lscache_purge_tag($tag) {
    if (!defined('LSCACHE_ENABLED') || LSCACHE_ENABLED !== 'true') return;
    header("X-LiteSpeed-Purge: tag={$tag}");
}
