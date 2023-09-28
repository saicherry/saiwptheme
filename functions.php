<?php

function load_css(){
    wp_register_style( 'bootstrapcss', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all'); 
    wp_enqueue_style('bootstrapcss'); 

    wp_register_style( 'main', get_template_directory_uri() . '/css/main.css', array(), false, 'all'); 
    wp_enqueue_style('main'); 

}

add_action( 'wp_enqueue_scripts','load_css');


function load_js(){
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrapjs');
}

add_action( 'wp_enqueue_scripts','load_js');
    

add_theme_support('menus');
add_theme_support('widgets');

register_nav_menus( 
    array(
          'primary-menu' => 'Primary Menu',
          'mobile-menu' => 'Mobile Menu'
    )
    );