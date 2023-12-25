<?php
// CSS JS Enqueue
function blogpress_theme_style(){

    // CSS Enqueue
    wp_enqueue_style( 'theme_style', get_stylesheet_uri() );
    wp_enqueue_style('themify-icons', get_template_directory_uri().'/assets/css/themify-icons.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('flaticon', get_template_directory_uri().'/assets/css/flaticon.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '5.0.1', 'all' );
    wp_enqueue_style('animate', get_template_directory_uri().'/assets/css/animate.css', array(), '3.5.0', 'all' );
    wp_enqueue_style('owl.carousel', get_template_directory_uri().'/assets/css/owl.carousel.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('owl.theme', get_template_directory_uri().'/assets/css/owl.theme.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('slick', get_template_directory_uri().'/assets/css/slick.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('slick-theme', get_template_directory_uri().'/assets/css/slick-theme.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('swiper', get_template_directory_uri().'/assets/css/swiper.min.css', array(), '4.0.1', 'all' );
    wp_enqueue_style('owl.transitions', get_template_directory_uri().'/assets/css/owl.transitions.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('fancybox', get_template_directory_uri().'/assets/css/jquery.fancybox.css', array(), '2.1.5', 'all' );
    wp_enqueue_style('odometer', get_template_directory_uri().'/assets/css/odometer-theme-default.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('component', get_template_directory_uri().'/assets/css/component.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('style', get_template_directory_uri().'/assets/sass/style.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('style', get_template_directory_uri().'/assets/sass/responsive.css', array(), '1.0.0', 'all' );

    // JS Enqueue
    wp_enqueue_script( 'jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js', array(), '5.0.1', 'true' );
    wp_enqueue_script('modernizr', get_template_directory_uri().'/assets/js/modernizr.custom.js', array(), '2.6.2', 'true' );
    wp_enqueue_script('dlmenu', get_template_directory_uri().'/assets/js/jquery.dlmenu.js', array(), '1.0.1', 'true' );
    wp_enqueue_script('plugin-collection', get_template_directory_uri().'/assets/js/jquery-plugin-collection.js', array(), '1.0.0', 'true' );
    wp_enqueue_script('script', get_template_directory_uri().'/assets/js/script.js', array(), '1.0.0', 'true' );
}
add_action('wp_enqueue_scripts', 'blogpress_theme_style');