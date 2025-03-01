<?php

// Register Theme Block Pattern Templates
//
function wda_register_button_blocks_templates($site_uri) {

   // Button Block Template
   // to do : using wda_cover_btns / wda_cover_btn for styling - move this to wda_buttons / wda_button


   // Single Button Block
   // we contain even a single button in a wp-block-buttons group to facilitate additional buttons
   register_block_pattern(
      'wda-button',
      [
         'title' => __('Single Button Block', 'wda'),
         'description' => _x( 'Single Button.', 'A single Button Block.', 'wda' ),            
         'keywords' => ['button'],
         'categories' => ['wda-buttons'],
         'viewportWidth' => 1000,
         'content' =>  '<!-- wp:buttons  {"className":"wda-buttons"} -->
                        <div class="wp-block-buttons wda_buttons wda_cover_btns">
                           <!-- wp:button -->
                           <div class="wp-block-button wda_button wda_cover_btn"><a class="wp-block-button__link">read more</a></div>
                           <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->'
   ]);

   // Button Group Block   
   register_block_pattern(
      'wda-button-group',
      [
         'title' => __('Button Group Block', 'wda'),
         'description' => _x( 'Button Group.', 'A Button Group Block.', 'wda' ),            
         'keywords' => ['button'],
         'categories' => ['wda-buttons'],
         'viewportWidth' => 1000,
         'content' =>  '<!-- wp:buttons  {"className":"wda-buttons"} -->
                        <div class="wp-block-buttons wda_buttons wda_cover_btns">
                           <!-- wp:button -->
                           <div class="wp-block-button wda_button wda_cover_btn"><a class="wp-block-button__link">read more</a></div>
                           <!-- /wp:button -->
                           <!-- wp:button -->
                           <div class="wp-block-button wda_button wda_cover_btn"><a class="wp-block-button__link">read more</a></div>
                           <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->'
   ]);

}

