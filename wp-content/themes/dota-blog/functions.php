<?php
/**
 * dotablog functions and definitions
 *
 * @package dotablog
 * @since dotablog 1.0
 */

function dota_theme_styles() {
    $theme = wp_get_theme();
    wp_enqueue_style('dotablog-style', get_stylesheet_uri(), [], $theme->get('Version'));
}
add_action( 'wp_enqueue_scripts', 'dota_theme_styles' );

require_once get_stylesheet_directory(__DIR__) . '/inc/block-patterns.php';
