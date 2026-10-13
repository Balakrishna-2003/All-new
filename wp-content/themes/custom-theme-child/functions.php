<?php
function twentytwentyfive_child_enqueue_assets() {

    // Load child theme's style.css (required by WordPress for theme metadata or overrides)
    wp_enqueue_style(
        'twentytwentyfive-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array(),
        wp_get_theme()->get('Version')
    );

    // Enqueue your static site's CSS files
    wp_enqueue_style('bhi-bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.0');
    wp_enqueue_style('bhi-animate', get_stylesheet_directory_uri() . '/assets/css/animate.css', array(), '1.0');
    wp_enqueue_style('bhi-owl-carousel', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '2.3.4');
    wp_enqueue_style('bhi-style', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), '1.0');

    // Use WordPress's built-in jQuery
    wp_enqueue_script('jquery');

    // Enqueue JavaScript libraries
    wp_enqueue_script(
        'bhi-bootstrap-bundle',
        get_stylesheet_directory_uri() . '/assets/js/bootstrap.bundle.min.js',
        array('jquery'),
        '5.0',
        true
    );

    wp_enqueue_script(
        'bhi-owl-carousel',
        get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js',
        array('jquery'),
        '2.3.4',
        true
    );

    wp_enqueue_script(
        'bhi-wow',
        get_stylesheet_directory_uri() . '/assets/js/wow.min.js',
        array('jquery'),
        '1.1.3',
        true
    );

    // Optional: enqueue custom.js only if it exists
    if (file_exists(get_stylesheet_directory() . '/assets/js/custom.js')) {
        wp_enqueue_script(
            'bhi-custom-script',
            get_stylesheet_directory_uri() . '/assets/js/custom.js',
            array('jquery'),
            '1.0',
            true
        );
    }
}
    add_action('wp_enqueue_scripts', 'twentytwentyfive_child_enqueue_assets');


    

function school_theme_register_menus() {
    register_nav_menus(array(
        'main-menu' => 'Main Menu',
        'about-menu' => 'About Menu',
        'academics-menu' => 'Academics Menu',
        'admissions-menu' => 'Admissions Menu',
        'faculty-and-staff-menu' => 'Faculty and Staff Menu',
        'students-corner-menu' => 'Students Corner Menu',
    ));
}
add_action('after_setup_theme', 'school_theme_register_menus');





    



 