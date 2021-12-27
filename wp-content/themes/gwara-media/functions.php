<?php
require_once get_template_directory() . '/inc/defines.php';
require_once get_template_directory() . '/inc/theme.php';
require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/nav-walker.php';
require_once get_template_directory() . '/inc/footer-walker.php';
require_once get_template_directory() . '/inc/top-post-format.php';
require_once get_template_directory() . '/inc/ajax_auth.php';
require_once get_template_directory() . '/inc/my-account.php';
require_once get_template_directory() . '/inc/shortcodes.php';
remove_action('wp_head','rsd_link' );
remove_action('wp_head','wp_oembed_add_discovery_links');
remove_action('wp_head','rest_output_link_wp_head');
add_filter('xmlrpc_enabled', '__return_false');
// Отключаем REST API
// remove_action( 'init', 'rest_api_init' );
// remove_action( 'rest_api_init', 'rest_api_default_filters', 10, 1 );
// remove_action( 'parse_request', 'rest_api_loaded' );
