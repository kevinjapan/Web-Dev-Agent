

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
