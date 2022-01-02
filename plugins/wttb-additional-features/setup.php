<?php

/**
 * Defining plugin constants.
 */
if ( ! defined( 'WTTB_AF_PLUGIN_PATH' ) ) {
	define( 'WTTB_AF_PLUGIN_PATH', trailingslashit( plugin_dir_path( __FILE__ ) ) );
}

if ( ! defined( 'WTTB_AF_PLUGIN_URL' ) ) {
	define( 'WTTB_AF_PLUGIN_URL', trailingslashit( plugins_url( '/', __FILE__ ) ) );
}

if ( ! defined( 'WTTB_AF_ASSETS_URL' ) ) {
	define( 'WTTB_AF_ASSETS_URL', WTTB_AF_PLUGIN_URL . '/assets' );
}

if ( ! function_exists( 'wttb_af_scripts_styles' ) ) {
	/**
	 * Enqueue scripts and styles for additional features.
	 */
	function wttb_af_scripts_styles() {
		// registers scripts and stylesheets
		wp_register_style( 'wttb-af-style', WTTB_AF_ASSETS_URL . '/css/additional-features.css', [] );
		wp_register_script( 'wttb-af-scripts', WTTB_AF_ASSETS_URL . '/js/additional-features.js', [], false, true );

		wp_enqueue_style( 'wttb-af-style' );
		wp_enqueue_script( 'wttb-af-scripts' );
	}
}
add_action( 'wp_enqueue_scripts', 'wttb_af_scripts_styles', 30 );

/**
 * We add a preloader for this theme to test whether the plugin works
 */
if ( ! function_exists( 'wttb_add_preloader' ) ) {
	/**
	 * Add preloader
	 */
	function wttb_add_preloader() {
		?>
        <div class="wttb-preloader-wrap">
            <div class="wrapper">
                <div class="cssload-loader"></div>
            </div>
        </div>
		<?php
	}
}
add_action( 'wttb_action_before', 'wttb_add_preloader' );
