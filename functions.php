<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 02/08/2017
 * Time: 12:00
 */

function theme_styles () {


    wp_enqueue_style('main', get_template_directory_uri() . '/dist/css/app.css' );
    wp_enqueue_script('main', get_template_directory_uri() . '/dist/js/app.js', [], [], true );

}
add_action( 'wp_enqueue_scripts', 'theme_styles' );