<?php

// Register Theme Block Pattern Templates
//
function wda_register_gallery_blocks_templates($site_uri) {

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

}