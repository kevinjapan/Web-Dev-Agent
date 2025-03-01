<?php

// Register Theme Block Pattern Templates
//
function wda_register_title_lead_blocks_templates($site_uri) {

   // Big Title & Lead Text Block Template
	register_block_pattern(
      'wda-big-title-lead',
      [
         'title' => __('Big Title And Lead Text', 'wda'),
         'description' => _x( 'You can style all block patterns of this type in the customizer.', 'The big title and lead text block.', 'wda' ),            
         'keywords' => ['big,title,lead,text'],
         'categories' => ['wda-texts'],
         'viewportWidth' => 1000,
         'content' =>  
            '<!-- wp:group {"className":"wda-big-title-lead"} -->
            <div class="wp-block-group wda-big-title-lead">

               <!-- wp:heading {"level":2} -->
                  <h2 class="wda-big-title-lead__title ">Big Title & Lead Text</h2>
               <!-- /wp:heading -->

               <!-- wp:paragraph -->
               <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.         
                  <br>You can customize the layout of this block pattern in the Dashboard menu:
                  <br> Appearance \ Customize \ The Educator Block Patterns \ The Educator Texts 
               </p>
               <!-- /wp:paragraph -->
            
            </div>
            <!-- /wp:group -->'
   ]);

   // Title & Lead Text Block Template
	register_block_pattern(
      'wda-title-lead',
      [
         'title' => __('Title And Lead Text', 'wda'),
         'description' => _x( 'You can style all block patterns of this type in the customizer.', 'A title and lead text block.', 'wda' ),            
         'keywords' => ['title,lead,text'],
         'categories' => ['wda-texts'],
         'viewportWidth' => 1000,
         'content' =>  
            '<!-- wp:group {"className":"wda-title-lead fade_in"} -->
               <div class="wp-block-group wda-title-lead fade_in">

                  <!-- wp:heading {"level":2} -->
                  <h2 class="wda-title-lead__title">Title & Lead Text</h2>
                  <!-- /wp:heading -->

                  <!-- wp:paragraph -->
                  <p class="wda-title-lead__p">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit.         
                     <br>You can customize the layout of this block pattern in the Dashboard menu:
                     <br> Appearance \ Customize \ Web Dev Agent Block Patterns \ Web Dev Agent Texts 
                  </p>
                  <!-- /wp:paragraph -->

               </div>
               <!-- /wp:group -->'
   ]);
 
}