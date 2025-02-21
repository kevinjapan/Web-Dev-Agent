<?php

// Register Theme Block Pattern Templates
//
function wda_register_image_blocks_templates($site_uri) {

   // Image Block Template
   //
   register_block_pattern(
      'wda-image',
      [
         'title' => __('Web Dev Agent Image', 'wda'),
         'description' => _x( 'Web Dev Agent Image.', 'An image block with Web Dev Agent customization.', 'wda' ),            
         'keywords' => ['image'],
         'categories' => ['wda-images'],
         'viewportWidth' => 1000,
         'content' =>  
            '<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"wda-image"} -->
               <figure class="wp-block-image size-large wda-image">
                  <img src="' . $site_uri .'/imgs/kae-anderson-7KLv5TOKOrM-unsplash.jpg" alt="image of columns"/>
               </figure>
               <!-- /wp:image -->'
   ]);

}