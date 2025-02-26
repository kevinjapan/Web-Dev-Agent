<?php


// Feature Blocks [multi-columns]
// Register Theme Block Pattern Templates


// to do : utility classes for all blocks - how to expose to user - eg change image size for a single multiple feature block
// to do :rename func:

function wda_register_column_blocks_templates($site_uri) {

   // Feature Block Templates
   // register single feature columns block / single feature block template
   // we use wp-block-media-text instead of wp-columms since it already has desired styling in two column pattern w/out additionals
   

   // Single Feature Column Block Template

   register_block_pattern(
      'wda-single-feature-column', 
      [
         'title' => __('Single Feature Block', 'wda'),
         'description' => _x( 'Single Feature Block.', 'A Feature Block with a single feature.', 'wda' ),            
         'keywords' => ['single,feature,block,column'],
         'categories' => ['wda-features-blocks'],
         'viewportWidth' => 1000,
         'content' => 
            '<!-- wp:media-text {"mediaLink":"' . $site_uri .'/imgs/kae-anderson-7KLv5TOKOrM-unsplash.jpg","mediaType":"image"} -->
            <div class="wp-block-media-text alignwide is-stacked-on-mobile wda-features wda-single-feature-columns">

               <figure class="wp-block-media-text__media">
                  <img src="' . $site_uri .'/imgs/kae-anderson-7KLv5TOKOrM-unsplash.jpg" alt="image of Features Block" />
               </figure>

               <div class="wp-block-media-text__content">

                  <!-- wp:paragraph {"placeholder":"Content…","fontSize":"large"} -->
                     <p class="has-large-font-size">Introducing the single Feature Block.</p>
                  <!-- /wp:paragraph -->

                  <!-- wp:paragraph -->
                     <p>You can customize the layout of this block pattern in the Dashboard menu:
                     <br>- Appearance 
                     <br>- - Customize
                     <br>- - - Web Dev Agent Block Patterns 
                     <br>- - - - Web Dev Agent Feature Blocks</p>
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


   // Two column Feature Block Template

	register_block_pattern(
      'wda-two-col-features',
      [
         'title' => __('Two column Feature Block', 'wda'),
         'description' => _x( 'Two column Feature Block.', 'A two column Feature Block.', 'wda' ),            
         'keywords' => ['two,columns'],
         'categories' => ['wda-features-blocks'],
         'viewportWidth' => 1000,
         'content' => 
               '<!-- wp:columns {"className":"wda-features wda-two-col-features"} -->
               <div class="wp-block-columns wda-features wda-two-col-features">' . 
                  wda_features_col_template() . 
                  wda_features_col_template() .
               '</div>
               <!-- /wp:columns -->',
	]);


   // Three column Feature Block Template

	register_block_pattern(
      'wda-three-col-features',
      [
         'title' => __('Three column Feature Block', 'wda'),
         'description' => _x( 'Three Column Feature Block.', 'A three column Feature Block.', 'wda' ),            
         'keywords' => ['three,keywords'],
         'categories' => ['wda-features-blocks'],
         'viewportWidth' => 1000,
         'content' =>
               '<!-- wp:columns {"className":"wda-features wda-three-col-features"} -->
               <div class="wp-block-columns wda-features wda-three-col-features">' . 
                  wda_features_col_template() . 
                  wda_features_col_template() .  
                  wda_features_col_template() .
               '</div>
               <!-- /wp:columns -->',
	]);


   // Six column Feature Block Template

   register_block_pattern(
      'wda-six-col-features',
      [
         'title' => __('Six Column Feature Block', 'wda'),
         'description' => _x( 'Six column Feature Block.', 'A six column Feature Block.', 'wda' ),            
         'keywords' => ['six,columns'],
         'categories' => ['wda-features-blocks'],
         'viewportWidth' => 1000,
         'content' =>  
         '<!-- wp:columns {"className":"wda-features wda-three-col-features"} -->
         <div class="wp-block-columns wda-features wda-three-col-features">' . 
            wda_features_col_template(true) .
            wda_features_col_template(true) .
            wda_features_col_template(true) .
            wda_features_col_template(true) .
            wda_features_col_template(true) .
            wda_features_col_template(true) .
         '</div>
         <!-- /wp:columns -->',
   ]);
}


// Template for single col 
// contained w/in multi-col block patterns
//
function wda_features_col_template($img_only = false) {
   
   $site_uri = get_template_directory_uri();

   $template = '<!-- wp:column {"className":"wda_inner_feature_block"} -->
                  <div class="wp-block-column wda_inner_feature_block">

               <!-- wp:image {"sizeSlug":"medium","linkDestination":"none","className":"fill_width"} -->
               <figure class="wp-block-image size-medium fill_width">
                  <img src="' . $site_uri .'/imgs/kae-anderson-7KLv5TOKOrM-unsplash.jpg" alt="image of Feature Blocks"/>
               </figure>
               <!-- /wp:image -->';

   if(!$img_only) {
   
      $template .=  '<!-- wp:heading {"level":4} -->
                     <h4 class="has-text-align-left">Feature Block</h4>
                     <!-- /wp:heading -->

                     <!-- wp:paragraph {"align":"left"} -->
                     <p class="has-text-align-left">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate autem voluptatem deserunt ea odio quae odit molestiae provident similique id totam neque et dolorum explicabo, architecto itaque? Quas, eos quam?</p>
                     <!-- /wp:paragraph -->

                     <!-- wp:buttons {"className":"wda-buttons"} -->
                     <div class="wp-block-buttons wda_buttons wda_feature_btns">            
                        <!-- wp:button {"className":"wda_feature_btn"} -->
                        <div class="wp-block-button wda_button wda_feature_btn"><a class="wp-block-button__link">read more</a></div>
                        <!-- /wp:button -->
                     </div>
                     <!-- /wp:buttons -->';
   }

   
               
   $template .= '</div><!-- /wp:column -->';
   return $template;
}
