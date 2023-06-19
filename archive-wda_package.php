<?php get_header(); ?>

<section class="feed_list fade_in">
   <ul>
      <?php 
         if(have_posts()) :
            while(have_posts()) :
               the_post();
               $features = (array) get_post_meta(get_the_ID(),'_features_meta_key',true);
               ?>
               <li>
                  <section class="feature_block" style="border:solid 1px orange;">
                        <?php if(has_post_thumbnail()):?>
                           <img src="<?php the_post_thumbnail_url('large'); ?>"/>
                        <?php endif;?>
                     <div style="background:white;margin-block:2rem;">
                     

                        <h3><?php echo the_title();?></h3>
                        <ul style="list-style:circle;">
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
                  </section>
                  </li>
               <?php
            endwhile; 
         endif;
      ?>
   </ul>
</section>
<!-- wp_link_pages() -->

<?php get_footer(); ?>