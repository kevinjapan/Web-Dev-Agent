<?php 
get_header();

   // from here-on-in, we are inserting wp- or wda_ blocks, so we are loading <sections> or equivalent 
   // so we want no wrap/container here
   if(have_posts()) :
      while(have_posts()) :
         the_post();
         the_content();
      endwhile; 
   endif;


get_footer(); 

?>