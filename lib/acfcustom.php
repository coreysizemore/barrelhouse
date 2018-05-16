<?php
	
	/*
		Advanced Custom Fields
	*/


	if( function_exists('acf_add_options_page') ) {
		
		acf_add_options_page(array(
			'page_title' => 'On Tap',
			'menu_title' => 'On Tap',
			'menu_slug' => 'on-tap',
			'capability' => 'edit_posts',
			'parent_slug' => '',
			'position' => false,
			'icon_url' => false,
			'redirect' => false
		));
		
		acf_add_options_page(array(
			'page_title' => 'Bottle Sales',
			'menu_title' => 'Bottle Sales',
			'menu_slug' => 'bottle-sales',
			'capability' => 'edit_posts',
			'parent_slug' => '',
			'position' => false,
			'icon_url' => false,
			'redirect' => false
		));
		
		acf_add_options_page(array(
			'page_title' => 'Live Barrel',
			'menu_title' => 'Live Barrel',
			'menu_slug' => 'live-barrel',
			'capability' => 'edit_posts',
			'parent_slug' => '',
			'position' => false,
			'icon_url' => false,
			'redirect' => false
		));
		
		acf_add_options_page(array(
			'page_title' => 'Reserve Taps',
			'menu_title' => 'Reserve Taps',
			'menu_slug' => 'reserve-taps',
			'capability' => 'edit_posts',
			'parent_slug' => '',
			'position' => false,
			'icon_url' => false,
			'redirect' => false
		));
		
		acf_add_options_page(array(
			'page_title' => 'Wine & Cider',
			'menu_title' => 'Wine & Cider',
			'menu_slug' => 'wine-cider',
			'capability' => 'edit_posts',
			'parent_slug' => '',
			'position' => false,
			'icon_url' => false,
			'redirect' => false
		));
		
		acf_add_options_page(array(
			'page_title' => 'Guest Tap',
			'menu_title' => 'Guest Tap',
			'menu_slug' => 'guest-tap',
			'capability' => 'edit_posts',
			'parent_slug' => '',
			'position' => false,
			'icon_url' => false,
			'redirect' => false
		));
		
		acf_add_options_page(array(
			'page_title' => 'On Nitro',
			'menu_title' => 'On Nitro',
			'menu_slug' => 'on-nitro',
			'capability' => 'edit_posts',
			'parent_slug' => '',
			'position' => false,
			'icon_url' => false,
			'redirect' => false
		));
	
	}

?>