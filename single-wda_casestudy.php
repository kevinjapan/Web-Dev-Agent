<?php get_header(); ?>

   <?php while ( have_posts() ) : the_post(); ?>

      <?php // to do : take ownership of classes herein : rollout ?> 

         <h1><?php the_title(); ?></h1>
         <?php if(has_post_thumbnail()):?>
            <img src="<?php the_post_thumbnail_url('medium'); ?>"/>
         <?php endif;?>

         <h4><?php echo get_post_meta(get_the_ID(),'Client',true);?></h4>

         <?php  the_content();?>


   <?php endwhile; ?>

            
<?php get_footer(); ?>