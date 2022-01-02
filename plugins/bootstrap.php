<?php

// Override plugin constants here.

define( 'WTTB_AF_PLUGIN_URL', get_stylesheet_directory_uri() . '/dist' );

define( 'WTTB_AF_ASSETS_URL', WTTB_AF_PLUGIN_URL . '/additional-features' );

// Setup additional features.
require get_stylesheet_directory() . '/plugins/wttb-additional-features/setup.php';
