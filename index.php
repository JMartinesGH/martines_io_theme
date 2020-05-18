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

    <?php get_header(); ?>
    <div class="row">
      <div class="column square">


        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <h3><?php the_title(); ?></h3>

            <?php the_content(); ?>
            <?php wp_link_pages(); ?>

          <?php endwhile; ?>

          <?php
          if (get_next_posts_link()) {
            next_posts_link();
          }
          ?>
          <?php
          if (get_previous_posts_link()) {
            previous_posts_link();
          }
          ?>

        <?php else : ?>

          <p>No posts found. :(</p>

        <?php endif; ?>
      </div>
      <div class="column square">
        <!-- insert some content here -->
      </div>
    </div>
    <?php get_footer(); ?>
  </div>
</body>

</html>