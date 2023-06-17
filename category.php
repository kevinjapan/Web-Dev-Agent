<?php get_header(); ?>

<!-- this is the default archive page listing all posts -->

<h1><?php single_cat_title();?></h1>

<section class="feed_list fade_in">
   <ul>
   <?php 
      if(have_posts()) {
         while(have_posts()) {
            the_post();?>
            
            <li>
               <?php if(has_post_thumbnail()):?>
                  <img src="<?php the_post_thumbnail_url('small'); ?>"/>
               <?php endif;?>

               <?php
               the_title();
               the_excerpt();
               ?>

               <a href="<?php the_permalink(); ?>">read more</a>
            </li>
            <?php
         } 
      }
   ?>
   </ul>
</section>


<?php get_footer(); ?>