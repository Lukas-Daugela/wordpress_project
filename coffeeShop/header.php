<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php wp_head(); ?>

<header class="nav-header">
  <nav class="navigation-bar">
    <a href="/wordpress_coffee" class="branding-link">
      <?php
      if(function_exists('the_custom_logo')){
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id);
      }
      ?>
      <img class="logo" src="<?php echo $logo[0] ?>" alt="logo">
    </a>
  
    <?php 
      wp_nav_menu(
        array(
          'menu' => 'primary',
          'container' => '',
          'theme_location' => 'primary',
          'items_wrap' => '<ul class="navigation-menu">%3$s</ul>'
        )
      );        
    ?>
    
    <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
  </nav>
</header>