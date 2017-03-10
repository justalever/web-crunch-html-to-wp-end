<?php  

// if( function_exists('acf_add_options_page') ) {
	
// 	acf_add_options_page(array(
// 		'page_title' 	=> 'Advanced Options',
// 		'menu_title'	=> 'Advanced',
// 		'menu_slug' 	=> 'advanced-options',
// 		'capability'	=> 'edit_posts',
// 		'redirect'		=> false
// 	));
	
// 	acf_add_options_sub_page(array(
// 		'page_title' 	=> 'Social Media',
// 		'menu_title'	=> 'Social Media',
// 		'parent_slug'	=> 'advanced-options',
// 	));
	
// }

// Register Custom Post Type
function menu_items() {

	$labels = array(
		'name'                  => _x( 'Meals', 'Post Type General Name', 'html-to-wp' ),
		'singular_name'         => _x( 'Meal', 'Post Type Singular Name', 'html-to-wp' ),
		'menu_name'             => __( 'Meals', 'html-to-wp' ),
		'name_admin_bar'        => __( 'Meal', 'html-to-wp' ),
		'archives'              => __( 'Meal Archives', 'html-to-wp' ),
		'attributes'            => __( 'Meal Attributes', 'html-to-wp' ),
		'parent_item_colon'     => __( 'Parent Meal', 'html-to-wp' ),
		'all_items'             => __( 'All Meals', 'html-to-wp' ),
		'add_new_item'          => __( 'Add New Meal', 'html-to-wp' ),
		'add_new'               => __( 'Add New', 'html-to-wp' ),
		'new_item'              => __( 'New Meal', 'html-to-wp' ),
		'edit_item'             => __( 'Edit Meal', 'html-to-wp' ),
		'update_item'           => __( 'Update Meal', 'html-to-wp' ),
		'view_item'             => __( 'View Meal', 'html-to-wp' ),
		'view_items'            => __( 'View Meals', 'html-to-wp' ),
		'search_items'          => __( 'Search Meal', 'html-to-wp' ),
		'not_found'             => __( 'Not found', 'html-to-wp' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'html-to-wp' ),
		'featured_image'        => __( 'Featured Image', 'html-to-wp' ),
		'set_featured_image'    => __( 'Set featured image', 'html-to-wp' ),
		'remove_featured_image' => __( 'Remove featured image', 'html-to-wp' ),
		'use_featured_image'    => __( 'Use as featured image', 'html-to-wp' ),
		'insert_into_item'      => __( 'Insert into Meal', 'html-to-wp' ),
		'uploaded_to_this_item' => __( 'Uploaded to this meal', 'html-to-wp' ),
		'items_list'            => __( 'Meals list', 'html-to-wp' ),
		'items_list_navigation' => __( 'Meals list navigation', 'html-to-wp' ),
		'filter_items_list'     => __( 'Filter meals list', 'html-to-wp' ),
	);
	$args = array(
		'label'                 => __( 'Meal', 'html-to-wp' ),
		'description'           => __( 'Meals on the entire menu', 'html-to-wp' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'trackbacks', 'revisions', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-carrot',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'meal', $args );

}
add_action( 'init', 'menu_items', 0 );

