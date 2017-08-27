<?php
/**
 * go_local functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package go_local
 */
/* Implement the Custom Header feature.
 */
/**
 * URL token
 */
require get_template_directory() . '/functions_url-token.php';
require get_template_directory() .'/inc/custom-header.php';

/**
if ( ! function_exists( 'go_local_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
/**
 * URL token
 */


function go_local_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on go_local, use a find and replace
	 * to change 'go_local' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'go_local', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

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
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'go_local' ),
	) );

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
	add_theme_support( 'custom-background', apply_filters( 'go_local_custom_background_args', array(
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
}
function welcome_custom_init() {
      $labels = array(
          'name' => 'ברוכים הבאים',
          'singular_name' => 'ברוכים',
          'add_new' => 'הוסף שורה חדשה',
          'add_new_item' => 'הוסף פרוייקט חדש',
          'edit_item' => 'ערוך שורות',
          'new_item' => 'שורה חדש',
          'all_items' => 'כל השורות',
          'view_item' => 'הצג שורה',
          'search_items' => 'חפש שורות',
          'not_found' =>  'לא נמצא שורה',
          'not_found_in_trash' => 'לא נמצא שורה ', 
          'parent_item_colon' => '',
          'menu_name' => 'ברוכים הבאים',
          );
 
      $args = array(
          'labels' => $labels,
          'exclude_from_search' => false,
          'public' => true,
          'publicly_queryable' => true,
          'show_ui' => true, 
          'show_in_menu' => true, 
          'query_var' => true,
          'rewrite' => array( 'slug' => 'ברוך' ),
          'capability_type' => 'post',
          'has_archive' => true, 
          'label'=> 'wecome',
          'hierarchical' => false,
          'show_in_rest' => true,
          'taxonomies' => array('category'),
          'menu_position' => null,
          'supports' => array( 'title', 'author', 'thumbnail', 'excerpt', 'comments', 'editor' )
          ); 
 
        register_post_type( 'welcome', $args );
    }
add_action( 'init', 'welcome_custom_init');
add_action( 'after_setup_theme', 'go_local_setup' );
function project_custom_init() {
      $labels = array(
          'name' => 'פרוייקטים',
          'singular_name' => 'פרוייקט',
          'add_new' => 'הוסף פרוייקט חדש',
          'add_new_item' => 'הוסף פרוייקט חדש',
          'edit_item' => 'ערוך פרוייקט',
          'new_item' => 'פרוייקט חדש',
          'all_items' => 'כל הפרוייקטים',
          'view_item' => 'הצג פרוייקט',
          'search_items' => 'חפש פרוייקט',
          'not_found' =>  'לא נמצא פרוייקט',
          'not_found_in_trash' => 'לא נמצא פרוייקט בפח', 
          'parent_item_colon' => '',
          'menu_name' => 'פרוייקטים',
          );
 
      $args = array(
          'labels' => $labels,
          'exclude_from_search' => false,
          'public' => true,
          'publicly_queryable' => true,
          'show_ui' => true, 
          'show_in_menu' => true, 
          'query_var' => true,
          'rewrite' => array( 'slug' => 'פרוייקט' ),
          'capability_type' => 'post',
          'has_archive' => true, 
          'label'=> 'project',
          'hierarchical' => false,
          'show_in_rest' => true,
          'taxonomies' => array('category'),
          'menu_position' => null,
          'supports' => array( 'title', 'author', 'thumbnail', 'excerpt', 'comments', 'editor' )
          ); 
 
        register_post_type( 'project', $args );
    }
add_action( 'init', 'project_custom_init');
 
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function go_local_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'go_local_content_width', 640 );
}
add_action( 'after_setup_theme', 'go_local_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function go_local_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'go_local' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'go_local' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'go_local_widgets_init' );

/**
 * Enqueue scripts and styles.
 lodaing menu
 */

function register_my_menus(){
	register_nav_menus(array(
		'primary' => 'Primary',
		'guest' => 'Guest',
	));
}
add_action('init', 'register_my_menus');
/*loading style css*/

function my_theme_enqueue_styles() {

	wp_enqueue_style( 'bootstrapstyle', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrapthemestyle', get_template_directory_uri() . '/css/bootstrap-theme.min.css' );
    wp_enqueue_style('bxslidergrid-css',get_template_directory_uri() . '/css/grid.css');
	wp_enqueue_style('bxslider-css',get_template_directory_uri() . '/css/jquery.bxslider.css');
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');


}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles');
function reg_scripts() {
    
    wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array(), true );
    wp_enqueue_script('bxslider-js',get_template_directory_uri() . '/js/jquery.bxslider.js', array('jquery'), true);
    wp_enqueue_script('custom-js',get_template_directory_uri() . '/js/script.js', array('jquery'), true);
}
add_action('wp_enqueue_scripts', 'reg_scripts');

function theme_js() {

	global $wp_scripts;

	wp_enqueue_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
	wp_enqueue_script( 'my_custom_js', get_template_directory_uri() . '/js/scripts.js');

}

add_action( 'wp_enqueue_scripts', 'theme_js');
function enqueue_our_required_stylesheets(){
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); 
}
add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets');

add_theme_support('post-formats', array(
	'aside', 'gallery', 'link', 'video'
));
add_theme_support('post-thumbnails');
add_theme_support('custom-logo');
/* loading bootstrap*/

function go_local_scripts() {
	wp_enqueue_style( 'go_local-style', get_stylesheet_uri() );

	wp_enqueue_script( 'go_local-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'go_local-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'go_local_scripts' );

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
function senior_custom_init() {
      $labels = array(
          'name' => 'בוגרים',
          'singular_name' => 'בוגרים',
          'add_new' => 'הוסף בוגר חדש',
          'add_new_item' => 'הוסף בוגר חדש',
          'edit_item' => 'ערוך בוגר',
          'new_item' => 'בוגר חדש',
          'all_items' => 'כל הבוגרים',
          'view_item' => 'הצג בוגר',
          'search_items' => 'חפש בוגרים',
          'not_found' =>  'לא נמצא בוגר',
          'not_found_in_trash' => 'לא נמצא בוגר בפח', 
          'parent_item_colon' => '',
          'menu_name' => 'בוגרים',
          );
 
      $args = array(
          'labels' => $labels,
          'exclude_from_search' => false,
          'public' => true,
          'publicly_queryable' => true,
          'show_ui' => true, 
          'show_in_menu' => true, 
          'query_var' => true,
          'rewrite' => array( 'slug' => 'בוגר' ),
          'capability_type' => 'post',
          'has_archive' => true, 
          'show_in_rest' => true,
           'label'=> 'senior',
          'hierarchical' => false,
          'taxonomies' => array('category'),
          'menu_position' => null,
          'supports' => array( 'title', 'author', 'thumbnail', 'excerpt', 'comments', 'editor' )
          ); 
 
        register_post_type( 'senior', $args );
    }
add_action( 'init', 'senior_custom_init');
function my_scripts() {
	
	wp_enqueue_script(
		'angularjs',
		get_stylesheet_directory_uri() . 'lib/angular/angular.min.js'
	);
	wp_enqueue_script(
		'angularjs-route',
		get_stylesheet_directory_uri() . 'lib/angular/angular-route.min.js'
	);
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );


function wp_api_encode_acf($data,$post,$context){
	$data['meta'] = array_merge($data['meta'],get_fields($post['ID']));
	return $data;
}

if( function_exists('get_fields') ){
	add_filter('json_prepare_post', 'wp_api_encode_acf', 10, 3);
}