<?php /* Template Name: News */ get_header(); ?>


<?php 
    
  $newsitems = get_posts(['post_type'=>'news']);
    foreach($newsitems as $newsitem) { ?>
    <div id="news">
      <div class="news-wrap">  
        <div class="news-side">

        </div>
        <div class="news-items">
          <p><?php echo $newsitem->post_content ?></p>
          <p><?php echo $newsitem->news_date ?></p>
        </div>
        <hr>
      </div>
    </div>    

<?php } ?>



<?php get_footer(); ?>