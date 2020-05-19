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
              <li><?php the_sub_field('job_about_task');?></li>
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
    }?>
    </div>
  </div>
  <div class="column three">
    <div id="skills" class='square'>
      <h3>Skills</h3>
      <p><strong>Primary:</strong> HTML, CSS (Sass, SCSS), JavaScript (Vanilla, JQuery), PHP (WordPress,
        Laravel) </p>
      <p><strong>Secondary:</strong> JavaScript (React, Redux, Node.js), Blender, Photoshop, Illustrator
      </p>
      <p><strong>Tools:</strong> Puppeteer, Jest, Jasmine</p>
      <p><strong>Tools:</strong> Git, Yarn, Gulp.js, Bower, NPM</p>
    </div>
    <div id="education" class='square'>
      <h3>Education</h3>
      <p><strong>Rochester Institute of Technology</strong> &mdash; Rochester, NY</p>
      <p>B.S. Information Technology
        <br /><span class='small'>AUG. 2013</span></p>
    </div>
    <div id="interests" class='square'>
      <h3>Hobbies &amp; Interests</h3>
      <p>3D modeling and game development, collecting pulp science fiction novels & vinyl records,
        learning guitar, and hanging out with my dog</p>
    </div>
  </div>
</div>
<?php get_footer(); ?>