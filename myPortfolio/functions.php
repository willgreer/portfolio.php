<?php

function theme_styles() {
    
    wp_register_style('main-styles', get_template_directory_uri() . '/css/main.css');

    wp_register_style('page-styles', get_template_directory_uri() . '/css/page.css');

    wp_enqueue_style( 'main-styles' );
    if (is_home() || is_front_page()) : 
        wp_enqueue_style( 'main_styles' );
    else:
        wp_enqueue_style( 'main_styles' );
        wp_enqueue_style( 'page-styles' );
    endif;
    


}

add_action( 'wp_enqueue_scripts', 'theme_styles');


//nav menus

register_nav_menu('primary', 'primary menu');

