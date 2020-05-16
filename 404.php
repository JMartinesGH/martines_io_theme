<?php
/**
 * 404 template
 **/ 
get_header(); ?>

<h1>404</h1>

<?php
get_search_form(
  array(
    'label' => __( '404 not found', 'martinesio' ),
  )
);
get_footer(); ?>