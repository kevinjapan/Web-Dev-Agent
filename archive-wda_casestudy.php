<?php get_header(); ?>


<section class="feed_list fade_in">
   <ul>
      <?php 
      if(have_posts()) :
         while(have_posts()) :
            the_post();?>
            <li>
               <div style="background:white;margin-block:2rem;">
               
                  <?php if(has_post_thumbnail()):?>
                     <img src="<?php the_post_thumbnail_url('large'); ?>"/>
                  <?php endif;?>
                  <?php
                  $tagline = get_post_meta( get_the_ID(), 'wda_casestudy_tagline',true );
                  $url = get_post_meta( get_the_ID(), 'wda_casestudy_url',true );
               
                  ?><h3><?php echo the_title();?></h3><?php
                  ?><?php echo $tagline;?><?php
                  ?><?php echo $url;?><?php
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