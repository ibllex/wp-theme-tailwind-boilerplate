<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the content and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

/**
 * Hook - wttb_action_after.
 */
do_action( 'wttb_action_after' );

// document close
get_template_part( 'template-parts/document', 'close' );
