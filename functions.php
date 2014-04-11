<?php
/**
 * Emi Theme functions and definitions
 *
 * Sets up the theme and provides some helper functions. Some helper functions
 * are used in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 *
 *
 * @package Emi_Starter_Theme
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 600;

/**
 * Tell WordPress to run emitheme_setup() when the 'after_setup_theme' hook is run.
 */
add_action( 'after_setup_theme', 'emitheme_setup' );

if ( ! function_exists( 'emitheme_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 */
function emitheme_setup() {

	/* Make Emi Theme available for translation.
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Emi Theme, use a find and replace
	 * to change 'emitheme' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'emi-starter-theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to <head>.
	add_theme_support( 'automatic-feed-links' );

	// This theme uses wp_nav_menu()
	register_nav_menu( 'primary', __( 'Primary Menu', 'emitheme' ) );

	// Post featured images
	add_theme_support( 'post-thumbnails' );

	// Add custom image sizes
	// add_image_size( 'name', 500, 300 );
}
endif; // emitheme_setup


/**
 * Register our sidebars and widgetized areas.
 *
 * @since Emi Theme 1.0
 */
function emitheme_widgets_init() {

	register_sidebar( array(
		'name' => __( 'Sidebar', 'emitheme' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'emitheme_widgets_init' );


/**
 * Comments Display
 */
include('inc/functions/comments.php');


/**
 * REMOVE ADMIN BAR FOR ALL USERS
 */
show_admin_bar( false );


/**
 * ENQUEUE SCRIPTS
 */
function emitheme_scripts_method() {
	// threaded comments
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

//	wp_enqueue_script(
//		'newscript',
//		get_template_directory_uri() . '/js/newscript.js',
//		array('jquery')
//	);
}    

add_action('wp_enqueue_scripts', 'emitheme_scripts_method');

/**
 * Move ACF Options Tab under settings and rename it
 */
//if( function_exists('acf_add_options_sub_page') )
//{
//    acf_add_options_sub_page(array(
//        'title' => 'Site Options',
//        'parent' => 'options-general.php',
//        'capability' => 'manage_options'
//    ));
//}

/**
 * Add TinyMCE buttons that are disabled by default
 */
//function emitheme_mce_buttons_2($buttons) {	
//	/**
//	 * Add in a core button that's disabled by default
//	 */
//	$buttons[] = 'justify'; // fully justify text
//	$buttons[] = 'hr'; // insert HR
//
//	return $buttons;
//}
//add_filter('mce_buttons_2', 'emitheme_mce_buttons_2');


/**
 * Remove all colors except those custom colors specified from TinyMCE
 */
//function emitheme_change_mce_options( $init ) {
//	$init['theme_advanced_text_colors'] = '8dc63f';
//	$init['theme_advanced_more_colors'] = false;
//return $init;
//}
//add_filter('tiny_mce_before_init', 'emitheme_change_mce_options');


/**
 * Only show posts in search results
 */
//function emitheme_SearchFilter($query) {
//    if ($query->is_search) {
//        $query->set('post_type', 'post');
//    }
//    return $query;
//}
//add_filter('pre_get_posts','emitheme_SearchFilter');