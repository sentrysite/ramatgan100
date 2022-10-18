<?php
/**
 * SentrySite-Corporate functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SentrySite-Corporate
 */

if ( ! function_exists( 'sentrysite_corporate_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function sentrysite_corporate_setup() {

		load_theme_textdomain( 'sentrysite-corporate', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

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
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'sentrysite_corporate_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		add_theme_support( 'fb-logo', array(
		    'height' => 480,
		    'width'  => 720,
		) );

	}
endif;
add_action( 'after_setup_theme', 'sentrysite_corporate_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sentrysite_corporate_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'sentrysite_corporate_content_width', 640 );
}
add_action( 'after_setup_theme', 'sentrysite_corporate_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function sentrysite_corporate_scripts() {
	wp_enqueue_style( 'sentrysite-corporate-style', get_stylesheet_uri() );

	wp_enqueue_script( 'sentrysite-corporate-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'sentrysite-corporate-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sentrysite_corporate_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


//Add language to body class
add_filter('body_class', 'append_language_class');
function append_language_class($classes){
  $classes[] = 'language-'.ICL_LANGUAGE_CODE;
  return $classes;
}


//Pagination in numbers
function the_wp_custom_pagination($args = [], $class = 'pagination') {
    if ($GLOBALS['wp_query']->max_num_pages <= 1) return;
    $args = wp_parse_args( $args, [
        'mid_size'           => 5,
        'prev_next'          => false,
        'prev_text'          => __('הבא', 'textdomain'),
        'next_text'          => __('הקודם', 'textdomain'),
        'screen_reader_text' => __('Posts navigation', 'textdomain'),
    ]);
    $links     = paginate_links($args);
    $next_link = '<div class="prev-page">'.get_previous_posts_link($args['next_text']).'</div>';
    $prev_link = '<div class="next-page">'.get_next_posts_link($args['prev_text']).'</div>';
    $template  = apply_filters( 'the_so37580965_navigation_markup_template', '
    <nav class="navigation %1$s" role="navigation">
        <div class="page-pagination"><div class="page-numbers-container">%4$s</div></div>
    </nav>', $args, $class);
    echo sprintf($template, $class, $args['screen_reader_text'],$next_link , $links,$prev_link );
}


//NEXT PREV functions
function prev_post_href(){
	if( ! empty(get_adjacent_post(false, '', true)) ) {
		return get_permalink(get_adjacent_post(false, '', true));
	} else {
		$posts_array = get_posts(array('post_type' => 'post','taxonomy' => 'categoy','posts_per_page' => 1, 'orderby' => 'date', 'order' => 'DESC'));
		return get_permalink($posts_array[0]->ID);
	}
}
function next_post_href(){
	if( ! empty(get_adjacent_post(false, '', false)) ) {
		return get_permalink(get_adjacent_post(false, '', false));
	} else {
		$posts_array = get_posts(array('post_type' => 'post','taxonomy' => 'categoy','posts_per_page' => 1, 'orderby' => 'date', 'order' => 'ASC'));
		return get_permalink($posts_array[0]->ID);
	}
}



//excerpt length
function mytheme_custom_excerpt_length( $length ) {
	if (wp_is_mobile()) {return 30;}
	else{return 60;}
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );


//excerpt [...]
function et_excerpt_more($more) {
    return '';
}
add_filter('excerpt_more', 'et_excerpt_more');


//Add Category to body class
function add_categories( $classes = '' ) {
    $categories = get_the_category();
    foreach( $categories as $category ) {
    $classes[] = 'category-'.$category->term_id;
}
 return $classes;
}
add_filter( 'body_class', 'add_categories' );


//Remove category from cat name
add_filter( 'get_the_archive_title', function ($title) {
		if ( is_category() ) {
						$title = single_cat_title( '', false );
				} elseif ( is_tag() ) {
						$title = single_tag_title( '', false );
				} elseif ( is_author() ) {
						$title = '<span class="vcard">' . get_the_author() . '</span>' ;
				} elseif ( is_tax() ) { //for custom post types
						$title = sprintf( __( '%1$s' ), single_term_title( '', false ) );
				} elseif (is_post_type_archive()) {
						$title = post_type_archive_title( '', false );
				}
		return $title;
});


/**
//Elementor fonts
//Almoni ML v5 AAA
function modify_controls( $controls_registry ) {
		$fonts = $controls_registry->get_control( 'font' )->get_settings( 'options' );
		$new_fonts = array_merge( [ 'Almoni ML v5 AAA' => 'system' ], $fonts );
		$controls_registry->get_control( 'font' )->set_settings( 'options', $new_fonts );
}
add_action( 'elementor/controls/controls_registered', 'modify_controls', 10, 1 );

 */

