<?php
/*
Archive Page for Testimonial Custom Post Type
*/ 
get_header(); ?>


<section class="feed_list fade_in">
   <ul>
   <?php 
      if(have_posts()) :
         while(have_posts()) :
            the_post();
            $details= (array) get_post_meta( get_the_ID(),'_wda_testimonial_details_meta_key', true );
            ?>
            <li>
               <div class="mt_2 mb_2">
               


                  <h5 style="margin-bottom:0;"><?php echo isset($details['name']) ? $details['name'] : '';?></h5>
                  <p style="color:grey;margin-top:0;">
                     <?php echo isset($details['position']) ? $details['position'] : '';?>,
                     <?php echo isset($details['company']) ? $details['company'] : '';?></p>
                  <p><?php echo isset($details['website']) ? $details['website'] : '';?></p>
                  <p><?php echo get_post_meta( get_the_ID(), 'wda_testimonial_tagline', true );?></p>

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
<?php // wp_link_pages(); ?>

<?php get_footer(); ?>