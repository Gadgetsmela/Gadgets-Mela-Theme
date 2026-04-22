<?php
/**
 * Theme functions and definitions.
 *
 * @package Gadgets_Mela
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'gadgets_mela_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for WordPress features.
	 *
	 * @return void
	 */
	function gadgets_mela_setup() {
		load_theme_textdomain( 'gadgets-mela', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
		add_theme_support( 'custom-logo', array( 'height' => 60, 'width' => 200, 'flex-height' => true, 'flex-width' => true ) );
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support( 'editor-styles' );
		add_editor_style( 'assets/css/editor-style.css' );

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary Menu', 'gadgets-mela' ),
				'footer'  => esc_html__( 'Footer Menu', 'gadgets-mela' ),
			)
		);
	}
}
add_action( 'after_setup_theme', 'gadgets_mela_setup' );

/**
 * Set the content width in pixels.
 *
 * @global int $content_width
 */
function gadgets_mela_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gadgets_mela_content_width', 800 );
}
add_action( 'after_setup_theme', 'gadgets_mela_content_width', 0 );

/**
 * Register widget areas.
 *
 * @return void
 */
function gadgets_mela_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'gadgets-mela' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'gadgets-mela' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s gm-card">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'gadgets_mela_widgets_init' );

/**
 * Enqueue scripts and styles.
 *
 * @return void
 */
function gadgets_mela_scripts() {
	wp_enqueue_style( 'gadgets-mela-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'gadgets-mela-main', get_template_directory_uri() . '/assets/css/main.css', array( 'gadgets-mela-style' ), wp_get_theme()->get( 'Version' ) );

	wp_enqueue_script( 'gadgets-mela-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), wp_get_theme()->get( 'Version' ), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gadgets_mela_scripts' );

/**
 * Custom excerpt length.
 *
 * @param int $length Excerpt length.
 *
 * @return int
 */
function gadgets_mela_excerpt_length( $length ) {
	if ( is_admin() ) {
		return $length;
	}

	return 28;
}
add_filter( 'excerpt_length', 'gadgets_mela_excerpt_length', 999 );

require get_template_directory() . '/inc/template-tags.php';
