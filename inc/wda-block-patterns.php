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
// 

//
// to do : on-going :
// Adapting previous block patterns from edk theme (early learning theme development) for use in Wed Dev Agent theme.
// I generated these block patterns by building the pattern in editor then copying the html (use code editor mode)
// and inserting that into my calls to register_block_pattern().content below.
// For now, will stick with these to get this up and running - so currently minimal use of outlinecss
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


function wda_register_block_patterns() {

   $site_uri = get_template_directory_uri();
   

   // 
   // single feature cover block
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
         <img class="wp-block-cover__image-background wp-image-248" alt="image of columns" 
         src="' . $site_uri .'/imgs/kae-anderson-7KLv5TOKOrM-unsplash.jpg" data-object-fit="cover"/>
         <div class="wp-block-cover__inner-container">

         <!-- wp:columns -->
         <div class="wp-block-columns"><!-- wp:column -->
         <div class="wp-block-column"><!-- wp:heading {"className":"has-text-align-right"} -->
         <h2 class="has-text-align-right">Introducing the Web Dev Agent Cover Block.</h2>
         <!-- /wp:heading --></div>
         <!-- /wp:column -->
         
         <!-- wp:column -->
         <div class="wp-block-column"><!-- wp:paragraph -->
         <p>Cover Blocks with Latitude! Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
         Integer facilisis metus sed enim ullamcorper tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
         Nulla ac nibh ut elit condimentum tempor sit amet sed risus.<br>You can customize the layout of this block pattern 
         in Appearance - Customize - Web Dev Agent Block Patterns - Web Dev Agent Covers...</p>
         <!-- /wp:paragraph --></div>
         <!-- /wp:column --></div>
         <!-- /wp:columns -->
         
         </div></div>
         <!-- /wp:cover -->'
	]);


   //
   // two feature cover block
   //
   // register_block_pattern('wda-two-feature-cover', [
	// 	'title' => __('Two Feature Cover', 'wda'),
   //    'description' => _x( 'Two Feature Cover.', 'A Cover block with two features columns.', 'wda' ),            
	// 	'keywords' => ['two,cover'],
	// 	'categories' => ['wda-cover-blocks'],
	// 	'viewportWidth' => 1000,
	// 	'content' =>   
   //       '<!-- wp:cover {"className":"wda-cover wda-two-feature-cover"} -->
   //       <div class="wp-block-cover has-background-dim wda-cover wda-two-feature-cover">
   //       <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":2} -->
   //       <h2 class="has-text-align-center">Some interesting projects may require a longer title to project the gist of the thing</h2>
   //       <!-- /wp:heading -->
   //       <!-- wp:columns -->
   //       <div class="wp-block-columns"><!-- wp:column -->
   //       <div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":3} -->
   //       <h3 class="has-text-align-center">discover projects</h3>
   //       <!-- /wp:heading -->
   //       <!-- wp:paragraph {"align":"center"} -->
   //       <p class="has-text-align-center"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate autem 
   //       voluptatem deserunt ea odio quae odit molestiae provident similique id totam neque et dolorum explicabo, architecto itaque? 
   //       Quas, eos quam? </p>
   //       <!-- /wp:paragraph -->
   //       <!-- wp:paragraph {"align":"center"} -->
   //       <p class="has-text-align-center">discover projects</p>
   //       <!-- /wp:paragraph --></div>
   //       <!-- /wp:column --> 
   //       <!-- wp:column -->
   //       <div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":3} -->
   //       <h3 class="has-text-align-center">align your layouts</h3>
   //       <!-- /wp:heading -->
   //       <!-- wp:paragraph {"align":"center"} -->
   //       <p class="has-text-align-center"> You can customize the layout of this block pattern 
   //       in Appearance - Customize - Web Dev Agent Block Patterns - Web Dev Agent Covers.. </p>
   //       <!-- /wp:paragraph -->
   //       <!-- wp:paragraph {"align":"center"} -->
   //       <p class="has-text-align-center">read more</p>
   //       <!-- /wp:paragraph --></div>
   //       <!-- /wp:column --></div>
   //       <!-- /wp:columns -->
   //      </div></div>
   //       <!-- /wp:cover -->',
	// ]);

   //
   // three feature cover block  
   // 
	// register_block_pattern('wda-three-feature-cover', [
	// 	'title' => __('Three Feature Cover', 'wda'),
   //    'description' => _x( 'Three Feature Cover.', 'A Cover block with three features columns.', 'wda' ),            
	// 	'keywords' => ['three,cover'],
	// 	'categories' => ['wda-cover-blocks'],
	// 	'viewportWidth' => 1000,
	// 	'content' =>  
   //         '<!-- wp:cover {"className":"wda-cover wda-three-feature-cover"} -->
   //         <div class="wp-block-cover has-background-dim wda-cover wda-three-feature-cover">
   //         <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center"} -->
   //         <h2 class="has-text-align-center">three feature cover block pattern</h2>
   //         <!-- /wp:heading -->
   //         <!-- wp:heading {"textAlign":"center","level":3} -->
   //         <h3 class="has-text-align-center">this is a useful block pattern for services</h3>
   //         <!-- /wp:heading -->
   //         <!-- wp:columns -->
   //         <div class="wp-block-columns"><!-- wp:column {"className":"wda_opaque_bg"} -->
   //         <div class="wp-block-column wda_opaque_bg"><!-- wp:heading {"textAlign":"center","level":3} -->
   //         <h3 class="has-text-align-center">service #1</h3>
   //         <!-- /wp:heading -->
   //         <!-- wp:paragraph {"align":"center"} -->
   //         <p class="has-text-align-center"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate autem voluptatem 
   //         deserunt ea odio quae odit molestiae provident similique id totam neque et dolorum explicabo, architecto itaque? Quas, eos quam? </p>
   //         <!-- /wp:paragraph -->
   //         <!-- wp:paragraph {"align":"center"} -->
   //         <p class="has-text-align-center">read more</p>
   //         <!-- /wp:paragraph --></div>
   //         <!-- /wp:column -->
   //         <!-- wp:column {"className":"wda_opaque_bg"} -->
   //         <div class="wp-block-column wda_opaque_bg"><!-- wp:heading {"textAlign":"center","level":3} -->
   //         <h3 class="has-text-align-center">service #2</h3>
   //         <!-- /wp:heading -->
   //         <!-- wp:paragraph {"align":"center"} -->
   //         <p class="has-text-align-center"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate autem voluptatem 
   //         deserunt ea odio quae odit molestiae provident similique id totam neque et dolorum explicabo, architecto itaque? Quas, eos quam? </p>
   //         <!-- /wp:paragraph -->
   //         <!-- wp:paragraph {"align":"center"} -->
   //         <p class="has-text-align-center">explore projects</p>
   //         <!-- /wp:paragraph --></div>
   //         <!-- /wp:column -->
   //         <!-- wp:column {"className":"wda_opaque_bg"} -->
   //         <div class="wp-block-column wda_opaque_bg"><!-- wp:heading {"textAlign":"center","level":3} -->
   //         <h3 class="has-text-align-center">service #3</h3>
   //         <!-- /wp:heading -->
   //         <!-- wp:paragraph {"align":"center"} -->
   //         <p class="has-text-align-center"> You can customize the layout of this block pattern 
   //         in Appearance - Customize - Web Dev Agent Block Patterns - Web Dev Agent Covers... </p>
   //         <!-- /wp:paragraph --> 
   //         <!-- wp:paragraph {"align":"center"} -->
   //         <p class="has-text-align-center">continue</p>
   //         <!-- /wp:paragraph --></div>
   //         <!-- /wp:column --></div>
   //         <!-- /wp:columns --></div></div>
   //         <!-- /wp:cover -->',
	// ]);


   //
   // single feature columns block
   // we use wp-block-media-text instead of wp-columms since it already has desired styling in two column pattern w/out additionals
   //
   register_block_pattern('wda-single-feature-column', [
   'title' => __('Single Feature Column', 'wda'),
   'description' => _x( 'Single Feature Column.', 'A Column block with a single feature.', 'wda' ),            
   'keywords' => ['single,column'],
   'categories' => ['wda-column-blocks'],
   'viewportWidth' => 1000,
   'content' => 
         '<!-- wp:media-text 
         {"mediaLink":"' . $site_uri .'/imgs/kae-anderson-7KLv5TOKOrM-unsplash.jpg","mediaType":"image"} -->
         <div class="wp-block-media-text alignwide is-stacked-on-mobile wda-columns wda-single-feature-columns">
         <figure class="wp-block-media-text__media">
         <img src="' . $site_uri .'/imgs/kae-anderson-7KLv5TOKOrM-unsplash.jpg" alt="image of columns" />
         </figure>
         <div class="wp-block-media-text__content">
         <!-- wp:paragraph {"placeholder":"Content…","fontSize":"large"} -->
         <p class="has-large-font-size">Introducing the single feature column</p>
         <!-- /wp:paragraph -->
         <!-- wp:paragraph -->
         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate autem voluptatem deserunt ea odio quae odit molestiae 
         provident similique id totam neque et dolorum explicabo, architecto itaque? Quas, eos quam?</p>
         <!-- /wp:paragraph -->
         <!-- wp:paragraph -->
         <p>read more link</p>
         <!-- /wp:paragraph -->
         </div>
         </div>
         <!-- /wp:media-text -->'
	]);
   

   //
   // two feature columns block
   //
	register_block_pattern('wda-two-feature-columns', [
		'title' => __('Two Feature Columns', 'wda'),
      'description' => _x( 'Two Feature Clolumns.', 'A Columns block with two features.', 'wda' ),            
		'keywords' => ['two,columns'],
		'categories' => ['wda-column-blocks'],
		'viewportWidth' => 1000,
		'content' => 
         '<!-- wp:columns {"className":"wda-columns wda-two-feature-columns"} -->
         <div class="wp-block-columns wda-columns wda-two-feature-columns"> 
         <!-- wp:column -->
         <div class="wp-block-column">
         <!-- wp:image {"sizeSlug":"medium","linkDestination":"none"} -->
         <figure class="wp-block-image size-medium">
         <img src="' . $site_uri .'/imgs/kae-anderson-7KLv5TOKOrM-unsplash.jpg" alt="image of columns" /></figure>
         <!-- /wp:image -->
         <!-- wp:heading  {"align":"center"} -->
         <h2 class="has-text-align-center">two feature column</h2>
         <!-- /wp:heading -->
         <!-- wp:paragraph  {"align":"center"} -->
         <p class="has-text-align-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate autem voluptatem 
         deserunt ea odio quae odit molestiae provident similique id totam neque et dolorum explicabo, architecto itaque? Quas, eos quam?</p>
         <!-- /wp:paragraph -->
         <!-- wp:paragraph  {"align":"center"} -->
         <p class="has-text-align-center">read more link</p>
         <!-- /wp:paragraph --></div>
         <!-- /wp:column -->
         <!-- wp:column -->
         <div class="wp-block-column"> 
         <!-- wp:image {"sizeSlug":"medium","linkDestination":"none"} -->
         <figure class="wp-block-image size-medium">
         <img src="' . $site_uri .'/imgs/kae-anderson-7KLv5TOKOrM-unsplash.jpg" alt="image of columns" /></figure>
         <!-- /wp:image -->
         <!-- wp:heading  {"align":"center"} -->
         <h2 class="has-text-align-center">title here</h2>
         <!-- /wp:heading -->
         <!-- wp:paragraph  {"align":"center"} -->
         <p class="has-text-align-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate autem voluptatem 
         deserunt ea odio quae odit molestiae provident similique id totam neque et dolorum explicabo, architecto itaque? Quas, eos quam?</p>
         <!-- /wp:paragraph -->
         <!-- wp:paragraph  {"align":"center"} -->
         <p class="has-text-align-center">another link here</p>
         <!-- /wp:paragraph -->
         </div>
         <!-- /wp:column -->
         </div>
         <!-- /wp:columns -->',
	]);


   //
   // three feature columns block   
   //
	register_block_pattern('wda-three-feature-columns', [
		'title' => __('Three Feature Columns', 'wda'),
      'description' => _x( 'Three Feature Columns.', 'A Columns block with three features.', 'wda' ),            
		'keywords' => ['three,keywords'],
		'categories' => ['wda-column-blocks'],
		'viewportWidth' => 1000,
		'content' =>  
            '<!-- wp:columns {"className":"wda-columns wda-three-feature-columns"} -->
            <div class="wp-block-columns wda-columns wda-three-feature-columns">
            <!-- wp:column {"className":"wda_center_content"} -->
            <div class="wp-block-column wda_center_content">
            <!-- wp:image {"sizeSlug":"medium","linkDestination":"none","className":"fill_width"} -->
            <figure class="wp-block-image size-medium fill_width">
            <img src="' . $site_uri .'/imgs/kae-anderson-7KLv5TOKOrM-unsplash.jpg" alt="image of columns"/></figure>
            <!-- /wp:image -->
            <!-- wp:heading -->
            <h2>three feature columns</h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph -->
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate autem voluptatem deserunt ea odio quae 
            odit molestiae provident similique id totam neque et dolorum explicabo, architecto itaque? Quas, eos quam?</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">learn more</p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:column -->        
            <!-- wp:column {"className":"wda_center_content"} -->
            <div class="wp-block-column wda_center_content">
            <!-- wp:image {"sizeSlug":"medium","linkDestination":"none","className":"fill_width"} -->
            <figure class="wp-block-image size-medium fill_width">
            <img src="' . $site_uri .'/imgs/kae-anderson-7KLv5TOKOrM-unsplash.jpg" alt="image of columns"/></figure>
            <!-- /wp:image -->
            <!-- wp:heading {"textAlign":"center"} -->
            <h2 class="has-text-align-center">responsive layout</h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate autem voluptatem 
            deserunt ea odio quae odit molestiae provident similique id totam neque et dolorum explicabo, architecto itaque? Quas, eos quam?</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">read more</p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:column -->
            <!-- wp:column {"className":"wda_center_content"} -->
            <div class="wp-block-column wda_center_content">
            <!-- wp:image {"sizeSlug":"medium","linkDestination":"none","className":"fill_width"} -->
            <figure class="wp-block-image size-medium fill_width">
            <img src="' . $site_uri .'/imgs/kae-anderson-7KLv5TOKOrM-unsplash.jpg" alt="image of columns"/></figure>
            <!-- /wp:image -->
            <!-- wp:heading -->
            <h2>keep me hanging on</h2>
            <!-- /wp:heading -->        
            <!-- wp:paragraph -->
            <p>You can customize the layout of this block pattern 
            in Appearance - Customize - Web Dev Agent Block Patterns - Web Dev Agent Columns...</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">read more</p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns -->',
	]);


   //
   // six feature columns block
   //
   register_block_pattern('wda-six-feature-column', [
      'title' => __('Six Feature Columns', 'wda'),
      'description' => _x( 'Six Feature Columns.', 'A Columns block with six features.', 'wda' ),            
      'keywords' => ['six,columns'],
      'categories' => ['wda-column-blocks'],
      'viewportWidth' => 1000,
      'content' =>  
         '<!-- wp:columns {"className":"wda-columns wda-six-feature-columns"} -->
         <div class="wp-block-columns wda-columns wda-six-feature-columns">
         <!-- wp:column {"className":"wda_center_content"} -->
         <div class="wp-block-column wda_center_content">
         <!-- wp:image {"linkDestination":"none"} -->
         <figure class="wp-block-image">
         <img src="' . $site_uri .'/imgs/kae-anderson-7KLv5TOKOrM-unsplash.jpg" alt="image of columns" /></figure>
         <!-- /wp:image --></div>
         <!-- /wp:column -->
         <!-- wp:column {"className":"wda_center_content"} -->
         <div class="wp-block-column wda_center_content">
         <!-- wp:image {"linkDestination":"none"} -->
         <figure class="wp-block-image">
         <img src="' . $site_uri .'/imgs/kae-anderson-7KLv5TOKOrM-unsplash.jpg" alt="image of columns"/></figure>
         <!-- /wp:image --></div>
         <!-- /wp:column -->
         <!-- wp:column {"className":"wda_center_content"} -->
         <div class="wp-block-column wda_center_content">
         <!-- wp:image {"linkDestination":"none"} -->
         <figure class="wp-block-image">
         <img src="' . $site_uri .'/imgs/kae-anderson-7KLv5TOKOrM-unsplash.jpg" alt="image of columns"/></figure>
         <!-- /wp:image --></div>
         <!-- /wp:column -->
         <!-- wp:column {"className":"wda_center_content"} -->
         <div class="wp-block-column wda_center_content">
         <!-- wp:image {"linkDestination":"none"} -->
         <figure class="wp-block-image">
         <img src="' . $site_uri .'/imgs/kae-anderson-7KLv5TOKOrM-unsplash.jpg" alt="image of columns"/></figure>
         <!-- /wp:image --></div>
         <!-- /wp:column -->
         <!-- wp:column {"className":"wda_center_content"} -->
         <div class="wp-block-column wda_center_content">
         <!-- wp:image {"linkDestination":"none"} -->
         <figure class="wp-block-image">
         <img src="' . $site_uri .'/imgs/kae-anderson-7KLv5TOKOrM-unsplash.jpg" alt="image of columns"/></figure>
         <!-- /wp:image --></div>
         <!-- /wp:column -->
         <!-- wp:column {"className":"wda_center_content"} -->
         <div class="wp-block-column wda_center_content">
         <!-- wp:image {"linkDestination":"none"} -->
         <figure class="wp-block-image">
         <img src="' . $site_uri .'/imgs/kae-anderson-7KLv5TOKOrM-unsplash.jpg" alt="image of columns"/></figure>
         <!-- /wp:image --></div>
         <!-- /wp:column -->
         </div><!-- /wp:columns -->',
   ]);


   // 
   // three feature cover-columns block
   //
   //  register_block_pattern('wda-three-feature-cover-columns', [
	// 	'title' => __('Three Feature Cover-Columns', 'wda'),
   //    'description' => _x( 'Three Feature Cover Columns.', 'Combining three feature columns over a cover block.', 'wda' ),            
	// 	'keywords' => ['three,cover-column'],
	// 	'categories' => ['wda-cover-column-blocks'],
	// 	'viewportWidth' => 1000,
	// 	'content' =>  
   //          '<!-- wp:columns {"className":"wda-cover-columns wda-three-feature-cover-columns"} -->
   //          <div class="wp-block-columns wda-cover-columns wda-three-feature-cover-columns"><!-- wp:column -->
   //          <div class="wp-block-column">
   //          <!-- wp:cover  -->
   //          <div class="wp-block-cover has-background-dim">
   //          <div class="wp-block-cover__inner-container">
   //          <!-- wp:heading {"textAlign":"center","level":2,"fontSize":"large"} -->
   //          <h2 class="has-text-align-center">Dynamic</h2>
   //          <!-- /wp:heading -->
   //          <!-- wp:paragraph  {"textAlign":"center"} -->
   //          <p class="has-text-align-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate autem voluptatem 
   //          deserunt ea odio quae odit molestiae provident similique id totam neque et dolorum explicabo, architecto itaque? Quas, eos quam?</p>
   //          <!-- /wp:paragraph -->
   //          <!-- wp:paragraph  {"textAlign":"center"} -->
   //          <p class="has-text-align-center">read more</p>
   //          <!-- /wp:paragraph --></div></div>
   //          <!-- /wp:cover --></div>
   //          <!-- /wp:column -->
   //          <!-- wp:column -->
   //          <div class="wp-block-column">
   //          <!-- wp:cover {} -->
   //          <div class="wp-block-cover has-background-dim">
   //          <div class="wp-block-cover__inner-container">                     
   //          <!-- wp:heading {"textAlign":"center","level":2,"fontSize":"large"} -->
   //          <h2 class="has-text-align-center">Cover</h2>
   //          <!-- /wp:heading -->
   //          <!-- wp:paragraph  {"textAlign":"center"} -->
   //          <p class="has-text-align-center">mouse over to highlight this feature</p>
   //          <!-- /wp:paragraph -->
   //          <!-- wp:paragraph  {"textAlign":"center"} -->
   //          <p class="has-text-align-center">explore</p>
   //          <!-- /wp:paragraph --></div></div>
   //          <!-- /wp:cover --></div>
   //          <!-- /wp:column -->
   //          <!-- wp:column -->
   //          <div class="wp-block-column">
   //          <!-- wp:cover {} -->
   //          <div class="wp-block-cover has-background-dim">
   //          <div class="wp-block-cover__inner-container">                     
   //          <!-- wp:heading {"textAlign":"center","level":2,"fontSize":"large"} -->
   //          <h2 class="has-text-align-center">Columns</h2>
   //          <!-- /wp:heading -->
   //          <!-- wp:paragraph  {"textAlign":"center"} -->
   //          <p class="has-text-align-center">You can customize the layout of this block pattern 
   //          in Appearance - Customize - Web Dev Agent Block Patterns - Web Dev Agent Cover-Columns...</p>
   //          <!-- /wp:paragraph -->
   //          <!-- wp:paragraph {"textAlign":"center"} -->
   //          <p class="has-text-align-center">learn more</p>
   //          <!-- /wp:paragraph --></div></div>
   //          <!-- /wp:cover --></div>
   //          <!-- /wp:column --></div>
   //          <!-- /wp:columns -->'
   // ]);


   //
   // title & lead text
   //
	register_block_pattern('wda-title-lead', [
		'title' => __('Title And Lead Text', 'wda'),
      'description' => _x( 'You can style all block patterns of this type in the customizer.', 'A title and lead text block.', 'wda' ),            
		'keywords' => ['title,lead,text'],
		'categories' => ['wda-texts'],
		'viewportWidth' => 1000,
		'content' =>  
         '<!-- wp:group {"className":"wda-title-lead"} -->
         <div class="wp-block-group wda-title-lead">
         <!-- wp:heading {"textAlign":"center","level":2} -->
         <h2 class="wda-title-lead__title has-text-align-center">Title & Lead Text</h2>
         <!-- /wp:heading -->
         <!-- wp:paragraph {"align":"center"} -->
         <p class="has-text-align-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>You can customize the layout of 
         this block pattern in Appearance - Customize - Web Dev Agent Block Patterns - Web Dev Agent Texts...</p>
         <!-- /wp:paragraph -->
         </div>
         <!-- /wp:group -->'
   ]);
 
   
   //
   // simple text
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
         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate autem voluptatem deserunt ea odio quae odit 
         molestiae provident similique id totam neque et dolorum explicabo, architecto itaque? Quas, eos quam?</p>
         <!-- /wp:paragraph -->
         <!-- wp:paragraph -->
         <p>You can customize the layout of this block pattern 
         in Appearance - Customize - Web Dev Agent Block Patterns - Web Dev Agent Texts...</p>
         <!-- /wp:paragraph --></div>
         <!-- /wp:group -->'
	]);


   //
   // wda-columns-text : future release
   //
	register_block_pattern('wda-columns-text', [
		'title' => __('Columns Text', 'wda'),
      'description' => _x( 'Columns Text.', 'A title and text block supporting columns on wider screens.', 'wda' ),            
		'keywords' => ['text,columns'],
		'categories' => ['wda-texts'],
		'viewportWidth' => 1000,
		'content' =>  
         '<!-- wp:group {"className":"wda-text wda-columns-text"} -->
         <div class="wp-block-group wda-text wda-columns-text">
         <!-- wp:paragraph -->
         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate autem voluptatem deserunt ea odio quae 
         odit molestiae provident similique id totam neque et dolorum explicabo, architecto itaque? Quas, eos quam?</p>
         <!-- /wp:paragraph -->
         <!-- wp:paragraph -->
         <p>You can customize the layout of this block pattern 
         in Appearance - Customize - Web Dev Agent Block Patterns - Web Dev Agent Texts...</p>
         <!-- /wp:paragraph -->
         </div>
         <!-- /wp:group -->'
	]);


   //
   // wda-image
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
   // wda-gallery
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
         </figure></li>
         <li class="blocks-gallery-item">
         <figure>
         <img src="' . $site_uri .'/imgs/kae-anderson-7KLv5TOKOrM-unsplash.jpg" alt="image of columns"/>
         </figure></li>
         <li class="blocks-gallery-item">
         <figure>
         <img src="' . $site_uri .'/imgs/kae-anderson-7KLv5TOKOrM-unsplash.jpg" alt="image of columns"/>
         </figure></li>
         </ul>
         </figure>
         <!-- /wp:gallery -->'
   ]);



   // 
   // wda-buttons
   //
   register_block_pattern('wda-buttons', [
		'title' => __('Web Dev Agent Buttons', 'wda'),
      'description' => _x( 'Web Dev Agent Buttons.', 'A Web Dev Agent button block.', 'wda' ),            
		'keywords' => ['button'],
		'categories' => ['wda-buttons'],
		'viewportWidth' => 1000,
		'content' =>  '<!-- wp:buttons  {"className":"wda-buttons"} -->
                     <div class="wp-block-buttons wda-buttons"><!-- wp:button -->
                     <div class="wp-block-button"><a class="wp-block-button__link">explore our projects</a></div>
                     <!-- /wp:button --></div>
                     <!-- /wp:buttons -->'
   ]);

}

add_action( 'init', 'wda_register_block_patterns' );

?>