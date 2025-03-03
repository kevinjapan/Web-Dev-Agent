<?php
/*
 * Web Dev Agent Block Patterns
 * @package WordPress
 * @subpackage WebDevAgent
 * @since WebDevAgent 1.0
 */

// Block Pattern Templates
require_once get_template_directory() . '/inc/block-pattern-templates/wda-feature-blocks-templates.php';
require_once get_template_directory() . '/inc/block-pattern-templates/wda-cover-blocks-templates.php';
require_once get_template_directory() . '/inc/block-pattern-templates/wda-card-blocks-templates.php';
require_once get_template_directory() . '/inc/block-pattern-templates/wda-grid-blocks-templates.php';
require_once get_template_directory() . '/inc/block-pattern-templates/wda-gallery-blocks-templates.php';
require_once get_template_directory() . '/inc/block-pattern-templates/wda-image-blocks-templates.php';
require_once get_template_directory() . '/inc/block-pattern-templates/wda-text-blocks-templates.php';
require_once get_template_directory() . '/inc/block-pattern-templates/wda-title-lead-blocks-templates.php';
require_once get_template_directory() . '/inc/block-pattern-templates/wda-button-blocks-templates.php';


//
// Web Dev Agent Block Patterns
// Registers Patterns in 'block inserter' in editor.
// Each pattern is an HTML template for the UI block.
// We generate these block patterns by building the pattern in editor then copying the html (use code editor mode - 'serialized block')
// and inserting that into my calls to register_block_pattern().content below.
//


// Register Block Pattern Categories
//
function wda_register_block_pattern_categories() { 
	register_block_pattern_category('wda-cover-blocks', ['label' => __('WDA Cover Blocks', 'wda')]);
	register_block_pattern_category('wda-features-blocks', ['label' => __('WDA Feature Blocks', 'wda')]);  
	register_block_pattern_category('wda-card-blocks', ['label' => __('WDA Card Blocks', 'wda')]);  
	register_block_pattern_category('wda-grid-blocks', ['label' => __('WDA Grid Blocks', 'wda')]);  
	register_block_pattern_category('wda-texts', ['label' => __('WDA Text Blocks', 'wda')]); 
	register_block_pattern_category('wda-images', ['label' => __('WDA Image Blocks', 'wda')]); 
	register_block_pattern_category('wda-buttons-blocks', ['label' => __('WDA Button Blocks', 'wda')]);
}
add_action( 'init', 'wda_register_block_pattern_categories' );



// Register block pattern templates
//
function wda_register_block_patterns() {

   $site_uri = get_template_directory_uri();
   
   // Cover Blocks Templates
   wda_register_cover_blocks_templates($site_uri);

   // Column Blocks Templates
   wda_register_column_blocks_templates($site_uri);
   
   // Card Blocks Templates
   wda_register_card_blocks_templates($site_uri);
   
   // Grid Blocks Templates
   wda_register_grid_blocks_templates($site_uri);

   // Title & Lead Blocks Templates
   wda_register_title_lead_blocks_templates($site_uri);

   // Text Blocks Templates
   wda_register_title_lead_blocks_templates($site_uri);

   // Simple Text Blocks Template
   wda_register_text_blocks_templates($site_uri);

   // Image Blocks Template
   wda_register_image_blocks_templates($site_uri);

   // Gallery Blocks Template
   wda_register_gallery_blocks_templates($site_uri);

   // Button Blocks Templates
   wda_register_button_blocks_templates($site_uri);

}
add_action( 'init', 'wda_register_block_patterns' );

?>