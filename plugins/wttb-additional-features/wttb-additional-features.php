<?php
/*
 * Plugin Name: Wttb Additional Features
 * Version: 1.0.0
 * Text Domain: wttb
 * Plugin URI:
 * Description: Additional Features For Wttb Theme.
 * Author: iBllex
 * Author URI:
 */

/**
 * Exit if accessed directly.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Defining plugin constants.
 */
if ( ! defined( 'WTTB_AF_PLUGIN_PATH' ) ) {
	define( 'WTTB_AF_PLUGIN_PATH', trailingslashit( plugin_dir_path( __FILE__ ) ) );
}

require WTTB_AF_PLUGIN_PATH . '/setup.php';
