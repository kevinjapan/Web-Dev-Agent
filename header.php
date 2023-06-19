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
      <a href="home.html">
         <img class="logo" src="./imgs/logo-outlinecss-education.jpg" alt="logo"/>
      </a>
   </div>

   <div class="nav_toggle">menu</div>

   <?php wp_nav_menu(
      array(
         'theme_location' => 'top-menu'
      )
   ); ?>

</nav>