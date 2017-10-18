<?php

function merch_setup(){
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('merch-featured-image', 2200, 1200, true);
  register_nav_menus(array(
    'top' => __('Top Menu', 'merch'),
    'footer-services' => __('Footer - Services', 'merch'),
    'footer-contact' => __('Footer - Contact', 'merch'),
    'footer-about' => __('Footer - About', 'merch'),
    'footer-social' => __('Footer - Social Links', 'merch'),
  ));
  add_theme_support('html5', array(
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));
}
add_action('after_setup_theme', 'merch_setup');

function merch_add_custom_header(){
  add_theme_support('custom-header', apply_filters('merch_products_custom_header_args', array(
    'default-image' => get_parent_theme_file_uri('/assets/images/HomepageHeroHeaderStandard_S73FS-Unskilled-Worker-09_001_Default.jpg'),
    'width' => 1600,
    'height' => 640,
    'flex-height' => true,
		'video' => true
  )));
}
add_action('after_setup_theme', 'merch_add_custom_header');

function merch_scripts(){
    wp_enqueue_style( 'merch-style', get_stylesheet_uri() );
    wp_enqueue_script( 'merch-script', get_theme_file_uri('/assets/js/main.js'), array('jquery'));
}
add_action( 'wp_enqueue_scripts', 'merch_scripts' );

function merch_clean_thumbnail($dom){
  return preg_replace('/(width|height)="\d+"\s/', "", $dom);
}
add_filter('post_thumbnail_html', 'merch_clean_thumbnail');
