<?php /* Template Name: Home */ get_header(); ?>


  <div class="homepage">
  <?php
    // checks to see that a post exists
    if( have_posts() ) {
      while ( have_posts() ) {
        
        //globalizes post variables
        the_post();
        the_title();
        the_content();
        //the_category(',', 'multiple');
      }
    }
  ?>
  </div>

<?php get_footer(); ?>