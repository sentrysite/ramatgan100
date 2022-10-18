<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package SentrySite-Corporate
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function sentrysite_corporate_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'sentrysite_corporate_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function sentrysite_corporate_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'sentrysite_corporate_pingback_header' );

//Register Menus
function registar_menus(){
	register_nav_menu('Main',__('Main'));
}
add_action('init', 'registar_menus');


function sentrysite_widgets_init() {
	//Header Widgets
	register_sidebar( array(
		'name'          => esc_html__( 'Header top right', 'sentrysite-corporate' ),
		'id'            => 'header-top-right-widget',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="widget-title">',
		'after_title'   => '</p>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Header top middle', 'sentrysite-corporate' ),
		'id'            => 'header-top-middle-widget',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="widget-title">',
		'after_title'   => '</p>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Header top left', 'sentrysite-corporate' ),
		'id'            => 'header-top-left-widget',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="widget-title">',
		'after_title'   => '</p>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Header middle right', 'sentrysite-corporate' ),
		'id'            => 'header-middle-right-widget',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="widget-title">',
		'after_title'   => '</p>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Header middle middle', 'sentrysite-corporate' ),
		'id'            => 'header-middle-middle-widget',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="widget-title">',
		'after_title'   => '</p>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Header middle left', 'sentrysite-corporate' ),
		'id'            => 'header-middle-left-widget',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="widget-title">',
		'after_title'   => '</p>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Header Bottom', 'sentrysite-corporate' ),
		'id'            => 'header-bottom-widget',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="widget-title">',
		'after_title'   => '</p>',
	) );


	//Mobile Header
	register_sidebar( array(
		'name'          => esc_html__( 'Header Mobile', 'sentrysite-corporate' ),
		'id'            => 'header-mobile-widget',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="widget-title">',
		'after_title'   => '</p>',
	) );

	//Mobile Widgets
	register_sidebar( array(
		'name'          => esc_html__( 'Mobile menu top', 'sentrysite-corporate' ),
		'id'            => 'mobile-menu-top-widget',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="widget-title">',
		'after_title'   => '</p>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Mobile menu middle', 'sentrysite-corporate' ),
		'id'            => 'mobile-menu-middle-widget',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="widget-title">',
		'after_title'   => '</p>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Mobile menu bottom', 'sentrysite-corporate' ),
		'id'            => 'mobile-menu-bottom-widget',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="widget-title">',
		'after_title'   => '</p>',
	) );


	//Floting Elements
	register_sidebar( array(
		'name'          => esc_html__( 'Floting Elements', 'sentrysite-corporate' ),
		'id'            => 'floting-elements-widget',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="widget-title">',
		'after_title'   => '</p>',
	) );


	//Footer Widgets
	register_sidebar( array(
		'name'          => esc_html__( 'Footer top right', 'sentrysite-corporate' ),
		'id'            => 'footer-top-right-widget',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="widget-title">',
		'after_title'   => '</p>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer top left', 'sentrysite-corporate' ),
		'id'            => 'footer-top-left-widget',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="widget-title">',
		'after_title'   => '</p>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer middle first', 'sentrysite-corporate' ),
		'id'            => 'footer-middle-first-widget',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="widget-title">',
		'after_title'   => '</p>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer middle second', 'sentrysite-corporate' ),
		'id'            => 'footer-middle-second-widget',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="widget-title">',
		'after_title'   => '</p>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer middle third', 'sentrysite-corporate' ),
		'id'            => 'footer-middle-third-widget',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="widget-title">',
		'after_title'   => '</p>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer middle fourth', 'sentrysite-corporate' ),
		'id'            => 'footer-middle-fourth-widget',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="widget-title">',
		'after_title'   => '</p>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer bottom right', 'sentrysite-corporate' ),
		'id'            => 'footer-bottom-right-widget',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="widget-title">',
		'after_title'   => '</p>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer bottom middle', 'sentrysite-corporate' ),
		'id'            => 'footer-bottom-middle-widget',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="widget-title">',
		'after_title'   => '</p>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer bottom left', 'sentrysite-corporate' ),
		'id'            => 'footer-bottom-left-widget',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="widget-title">',
		'after_title'   => '</p>',
	) );

}

add_action( 'widgets_init', 'sentrysite_widgets_init' );
