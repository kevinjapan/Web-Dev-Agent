<?php
require_once get_template_directory() . '/inc/wda-sanitize.php';
require_once get_template_directory() . '/inc/wda-utility.php';

// Block Patterns
require_once get_template_directory() . '/inc/customizer-pattern-combos/wda-customize-cover-blocks.php';
require_once get_template_directory() . '/inc/customizer-pattern-combos/wda-customize-feature-blocks.php';
require_once get_template_directory() . '/inc/customizer-pattern-combos/wda-customize-card-blocks.php';
require_once get_template_directory() . '/inc/customizer-pattern-combos/wda-customize-grid-blocks.php';
require_once get_template_directory() . '/inc/customizer-pattern-combos/wda-customize-gallery-block.php';
require_once get_template_directory() . '/inc/customizer-pattern-combos/wda-customize-image-block.php';
require_once get_template_directory() . '/inc/customizer-pattern-combos/wda-customize-title-lead-block.php';
require_once get_template_directory() . '/inc/customizer-pattern-combos/wda-customize-text-block.php';


//
// WebDevAgentPatternsCustomizer
// Creates 'WDA Block Patterns' Controls in Customizer.
// Generates front-end CSS from the configured Settings.
//

class WebDevAgentPatternsCustomizer {


   public static function register ( $wp_customize ) {

      //
      // Wed Dev Agent Block Patterns panel
      //
      if ( class_exists( 'WP_Customize_Panel' ) ) {
         if ( ! $wp_customize->get_panel( 'wda_patterns_panel' ) ) {
            $wp_customize->add_panel(
               'wda_patterns_panel',
               array(
                  'priority' => 25,
                  'title' => __( 'Web Dev Agent Block Patterns', 'wda' ),
                  'description' => 
                     __('Apply customizations to Web Dev Agent Block Pattern types across the site.
                        <br>These changes will be applied to all instances of the selected block 
                        pattern on your site, thus ensuring consistency across your design.', 'wda'))
            );
         }
      }

      //
      // Add admin panel sections for WDA patterns
      // 
      
      $wp_customize->add_section(
         'wda_hero_patterns', 
         array('title'       => __('WDA Hero Cover Blocks', 'wda' ),
               'priority'    => 10,
               'capability'  => 'edit_theme_options',
               'description' => __('Customize all Hero Covers.', 'wda'),
               'panel' => 'wda_patterns_panel',
               'active_callback' => '') 
      );   
      $wp_customize->add_section( 
         'wda_cover_patterns', 
         array('title'       => __('WDA Cover Blocks', 'wda' ),
               'priority'    => 20,
               'capability'  => 'edit_theme_options',
               'description' => __('Customize all Cover Blocks.', 'wda'),
               'panel' => 'wda_patterns_panel',
               'active_callback' => '') 
      );  
      $wp_customize->add_section(
         'wda_features_patterns', 
         array('title'       => __('WDA Feature Blocks', 'wda' ),
               'priority'    => 20,
               'capability'  => 'edit_theme_options',
               'description' => __('Customize all Feature Blocks.', 'wda'),
               'panel' => 'wda_patterns_panel',
               'active_callback' => '') 
      );
      $wp_customize->add_section(
         'wda_card_patterns', 
         array('title'       => __('WDA Card Blocks', 'wda' ),
               'priority'    => 20,
               'capability'  => 'edit_theme_options',
               'description' => __('Customize all Card Blocks.', 'wda'),
               'panel' => 'wda_patterns_panel',
               'active_callback' => '') 
      );
      $wp_customize->add_section(
         'wda_grid_patterns', 
         array('title'       => __('WDA Grid Blocks', 'wda' ),
               'priority'    => 20,
               'capability'  => 'edit_theme_options',
               'description' => __('Customize all Grid Blocks.', 'wda'),
               'panel' => 'wda_patterns_panel',
               'active_callback' => '') 
      );
      $wp_customize->add_section(
         'wda_title_lead_patterns', 
         array('title'       => __('WDA Title & Lead Blocks', 'wda' ),
               'priority'    => 50,
               'capability'  => 'edit_theme_options',
               'description' => __('Customize all Title & Lead Blocks.', 'wda'),
               'panel' => 'wda_patterns_panel',
               'active_callback' => '') 
      );
      $wp_customize->add_section(
         'wda_text_patterns', 
         array('title'       => __('WDA Text Blocks', 'wda' ),
               'priority'    => 50,
               'capability'  => 'edit_theme_options',
               'description' => __('Customize all Text Blocks.', 'wda'),
               'panel' => 'wda_patterns_panel',
               'active_callback' => '') 
      );
      $wp_customize->add_section(
         'wda_image_patterns', 
         array('title'       => __('WDA Image Blocks', 'wda' ),
               'priority'    => 60,
               'capability'  => 'edit_theme_options',
               'description' => __('Customize all Image and Gallery Blocks.', 'wda'),
               'panel' => 'wda_patterns_panel',
               'active_callback' => '') 
      );
      $wp_customize->add_section(
         'wda_buttons_patterns', 
         array('title'       => __('WDA Button Blocks', 'wda' ),
               'priority'    => 70,
               'capability'  => 'edit_theme_options',
               'description' => __('Customize all Button Blocks.', 'wda'),
               'panel' => 'wda_patterns_panel',
               'active_callback' => '') 
      );

      //
      // Block Pattern Settings/Controls pairs
      //
      wda_customize_cover_block($wp_customize);
      wda_customize_feature_blocks($wp_customize);
      wda_customize_card_block($wp_customize);
      wda_customize_grid_block($wp_customize);
      wda_customize_image_block($wp_customize);
      wda_customize_gallery_block($wp_customize);
      wda_customize_title_lead_block($wp_customize);
      wda_customize_text_block($wp_customize);
   }


   // 
   //  Custom frontend CSS
   //
   public static function wda_customizer_patterns_styles() {
      ?>
      <!-- The Web Dev Agent Patterns Customizer CSS --> 
       <!-- to do : te-custom-patterns : replace any 'te' references -->
      <style id="te-custom-patterns" type="text/css">
      <?php 
      //
      // Block Pattern Styles
      //
      wda_customize_cover_block_styles();
      wda_customize_feature_blocks_styles();
      wda_customize_card_block_styles();
      wda_customize_grid_block_styles();
      wda_customize_image_block_styles();
      wda_customize_gallery_block_styles();
      wda_customize_title_lead_block_styles();
      wda_customize_text_block_styles();
      ?>   
      </style> 
      <!-- The Web Dev Agent Patterns Customizer CSS -->
      <?php
   }
}


// Register Theme Customizer Settings and Controls
add_action('customize_register', array( 'WebDevAgentPatternsCustomizer', 'register'));

// Output Custom Block Pattern CSS to frontend (utilising Theme Customizer Settings and Controls)
add_action('wp_head', array( 'WebDevAgentPatternsCustomizer', 'wda_customizer_patterns_styles'));


