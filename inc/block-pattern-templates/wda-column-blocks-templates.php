<?php

// Register Theme Block Pattern Templates
//
function wda_register_column_blocks_templates($site_uri) {

   // Column Block Templates
   // register single feature columns block / single feature block template
   // we use wp-block-media-text instead of wp-columms since it already has desired styling in two column pattern w/out additionals
   
   // Single Feature Column Block Template
   register_block_pattern('wda-single-feature-column', [
      'title' => __('Single Feature Column', 'wda'),
      'description' => _x( 'Single Feature Column.', 'A Column block with a single feature.', 'wda' ),            
      'keywords' => ['single,column'],
      'categories' => ['wda-column-blocks'],
      'viewportWidth' => 1000,
      'content' => 
         '<!-- wp:media-text {"mediaLink":"' . $site_uri .'/imgs/kae-anderson-7KLv5TOKOrM-unsplash.jpg","mediaType":"image"} -->
         <div class="wp-block-media-text alignwide is-stacked-on-mobile wda-columns wda-single-feature-columns">

            <figure class="wp-block-media-text__media">
               <img src="' . $site_uri .'/imgs/kae-anderson-7KLv5TOKOrM-unsplash.jpg" alt="image of columns" />
            </figure>

            <div class="wp-block-media-text__content">

               <!-- wp:paragraph {"placeholder":"Content…","fontSize":"large"} -->
                  <p class="has-large-font-size">Introducing the single feature column.</p>
               <!-- /wp:paragraph -->

               <!-- wp:paragraph -->
                  <p>You can customize the layout of this block pattern in the Dashboard menu:
                  <br>- Appearance 
                  <br>- - Customize
                  <br>- - - Web Dev Agent Block Patterns 
                  <br>- - - - Web Dev Agent Columns</p>
               <!-- /wp:paragraph -->

               <!-- wp:buttons -->
               <div class="wp-block-buttons wda_buttons">            
                  <!-- wp:button -->
                  <div class="wp-block-button wda_button"><a class="wp-block-button__link">read more</a></div>
                  <!-- /wp:button -->
               </div>
               <!-- /wp:buttons -->

            </div>
         </div>
         <!-- /wp:media-text -->'
	]);

   // Two Feature Columns Block Template
	register_block_pattern('wda-two-feature-columns', [
		'title' => __('Two Feature Columns', 'wda'),
      'description' => _x( 'Two Feature Clolumns.', 'A Columns block with two features.', 'wda' ),            
		'keywords' => ['two,columns'],
		'categories' => ['wda-column-blocks'],
		'viewportWidth' => 1000,
		'content' => 
            '<!-- wp:columns {"className":"wda-columns wda-two-feature-columns"} -->
            <div class="wp-block-columns wda-columns wda-two-feature-columns">' . 
               wda_single_col_template() . 
               wda_single_col_template() .
            '</div>
            <!-- /wp:columns -->',
	]);

   // Three Feature Columns Block Template
	register_block_pattern('wda-three-feature-columns', [
		'title' => __('Three Feature Columns', 'wda'),
      'description' => _x( 'Three Feature Columns.', 'A Columns block with three features.', 'wda' ),            
		'keywords' => ['three,keywords'],
		'categories' => ['wda-column-blocks'],
		'viewportWidth' => 1000,
		'content' =>
            '<!-- wp:columns {"className":"wda-columns wda-three-feature-columns"} -->
            <div class="wp-block-columns wda-columns wda-three-feature-columns">' . 
               wda_single_col_template() . 
               wda_single_col_template() .  
               wda_single_col_template() .
            '</div>
            <!-- /wp:columns -->',
	]);

   // Six Feature Columns Block Template
   register_block_pattern('wda-six-feature-column', [
      'title' => __('Six Feature Columns', 'wda'),
      'description' => _x( 'Six Feature Columns.', 'A Columns block with six features.', 'wda' ),            
      'keywords' => ['six,columns'],
      'categories' => ['wda-column-blocks'],
      'viewportWidth' => 1000,
      'content' =>  
      '<!-- wp:columns {"className":"wda-columns wda-three-feature-columns"} -->
      <div class="wp-block-columns wda-columns wda-three-feature-columns">' . 
         wda_single_col_template(true) .
         wda_single_col_template(true) .
         wda_single_col_template(true) .
         wda_single_col_template(true) .
         wda_single_col_template(true) .
         wda_single_col_template(true) .
      '</div>
      <!-- /wp:columns -->',
   ]);
}


// Template for single col 
// contained w/in multi-col block patterns
//
function wda_single_col_template($img_only = false) {
   
   $site_uri = get_template_directory_uri();

   $template = '<!-- wp:column {"className":"wda_center_content"} -->
                  <div class="wp-block-column wda_center_content">

               <!-- wp:image {"sizeSlug":"medium","linkDestination":"none","className":"fill_width"} -->
               <figure class="wp-block-image size-medium fill_width">
                  <img src="' . $site_uri .'/imgs/kae-anderson-7KLv5TOKOrM-unsplash.jpg" alt="image of columns"/>
               </figure>
               <!-- /wp:image -->';

   if(!$img_only) {
   
      $template .=  '<!-- wp:heading -->
                     <h2 class="has-text-align-center">column</h2>
                     <!-- /wp:heading -->

                     <!-- wp:paragraph {"align":"center"} -->
                     <p class="has-text-align-center">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate autem voluptatem deserunt ea odio quae 
                        odit molestiae provident similique id totam neque et dolorum explicabo, architecto itaque? Quas, eos quam?
                     </p>
                     <!-- /wp:paragraph -->

                     <!-- wp:buttons -->
                     <div class="wp-block-buttons wda_buttons">            
                        <!-- wp:button -->
                        <div class="wp-block-button wda_button"><a class="wp-block-button__link">read more</a></div>
                        <!-- /wp:button -->
                     </div>
                     <!-- /wp:buttons -->';
   }
               
   $template .= '</div><!-- /wp:column -->';
   return $template;
}
