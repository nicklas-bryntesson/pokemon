<?php
/*
Plugin Name: Pokemon
Plugin URI: https://nicklasbryntesson.se
Description: Create Pokemon's 
Version: 1.0
Author: Nicklas Bryntesson
Author URI: https://nicklasbryntesson.se
License: GPLv2
*/
?>

<?php 

// Register Custom Post Type
function custom_post_type() {

    $icon_url = plugin_dir_url(__FILE__) . 'images/pikachu-pokemon.png';

	$labels = array(
		'name'                  => _x( 'Pokemons', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Pokemon', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Pokemon', 'text_domain' ),
		'name_admin_bar'        => __( 'Pokemon', 'text_domain' ),
		'archives'              => __( 'Pokemon Archives', 'text_domain' ),
		'attributes'            => __( 'Pokemon Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Pokemon', 'text_domain' ),
		'all_items'             => __( 'All Pokemons', 'text_domain' ),
		'add_new_item'          => __( 'Add New Pokemon', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Pokemon', 'text_domain' ),
		'edit_item'             => __( 'Edit Pokemon', 'text_domain' ),
		'update_item'           => __( 'Update Pokemon', 'text_domain' ),
		'view_item'             => __( 'View Pokemon', 'text_domain' ),
		'view_items'            => __( 'View Pokemons', 'text_domain' ),
		'search_items'          => __( 'Search Pokemons', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Pokemon avatar', 'text_domain' ),
		'set_featured_image'    => __( 'Set Pokemon avatar', 'text_domain' ),
		'remove_featured_image' => __( 'Remove Pokemon avatar', 'text_domain' ),
		'use_featured_image'    => __( 'Use as Pokemon avatar', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Pokemon', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Pokemon list', 'text_domain' ),
		'items_list_navigation' => __( 'Pokemon list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Pokemon list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Pokemon', 'text_domain' ),
		'description'           => __( 'Pokemon Generator', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes' ),
		'taxonomies'            => array( 'weakness', ' type' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => $icon_url,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'pokemon',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'pokemon', $args );

}
add_action( 'init', 'custom_post_type', 0 );

?>
