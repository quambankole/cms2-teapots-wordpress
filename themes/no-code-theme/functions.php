<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package no-code-theme
 * @since 1.0.0
 */


 // Hooks.
require_once get_theme_file_path( 'inc/hooks.php' );


 // Woo Commerce.
require_once get_theme_file_path( 'inc/woocommerce.php' );


function teapots_enqueue_woocommerce_styles() {
    wp_enqueue_style(
        'teapots-woocommerce-styles', 
        get_theme_file_uri( '/assets/css/woocommerce.css' ),
        array(), 
        '1.0'    
    );
}
add_action( 'wp_enqueue_scripts', 'teapots_enqueue_woocommerce_styles' );
