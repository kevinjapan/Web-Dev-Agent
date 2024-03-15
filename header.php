<?php
/*
Global Page Header
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
   <meta charset="<?php bloginfo( 'charset' ); ?>" />
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title><?php echo get_bloginfo('name');?></title>
   <?php wp_head(); ?>
</head>

<body <?php body_class();?>>

<nav class="nav">
   
   <div class="logo_block">
      <a href="<?php echo get_site_url(); ?>" style="text-decoration:none;">
         <?php echo get_bloginfo('name'); ?>
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