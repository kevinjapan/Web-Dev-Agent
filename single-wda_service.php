<?php get_header(); ?>


   <?php while ( have_posts() ) : the_post(); ?>
 
            <h1><?php the_title(); ?></h1>
            <?php if(has_post_thumbnail()):?>
               <img src="<?php the_post_thumbnail_url('small'); ?>"/>
            <?php endif;?>
            <?php the_content();?>


   <?php endwhile; ?>
           
<?php get_footer(); ?>