<?php /* Template Name: Partner-Posts */ get_header(); ?>

<?php

  $taxonomy = is_page('Technology') ? 'Technology' : 'Alliance';
    
  $partneritems = get_posts(['post_type'=>'partners', 'category_name' => $taxonomy]);
    foreach($partneritems as $partneritem) { ?>
  <div id="partner-page-wrapper">
    <div id="partner-sidebar">

    </div>
    <div id="partner-main">
      <div class="wrap">
        <p><?php echo $partneritem->post_title ?></p>
        <p><?php echo $partneritem->post_content ?></p>
        <hr>
      </div>
    </div>
  </div>  

<?php } ?>


<?php get_footer(); ?>