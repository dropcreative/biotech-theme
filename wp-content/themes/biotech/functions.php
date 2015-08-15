<?php
/**
 * biotech functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package biotech
 */

if ( ! function_exists( 'biotech_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function biotech_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on biotech, use a find and replace
     * to change 'biotech' to the name of your theme in all the template files
     */
    load_theme_textdomain( 'biotech', get_template_directory() . '/languages' );

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
     * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
     */
    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'biotech' ),
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

    /*
     * Enable support for Post Formats.
     * See http://codex.wordpress.org/Post_Formats
     */
    add_theme_support( 'post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
    ) );

    // Set up the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'biotech_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ) ) );
}
endif; // biotech_setup
add_action( 'after_setup_theme', 'biotech_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function biotech_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'biotech_content_width', 640 );
}
add_action( 'after_setup_theme', 'biotech_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function biotech_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'biotech' ),
        'id'            => 'sidebar-1',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'biotech_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

function biotech_styles(){

   wp_enqueue_style ( 'reset', get_template_directory_uri() . '/css/reset.css' );
   wp_enqueue_style ( 'ionicons', '//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css' );
   wp_enqueue_style ( 'goodvibes_font', '//fonts.googleapis.com/css?family=Great+Vibes' );
    wp_enqueue_style ( 'raleway_font', '//fonts.googleapis.com/css?family=Raleway' );
   wp_enqueue_style ( 'biotech', get_template_directory_uri() . '/css/main.css' );



}

add_action( 'wp_enqueue_scripts', 'biotech_styles');

function biotech_scripts() {
//    wp_enqueue_style( 'biotech-style', get_stylesheet_uri() );
//wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/js/modernizr.custom.89200.js', '', '', false );
//  wp_enqueue_script( 'smoothslides', get_template_directory_uri() . '/js/smoothslides-2.1.0.min.js', array('jquery'), '', true );

//  wp_enqueue_script( 'slideshowFX_js', get_template_directory_uri() . '/js/slideshow-fx.min.js', array('jquery'), '', true );
 wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://code.jquery.com/jquery-2.1.4.min.js', false, null );
    wp_enqueue_script( 'jquery' );
//    wp_enqueue_script( 'slideshow', get_template_directory_uri() . '/js/sss.js',  array( 'jquery' ), false, true );
    wp_enqueue_script( 'biotech-scripts', get_template_directory_uri() . '/js/biotechscripts.js',  array( 'jquery' ), false, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'biotech_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
