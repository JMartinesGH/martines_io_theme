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
      <h1><a href="<?php echo get_home_url(); ?>" title="<?php bloginfo('name') . 'homepage'; ?>"><?php bloginfo('name'); ?></a></h1>
      <?php if (is_front_page() || is_page('resume')) : ?>
        <h2><?php if(the_field('mio-sub-header','option')) echo the_field('mio-sub-header','option'); ?></h2>
        <p>
          <?php if(the_field('mio-introduction','option')) echo the_field('mio-introduction', 'option'); ?>
        </p>
      <?php else:?>
        <?php if (has_nav_menu('header-menu')) {
          wp_nav_menu(array('theme_location' => 'header-menu'));
        } ?>
    <?php endif ?>
    </header>
