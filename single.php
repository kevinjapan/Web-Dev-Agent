<?php get_header(); ?>

<!-- this is the default page template applied to all posts -->

<h1><?php the_title();?></h1>

<?php if(has_post_thumbnail()):?>
   <img src="<?php the_post_thumbnail_url('large'); ?>"/>
<?php endif;?>

<?php 
   if(have_posts()) :
      while(have_posts()) :

         the_post();
         the_content();

      endwhile; 
   endif;

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}

?>


<?php get_footer(); ?>

