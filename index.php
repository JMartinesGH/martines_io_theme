<?php get_header(); ?>
<div class="row">
  <div class="column square">


    <?php
    $query = new WP_Query(array('posts_per_page' => 3));
    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

        <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo wp_trim_words( get_the_title(), 10, '...' ); ?></a></h3>

        <?php the_excerpt(); ?>
        <?php wp_link_pages(); ?>

      <?php endwhile; ?>

    <?php else : ?>

      <p>No posts found. :(</p>

    <?php endif; ?>
  </div>
  <div class="column square">
    <!-- insert some content here -->
  </div>
</div>
<?php get_footer(); ?>