<?php
/**
 * Monoscopic functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Monoscopic
 */

if ( ! defined( '_MONOSCOPIC_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_MONOSCOPIC_VERSION', '3.0.2' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function monoscopic_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Monoscopic, use a find and replace
		* to change 'monoscopic' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'monoscopic', get_template_directory() . '/languages' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'monoscopic' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'monoscopic_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function monoscopic_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'monoscopic_content_width', 2560 );
}
add_action( 'after_setup_theme', 'monoscopic_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function monoscopic_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), _MONOSCOPIC_VERSION );
	wp_enqueue_style( 'app', get_template_directory_uri() . '/css/app.css', array(), _MONOSCOPIC_VERSION );
	wp_enqueue_style( 'social-story', get_template_directory_uri() . '/css/social-story.css', array(), _MONOSCOPIC_VERSION );
	wp_enqueue_style( 'social-dj-story', get_template_directory_uri() . '/css/social-dj-story.css', array(), _MONOSCOPIC_VERSION );
	wp_enqueue_style( 'social-post', get_template_directory_uri() . '/css/social-post.css', array(), _MONOSCOPIC_VERSION );
	wp_enqueue_script( 'html2canvas', get_template_directory_uri() . '/js/html2canvas.js', array(), _MONOSCOPIC_VERSION, true );
	wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', array(), _MONOSCOPIC_VERSION, true );	
}
add_action( 'wp_enqueue_scripts', 'monoscopic_scripts' );

/**
 * Dequeue scripts and styles.
 */
function monoscopic_disable_scripts() {
	wp_dequeue_style('wp-block-library');
	wp_dequeue_style('wp-block-library-theme');
	wp_dequeue_style('global-styles');
}
add_filter('wp_enqueue_scripts', 'monoscopic_disable_scripts', 100);

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Remove Prefix From Archive Titles
 */
add_filter( 'get_the_archive_title', 'errorsea_archive_title' );
function errorsea_archive_title( $title ) {
	if ( is_category() ) {
		// Remove prefix in category archive page
		$title = single_cat_title( 'Archives: ', false );
	} elseif ( is_tag() ) {
		// Remove prefix in tag archive page
		$title = single_tag_title( '', false );
	} 
	return $title;
}




