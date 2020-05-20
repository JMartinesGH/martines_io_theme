<?php /* Template Name: Resume Template */ ?>
<?php get_header(); ?>
<!-- temporary hard coding -->
<div class="row">
  <div class="column square">
    <h3>Experience</h3>
    <?php
    // check if the repeater field has rows of data
    if (have_rows('jobs')) :

      // loop through the rows of data
      while (have_rows('jobs')) : the_row(); ?>
        <div class="job">
          <strong>
            <?php the_sub_field('job_title'); ?><br />
            <?php the_sub_field('job_company_name'); ?>, <?php the_sub_field('job_team'); ?>
          </strong>
          <br />
          <span class='small'>
            <?php the_sub_field('job_location'); ?> || <?php the_sub_field('job_date_range'); ?>
          </span>
          <ul>
            <?php
            // check if the repeater field has rows of data
            if (have_rows('job_about')) :

              // loop through the rows of data
              while (have_rows('job_about')) : the_row(); ?>
                <li><?php the_sub_field('job_about_task'); ?></li>
            <?php endwhile;
            endif; ?>
          </ul>
        </div>
    <?php endwhile;

    else :

    // no rows found

    endif;

    ?>
    <div class="job">
      <?php
      if (have_posts()) {

        while (have_posts()) {
          the_post();
          the_content();
        }
      } ?>
    </div>
  </div>
  <div class="column three">
    <?php
    // check if the repeater field has rows of data
    if (have_rows('resume-widgets')) :

      // loop through the rows of data
      while (have_rows('resume-widgets')) : the_row(); ?>
        <div class='square'>
          <h3><?php the_sub_field('resume-widget-header'); ?></h3>
          <?php the_sub_field('resume-widget-body'); ?>
        </div>
    <?php endwhile;
    endif; ?>

  </div>
</div>
<?php get_footer(); ?>