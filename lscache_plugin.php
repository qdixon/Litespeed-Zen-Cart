<?php
/**
 * LiteSpeed Cache Plugin for Zen Cart
 * Auto-purges cache on update
 * Manual purge available from Admin
 */

class lscache_plugin {
    public static function install() {
        // No DB needed
        return true;
    }

    public static function uninstall() {
        return true;
    }
}
