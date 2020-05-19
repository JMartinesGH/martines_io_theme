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

// add Read More to excerpts
function mio_excerpt_more( $more ) {
  if ( ! is_single() ) {
      $more = sprintf( '<a class="read-more" href="%1$s">%2$s </a>',
          get_permalink( get_the_ID() ),
          __( 'Read More', 'martinesio' )
      );
  }

  return $more;
}
add_filter( 'excerpt_more', 'mio_excerpt_more' );

// CUSTOMIZER ADD-ONS
require_once( get_template_directory() . '/functions/customizer.php');

// Custom Post Types
require_once( get_template_directory() . '/functions/post-types.php');

// acf
require_once( get_template_directory() . '/functions/acf.php');
