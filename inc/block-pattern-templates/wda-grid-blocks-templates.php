
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
                  <!-- wp:image {"linkDestination":"none"} -->
                  <figure class="wp-block-image display_block">
                     <img src="http://localhost/wordpress/web-dev-agent/wp-content/uploads/2024/02/scott-graham-5fNmWej4tAA-unsplash-1200x630.jpg" alt="" /></figure>
                  <!-- /wp:image -->

                  <!-- wp:image {"linkDestination":"none"} -->
                  <figure class="wp-block-image display_block">
                     <img src="http://localhost/wordpress/web-dev-agent/wp-content/uploads/2024/02/scott-graham-5fNmWej4tAA-unsplash-1200x630.jpg" alt="" /></figure>
                  <!-- /wp:image -->

                  <!-- wp:image {"linkDestination":"none"} -->
                  <figure class="wp-block-image display_block">
                     <img src="http://localhost/wordpress/web-dev-agent/wp-content/uploads/2024/02/scott-graham-5fNmWej4tAA-unsplash-1200x630.jpg" alt="" /></figure>
                  <!-- /wp:image -->

                  <!-- wp:image {"linkDestination":"none"} -->
                  <figure class="wp-block-image display_block">
                     <img src="http://localhost/wordpress/web-dev-agent/wp-content/uploads/2024/02/scott-graham-5fNmWej4tAA-unsplash-1200x630.jpg" alt="" /></figure>
                  <!-- /wp:image -->
               </div>
            <!-- /wp:group -->'
	]);

   
	register_block_pattern(
      'wda_grid_cards',
      [
         'title' => __('Grid Cards Block', 'wda'),
         'description' => _x( 'Grid Cards Block.', 'Grid Cards Block.', 'wda' ),            
         'keywords' => ['single,grid,card'],
         'categories' => ['wda-grid-blocks'],
         'viewportWidth' => 1000,
         'content' =>  
           '<!-- wp:group {"layout":{"type":"grid"}} -->
            <div class="wp-block-group wda_grid_cards">
            
		         <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top"}} -->
               <div class="wp-block-group">
                  <!-- wp:heading {"fontSize":"x-large"} -->
                  <h2 class="wp-block-heading has-x-large-font-size">one</h2>
                  <!-- /wp:heading -->
                  <!-- wp:paragraph {"align":"left"} -->
                  <p class="has-text-align-left">paragraph in here</p>
                  <!-- /wp:paragraph -->
                  <!-- wp:buttons {"className":"wda_grid_cards_btns"} -->
                  <div class="wp-block-buttons wda_grid_cards_btns">
                     <!-- wp:button {"className":"wda_grid_cards_btn"} -->
                     <div class="wp-block-button wda_button wda_grid_cards_btn">
                        <a class="wp-block-button__link wp-element-button">read more</a>
                     </div>
                     <!-- /wp:button -->
                  </div>
                  <!-- /wp:buttons -->
                  <!-- wp:buttons {"className":"wda_grid_cards_links"} -->
                  <div class="wp-block-buttons wda_grid_cards_links">
                     <!-- wp:button {"className":"wda_grid_cards_link"} -->
                     <div class="wp-block-button wda_grid_cards_link">
                        <a class="wp-block-button__link wp-element-button">read more</a>
                     </div>
                     <!-- /wp:button -->
                  </div>
                  <!-- /wp:buttons -->
               </div>
		         <!-- /wp:group -->

		         <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top"}} -->
               <div class="wp-block-group">
                  <!-- wp:heading {"fontSize":"x-large"} -->
                  <h2 class="wp-block-heading has-x-large-font-size">one</h2>
                  <!-- /wp:heading -->
                  <!-- wp:paragraph {"align":"left"} -->
                  <p class="has-text-align-left">paragraph in here</p>
                  <!-- /wp:paragraph -->
               </div>
		         <!-- /wp:group -->
                     
		         <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top"}} -->
               <div class="wp-block-group">
                  <!-- wp:heading {"fontSize":"x-large"} -->
                  <h2 class="wp-block-heading has-x-large-font-size">one</h2>
                  <!-- /wp:heading -->
                  <!-- wp:paragraph {"align":"left"} -->
                  <p class="has-text-align-left">paragraph in here</p>
                  <!-- /wp:paragraph -->
               </div>
		         <!-- /wp:group -->
                     
		         <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top"}} -->
               <div class="wp-block-group">
                  <!-- wp:heading {"fontSize":"x-large"} -->
                  <h2 class="wp-block-heading has-x-large-font-size">one</h2>
                  <!-- /wp:heading -->
                  <!-- wp:paragraph {"align":"left"} -->
                  <p class="has-text-align-left">paragraph in here</p>
                  <!-- /wp:paragraph -->
               </div>
		         <!-- /wp:group -->

            </div>
            <!-- /wp:group -->'
	]);


}


