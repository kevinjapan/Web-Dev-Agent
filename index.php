<?php
/*
Our Blog (default Posts) Page

Unexpected, but when a static front page is used (as is default w/ Web Dev Agent) and the 
site has any page defined for the blog list (eg a page called 'Blog'), home.php is used as
the designated blog list page! (Or index.php if home.php doesn't exist).
So, we effectively add a stub page called 'Blog' and add this to the menu, but wordpress 
internals through Admin/Settings/Reading/A Static Page will re-direct to this page.
*/

?>
<?php get_header(); ?>


<h1 class="fade_in"><?php single_cat_title();?></h1>

<section class="feature_tiles stagger_tiles fade_in">
   <ul>
   <?php 
      if(have_posts()) {
         while(have_posts()) {
            the_post();?>
            <li class="news_tile" style="border:none;">
               <?php if(has_post_thumbnail()):?>
                  <img src="<?php the_post_thumbnail_url('large'); ?>"/>
               <?php endif;?>
               <h4><?php the_title();?></h4>
               <?php the_excerpt();?>
               <div class="wp-block-button te_button">
                  <a class="wp-block-button__link wp-element-button" href="<?php the_permalink(); ?>">read more</a>
               </div>
            </li>
            <?php
         } 
      }
   ?>
   </ul>
</section>
      
<section class="feature_tiles stagger_tiles fade_in">
   <ul>
      <?php 
      if(have_posts()) :
         while(have_posts()) :
            the_post();?>   
                  <li>
                     <?php if(has_post_thumbnail()):?>
                        <img src="<?php the_post_thumbnail_url('medium'); ?>"/>
                     <?php endif;?>
                     <h5><?php echo the_title();?></h5>
                     <p><?php echo the_excerpt();?></p>
                     <button><a href="<?php the_permalink(); ?>">read more</a></button>
                  </li>
            <?php
         endwhile; 
      endif;
      ?>
   </ul>
</section>

<!-- wp_link_pages() -->

<?php get_footer(); ?>

