<?php

    add_theme_support('post-thumbnails');

    function enqueue_style_script() {
        $ver = '1.0.0';
        
        wp_register_style('maincss', get_template_directory_uri() . '/assets/css/main.css', array(), $ver, 'all');
        wp_enqueue_style('maincss');
    

        wp_register_script('mainjs', get_template_directory_uri() . '/assets/js/main.js', array(), $ver, 1, 1);
        wp_enqueue_script('mainjs');

    }
    add_action('wp_enqueue_scripts', 'enqueue_style_script');

?>