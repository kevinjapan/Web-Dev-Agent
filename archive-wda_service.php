<?php
/*
Archive Page for Service Custom Post Type
*/

get_header();
?>

<section class="feed_list fade_in">
   <ul>
   <?php 
      if(have_posts()) :
         while(have_posts()) :
            the_post();?>
            <li>
            <div class="mt_2 mb_2">
            
               <?php if(has_post_thumbnail()):?>
                  <img src="<?php the_post_thumbnail_url('large'); ?>"/>
               <?php endif;?>

               <h3><?php echo the_title();?></h3>
               <div class="feature_tile_content"><?php echo the_excerpt();?></div>

               <a style="float:right;" href="<?php the_permalink(); ?>">read more</a>

            </div>
               </li>
            <?php
         endwhile; 
      endif;
   ?>
   </ul>
</section>
<?php // wp_link_pages(); ?>

<?php get_footer(); ?>