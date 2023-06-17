<?php get_header(); ?>

   <?php while ( have_posts() ) : 
      the_post(); 
      $details= (array) get_post_meta( get_the_ID(),'_wda_testimonial_details_meta_key', true );
      ?>
         <h1><?php the_title(); ?></h1>
      <?php if(has_post_thumbnail()):?>
         <img src="<?php the_post_thumbnail_url('small'); ?>"/>
      <?php endif;?>
            <p>
               <?php echo isset($details['name']) ? $details['name'] : '';?>, 
               <?php echo isset($details['company']) ? $details['company'] : '';?>
            </p>
            <p><?php echo isset($details['website']) ? $details['website'] : '';?></p>
      
         <?php  the_content();  ?>
        


   <?php endwhile; ?>
            
<?php get_footer(); ?>