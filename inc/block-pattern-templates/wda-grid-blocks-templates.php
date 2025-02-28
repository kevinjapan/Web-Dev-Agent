
<?php


// Register Theme Block Pattern Templates

function wda_register_grid_blocks_templates($site_uri) {

   // Grid Block Template

	register_block_pattern(
      'wda-grid',
      [
         'title' => __('Grid Block', 'wda'),
         'description' => _x( 'Grid Block.', 'Grid Block.', 'wda' ),            
         'keywords' => ['single,grid'],
         'categories' => ['wda-grid-blocks'],
         'viewportWidth' => 1000,
         'content' =>  
            '<!-- wp:group {"layout":{"type":"grid"}} -->
               <div class="wp-block-group wda-grid">
               <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
               <figure class="wp-block-image size-large display_block"><img src="http://localhost/wordpress/web-dev-agent/wp-content/uploads/2024/02/scott-graham-5fNmWej4tAA-unsplash-1200x630.jpg" alt="" class="wp-image-31"/></figure>
               <!-- /wp:image -->

               <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
               <figure class="wp-block-image size-large display_block"><img src="http://localhost/wordpress/web-dev-agent/wp-content/uploads/2024/02/scott-graham-5fNmWej4tAA-unsplash-1200x630.jpg" alt="" class="wp-image-31"/></figure>
               <!-- /wp:image -->

               <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
               <figure class="wp-block-image size-large display_block"><img src="http://localhost/wordpress/web-dev-agent/wp-content/uploads/2024/02/scott-graham-5fNmWej4tAA-unsplash-1200x630.jpg" alt="" class="wp-image-31"/></figure>
               <!-- /wp:image -->

               <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
               <figure class="wp-block-image size-large display_block"><img src="http://localhost/wordpress/web-dev-agent/wp-content/uploads/2024/02/scott-graham-5fNmWej4tAA-unsplash-1200x630.jpg" alt="" class="wp-image-31"/></figure>
               <!-- /wp:image -->
               </div>
            <!-- /wp:group -->'
	]);

}


