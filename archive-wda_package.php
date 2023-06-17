<?php
/*
Template Post Type: wda_case_study,casestudy
*/
?>

<?php get_header(); ?>

<!-- this is the default archive page listing all posts -->

<h1><?php single_cat_title();?></h1>

<section class="feed_list fade_in">
   <ul>
<?php 
   if(have_posts()) :
      while(have_posts()) :
         the_post();
         $features = (array) get_post_meta(get_the_ID(),'_features_meta_key',true);
         ?>
         <li>
         <div style="background:white;margin-block:2rem;">
         
            <?php if(has_post_thumbnail()):?>
               <img src="<?php the_post_thumbnail_url('large'); ?>"/>
            <?php endif;?>

            <?php
            the_title();
            ?><ul>
               <?php
                  foreach ($features as $feature) {
                     ?><li><?php echo $feature;?></li><?php
                  }
               ?>
            </ul>
            <?php
            the_excerpt();
            ?>

            <a href="<?php the_permalink(); ?>">read more</a>

         </div>
            </li>
         <?php
      endwhile; 
   endif;
?>
</ul>
</section>
<!-- wp_link_pages() -->

<?php get_footer(); ?>