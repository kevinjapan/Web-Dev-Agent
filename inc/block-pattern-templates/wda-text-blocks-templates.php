<?php

// Register Theme Block Pattern Templates
//
function wda_register_text_blocks_templates($site_uri) {

   // Simple Text Block Template
	register_block_pattern('wda-simple-text', [
		'title' => __('Simple Text', 'wda'),
      'description' => _x( 'Simple Text.', 'A simple text block.', 'wda' ),            
		'keywords' => ['text'],
		'categories' => ['wda-texts'],
		'viewportWidth' => 1000,
		'content' =>  
            '<!-- wp:group {"className":"wda-text wda-simple-text"} -->
            <div class="wp-block-group wda-text wda-simple-text">

               <!-- wp:paragraph -->
               <p>
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate autem voluptatem deserunt ea odio quae odit 
                  molestiae provident similique id totam neque et dolorum explicabo, architecto itaque? Quas, eos quam?
               </p>
               <!-- /wp:paragraph -->

               <!-- wp:paragraph -->
               <p>
                  You can customize the layout of this block pattern in the Dashboard menu:
                  <br> Appearance \ Customize \ Web Dev Agent Block Patterns \ Web Dev Agent Texts 
               </p>
               <!-- /wp:paragraph -->

            </div>
            <!-- /wp:group -->'
	]);


   //
   // wda-columns-text : future
   //
	// register_block_pattern('wda-columns-text', [
	// 	'title' => __('Columns Text', 'wda'),
   //    'description' => _x( 'Columns Text.', 'A title and text block supporting columns on wider screens.', 'wda' ),            
	// 	'keywords' => ['text,columns'],
	// 	'categories' => ['wda-texts'],
	// 	'viewportWidth' => 1000,
	// 	'content' =>  
   //       '<!-- wp:group {"className":"wda-text wda-columns-text"} -->
   //       <div class="wp-block-group wda-text wda-columns-text">
   //       <!-- wp:paragraph -->
   //       <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate autem voluptatem deserunt ea odio quae 
   //       odit molestiae provident similique id totam neque et dolorum explicabo, architecto itaque? Quas, eos quam?</p>
   //       <!-- /wp:paragraph -->
   //       <!-- wp:paragraph -->
   //       <p>You can customize the layout of this block pattern 
   //       in Appearance \ Customize \ Web Dev Agent Block Patterns \ Web Dev Agent Texts.</p>
   //       <!-- /wp:paragraph -->
   //       </div>
   //       <!-- /wp:group -->'
	// ]);




}