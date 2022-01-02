<?php

if ( ! function_exists( 'wttb_doctype' ) ) {
	/**
	 * Doctype Declaration.
	 */
	function wttb_doctype() {
		$clsx = apply_filters( 'wttb_filter_html_class', [] );

		echo '<!DOCTYPE html><html ' . get_language_attributes() . ' class="' . implode( ' ', $clsx ) . '">';
	}
}
add_action( 'wttb_action_doctype', 'wttb_doctype', 10 );

if ( ! function_exists( 'wttb_head' ) ) {
	/**
	 * Head tags.
	 */
	function wttb_head() {
		?>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="profile" href="http://gmpg.org/xfn/11">
		<?php if ( is_singular() && pings_open() ) : ?>
            <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php endif;
	}
}
add_action( 'wttb_action_head', 'wttb_head' );
