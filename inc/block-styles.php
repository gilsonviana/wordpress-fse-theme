<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package TT1_Blocks
 * @since 0.1
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since 0.1
	 *
	 * @return void
	 */
	function traveler_fse_register_block_styles() {
		// Columns: Overlap.
		// register_block_style(
		// 	'core/columns',
		// 	array(
		// 		'name'  => 'twentytwentyone-columns-overlap',
		// 		'label' => esc_html__( 'Overlap', 'tt1-blocks' ),
		// 	)
		// );

	}
	add_action( 'init', 'traveler_fse_register_block_styles' );
}
