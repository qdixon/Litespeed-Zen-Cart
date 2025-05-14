INSERT INTO configuration (configuration_title, configuration_key, configuration_value, configuration_group_id, sort_order, set_function, date_added)
VALUES ('Enable LiteSpeed Cache', 'LSCACHE_ENABLED', 'true', 1, 1, 'zen_cfg_select_option(array(\'true\', \'false\'), ', now());
