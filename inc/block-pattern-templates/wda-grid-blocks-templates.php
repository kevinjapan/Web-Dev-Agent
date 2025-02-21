
<?php
// to do : 
// - customize on customizer to change grid layout for all grids
// - add utility css classes to indvdl grid in Edit Page - Block - to override grid columns

// Register Theme Block Pattern Templates
//
function wda_register_grid_blocks_templates($site_uri) {

   // Grid Block Template
   // 
   // to do : review : we removed WP group layout type and implement our own via wda-grid : 
   //     '<!-- wp:group {"layout":{"type":"grid"}} -->

   // -------------------------------------------------------------------------------------------
   // to do : relying on WP group elements is risky, since they may change their behaviour
   // eg for wp-block-group, WP *will* inject '<div class="wp-block-group__inner-container">.. - 
   // we can't hardcode this in our own solution - it's change is outside our control and would
   // break this. So, we should implement our own HTML elements and CSS rules.
   // -------------------------------------------------------------------------------------------
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
               <!-- wp:image {"id":31,"sizeSlug":"large","linkDestination":"none"} -->
               <figure class="wp-block-image size-large display_block"><img src="http://localhost/wordpress/web-dev-agent/wp-content/uploads/2024/02/scott-graham-5fNmWej4tAA-unsplash-1200x630.jpg" alt="" class="wp-image-31"/></figure>
               <!-- /wp:image -->

               <!-- wp:image {"id":31,"sizeSlug":"large","linkDestination":"none"} -->
               <figure class="wp-block-image size-large display_block"><img src="http://localhost/wordpress/web-dev-agent/wp-content/uploads/2024/02/scott-graham-5fNmWej4tAA-unsplash-1200x630.jpg" alt="" class="wp-image-31"/></figure>
               <!-- /wp:image -->

               <!-- wp:image {"id":31,"sizeSlug":"large","linkDestination":"none"} -->
               <figure class="wp-block-image size-large display_block"><img src="http://localhost/wordpress/web-dev-agent/wp-content/uploads/2024/02/scott-graham-5fNmWej4tAA-unsplash-1200x630.jpg" alt="" class="wp-image-31"/></figure>
               <!-- /wp:image -->

               <!-- wp:image {"id":31,"sizeSlug":"large","linkDestination":"none"} -->
               <figure class="wp-block-image size-large display_block"><img src="http://localhost/wordpress/web-dev-agent/wp-content/uploads/2024/02/scott-graham-5fNmWej4tAA-unsplash-1200x630.jpg" alt="" class="wp-image-31"/></figure>
               <!-- /wp:image -->
               </div>
            <!-- /wp:group -->'
	]);

}


