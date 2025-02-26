
<?php
// to do : 
// - customize on customizer to change grid layout for all grids
// - add utility css classes to indvdl grid in Edit Page - Block - to override grid columns

// Register Theme Block Pattern Templates
//
function wda_register_card_blocks_templates($site_uri) {

   // Card Block Template
   // 
   // to do : review : we removed WP group layout type and implement our own via wda-card : 
   //     '<!-- wp:group {"layout":{"type":"grid"}} -->

   // -------------------------------------------------------------------------------------------
   // to do : relying on WP group elements is risky, since they may change their behaviour
   // eg for wp-block-group, WP *will* inject '<div class="wp-block-group__inner-container">.. - 
   // we can't hardcode this in our own solution - it's change is outside our control and would
   // break this. So, we should implement our own HTML elements and CSS rules.
   // -------------------------------------------------------------------------------------------
	register_block_pattern(
      'wda-card',
      [
         'title' => __('Card Block', 'wda'),
         'description' => _x( 'Card Block.', 'Card Block.', 'wda' ),            
         'keywords' => ['single,grid'],
         'categories' => ['wda-card-blocks'],
         'viewportWidth' => 1000,
         'content' =>  
            '<!-- wp:group {"layout":{"type":"grid"}} -->
               <div class="wp-block-group wda-card">

                  ' . wda_single_card_template() . '
                  ' . wda_single_card_template() . '
                  ' . wda_single_card_template() . '
                  ' . wda_single_card_template() . '

               </div>
            <!-- /wp:group -->'
	]);
}


function wda_single_card_template() {
   

   $template = '<!-- wp:column {"className":"wda_inner_feature_block"} -->
                  <div class="wp-block-column wda_inner_feature_block">';

   $template .=  '<!-- wp:image {"id":31,"sizeSlug":"large","linkDestination":"none"} -->
               <figure class="wp-block-image size-large display_block wda_icon">
                  <img src="http://localhost/wordpress/web-dev-agent/wp-content/uploads/2024/02/scott-graham-5fNmWej4tAA-unsplash-1200x630.jpg" alt="" class="wp-image-31"/>
               </figure>
            <!-- /wp:image -->
               <!-- wp:heading {"level":4} -->
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
   $template .= '</div><!-- /wp:column -->';
   return $template;
}
