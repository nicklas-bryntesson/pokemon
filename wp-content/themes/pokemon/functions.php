<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Pokemon
 * @since 1.0.0
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'pokemon_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */

	function pokemon_setup() {

		/**
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

		/**
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

	}
}
add_action( 'after_setup_theme', 'pokemon_setup' );

/**
 * Enqueue scripts and styles.
 *
 * @since 1.0.0
 *
 * @return void
 */
function pokemon_scripts() {

	wp_enqueue_style( 
		'pokemon-style', 
		get_template_directory_uri() . '/style.css', 
		array(), 
		wp_get_theme()->get( 'Version' ) 
	);

	wp_enqueue_script(
		'pokemon-navigation-script',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
	
}
add_action( 'wp_enqueue_scripts', 'pokemon_scripts' );


// Enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/pokemon-class.php';


// Enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

