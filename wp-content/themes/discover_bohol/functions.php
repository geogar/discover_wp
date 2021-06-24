<?php
    
    function discoverBohol_theme_support(){
        // Add dynamic title tag support
        add_theme_support('title-tag');
    }

    add_action('after_setup_theme', 'discoverBohol_theme_support');

    function discoverBohol_menus(){
        $locations = array(
            'primary' => "Primary Right Menu",
            'footer' => "Footer Menu Items"

        );

        register_nav_menus($locations);
    }

    add_action('init', 'discoverBohol_menus');

    //enqueue styles
    function discoverBohol_register_styles(){
        $version = wp_get_theme()->get('Version');
        wp_enqueue_style('discoverBohol-style', get_template_directory_uri() . "/style.css", array('discoverBohol-bootstrap'), $version, 'all');
        wp_enqueue_style('discoverBohol-responsive', get_template_directory_uri() . "/assets/css/responsive.css", array(), '1.0', 'all');
        wp_enqueue_style('discoverBohol-animate', get_template_directory_uri() . "/assets/css/animate.css", array(), '1.0', 'all');
        wp_enqueue_style('discoverBohol-owl-carousel', get_template_directory_uri() . "/assets/css/owl.carousel.min.css", array(), '2.2.1', 'all');
        wp_enqueue_style('discoverBohol-owl-theme-defualt', get_template_directory_uri() . "/assets/css/owl.theme.default.min.css", array(), '2.2.1', 'all');
        wp_enqueue_style('discoverBohol-bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css", array(), '4.0.0', 'all');
        wp_enqueue_style('discoverBohol-fontawsome', "https://use.fontawesome.com/releases/v5.0.6/js/all.js", array(), '5.0.6', 'all');
        
    }

    add_action('wp_enqueue_scripts', 'discoverBohol_register_styles');

    //enqueue scripts
    function discoverBohol_register_scripts(){
        wp_enqueue_script('discoverBohol-bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js", array(), '4.0.0', true);
        wp_enqueue_script('discoverBohol-jquery-ui', "http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js", array(), '1.9.1', true);
        wp_enqueue_script('discoverBohol-jquery', get_template_directory_uri() . "/assets/js/jquery-1.11.2.min.js", array(), '1.11.2', true);
        wp_enqueue_script('discoverBohol-jquery-migrate', get_template_directory_uri() . "/assets/js/jquery-migrate-1.2.1.min.js", array(), '1.2.1', true);
        wp_enqueue_script('discoverBohol-jquery-typed', get_template_directory_uri() . "/assets/js/typed.min.js", array(), '1', true);
        wp_enqueue_script('discoverBohol-jquery-owl.carousel', get_template_directory_uri() . "/assets/js/owl.carousel.min.js", array(), '2.2.1', true);
        wp_enqueue_script('discoverBohol-jquery-script', get_template_directory_uri() . "/assets/js/script.js", array(), '1', true);
    }

    add_action('wp_enqueue_scripts', 'discoverBohol_register_scripts');
?>