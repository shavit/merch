<?php
/**
* Plugin Name: merch products
* Description: Add products to your merch theme
* Version: 1.0
*/

if (!function_exists('add_action')) exit;

function merch_products_create_post_type(){

  register_post_type('product',
    array(
      'has_archived' => false,
      'labels' => array(
        'name' => __('Products'),
        'singular_name' => __('Product')
      ),
      'public' => true,
      'show_ui' => true,
      'menu_position' => 6,
      'supports' => array(
        'title',
        'excerpt',
        'thumbnail',
        'custom-fields'
      )
    )
  );

  register_taxonomy_for_object_type('category', 'product');
}
add_action('init', 'merch_products_create_post_type');

function merch_products_custom_interface(){
  remove_submenu_page('edit.php', 'edit.php');
  remove_submenu_page('edit.php', 'post-new.php');
  remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=post_tag');
}
add_action('admin_init', 'merch_products_custom_interface');
