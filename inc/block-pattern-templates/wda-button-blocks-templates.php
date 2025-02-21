<?php

// Register Theme Block Pattern Templates
//
function wda_register_button_blocks_templates($site_uri) {

   // Button Block Template
   //
   register_block_pattern(
      'wda-buttons',
      [
         'title' => __('Web Dev Agent Buttons', 'wda'),
         'description' => _x( 'Web Dev Agent Buttons.', 'A Web Dev Agent button block.', 'wda' ),            
         'keywords' => ['button'],
         'categories' => ['wda-buttons'],
         'viewportWidth' => 1000,
         'content' =>  '<!-- wp:buttons  {"className":"wda-buttons"} -->
                        <div class="wp-block-buttons wda-buttons">
                           <!-- wp:button -->
                           <div class="wp-block-button"><a class="wp-block-button__link">explore our projects</a></div>
                           <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->'
   ]);

}
