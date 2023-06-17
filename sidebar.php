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
?>


<?php get_footer(); ?>