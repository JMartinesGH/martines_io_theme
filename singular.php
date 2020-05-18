<?php

/**
 * The template for displaying single posts and pages.
 */
get_header();
?>

<?php

if (have_posts()) {

  while (have_posts()) {
    the_post();
?>
    <div class="square">
      <?php get_template_part('template-parts/content', get_post_type()); ?>
    </div>
<?php
  }
}

get_footer();
?>