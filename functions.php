<?php
// Wasla Setup
if ( ! function_exists( 'wasla_setup' ) ) :
function wasla_setup() {
    // Wasla Translation
    load_theme_textdomain( 'wasla', get_template_directory() . '/languages' );
    // Wasla Theme Support
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'status', 'image', 'video' ) );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script', 'navigation-widgets' ) );

    // Wasla Editor Color Palette
    add_theme_support( 'editor-color-palette', array(
        array(
            'name'  => __( 'Main', 'wasla' ),
            'slug'  => 'fw-main',
            'color' => '#5BA88E',
        ),
        array(
            'name'  => __( 'Sub', 'wasla' ),
            'slug'  => 'fw-sub',
            'color' => '#F4C542',
        ),
        array(
            'name'  => __( 'Dark Green', 'wasla' ),
            'slug'  => 'fw-dark-green',
            'color' => '#4a9074',
        ),
        array(
            'name'  => __( 'Dark Gold', 'wasla' ),
            'slug'  => 'fw-dark-gold',
            'color' => '#e6b23a',
        ),
        array(
            'name'  => __( 'Light Blue', 'wasla' ),
            'slug'  => 'fw-light-blue',
            'color' => '#87CEEB',
        ),
        array(
            'name'  => __( 'Dark Blue', 'wasla' ),
            'slug'  => 'fw-dark-blue',
            'color' => '#4682B4',
        ),
        array(
            'name'  => __( 'Gray Text', 'wasla' ),
            'slug'  => 'fw-text-gray',
            'color' => '#666666',
        ),
        array(
            'name'  => __( 'White', 'wasla' ),
            'slug'  => 'fw-white',
            'color' => '#ffffff',
        ),
    ));

    // Wasla Menus
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'wasla' ),
        'side-menu' => __( 'Side Menu', 'wasla' ),
        'foot-menu' => __( 'Footer Menu', 'wasla' ),
        'foot-1' => __( 'Footer 1', 'wasla' ),
        'foot-2' => __( 'Footer 2', 'wasla' ),
    ) );
	
}

endif;
add_action( 'after_setup_theme', 'wasla_setup' );

if ( ! function_exists( 'wasla_enqueue_scripts' ) ) :
function wasla_enqueue_scripts() {

    // Bootstrap RTL support
    if ( is_rtl() ) {
        wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css', array(), '5.3.3', 'all' );
    } else {
        wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3', 'all' );
    }

    // Fonts
    wp_enqueue_style( 'cairo-font', 'https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700&display=swap', array(), null, 'all' );

    // Other CSS
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css', array(), '6.0.0-beta3', 'all' );
    wp_enqueue_style( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0.7', 'all' );
    wp_enqueue_style( 'bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css', array(), '1.11.3', 'all' );
    wp_enqueue_style( 'fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css', array(), '5.0.0', 'all' );
    wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), '4.1.1', 'all' );
    wp_enqueue_style( 'aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '2.3.1', 'all' );

    // Main theme style
    wp_enqueue_style( 'wasla-main', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.003', 'all' );

    // JS
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '5.3.3', true );
    wp_enqueue_script( 'fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js', array(), '5.0.0', true );
    wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0.7', true );
    wp_enqueue_script( 'aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '2.3.1', true );
    wp_enqueue_script( 'wasla-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.03', true );
}
endif;
add_action( 'wp_enqueue_scripts', 'wasla_enqueue_scripts' );

// Wasla Widgets
function pw_widgets_init() {
    register_sidebar(array(
        'name' => __('Footer Custom Widgets', 'wasla'),
        'id' => 'pw_custom_widgets',
        'before_widget' => '<div class="col">',
        'after_widget' => '</div>'
    ));
    register_sidebar(array(
        'name' => __('Sidebar Widgets', 'wasla'),
        'id' => 'pw_sidebar_widgets',
        'before_widget' => '<div class="pw-sidebar">',
        'after_widget' => '</div>'
    ));
    register_sidebar(array(
        'name' => __('Modal Widgets', 'wasla'),
        'id' => 'pw_modal_widgets',
        'before_widget' => '<div class="pw-inModal">',
        'after_widget' => '</div>'
    ));
}
add_action('widgets_init', 'pw_widgets_init');

// Wasla Excerpt
function custom_excerpt_length( $length ) {return 20;}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
function new_excerpt_more( $more ) {return ' ... ';}
add_filter('excerpt_more', 'new_excerpt_more');

// Get Includes
require_once get_template_directory() . '/inc/fw-wasla-customizer.php';

function pw_increase_post_views($postID) {
    $views = get_post_meta($postID, 'pw_post_views', true);
    $views = $views ? $views + 1 : 1;
    update_post_meta($postID, 'pw_post_views', $views);
}

function pw_get_post_views($postID) {
    $views = get_post_meta($postID, 'pw_post_views', true);
    return $views ? $views : 0;
}

function pw_track_post_views() {
    if (is_single()) {
        global $post;
        pw_increase_post_views($post->ID);
    }
}
add_action('wp_head', 'pw_track_post_views');
