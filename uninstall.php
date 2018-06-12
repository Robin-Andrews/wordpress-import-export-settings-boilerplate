<?php
// No direct access
if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

$option_name = 'ieb_settings';
delete_option($option_name);