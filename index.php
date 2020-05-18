<?php get_header(); ?>
<div class="row">
  <div class="column square">


    <?php
    $query = new WP_Query(array('posts_per_page' => 3));
    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

        <h3><?php the_title(); ?></h3>

        <?php the_excerpt(); ?>
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