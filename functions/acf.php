<?php
/*
  ACF Settings
*/ 

// options page
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Martines.io General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'martinesio-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Home Page Settings',
    'menu_title'	=> 'Homepage',
    'menu_slug' 	=> 'martinesio-homepage-settings',
		'parent_slug'	=> 'martinesio-general-settings',
	));	
}