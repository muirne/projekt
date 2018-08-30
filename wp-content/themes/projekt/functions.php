<?php
require 'post-types/omnie.php';


add_theme_support('menus');
add_theme_support('post-thumbnails');

function coderslab_enqueue_script() {
    //slick
    wp_enqueue_style('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');

    wp_enqueue_script('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', ['jquery'], null, true);
    //Add popper
    wp_enqueue_script('popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', ['jquery'], null, true);
    //Add bootstrap
    wp_enqueue_script('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', ['jquery', 'popper'], null, true);

    //Add bootstrap styles
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');

    wp_enqueue_script('js', get_stylesheet_directory_uri() . '/js/main.js', ['jquery', 'bootstrap'], null, true);

    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.css', null, '1.0.0', 'all');


    wp_enqueue_style(
        'main',
        get_stylesheet_directory_uri() . '/main.css',
        ['bootstrap'],
        true );



}
add_action( 'wp_enqueue_scripts' , 'coderslab_enqueue_script' );


// function wpt_register_js() {
//     wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');
//     wp_enqueue_script('jquery.bootstrap.min');
// }
// add_action( 'init', 'wpt_register_js' );




/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

    register_sidebar( array(
        'name'          => 'Home right sidebar',
        'id'            => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
