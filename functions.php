<?php 

    function add_files(){

        // Adding Style Files

        //wp_register_style( );

        wp_enqueue_style( 'style', get_stylesheet_uri());
        wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/css/bootstrap.min.css');
        wp_enqueue_style( 'magnific-popup', get_template_directory_uri().'/css/magnific-popup.css');
        wp_enqueue_style( 'revolution', get_template_directory_uri().'/revolution/css/settings.css');
        wp_enqueue_style( 'rev-slider', get_template_directory_uri().'/css/rev-slider.css');
        wp_enqueue_style( 'sliders', get_template_directory_uri().'/css/sliders.css');
        wp_enqueue_style( 'responsive', get_template_directory_uri().'/css/responsive.css');
        wp_enqueue_style( 'animate', get_template_directory_uri().'/css/animate.css');
        wp_enqueue_style( 'color', get_template_directory_uri().'/css/color.css');
        wp_enqueue_style( 'font-awesome.', get_template_directory_uri().'/css/font-awesome.min.css');

        // Adding Scripts File

        wp_enqueue_script( 'jquery-js', get_template_directory_uri().'/js/jquery.min.js', array(),'null', true);
        wp_enqueue_script( 'bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', array(), 'null', true);
        //wp_enqueue_script( 'maps-js',' http://maps.google.com/maps/api/js', array(), 'null',true);
        wp_enqueue_script( 'gmap3-js', get_template_directory_uri().'/js/gmap3.js', array(), 'null',true);
        wp_enqueue_script( 'plugins-js', get_template_directory_uri().'/js/plugins.js', array(), 'null',true);
        wp_enqueue_script( 'themepunch.tools-js', get_template_directory_uri().'/revolution/js/jquery.themepunch.tools.min.js', array(), 'null',true);
        wp_enqueue_script( 'themepunch.revolution-js', get_template_directory_uri().'/revolution/js/jquery.themepunch.revolution.min.js', array(), 'null',true);
        wp_enqueue_script( 'rev-slider-js', get_template_directory_uri().'/js/rev-slider.js', array(), 'null',true);
        wp_enqueue_script( 'scripts-js', get_template_directory_uri().'/js/scripts.js', array(), 'null',true);
        wp_enqueue_script( 'video-js', get_template_directory_uri().'/revolution/js/extensions/revolution.extension.video.min.js', array(), 'null',true);
        wp_enqueue_script( 'carousel-js', get_template_directory_uri().'/revolution/js/extensions/revolution.extension.carousel.min.js', array(), 'null',true);
        wp_enqueue_script( 'slideanims-js', get_template_directory_uri().'/revolution/js/extensions/revolution.extension.slideanims.min.js', array(), 'null',true);
        wp_enqueue_script( 'actions-js', get_template_directory_uri().'/revolution/js/extensions/revolution.extension.actions.min.js', array(), 'null',true);
        wp_enqueue_script( 'layeranimation-js', get_template_directory_uri().'/revolution/js/extensions/revolution.extension.layeranimation.min.js', array(), 'null',true);
        wp_enqueue_script( 'kenburn-js', get_template_directory_uri().'/revolution/js/extensions/revolution.extension.kenburn.min.js', array(), 'null',true);
        wp_enqueue_script( 'navigation-js', get_template_directory_uri().'/revolution/js/extensions/revolution.extension.navigation.min.js', array(), 'null',true);
        wp_enqueue_script( 'migration-js', get_template_directory_uri().'/revolution/js/extensions/revolution.extension.migration.min.js', array(), 'null',true);
        wp_enqueue_script( 'parallax-js', get_template_directory_uri().'/revolution/js/extensions/revolution.extension.parallax.min.js', array(), 'null',true);




    }


    add_action('wp_enqueue_scripts', 'add_files');

    // Add menus
    function register_menus(){
        register_nav_menus( array(
            'header-location'   => 'header',
            'footer-location'   => 'footer'
        ) );
    }
    add_action( 'init', 'register_menus');

    // Add upcoming events 
    function create_post_type(){

        $events = array(
            'public'        => true,
            'labels'        => array('name'=>'Upcoming events'),
            'menu_icon'     => 'dashicons-calendar-alt',
            'menu_position' => 5,
            'supports'      => array('title', 'editor', 'thumbnail'),
           );

        register_post_type('Upcoming events',$events);


    // Add new members
        $members = array(
            'public'        => true,
            'labels'        => array('name'=>'New member'),
            'menu_icon'     => 'dashicons-businessman',
            'menu_position' => 10,
            'supports'      => array('title', 'editor', 'thumbnail'),
            );

            register_post_type('new member',$members);
    }
    add_action('init','create_post_type');


