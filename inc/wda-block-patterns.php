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
   
   // 
   // register single feature cover block template
   //
	register_block_pattern('wda-single-feature-cover', [
		'title' => __('Single Feature Cover', 'wda'),
      'description' => _x( 'Single Feature Cover.', 'A Cover block with a single feature.', 'wda' ),            
		'keywords' => ['single,cover'],
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
                  </div>
                  <!-- /wp:column -->

               </div>
               <!-- /wp:columns -->            
            </div>
         </div>
         <!-- /wp:cover -->'
	]);



   //
   // register single feature columns block / single feature block template
   // we use wp-block-media-text instead of wp-columms since it already has desired styling in two column pattern w/out additionals
   //
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
   


   //
   // register two feature columns block template
   //
	register_block_pattern('wda-two-feature-columns', [
		'title' => __('Two Feature Columns', 'wda'),
      'description' => _x( 'Two Feature Clolumns.', 'A Columns block with two features.', 'wda' ),            
		'keywords' => ['two,columns'],
		'categories' => ['wda-column-blocks'],
		'viewportWidth' => 1000,
		'content' => 
            '<!-- wp:columns {"className":"wda-columns wda-three-feature-columns"} -->
            <div class="wp-block-columns wda-columns wda-three-feature-columns">' . 
               wda_single_col_template() . 
               wda_single_col_template() .
            '</div>
            <!-- /wp:columns -->',
	]);




   //
   // register three feature columns block template
   //
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



   //
   // register six feature columns block template
   //
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

   //
   // register title & lead text template
   //
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
 
   
   //
   // register simple text template
   //
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


   //
   // register wda-image template
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



   //
   // register wda-gallery template
   //
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



   // 
   // register wda-buttons template
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