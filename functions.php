<?php

function fabcodemedia_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo'); // Enable Site Logo
    add_theme_support( 'post-thumbnails' ); // Enable Post Thumbnails
    add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
			'navigation-widgets',
		)
	);
};
add_action('after_setup_theme', 'fabcodemedia_theme_support');

// Add navigation menu
function fabcodemedia_theme_menus() {

    // name - value pair: name='menu name', value='menu location name'
    $locations = array(
    'primary' => 'Main Sidebar Menu',
    'footer' => 'Footer Menu Items',
    'user' => 'User Menu'
    );
    register_nav_menus($locations);
} 
add_action( 'init', 'fabcodemedia_theme_menus');

// Remove Nav Menu Classes
add_filter('nav_menu_item_id', 'clear_nav_menu_item_id', 10, 3);
function clear_nav_menu_item_id($id, $item, $args) {
    return "";
}

add_filter('nav_menu_css_class', 'clear_nav_menu_item_class', 10, 3);
function clear_nav_menu_item_class($classes, $item, $args) {
    return array();
}

// Styles
function fabcodemedia_theme_styles() {

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('fabcodemedia-tyles', get_template_directory_uri() . '/style.css', array(), $version, 'all');
    wp_enqueue_style('googlefonts-tyles', 'https://fonts.googleapis.com/css2?family=Karla:wght@400;700;800&display=swap', array(), '2022', 'all');
    wp_enqueue_style('fabcodemedia-single-style', get_template_directory_uri() . '/assets/css/single.page.css', array(), $version, 'all');
};
add_action('wp_enqueue_scripts', 'fabcodemedia_theme_styles');


// JavaScripts
function fabcodemedia_theme_scripts() {

    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('fabcodemedia-js-scripts', get_template_directory_uri() . '/assets/js/main.js', array(), $version, true);
    wp_enqueue_script('fontawesome-script', 'https://kit.fontawesome.com/1b0b5223cb.js', array(), '6.0', true);
    wp_enqueue_script('jsdelivr-cdn-script', 'https://cdn.jsdelivr.net/npm/typed.js@2.0.12', array(), '2.0.12', true);
};
add_action('wp_enqueue_scripts', 'fabcodemedia_theme_scripts');

// Widgets Functions
function fabcodemedia_widget_areas() {

    register_sidebar(
        array (
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<div class="vartical-social">',
            'after_widget'=> '</div>',
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget Area'
        )
        );

        register_sidebar(
            array (
                'before_title' => '',
                'after_title' => '',
                'before_widget' => '',
                'after_widget'=> '',
                'name' => 'Footer Area',
                'id' => 'footer-1',
                'description' => 'Footer Widget Area'
            )
            );
}

add_action( 'widgets_init', 'fabcodemedia_widget_areas' );

?>