<?php get_header(); ?>

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
  
<?php get_footer(); ?>