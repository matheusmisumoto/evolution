<?php
/**
 * The Evolution functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage The Evolution
 */

if ( ! function_exists( 'evolution_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since The Evolution 1.0
	 *
	 * @return void
	 */
	function evolution_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 */
		load_theme_textdomain( 'the-evolution', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style'
		) );

		// Adding excerpt for page
		add_post_type_support( 'page', 'excerpt' );
		
		/**
 		 * Load post formats
 		 **/
 		add_theme_support( 'post-formats',array( 'aside', 'gallery', 'link', 'image', 'status', 'video', 'quote' ) );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

	}

endif;

add_action( 'after_setup_theme', 'evolution_support' );

if ( ! function_exists( 'evolution_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since The Evolution 1.0
	 *
	 * @return void
	 */
	function evolution_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'evolution-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'evolution-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'evolution_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';