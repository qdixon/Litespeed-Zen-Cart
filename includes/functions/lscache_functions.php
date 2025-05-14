<?php

class LSCache {
    public static function hookListeners() {
        // Product updated hook
        if (defined('FILENAME_CATEGORIES') && $_GET['action'] === 'update_product') {
            register_shutdown_function(['LSCache', 'purgeCache']);
        }

        // Category updated hook
        if (defined('FILENAME_CATEGORIES') && $_GET['action'] === 'update_category') {
            register_shutdown_function(['LSCache', 'purgeCache']);
        }
    }

    public static function purgeCache() {
        // Basic header method (works with LSWS)
        @header("X-LiteSpeed-Purge: *");

        // OR use API method if using LSCache plugin
        /*
        $url = "http://localhost/litespeed-cache-api/purge_all";
        @file_get_contents($url);
        */

        error_log("[LSCache] Purge triggered");
    }
}
