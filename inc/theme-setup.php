<?php

if ( ! function_exists( 'wttb_scripts_styles' ) ) {
	/**
	 * Enqueue our scripts and styles.
	 */
	function wttb_scripts_styles() {
		$theme_data = wp_get_theme();
		$version    = $theme_data->get( 'Version' );

        // Theme Stylesheet
        wp_enqueue_style( 'wttb-style', get_stylesheet_uri(), array(), $version );
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'wttb-scripts', wttb_asset_resolve( 'js/app.js' ), [], $version, true );

		// Comment reply link
		if ( is_singular() && comments_open() ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'wttb_scripts_styles', 20 );
