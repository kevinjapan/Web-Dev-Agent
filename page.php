<?php
get_header(); 

// Default template page

?>
<main>
   <?php 
      if(have_posts()) :
         while(have_posts()) :

            the_post();
            the_content();

         endwhile; 
      endif;
   ?>
</main>

<?php get_footer(); ?>