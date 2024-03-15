<?php
/*
 * Web Dev Agent Block Patterns
 * @package WordPress
 * @subpackage WebDevAgent
 * @since WebDevAgent 1.0
 */


//
// Web Dev Agent Block Patterns
// Registers Patterns in 'block inserter' in editor.
// Each pattern is an HTML template for the UI block.
// We generate these block patterns by building the pattern in editor then copying the html (use code editor mode - 'serialized block')
// and inserting that into my calls to register_block_pattern().content below.
//



//
// Register Block Pattern Categories
//
function wda_register_block_pattern_categories() { 
	register_block_pattern_category('wda-cover-blocks', ['label' => __('Web Dev Agent Covers', 'wda')]);
	register_block_pattern_category('wda-column-blocks', ['label' => __('Web Dev Agent Columns', 'wda')]);  
	register_block_pattern_category('wda-texts', ['label' => __('Web Dev Agent Texts', 'wda')]); 
	register_block_pattern_category('wda-images', ['label' => __('Web Dev Agent Images', 'wda')]); 
	register_block_pattern_category('wda-buttons', ['label' => __('Web Dev Agent Buttons', 'wda')]);   
}
add_action( 'init', 'wda_register_block_pattern_categories' );



//
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



//
// Register block pattern templates
//
function wda_register_block_patterns() {

   $site_uri = get_template_directory_uri();
   

   // Cover Block Templates
   //

   // Hero Cover Block Template
	register_block_pattern('wda-hero-cover', [
		'title' => __('Hero Cover Block', 'wda'),
      'description' => _x( 'Hero Cover Block.', 'Hero Cover Block.', 'wda' ),            
		'keywords' => ['single,cover'],
		'categories' => ['wda-cover-blocks'],
		'viewportWidth' => 1000,
		'content' =>  
         '<!-- wp:cover {"url":"' . $site_uri .'/imgs/kae-anderson-7KLv5TOKOrM-unsplash.jpg","id":287,"dimRatio":50,"layout":{"type":"constrained"}} -->
         <div class="wp-block-cover wda-hero fade_in">
            <span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span>
            <img class="wp-block-cover__image-background wp-image-287" alt="" 
               src="' . $site_uri .'/imgs/kae-anderson-7KLv5TOKOrM-unsplash.jpg" data-object-fit="cover"/>

            <div class="wp-block-cover__inner-container">
            
               <!-- wp:heading {"textAlign":"left","level":1} -->
               <h1 class="wp-block-heading has-text-align-left">This is main heading</h1>
               <!-- /wp:heading -->
               
               <!-- wp:heading {"level":3} -->
               <h3 class="wp-block-heading">adfa sd fdsafa adfd</h3>
               <!-- /wp:heading -->

               <!-- wp:buttons -->
               <div class="wp-block-buttons wda_buttons">            
                  <!-- wp:button -->
                  <div class="wp-block-button wda_button over_img"><a class="wp-block-button__link">read more</a></div>
                  <!-- /wp:button -->
               </div>
               <!-- /wp:buttons -->

            </div>         
         </div>
         <!-- /wp:cover -->'
	]);

   // Cover Block Template
	register_block_pattern('wda-cover', [
		'title' => __('Cover Block', 'wda'),
      'description' => _x( 'Cover Block.', 'A Cover block with a single feature.', 'wda' ),            
		'keywords' => ['cover'],
		'categories' => ['wda-cover-blocks'],
		'viewportWidth' => 1000,
		'content' =>  
         '<!-- wp:cover {"url":"' . $site_uri .'/imgs/kae-anderson-7KLv5TOKOrM-unsplash.jpg","id":248,"dimRatio":50,"isDark":false,"className":"wda-cover"} -->
         <div class="wp-block-cover has-background-dim wda-cover">

            <img class="wp-block-cover__image-background wp-image-248" 
               alt="image of columns" 
               src="' . $site_uri .'/imgs/kae-anderson-7KLv5TOKOrM-unsplash.jpg" data-object-fit="cover"/>

            <div class="wp-block-cover__inner-container">
               <!-- wp:columns -->
               <div class="wp-block-columns">

                  <!-- wp:column -->
                  <div class="wp-block-column">
                     <!-- wp:heading -->
                        <h2>Introducing the Web Dev Agent Cover Block!</h2>
                     <!-- /wp:heading -->
                  </div>
                  <!-- /wp:column -->

                  <!-- wp:column -->
                  <div class="wp-block-column">
                     <!-- wp:paragraph -->
                     <p>
                        Cover Blocks with Latitude!<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer facilisis metus sed enim ullamcorper tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac nibh ut elit condimentum tempor sit amet sed risus.<br>
                        <br>You can customize the layout of this block pattern in the Dashboard menu:
                        <br>- Appearance 
                        <br>- - Customize
                        <br>- - - Web Dev Agent Block Patterns 
                        <br>- - - - Web Dev Agent Covers.
                     </p>
                     <!-- /wp:paragraph -->

                     <!-- wp:buttons -->
                     <div class="wp-block-buttons wda_buttons">            
                        <!-- wp:button -->
                        <div class="wp-block-button wda_button over_img"><a class="wp-block-button__link">read more</a></div>
                        <!-- /wp:button -->
                     </div>
                     <!-- /wp:buttons -->

                  </div>
                  <!-- /wp:column -->

               </div>
               <!-- /wp:columns -->            
            </div>
         </div>
         <!-- /wp:cover -->'
	]);



   // Column Block Templates
   // register single feature columns block / single feature block template
   // we use wp-block-media-text instead of wp-columms since it already has desired styling in two column pattern w/out additionals
   //
   
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


   // future :
   // want 'fade_in' on all Block Patterns - ideally configurable.
   // but we can't load in <style> at top of page since it is a class - we really need to apply here.
   // try eg  
   //            get_theme_mod('wda_title_lead_fade_in')       // contains string 'fade_in' or '' 
   //
   // to insert 'fade_in' in 'div.wda-title-lead' below



   // Title & Lead Block Templates


   // Big Title & Lead Text Block Template
	register_block_pattern('wda-big-title-lead', [
		'title' => __('Big Title And Lead Text', 'wda'),
      'description' => _x( 'You can style all block patterns of this type in the customizer.', 'The big title and lead text block.', 'wda' ),            
		'keywords' => ['big,title,lead,text'],
		'categories' => ['wda-texts'],
		'viewportWidth' => 1000,
		'content' =>  
         '<!-- wp:group {"className":"wda-big-title-lead"} -->
         <div class="wp-block-group wda-big-title-lead">

            <!-- wp:heading {"textAlign":"center","level":2} -->
               <h2 class="wda-big-title-lead__title has-text-align-center">Big Title & Lead Text</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">
               Lorem ipsum dolor sit amet consectetur adipisicing elit.         
               <br>You can customize the layout of this block pattern in the Dashboard menu:
               <br> Appearance \ Customize \ The Educator Block Patterns \ The Educator Texts 
            </p>
            <!-- /wp:paragraph -->
         
         </div>
         <!-- /wp:group -->'
   ]);

   // Title & Lead Text Block Template
	register_block_pattern('wda-title-lead', [
		'title' => __('Title And Lead Text', 'wda'),
      'description' => _x( 'You can style all block patterns of this type in the customizer.', 'A title and lead text block.', 'wda' ),            
		'keywords' => ['title,lead,text'],
		'categories' => ['wda-texts'],
		'viewportWidth' => 1000,
		'content' =>  
           '<!-- wp:group {"className":"wda-title-lead fade_in"} -->
            <div class="wp-block-group wda-title-lead fade_in">

               <!-- wp:heading {"textAlign":"center","level":2} -->
               <h2 class="wda-title-lead__title has-text-align-center">Title & Lead Text</h2>
               <!-- /wp:heading -->

               <!-- wp:paragraph {"align":"center"} -->
               <p class="has-text-align-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.         
                  <br>You can customize the layout of this block pattern in the Dashboard menu:
                  <br> Appearance \ Customize \ Web Dev Agent Block Patterns \ Web Dev Agent Texts 
               </p>
               <!-- /wp:paragraph -->

            </div>
            <!-- /wp:group -->'
   ]);
 
 
   // Text Block Templates

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



   // Image Block Template
   //
    register_block_pattern('wda-image', [
		'title' => __('Web Dev Agent Image', 'wda'),
      'description' => _x( 'Web Dev Agent Image.', 'An image block with Web Dev Agent customization.', 'wda' ),            
		'keywords' => ['image'],
		'categories' => ['wda-images'],
		'viewportWidth' => 1000,
		'content' =>  
           '<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"wda-image"} -->
            <figure class="wp-block-image size-large wda-image">
               <img src="' . $site_uri .'/imgs/kae-anderson-7KLv5TOKOrM-unsplash.jpg" alt="image of columns"/>
            </figure>
            <!-- /wp:image -->'
   ]);




   // Gallery Block Template
   // nesting of <figure> is-as in WP
    register_block_pattern('wda-gallery', [
		'title' => __('Web Dev Agent Gallery', 'wda'),
      'description' => _x( 'Web Dev Agent Gallery.', 'An image gallery block with Web Dev Agent customization.', 'wda' ),            
		'keywords' => ['gallery'],
		'categories' => ['wda-images'],
		'viewportWidth' => 1000,
		'content' =>  
           '<!-- wp:gallery {"linkTo":"none"} -->
            <figure class="wp-block-gallery wda-gallery columns-3 is-cropped">
               <ul class="blocks-gallery-grid">
                  <li class="blocks-gallery-item">
                     <figure>
                        <img src="' . $site_uri .'/imgs/kae-anderson-7KLv5TOKOrM-unsplash.jpg" alt="image of columns"/>
                     </figure>
                  </li>
                  <li class="blocks-gallery-item">
                     <figure>
                        <img src="' . $site_uri .'/imgs/kae-anderson-7KLv5TOKOrM-unsplash.jpg" alt="image of columns"/>
                     </figure>
                  </li>
                  <li class="blocks-gallery-item">
                     <figure>
                        <img src="' . $site_uri .'/imgs/kae-anderson-7KLv5TOKOrM-unsplash.jpg" alt="image of columns"/>
                     </figure>
                  </li>
               </ul>
               </figure>
               <!-- /wp:gallery -->'
   ]);


   // Button Block Template
   //
   register_block_pattern('wda-buttons', [
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

add_action( 'init', 'wda_register_block_patterns' );

?>