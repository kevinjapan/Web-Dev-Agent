<?php

// Feature Blocks [multi-columns]
// Register Theme Block Pattern Templates

// Why different templates?
// -----------------------------------------------------------------------------------------------------
// We did present Customizer option to change image size (eg icon|small|cover) but this didn't translate
// well into Page Editor. Page Editor changes the elements and hierarchy, so is too complicated to carry 
// over settings and generate applicable CSS in straightfoward manner. So, we offer different templates.
// It is important that we maintain integrity of WP blocks so that users can still change elements in 
// individual blocks in the Page Editor etc.

function wda_register_column_blocks_templates($site_uri) {

   // Feature Block Templates
   // register single feature columns block / single feature block template
   // we use wp-block-media-text instead of wp-columms since it already has desired styling in two column pattern w/out additionals
   
   // image utilities
   $image_template = wda_features_col_image();
   $icon_template = wda_features_col_icon();


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

                  <!-- wp:heading {"textAlign":"left","level":3} -->
                  <h3 class="wp-block-heading has-text-align-left">
                     Introducing the single Feature Block.
                  </h3>
                  <!-- /wp:heading -->

                  <!-- wp:paragraph -->
                  <p>You can customize the layout of this block pattern in the Dashboard menu:
                     <br>- Appearance 
                     <br>- - Customize
                     <br>- - - Web Dev Agent Block Patterns 
                     <br>- - - - Web Dev Agent Feature Blocks
                  </p>
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
                  wda_features_col_template($image_template) . 
                  wda_features_col_template($image_template) .
               '</div>
               <!-- /wp:columns -->',
	]);

	register_block_pattern(
      'wda-two-col-features-icons',
      [
         'title' => __('Two column Feature Block with icons.', 'wda'),
         'description' => _x( 'Two column Feature Block with icons.', 'A two column Feature Block with icons.', 'wda' ),            
         'keywords' => ['two,columns'],
         'categories' => ['wda-features-blocks'],
         'viewportWidth' => 1000,
         'content' => 
               '<!-- wp:columns {"className":"wda-features wda-two-col-features"} -->
               <div class="wp-block-columns wda-features wda-two-col-features">' . 
                  wda_features_col_template($icon_template) . 
                  wda_features_col_template($icon_template) .
               '</div>
               <!-- /wp:columns -->',
	]);

	register_block_pattern(
      'wda-two-col-features-no-img',
      [
         'title' => __('Two column Feature Block with no image.', 'wda'),
         'description' => _x( 'Two column Feature Block with no image.', 'A two column Feature Block with no image.', 'wda' ),            
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
                  wda_features_col_template($image_template) . 
                  wda_features_col_template($image_template) .  
                  wda_features_col_template($image_template) .
               '</div>
               <!-- /wp:columns -->',
	]);


   // Three column Feature Block Template - icon imgs

	register_block_pattern(
      'wda-three-col-features-icons',
      [
         'title' => __('Three column Feature Block with icons.', 'wda'),
         'description' => _x( 'Three Column Feature Block with icons.', 'A three column Feature Block with icons.', 'wda' ),            
         'keywords' => ['three,keywords'],
         'categories' => ['wda-features-blocks'],
         'viewportWidth' => 1000,
         'content' =>
               '<!-- wp:columns {"className":"wda-features wda-three-col-features"} -->
               <div class="wp-block-columns wda-features wda-three-col-features">' . 
                  wda_features_col_template($icon_template) . 
                  wda_features_col_template($icon_template) .  
                  wda_features_col_template($icon_template) .
               '</div>
               <!-- /wp:columns -->',
	]);

   
	register_block_pattern(
      'wda-three-col-features-no-img',
      [
         'title' => __('Three column Feature Block Icons with no image.', 'wda'),
         'description' => _x( 'Three Column Feature Block Icons with no image.', 'A three column Feature Block with no image.', 'wda' ),            
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
}


// Template for single col 
// contained w/in multi-col block patterns
//

function wda_features_col_image() {
   return '<!-- wp:image {"sizeSlug":"medium","linkDestination":"none","className":"fill_width"} -->
               <figure class="wp-block-image size-medium fill_width">
                  <img src="' . get_template_directory_uri() .'/imgs/kae-anderson-7KLv5TOKOrM-unsplash.jpg" alt="image of Feature Blocks"/>
               </figure>
               <!-- /wp:image -->';
}
function wda_features_col_icon() {
   return '<!-- wp:image {"sizeSlug":"medium","linkDestination":"none","className":"fill_width"} -->
               <figure class="wp-block-image size-medium fill_width wda_icon">
                  <img src="' . get_template_directory_uri() .'/imgs/kae-anderson-7KLv5TOKOrM-unsplash.jpg" alt="image of Feature Blocks"/>
               </figure>
               <!-- /wp:image -->';
}

function wda_features_col_template($image_template = null, $img_only = false) {
   

   $template = '<!-- wp:column {"className":"wda_inner_feature_block"} -->
                  <div class="wp-block-column wda_inner_feature_block">';

            
   if($image_template) {
      $template .= $image_template;
   }

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
