<?php /* Template Name: News */ get_header(); ?>


<?php 
    
  $newsitems = get_posts(['post_type'=>'news']);
    foreach($newsitems as $newsitem) { ?>

    <div class="news">
      <p><?php echo $newsitem->news_image ?></p>
      <p><?php echo $newsitem->post_content ?></p>
      <p><?php echo $newsitem->news_date ?></p>
    </div>
    <hr>

<?php } ?>



<?php get_footer(); ?>