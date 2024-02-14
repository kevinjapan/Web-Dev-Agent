<?php 

get_header();

//
// Front Page Hero Cover Block
//
?>
<section class="front_page cover_block bg_navy fade_in">
   <?php if(has_post_thumbnail()):?>
      <img class="bg_img" src="<?php the_post_thumbnail_url('cover'); ?>"/>
   <?php endif;?>
   <div class="overlay">
      <h1><?php echo get_bloginfo('name'); ?></h1>
      <p><?php echo get_bloginfo('description'); ?></p>
   </div>
</section>
<?php

//
// Front Page Content
// each wda pattern block is a <section>,  so we don't provide top-level container
//
   if(have_posts()) :
      while(have_posts()) :
         the_post();
         the_content();
      endwhile; 
   endif;


get_footer(); 

?>