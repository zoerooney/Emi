<?php
/**
 * Emi Starter Theme Functions
 *
 * Sets up the theme and provides some helper functions.
 *
 * @package Emi_Starter_Theme
 */


/* OEMBED SIZING
 ========================== */
 
if ( ! isset( $content_width ) )
	$content_width = 600;
	
	
/* THEME SETUP
 ========================== */
 
if ( ! function_exists( 'emi_starter_theme_setup' ) ):
function emi_starter_theme_setup() {

	// Available for translation
	load_theme_textdomain( 'emi-starter-theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to <head>.
	add_theme_support( 'automatic-feed-links' );

	// Add custom nav menu support
	register_nav_menu( 'primary', __( 'Primary Menu', 'emi-starter-theme' ) );
	
	// Add featured image support
	add_theme_support( 'post-thumbnails' );
	
	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
	) );
	
	// Add custom image sizes
	// add_image_size( 'name', 500, 300 );
}
endif;
add_action( 'after_setup_theme', 'emi_starter_theme_setup' );


/* SIDEBARS & WIDGET AREAS
 ========================== */
function emi_theme_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar', 'emi-starter-theme' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'emi_theme_widgets_init' );


/* ENQUEUE SCRIPTS
 ========================== */
function emi_theme_scripts_method() {
	// threaded comments
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	// custom scripts
//	wp_enqueue_script(
//		'newscript',
//		get_template_directory_uri() . '/js/newscript.js',
//		array('jquery')
//	);
}    
add_action('wp_enqueue_scripts', 'emi_theme_scripts_method');


/* MISC EXTRAS
 ========================== */
 
// Comments & pingbacks display template
include('inc/functions/comments.php');

// Remove admin bar for all users
show_admin_bar( false );

// Move ACF Options menu under Settings
//if( function_exists('acf_add_options_sub_page') )
//{
//    acf_add_options_sub_page(array(
//        'title' => __( 'Site Options', 'emi-starter-theme' ),
//        'parent' => 'options-general.php',
//        'capability' => 'manage_options'
//    ));
//}

// Add TinyMCE buttons that are disabled by default
//function emi_theme_mce_buttons_2($buttons) {	
//	/**
//	 * Add in a core button that's disabled by default
//	 */
//	$buttons[] = 'justify'; // fully justify text
//	$buttons[] = 'hr'; // insert HR
//
//	return $buttons;
//}
//add_filter('mce_buttons_2', 'emi_theme_mce_buttons_2');


// Remove all colors except those custom colors specified from TinyMCE
//function emi_theme_change_mce_options( $init ) {
//	$init['theme_advanced_text_colors'] = '8dc63f';
//	$init['theme_advanced_more_colors'] = false;
//return $init;
//}
//add_filter('tiny_mce_before_init', 'emi_theme_change_mce_options');


// Modify the query on a given template (using conditionals)
//function emi_theme_custom_query($query) {
//    if ($query->is_search) {
//        $query->set('post_type', 'post');
//    }
//    return $query;
//}
//add_filter('pre_get_posts','emi_theme_custom_query');