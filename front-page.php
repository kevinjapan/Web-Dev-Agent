<?php get_header(); ?>

<!-- this is the page template applied for front-page / homepage -->


<section class="cover_block bg_navy fade_in">

      <?php if(has_post_thumbnail()):?>
         <img class="bg_img" src="<?php the_post_thumbnail_url('cover'); ?>"/>
      <?php endif;?>

      <div class="overlay">
         <h1><?php the_title(); ?></h1>
         <p>outlinecss education theme</p>
         <button>Find out more ></button>
      </div>

</section>


<?php 


   if(have_posts()) :
      while(have_posts()) :

         the_post();
         the_content();

      endwhile; 
   endif;
?>


<?php get_footer(); ?>