<?php

/**
 * Kocmoc functions and definitions
 */

function kocmoc_setup()
{

	load_theme_textdomain('kocmoc', get_template_directory() . '/languages');

	add_theme_support('title-tag');

	add_theme_support('post-thumbnails');

	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'monoscopic'),
		)
	);

	add_theme_support(
		'html5',
		array(
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
}
add_action('after_setup_theme', 'kocmoc_setup');

function kocmoc_content_width()
{
	$GLOBALS['content_width'] = apply_filters('monoscopic_content_width', 2560);
}
add_action('after_setup_theme', 'kocmoc_content_width', 0);

function kocmoc_scripts()
{
	wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0');
	wp_enqueue_style('normalize', get_template_directory_uri() . '/src/css/normalize.css', array(), '1.0.0');
	wp_enqueue_style('app', get_template_directory_uri() . '/src/css/app.css', array(), '1.0.0');
	wp_enqueue_style('capture', get_template_directory_uri() . '/src/css/capture.css', array(), '1.0.1');
	wp_enqueue_script('marquee', get_template_directory_uri() . '/src/js/marquee.js', array(), '1.0.0', true);
	wp_enqueue_script('html2canvas', get_template_directory_uri() . '/src/js/html2canvas.js', array(), '1.0.2', true);
	wp_enqueue_script('app', get_template_directory_uri() . '/src/js/app.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'kocmoc_scripts');
