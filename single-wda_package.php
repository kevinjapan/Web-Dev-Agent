<?php get_header(); ?>

   <?php while ( have_posts() ) : 
      the_post(); 
      $features = (array) get_post_meta(get_the_ID(),'_features_meta_key',true);
      ?>
               <h1><?php the_title(); ?></h1>
            
            <ul>
               <?php
                  foreach ($features as $feature) {
                     ?><li><?php echo $feature;?></li><?php
                  }
               ?>
            </ul>
               <?php the_content();?>
          
   <?php endwhile; ?>

   
<?php get_footer(); ?>