<?php 
/**
 * Main Site Header
 */ 
?>
<header class="wrapper square">
  <h1><?php bloginfo( 'name' ); ?></h1>
  <h2><?php bloginfo( 'description' ); ?></h2>
  <?php if ( has_nav_menu( 'header-menu' ) ) { 
    wp_nav_menu( array( 'theme_location' => 'header-menu' ) );
  }?>
</header>