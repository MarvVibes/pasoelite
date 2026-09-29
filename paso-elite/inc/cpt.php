<?php
/**
 * Register Custom Post Types and Taxonomies for Paso Elite
 *
 * @package Paso_Elite
 */

if (!defined('ABSPATH')) {
    exit;
}

function paso_elite_register_cpts() {
    // -------------------------------------------------------------
    // 1. Lookbook Custom Post Type (Hairstyles & Client Gallery)
    // -------------------------------------------------------------
    $lookbook_labels = array(
        'name'               => __('Lookbook Styles', 'paso-elite'),
        'singular_name'      => __('Lookbook Style', 'paso-elite'),
        'menu_name'          => __('Lookbook Gallery', 'paso-elite'),
        'name_admin_bar'     => __('Lookbook Style', 'paso-elite'),
        'add_new'            => __('Add New Style', 'paso-elite'),
        'add_new_item'       => __('Add New Lookbook Style', 'paso-elite'),
        'new_item'           => __('New Style', 'paso-elite'),
        'edit_item'          => __('Edit Style', 'paso-elite'),
        'view_item'          => __('View Style', 'paso-elite'),
        'all_items'          => __('All Lookbook Styles', 'paso-elite'),
        'search_items'       => __('Search Styles', 'paso-elite'),
        'not_found'          => __('No styles found.', 'paso-elite'),
        'not_found_in_trash' => __('No styles found in Trash.', 'paso-elite')
    );

    $lookbook_args = array(
        'labels'             => $lookbook_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'lookbook-style'),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-format-image',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest'       => true,
    );

    register_post_type('paso_lookbook', $lookbook_args);

    // Lookbook Category Taxonomy
    $cat_labels = array(
        'name'              => __('Style Categories', 'paso-elite'),
        'singular_name'     => __('Style Category', 'paso-elite'),
        'search_items'      => __('Search Categories', 'paso-elite'),
        'all_items'         => __('All Categories', 'paso-elite'),
        'parent_item'       => __('Parent Category', 'paso-elite'),
        'parent_item_colon' => __('Parent Category:', 'paso-elite'),
        'edit_item'         => __('Edit Category', 'paso-elite'),
        'update_item'       => __('Update Category', 'paso-elite'),
        'add_new_item'      => __('Add New Category', 'paso-elite'),
        'new_item_name'     => __('New Category Name', 'paso-elite'),
        'menu_name'         => __('Categories', 'paso-elite'),
    );

    register_taxonomy('lookbook_cat', array('paso_lookbook'), array(
        'hierarchical'      => true,
        'labels'            => $cat_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'lookbook-category'),
        'show_in_rest'      => true,
    ));

    // -------------------------------------------------------------
    // 2. Services Custom Post Type (Full Salon Service Menu)
    // -------------------------------------------------------------
    $service_labels = array(
        'name'               => __('Salon Services', 'paso-elite'),
        'singular_name'      => __('Salon Service', 'paso-elite'),
        'menu_name'          => __('Salon Services', 'paso-elite'),
        'name_admin_bar'     => __('Salon Service', 'paso-elite'),
        'add_new'            => __('Add New Service', 'paso-elite'),
        'add_new_item'       => __('Add New Salon Service', 'paso-elite'),
        'new_item'           => __('New Service', 'paso-elite'),
        'edit_item'          => __('Edit Service', 'paso-elite'),
        'view_item'          => __('View Service', 'paso-elite'),
        'all_items'          => __('All Services', 'paso-elite'),
        'search_items'       => __('Search Services', 'paso-elite'),
        'not_found'          => __('No services found.', 'paso-elite'),
        'not_found_in_trash' => __('No services found in Trash.', 'paso-elite')
    );

    $service_args = array(
        'labels'             => $service_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'salon-service'),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-scissors',
        'supports'           => array('title', 'editor', 'excerpt'),
        'show_in_rest'       => true,
    );

    register_post_type('paso_service', $service_args);

    // Service Category Taxonomy
    $serv_cat_labels = array(
        'name'              => __('Service Categories', 'paso-elite'),
        'singular_name'     => __('Service Category', 'paso-elite'),
        'search_items'      => __('Search Categories', 'paso-elite'),
        'all_items'         => __('All Categories', 'paso-elite'),
        'edit_item'         => __('Edit Category', 'paso-elite'),
        'update_item'       => __('Update Category', 'paso-elite'),
        'add_new_item'      => __('Add New Category', 'paso-elite'),
        'new_item_name'     => __('New Category Name', 'paso-elite'),
        'menu_name'         => __('Categories', 'paso-elite'),
    );

    register_taxonomy('service_cat', array('paso_service'), array(
        'hierarchical'      => true,
        'labels'            => $serv_cat_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'service-category'),
        'show_in_rest'      => true,
    ));
}
add_action('init', 'paso_elite_register_cpts');
