<?php
/**
 * Hook - wttb_action_doctype
 *
 * @hooked wttb_doctype   - 10;
 */
do_action( 'wttb_action_doctype' );
?>

<head>
    <?php
	/**
	 * Hook - wttb_action_head.
	 *
	 * @hooked wttb_head  - 10;
	 */
	do_action( 'wttb_action_head' );
	?>

    <?php wp_head(); ?>

    <?php
	/**
	 * Hook - wttb_action_after_head.
	 */
	do_action( 'wttb_action_after_head' );
	?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
