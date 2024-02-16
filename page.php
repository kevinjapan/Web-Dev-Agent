<?php
get_header(); 

// Default template page

?>

<?php // we don't show title by default // the_title();?>

<?php 
   if(have_posts()) :
      while(have_posts()) :

         the_post();
         the_content();

      endwhile; 
   endif;
?>


<?php get_footer(); ?>