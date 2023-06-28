<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>

        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        
        <?php wp_head(); ?>

    </head>


<body <?php body_class();?>>

<nav class="nav">
   
   <div class="logo_block">
      <a href="<?php echo get_site_url(); ?>" style="text-decoration:none;">
         Webstudio Kimono
      <?php 
      // if ( function_exists( 'the_custom_logo' ) ) {
      //    the_custom_logo();
      // } 
      ?>
      </a>
   </div>

   <div class="nav_toggle_wrap">
      <div class="nav_toggle">
         <div class="toggle_bar"></div>
         <div class="toggle_bar"></div>
         <div class="toggle_bar"></div>
      </div>
   </div>

   <?php wp_nav_menu(
      array(
         'theme_location' => 'top-menu'
      )
   ); ?>

</nav>