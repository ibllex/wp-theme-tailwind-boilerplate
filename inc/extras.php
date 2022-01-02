<?php

if ( ! function_exists( 'wp_body_open' ) ) {
	// see: https://make.wordpress.org/themes/2019/03/29/addition-of-new-wp_body_open-hook/
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}

if ( ! function_exists( 'wttb_asset_resolve' ) ) {
	/**
	 * @param string
	 *
	 * @return string
	 */
	function wttb_asset_resolve( $path ) {
		return get_stylesheet_directory_uri() . '/dist/' . $path;
	}
}
