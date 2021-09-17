<?php
	
	/*
		Child Wordpress Funtions
	*/
	
	function galaxy_scriptss() 
	{
		wp_enqueue_style( 'galaxy-child-style', get_stylesheet_directory_uri() . '/style.css' );
	    wp_enqueue_style( 'galaxy-child-custom-style', get_stylesheet_directory_uri() . '/css/custom.css' );
	    wp_enqueue_script( 'galaxy-child-custom-js', get_stylesheet_directory_uri() . '/js/custom.js' );
	    
	}
	
	add_action( 'wp_enqueue_scripts', 'galaxy_scriptss', 99 );
	
	
	if( function_exists('acf_add_options_page') ) {
		
		acf_add_options_page(array(
			'page_title' => 'Barrel House Content',
			'menu_title' => 'Barrel House Content',
			'menu_slug' => 'beer-lists',
			'capability' => 'edit_posts',
			'parent_slug' => '',
			'position' => false,
			'icon_url' => false,
			'redirect' => false
		));
		
		acf_add_options_sub_page(array(
			'page_title' => 'On Tap',
			'menu_title' => 'On Tap',
			'menu_slug' => 'beer-lists-on-tap',
			'capability' => 'edit_posts',
			'parent_slug' => 'beer-lists',
			'position' => false,
			'icon_url' => false
		));
		
		acf_add_options_sub_page(array(
			'page_title' => 'Bottle Sales',
			'menu_title' => 'Bottle Sales',
			'menu_slug' => 'beer-lists-bottle-sales',
			'capability' => 'edit_posts',
			'parent_slug' => 'beer-lists',
			'position' => false,
			'icon_url' => false
		));
		
		acf_add_options_sub_page(array(
			'page_title' => 'Live Barrel',
			'menu_title' => 'Live Barrel',
			'menu_slug' => 'beer-lists-live-barrel',
			'capability' => 'edit_posts',
			'parent_slug' => 'beer-lists',
			'position' => false,
			'icon_url' => false
		));
		
		acf_add_options_sub_page(array(
			'page_title' => 'Blenders Reserve',
			'menu_title' => 'Blenders Reserve',
			'menu_slug' => 'beer-lists-blenders-reserve',
			'capability' => 'edit_posts',
			'parent_slug' => 'beer-lists',
			'position' => false,
			'icon_url' => false
		));
		
		acf_add_options_sub_page(array(
			'page_title' => 'On Nitro',
			'menu_title' => 'On Nitro',
			'menu_slug' => 'beer-lists-on-nitro',
			'capability' => 'edit_posts',
			'parent_slug' => 'beer-lists',
			'position' => false,
			'icon_url' => false
		));
		
		acf_add_options_sub_page(array(
			'page_title' => 'Guest Taps',
			'menu_title' => 'Guest Taps',
			'menu_slug' => 'beer-lists-guest-taps',
			'capability' => 'edit_posts',
			'parent_slug' => 'beer-lists',
			'position' => false,
			'icon_url' => false
		));
		
		acf_add_options_sub_page(array(
			'page_title' => 'Gluten Free',
			'menu_title' => 'Gluten Free',
			'menu_slug' => 'beer-lists-gluten-free',
			'capability' => 'edit_posts',
			'parent_slug' => 'beer-lists',
			'position' => false,
			'icon_url' => false
		));
		
		acf_add_options_sub_page(array(
			'page_title' => 'Cans For Here',
			'menu_title' => 'Cans For Here',
			'menu_slug' => 'beer-lists-cans-for-here',
			'capability' => 'edit_posts',
			'parent_slug' => 'beer-lists',
			'position' => false,
			'icon_url' => false
		));
		
		acf_add_options_sub_page(array(
			'page_title' => 'Kitchen',
			'menu_title' => 'Kitchen',
			'menu_slug' => 'beer-lists-kitchen',
			'capability' => 'edit_posts',
			'parent_slug' => 'beer-lists',
			'position' => false,
			'icon_url' => false
		));
		
		acf_add_options_sub_page(array(
			'page_title' => 'Retailers',
			'menu_title' => 'Retailers',
			'menu_slug' => 'beer-lists-retailers',
			'capability' => 'edit_posts',
			'parent_slug' => 'beer-lists',
			'position' => false,
			'icon_url' => false
		));
	
	}

?>