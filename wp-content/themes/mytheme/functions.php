<?php 

// Load CSS

function load_css() {

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('magnific', get_template_directory_uri() . '/css/magnific-popup.css', array(), false, 'all');
    wp_enqueue_style('magnific');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');

}

add_action('wp_enqueue_scripts', 'load_css');


// Load JS

function load_js() {
    wp_enqueue_script('jquery');
    
    wp_register_script('bootstrap',  get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap');

    wp_register_script('magnific',  get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', 'jquery', false, true);
    wp_enqueue_script('magnific');

    wp_register_script('custom',  get_template_directory_uri() . '/js/custom.js', 'jquery', false, true);
    wp_enqueue_script('custom');
}

add_action('wp_enqueue_scripts', 'load_js');


//  Theme options

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');


//  Menus

register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location',
    )
);

// Custom image sizes

add_image_size('home-large', 1280, 600, true);
add_image_size('contact-large', 1280, 600, false);
add_image_size('blog-large', 800, 400, false);
add_image_size('blog-small', 300, 200, true);


// Register Sidebars

function my_sidebars()
{
    register_sidebar(
        array(
            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
            'description' => 'Page Sidebar',
        )
    );

    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'blog-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
            'class' => 'widget-title',
            'description' => 'Blog Sidebar',
        )
    );
}
add_action('widgets_init', 'my_sidebars');


// Custom post type
function my_first_post_type() {
    $args = array(
        'labels' => array(
            'name' => 'Cars',
            'singular_name' => 'Car',
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-car',
        'supports' => array('title', 'editor', 'thumbnail', 'author', 'excerpt', 'comments', 'revisions', 'page-attributes', 'post-formats', 'trackbacks', 'custom-fields'),
        // 'rewrite' => array('slug' => 'my-cars'),
        'show_in_rest' => true,
    );

    register_post_type('cars', $args);
}
add_action('init', 'my_first_post_type'); 


// Taxonomies

// Tags
function my_first_tag_taxonomy() {
    $args = array(
        'labels' => array(
            'name' => 'Brands Tags',
            'singular_name' => 'Brand Tag',
        ),
        'public' => true,
        'hierarchical' => false,
    );
    register_taxonomy('brands', array('cars'), $args);
}
add_action('init', 'my_first_tag_taxonomy'); 

// Categories
function my_first_taxonomy() {
    $args = array(
        'labels' => array(
            'name' => 'Brands',
            'singular_name' => 'Brand',
        ),
        'public' => true,
        'hierarchical' => true,
    );
    register_taxonomy('brands', array('cars'), $args);
}
add_action('init', 'my_first_taxonomy');


	
// add_filter('acf/settings/remove_wp_meta_box', '__return_false');


// Walker Navbar

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

