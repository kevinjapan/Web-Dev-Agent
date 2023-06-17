<?php get_header(); ?>

<!-- this is the default archive page listing all posts -->

<h1><?php single_cat_title();?></h1>
<h3>archive.php</h3>

<?php 
   if(have_posts()) :
      while(have_posts()) :
         the_post();?>
         <div style="background:white;margin-block:2rem;">
         
            <?php if(has_post_thumbnail()):?>
               <img src="<?php the_post_thumbnail_url('small'); ?>"/>
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
<!-- wp_link_pages() -->

<?php get_footer(); ?>