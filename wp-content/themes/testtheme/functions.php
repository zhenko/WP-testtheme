<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Test Theme
 * @since Test Theme 1.0
 */

 function theme_setup() {
  register_nav_menus(
    array(
      'primary' => esc_html__( 'top-navigation', 'testtheme' ),
    )
  );
}
add_action('after_setup_theme', 'theme_setup');

function add_custom_script() {
  wp_enqueue_script('custom-script', get_template_directory_uri() . '/js-script.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'add_custom_script');

function enqueue_styles() {
  wp_enqueue_style('theme-style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

 