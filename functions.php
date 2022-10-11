<?php
/**
 * Functions and definitions
 * 
 * @package traveler-fse
 * @since 0.1
 */

/**
 * Load constants.
 */
require_once get_template_directory() . '/inc/constants.php';

if ( ! function_exists( 'traveler_fse_setup' ) ) {

	function traveler_fse_setup(): void {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 */
		load_theme_textdomain( TEXT_DOMAIN, get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style(
			array(
				'./assets/css/blocks.css',
				'./assets/css/style-shared.css',
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
	}
}
add_action( 'after_setup_theme', 'traveler_fse_setup' );

/**
 * Enqueue scripts and styles.
 *
 * @since 0.1
 *
 * @return void
 */
function traveler_fse_enqueue_styles() {
	wp_enqueue_style( 'tt1-blocks-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'tt1-blocks-style-shared', get_template_directory_uri() . '/assets/css/style-shared.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'tt1-blocks-blocks', get_template_directory_uri() . '/assets/css/blocks.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'traveler_fse_enqueue_styles' );

/**
 * Enqueue block editor script.
 *
 * @since 0.1
 *
 * @return void
 */
// function traveler_fse_block_editor_script() {

// 	wp_enqueue_script( 'tt1-blocks-unregister-block-style', get_theme_file_uri( '/assets/js/unregister-block-style.js' ), array( 'wp-blocks', 'wp-dom' ), wp_get_theme()->get( 'Version' ), true );
// }
// add_action( 'enqueue_block_editor_assets', 'traveler_fse_block_editor_script' );

// Block Patterns.
require get_template_directory() . '/inc/block-patterns.php';

// Block Styles.
require get_template_directory() . '/inc/block-styles.php';
