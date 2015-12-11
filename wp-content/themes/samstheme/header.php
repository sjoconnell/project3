<!DOCTYPE html>
<html lang="en">
<head>
  <!-- <meta charset="UTF-8"> -->
  <title>Authentify</title>

  <?php wp_head(); ?>
</head>
<body>
  <div id="header">
    <div class="top-header">
      <div id="logo">
        <a href="/">Authentify</a>
      </div>
      <div id="utility">
        <a href="#" class="blue-btn">Free Demo</a>
        <p class="phone">+1.773.243.0300</p>
      </div>
    </div>
    <div id="navigation">  
        <?php

          wp_nav_menu(array(
              'theme_location' => 'nav-menu'
            ));
         
        ?>
    </div>
  </div>