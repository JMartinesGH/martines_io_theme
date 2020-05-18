<?php
/**
 * Martines.io functions and definitions
 */

 //register menus
function register_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_menus' );

// CUSTOMIZER ADD-ONS
require_once( get_template_directory() . '/functions/customizer.php');

// Custom Post Types