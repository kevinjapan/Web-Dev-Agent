<?php
require_once get_template_directory() . '/inc/wda-sanitize.php';
require_once get_template_directory() . '/inc/wda-utility.php';

// Block Patterns
require_once get_template_directory() . '/inc/customizer-pattern-combos/wda-customize-cover-blocks.php';
require_once get_template_directory() . '/inc/customizer-pattern-combos/wda-customize-column-blocks.php';
require_once get_template_directory() . '/inc/customizer-pattern-combos/wda-customize-gallery-block.php';
require_once get_template_directory() . '/inc/customizer-pattern-combos/wda-customize-image-block.php';
require_once get_template_directory() . '/inc/customizer-pattern-combos/wda-customize-title-lead-block.php';
require_once get_template_directory() . '/inc/customizer-pattern-combos/wda-customize-text-block.php';


//
// WebDevAgentPatternsCustomizer
// Creates 'Web Dev Agent Block Patterns' Controls in Customizer.
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
      $wp_customize->add_section( 'wda_cover_patterns', 
         array('title'       => __( 'Web Dev Agent Covers', 'wda' ),
               'priority'    => 10,
               'capability'  => 'edit_theme_options',
               'description' => __('You can customize all Wed Dev Agent Covers across the site here.', 'wda'),
               'panel' => 'wda_patterns_panel',
               'active_callback' => '') 
      );
      $wp_customize->add_section( 'wda_column_patterns', 
         array('title'       => __( 'Web Dev Agent Columns', 'wda' ),
               'priority'    => 20,
               'capability'  => 'edit_theme_options',
               'description' => __('You can customize all Wed Dev Agent Columns across the site here.', 'wda'),
               'panel' => 'wda_patterns_panel',
               'active_callback' => '') 
      );
      $wp_customize->add_section( 'wda_title_lead_patterns', 
         array('title'       => __( 'Web Dev Agent Title & Lead', 'wda' ),
               'priority'    => 50,
               'capability'  => 'edit_theme_options',
               'description' => __('You can customize all Wed Dev Agent Title & Leads across the site here.', 'wda'),
               'panel' => 'wda_patterns_panel',
               'active_callback' => '') 
      );
      $wp_customize->add_section( 'wda_text_patterns', 
         array('title'       => __( 'Web Dev Agent Texts', 'wda' ),
               'priority'    => 50,
               'capability'  => 'edit_theme_options',
               'description' => __('You can customize all Wed Dev Agent Texts across the site here.', 'wda'),
               'panel' => 'wda_patterns_panel',
               'active_callback' => '') 
      );
      $wp_customize->add_section( 'wda_image_patterns', 
         array('title'       => __( 'Web Dev Agent Images', 'wda' ),
               'priority'    => 60,
               'capability'  => 'edit_theme_options',
               'description' => __('You can customize all Wed Dev Agent Images and Galleries across the site here.', 'wda'),
               'panel' => 'wda_patterns_panel',
               'active_callback' => '') 
      );
      $wp_customize->add_section( 'wda_buttons_patterns', 
         array('title'       => __( 'Web Dev Agent Buttons', 'wda' ),
               'priority'    => 70,
               'capability'  => 'edit_theme_options',
               'description' => __('You can customize all Wed Dev Agent Buttons across the site here.', 'wda'),
               'panel' => 'wda_patterns_panel',
               'active_callback' => '') 
      );

      //
      // Block Pattern Settings/Controls pairs
      //
      wda_customize_cover_block($wp_customize);
      wda_customize_column_blocks($wp_customize);
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
      <style id="te-custom-patterns" type="text/css">
      <?php 
      //
      // Block Pattern Styles
      //
      wda_customize_cover_block_styles();
      wda_customize_column_blocks_styles();
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
add_action( 'customize_register', array( 'WebDevAgentPatternsCustomizer' , 'register' ) );

// Output Custom Block Pattern CSS to frontend (utilising Theme Customizer Settings and Controls)
add_action( 'wp_head', array( 'WebDevAgentPatternsCustomizer' , 'wda_customizer_patterns_styles' ) );


