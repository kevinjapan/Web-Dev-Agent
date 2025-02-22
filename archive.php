<?php 
/*
Default Archive page
*/

get_header(); 

if(have_posts()) :
   while(have_posts()) :
      the_post();?>
      <div class="mt_2 mb_2">
      
         <?php if(has_post_thumbnail()):?>
            <img src="<?php the_post_thumbnail_url('large'); ?>"/>
         <?php endif;?>

         <?php
         the_title();
         the_excerpt();
         ?>

         <a href="<?php the_permalink(); ?>">read more</a>

      </div>
      <?php
   endwhile; 
endif;
?>
<?php // wp_link_pages(); ?>

<?php get_footer(); ?>