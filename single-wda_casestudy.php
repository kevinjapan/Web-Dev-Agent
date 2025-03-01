<?php
/*
Single Page for CaseStudy Custom Post Type
*/

get_header(); ?>

   <?php while ( have_posts() ) : the_post(); ?>

      <section class="front_page cover_block bg_navy fade_in">
            <?php if(has_post_thumbnail()):?>
               <img class="bg_img" src="<?php the_post_thumbnail_url('cover'); ?>"/>
            <?php endif;?>
            <div class="overlay">
               <h1><?php the_title(); ?></h1>
               <p><?php echo get_post_meta( get_the_ID(), 'wda_casestudy_tagline', true ); ?></p>
            </div>
      </section>
      <section class="the_content">
         <?php the_content();?>
      </section>

   <?php endwhile;?>
  
   <div style="display:flex;gap:2rem;">
      <div><?php next_post_link('&laquo; %link', 'prev project' ); ?></div>
      <div><?php previous_post_link( ' %link &raquo;', 'next project' ); ?></div>
   </div>

<?php get_footer(); ?>