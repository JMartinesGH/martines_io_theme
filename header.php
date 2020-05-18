<?php

/**
 * Main Site Header
 */
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <link href="https://fonts.googleapis.com/css?family=Glegoo&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" type="text/css" />
  <?php wp_head(); ?>
</head>

<body>
  <div class="container">

    <header class="wrapper square">
      <h1><?php bloginfo('name'); ?></h1>
      <h2><?php bloginfo('description'); ?></h2>
      <?php if (has_nav_menu('header-menu')) {
        wp_nav_menu(array('theme_location' => 'header-menu'));
      } ?>
      <?php if( is_front_page() ): ?>
        <!-- front page -->
        <p>
          <?php echo the_field('mio-introduction', 'option'); ?>
        </p>
      <?php endif?>
    </header>