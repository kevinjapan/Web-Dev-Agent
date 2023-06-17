<?php get_header(); ?>

<!-- this is the default page (non front-page) template -->

applied to all other pages -->

<h1><?php the_title();?></h1>

<?php 
   if(have_posts()) :
      while(have_posts()) :

         the_post();
         the_content();

      endwhile; 
   endif;
?>


<?php get_footer(); ?>