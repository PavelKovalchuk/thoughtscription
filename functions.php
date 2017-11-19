<?php
/**
 * StrapPress functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package StrapPress
 */


/* Disable WordPress Admin Bar for all users but admins. */
show_admin_bar(false);

if ( ! function_exists( 'gm_wp_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function gm_wp_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on StrapPress, use a find and replace
         * to change 'strappress' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'gm_wp', get_template_directory() . '/languages' );

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

        add_image_size( 'category-post-image', 672, 360, true );
        add_image_size( 'post-main-image', 973, 500, true );

        add_image_size( 'size-645-459', 645, 459, true );
        add_image_size( 'size-318-459', 318, 459, true );
        add_image_size( 'big-973-500', 972, 499, true );

        add_image_size( 'popular-post-image', 230, 121, true );

        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus( array(
            'primary'   => esc_html__( 'Top primary menu', 'gm_wp' ),
            'categories' => __( 'Categories in left sidebar', 'greenmarket_blog' ),
        ) );

        // This theme uses wp_nav_menu() in one location.
        /*register_nav_menus( array(
            'primary' => esc_html__( 'Primary', 'gm_wp' ),
        ) );*/

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
        add_theme_support( 'custom-background', apply_filters( 'strappress_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );
    }
endif;
add_action( 'after_setup_theme', 'gm_wp_setup' );


if ( ! function_exists( 'gm_custom_sizes' ) ) :
    function gm_custom_sizes( $sizes ) {
        return array_merge( $sizes, array(
            'two-images-1' => __('Two images collection. Image 1 (Big)'),
            'two-images-2' => __('Two images collection. Image 2 (Small)'),
            'three-images-1' => __('Three images collection. Image 1'),
            'three-images-2' => __('Three images collection. Image 2'),
            'three-images-3' => __('Three images collection. Image 3'),
            'related-post-thumbnail' => __('related-post-thumbnail'),
            'size-645-459' => __('size-645-459'),
            'size-318-459' => __('size-318-459'),
            'big-973-500' => __('big-973-500'),
        ) );
    }
endif;
add_filter( 'image_size_names_choose', 'gm_custom_sizes' );



/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function strappress_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'strappress_content_width', 640 );
}
add_action( 'after_setup_theme', 'strappress_content_width', 0 );


/**
 * Add CSS/JS Scritps
 */
require get_template_directory() . '/inc/scripts.php';

/**
 * Register Widget Areas
 */
require get_template_directory() . '/inc/widgets.php';

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
 * Bootstrap Walker.
 */
require get_template_directory() . '/inc/bootstrap-walker.php';


/**
 * Custom templates 
 */
require get_template_directory() . '/inc/template-parts.php';

/**
 * Custom ajax handler
 */
require get_template_directory() . '/inc/ajax_handler.php';







// Admin Section

if ( is_admin() ) {

	include 'inc\classes\option-pages\option-pages.php';

	$ts_options_page = new OptionPages();
}

