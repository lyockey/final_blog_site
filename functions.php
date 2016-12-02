<?php

/* ------------ ENQUEUE JS SCRIPT ------------ */
function main_js() {
    wp_enqueue_script(
        'main-js',
        get_stylesheet_directory_uri() . '/js/main.js',
        array('jquery')
    );
}

add_action('wp_enqueue_scripts', 'main_js');

/*-------------- Enable Widgets--------------- */
function blank_widgets_init() {

/*--- First Footer Widget ---*/
    register_sidebar( array(
        'name'          =>  ('First Footer Widget'),
        'id'            =>  'footer-widget-one',
        'description'   =>  'Left widget in the footer',
        'before_widget' =>  '<div class="widget-footer widget-left">',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<h3>',
        'after_title'   =>  '</h3>'
    ));

/*--- Second Footer Widget ---*/
    register_sidebar( array(
        'name'          =>  ('Second Footer Widget'),
        'id'            =>  'footer-widget-two',
        'description'   =>  'Middle widget in the footer',
        'before_widget' =>  '<div class="widget-footer widget-middle">',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<h3>',
        'after_title'   =>  '</h3>'
    ));

/*--- Third Footer Widget ---*/
    register_sidebar( array(
        'name'          =>  ('Third Footer Widget'),
        'id'            =>  'footer-widget-three',
        'description'   =>  'Right widget in the footer',
        'before_widget' =>  '<div class="widget-footer widget-right">',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<h3>',
        'after_title'   =>  '</h3>'
    ));


}

add_action('widgets_init', 'blank_widgets_init');

/*-------------- Enable Menu --------------- */
add_theme_support('menus');

/*--- Enable Post Thumbnails ---*/
add_theme_support( 'post-thumbnails' );
