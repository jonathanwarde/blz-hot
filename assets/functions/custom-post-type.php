<?php
/* joints Custom Post Type Example
This page walks you through creating 
a custom post type and taxonomies. You
can edit this one or copy the following code 
to create another one. 

I put this in a separate file so as to 
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

*/


// let's create the function for the custom type
function custom_post_portfolio() {
	// creating (registering) the custom type
	register_post_type( 'portfolio', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('portfolio', 'jointswp'), /* This is the Title of the Group */
			'singular_name' => __('portfolio', 'jointswp'), /* This is the individual type */
			'all_items' => __('All portfolios', 'jointswp'), /* the all items menu item */
			'add_new' => __('Add New portfolio', 'jointswp'), /* The add new menu item */
			'add_new_item' => __('Add portfolio', 'jointswp'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointswp' ), /* Edit Dialog */
			'edit_item' => __('Edit portfolios', 'jointswp'), /* Edit Display Title */
			'new_item' => __('New portfolio', 'jointswp'), /* New Display Title */
			'view_item' => __('View portfolio', 'jointswp'), /* View Display Title */
			'search_items' => __('Search portfolio', 'jointswp'), /* Search Custom Type Title */ 
			'not_found' =>  __('Nothing found in the Database.', 'jointswp'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the portfolio of Blaze work', 'jointswp' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 5, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => 'dashicons-admin-appearance', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> array( 'slug' => 'portfolio', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'portfolios', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => true,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions', 'sticky', 'page-attributes')
	 	) /* end of options */
	); /* end of register post type */
	
	/* this adds your post categories to your custom post type */
	//register_taxonomy_for_object_type('category', 'portfolio');
	/* this adds your post tags to your custom post type */
	//register_taxonomy_for_object_type('post_tag', 'portfolio');
	
} 

	// adding the function to the Wordpress init
	add_action( 'init', 'custom_post_portfolio');
	
	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/

// now let's add custom categories (these act like categories)
    register_taxonomy( 'work', 
    	array('portfolio'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => true,     /* if this is true, it acts like categories */             
    		'labels' => array(
    			'name' => __( 'work', 'jointswp' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'work', 'jointswp' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search works', 'jointswp' ), /* search title for taxomony */
    			'all_items' => __( 'All works', 'jointswp' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Custom Category', 'jointswp' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Custom Category:', 'jointswp' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit work', 'jointswp' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update works', 'jointswp' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New works', 'jointswp' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New work', 'jointswp' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true, 
    		'show_ui' => true,
    		'query_var' => true,
    		'rewrite' => array( 'slug' => 'work' ),
    	)
    );

// now let's add custom categories (these act like categories)
    register_taxonomy( 'sector', 
    	array('portfolio'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => true,     /* if this is true, it acts like categories */             
    		'labels' => array(
    			'name' => __( 'sectors', 'jointswp' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'sector', 'jointswp' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search sectors', 'jointswp' ), /* search title for taxomony */
    			'all_items' => __( 'All portfolio sectors', 'jointswp' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Custom Category', 'jointswp' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Custom Category:', 'jointswp' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit work', 'jointswp' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update sectors', 'jointswp' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New sector', 'jointswp' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New sector', 'jointswp' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true, 
    		'show_ui' => true,
    		'query_var' => true,
    		'rewrite' => array( 'slug' => 'sector' ),
    	)
    );

// let's create the function for the custom type
function custom_post_case_study() {
	// creating (registering) the custom type
	register_post_type( 'case_study', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Case Study', 'jointswp'), /* This is the Title of the Group */
			'singular_name' => __('Case Study', 'jointswp'), /* This is the individual type */
			'all_items' => __('All Case Studies', 'jointswp'), /* the all items menu item */
			'add_new' => __('Add New Case Study', 'jointswp'), /* The add new menu item */
			'add_new_item' => __('Add Case Study', 'jointswp'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointswp' ), /* Edit Dialog */
			'edit_item' => __('Edit Case Studies', 'jointswp'), /* Edit Display Title */
			'new_item' => __('New Case Study', 'jointswp'), /* New Display Title */
			'view_item' => __('View Case Study', 'jointswp'), /* View Display Title */
			'search_items' => __('Search Case Studies', 'jointswp'), /* Search Custom Type Title */ 
			'not_found' =>  __('Nothing found in the Database.', 'jointswp'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is a Chela Case case_study', 'jointswp' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 7, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => 'dashicons-portfolio', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> array( 'slug' => 'case-study', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'case-study', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => true,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'page-attributes', 'thumbnail', 'revisions')
	 	) /* end of options */
	); /* end of register post type */

}

	// adding the function to the Wordpress init
	add_action( 'init', 'custom_post_case_study');