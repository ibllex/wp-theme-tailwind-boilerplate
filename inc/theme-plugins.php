<?php

// Runtime Plugins
if ( file_exists( get_stylesheet_directory() . '/plugins/bootstrap.php' ) ) {
	require get_stylesheet_directory() . '/plugins/bootstrap.php';
}

/**
 * TGM Plugin Activation Class
 *
 * @see: http://tgmpluginactivation.com/
 */
require get_stylesheet_directory() . '/inc/tgm/class-tgm-plugin-activation.php';

if ( ! function_exists( 'wttb_register_recommended_plugins' ) ) {
	function wttb_register_recommended_plugins() {
		$plugins = array(
			array(
				'name'     => 'Wttb Additional Features',
				'slug'     => 'wttb-additional-features',
				'source'   => get_stylesheet_directory() . '/plugins/wttb-additional-features.zip',
				'required' => false,
			),
		);

		$config = array(
			'id'           => 'wttb',
			'default_path' => '',
			'menu'         => 'tgmpa-install-plugins',
			'has_notices'  => true,
			'dismissable'  => true,
			'dismiss_msg'  => '',
			'is_automatic' => false,
			'message'      => '',
		);

		tgmpa( $plugins, $config );
	}
}
add_action( 'tgmpa_register', 'wttb_register_recommended_plugins' );
