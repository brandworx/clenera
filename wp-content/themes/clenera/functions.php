<?php
/**
 * clenera functions and definitions
 *
 * @package clenera
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'clenera_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function clenera_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on clenera, use a find and replace
	 * to change 'clenera' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'clenera', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( "post-thumbnails" );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'clenera' ),
		'footer' => __( 'Footer Menu', 'clenera' ),
		'mobile' => __( 'Mobile Menu', 'clenera' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'clenera_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	//Custom Thumbnail Sizes
	add_image_size( 'head', 1700, 500, true ); // (cropped)
}
endif; // clenera_setup
add_action( 'after_setup_theme', 'clenera_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function clenera_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'clenera' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'clenera_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function clenera_scripts() {
	wp_enqueue_style( 'clenera-style', get_stylesheet_uri() );

	wp_enqueue_style( 'fancyBox-style', get_template_directory_uri() . '/js/fancyBox/source/jquery.fancybox.css' );

	wp_enqueue_style( 'fancyBox-style-2', get_template_directory_uri() . '/js/fancyBox/source/helpers/jquery.fancybox-buttons.css' );

	wp_enqueue_style( 'jquery-ui-style', get_template_directory_uri() . '/js/jquery-ui/jquery-ui.min.css' );

	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js', array(), '1', true );

	wp_enqueue_script( 'jquery-ui-scripts', get_template_directory_uri() . '/js/jquery-ui/jquery-ui.min.js', array(), '1', true );

	wp_enqueue_script( 'fancyBox-scripts', get_template_directory_uri() . '/js/fancyBox/source/jquery.fancybox.pack.js', array(), '1', true );

	wp_enqueue_script( 'fancyBox-scripts-2', get_template_directory_uri() . '/js/fancyBox/source/helpers/jquery.fancybox-buttons.js', array(), '1', true );

	wp_enqueue_script( 'fancyBox-scripts-3', get_template_directory_uri() . '/js/fancyBox/source/helpers/jquery.fancybox-media.js', array(), '1', true );

	wp_enqueue_script( 'custom-scripts', get_template_directory_uri() . '/js/custom.js', array(), '1', true );

	wp_enqueue_script( 'clenera-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'clenera-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'clenera_scripts' );


function custom_excerpt_length( $length ) {
	return 35;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');



function customize_customtaxonomy_archive_display ( $query ) {
    if (($query->is_main_query()) && (is_tax('roles')))

    $query->set( 'orderby', 'date' );
    $query->set( 'order', 'ASC' );
}
 
//Hook the function
 
add_action( 'pre_get_posts', 'customize_customtaxonomy_archive_display' );


/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Home Settings',
		'menu_title'	=> 'Home Settings',
		'parent_slug'	=> 'theme-settings',
	));
	
}