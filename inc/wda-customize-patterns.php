<?php
require_once get_template_directory() . '/inc/wda-sanitize.php';


//
// WebDevAgentPatternsCustomizer
// Creates 'Web Dev Agent Block Patterns' in Customizer.
// Generates front-end CSS from the configured Settings.
//

class WebDevAgentPatternsCustomizer {

   public function __construct() {}

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
                        <br>These changes will be applied to all instances
                        of the selected block pattern on your site,
                        thus ensuring consistency across your design.', 'wda'))
            );
         }
      }

      //
      // sections
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


      // settings and control pairs

      // 
      // cover block patterns
      //
      $wp_customize->add_setting( 'wda_cover_x_width',
         array('default'    => '100', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'wda_sanitize_number_range') 
      );
      $wp_customize->add_control( 'wda_cover_x_width', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'wda_cover_patterns',
               'label' => __( 'Covers','wda'),
               'settings'   => 'wda_cover_x_width', 
               'description' => __( '% width for Web Dev Agent covers.','wda'),
               'input_attrs' => array( 'min' => 60, 'max' => 100, 'style' => 'width: 80px;', 'step'	=> 5 )) 
      );

      $wp_customize->add_setting( 'wda_cover_y_margins',
         array('default'    => '0', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'wda_sanitize_number_range') 
      );
      $wp_customize->add_control( 'wda_cover_y_margins', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'wda_cover_patterns',
               'label' => __( '','wda'),
               'settings'   => 'wda_cover_y_margins', 
               'description' => __( '% above and below Web Dev Agent covers.','wda'),
               'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 1 )) 
      );

      //
      // column block patterns
      //
      $wp_customize->add_setting( 'wda_column_x_padding',
         array('default'    => '0', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'wda_sanitize_number_range') 
      );
      $wp_customize->add_control( 'wda_column_x_padding', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'wda_column_patterns',
               'label' => __( 'Padding','wda'),
               'settings'   => 'wda_column_x_padding', 
               'description' => __( '% horizontal padding for Web Dev Agent columns.','wda'),
               'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 5 )) 
      );

      $wp_customize->add_setting( 'wda_column_top_padding',
         array('default'    => '0', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'wda_sanitize_number_range') 
      );
      $wp_customize->add_control( 'wda_column_top_padding', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'wda_column_patterns',
               'label' => __( '','wda'),
               'settings'   => 'wda_column_top_padding', 
               'description' => __( '% top padding for Web Dev Agent columns.','wda'),
               'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 5 )) 
      );

      $wp_customize->add_setting( 'wda_column_bottom_padding',
         array('default'    => '0', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'wda_sanitize_number_range') 
      );
      $wp_customize->add_control( 'wda_column_bottom_padding', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'wda_column_patterns',
               'label' => __( '','wda'),
               'settings'   => 'wda_column_bottom_padding', 
               'description' => __( '% bottom padding for Web Dev Agent columns.','wda'),
               'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 5 )) 
      );


      // 
      // wda-image block pattern : 
      // wrap wp-block-image to enable our margin and padding applied across all wda-image blocks 
      //      
      $wp_customize->add_setting( 'wda_image_x_padding',
         array('default'    => '0', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'wda_sanitize_number_range') 
      );
      $wp_customize->add_control( 'wda_image_x_padding', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'wda_image_patterns',
               'label' => __( 'Images','wda'),
               'settings'   => 'wda_image_x_padding', 
               'description' => __( '% horizontal padding for Web Dev Agent images.','wda'),
               'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 5 )) 
      );

      $wp_customize->add_setting( 'wda_image_y_margins',
         array('default'    => '0', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'wda_sanitize_number_range') 
      );
      $wp_customize->add_control( 'wda_image_y_margins', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'wda_image_patterns',
               'label' => __( '','wda'),
               'settings'   => 'wda_image_y_margins', 
               'description' => __( '% vertical spacing for Web Dev Agent images.','wda'),
               'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 5 )) 
      );


      //
      // wda-gallery block pattern : 
      // wrap wp-block-image to enable our margin and padding applied across all gallery blocks 
      //
      $wp_customize->add_setting( 'wda_gallery_x_padding',
         array('default'    => '0', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'wda_sanitize_number_range') 
      );
      $wp_customize->add_control( 'wda_gallery_x_padding', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'wda_image_patterns',
               'label' => __( 'Galleries','wda'),
               'settings'   => 'wda_gallery_x_padding', 
               'description' => __( '% horizontal padding for Web Dev Agent galleries.','wda'),
               'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 5 )) 
      );

      $wp_customize->add_setting( 'wda_gallery_y_margins',
         array('default'    => '0', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'wda_sanitize_number_range') 
      );
      $wp_customize->add_control( 'wda_gallery_y_margins', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'wda_image_patterns',
               'label' => __( '','wda'),
               'settings'   => 'wda_gallery_y_margins', 
               'description' => __( '% vertical spacing for Web Dev Agent galleries.','wda'),
               'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 5 ))
      );


      //
      // title & lead block pattern
      //
      $wp_customize->add_setting( 'wda_title_lead_btwn_padding',
         array('default'    => '0', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'wda_sanitize_number_range') 
      );
      $wp_customize->add_control( 'wda_title_lead_btwn_padding', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'wda_title_lead_patterns',
               'label' => __( 'Padding','wda'),
               'settings'   => 'wda_title_lead_btwn_padding', 
               'description' => __( '% padding between title & lead.','wda'),
               'input_attrs' => array( 'min' => 0, 'max' => 5, 'style' => 'width: 80px;', 'step'	=> 1 ))
      );

      // 
      // lead-text box padding
      //
      $wp_customize->add_setting( 'wda_title_lead_x_padding',
         array('default'    => '0', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'wda_sanitize_number_range') 
      );
      $wp_customize->add_control( 'wda_title_lead_x_padding', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'wda_title_lead_patterns',
               'label' => __( '','wda'),
               'settings'   => 'wda_title_lead_x_padding', 
               'description' => __( '% horizontal padding for Web Dev Agent title & lead.','wda'),
               'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 5 ))
      );

      $wp_customize->add_setting( 'wda_title_lead_top_padding',
         array('default'    => '0', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'wda_sanitize_number_range') 
      );
      $wp_customize->add_control( 'wda_title_lead_top_padding', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'wda_title_lead_patterns',
               'label' => __( '','wda'),
               'settings'   => 'wda_title_lead_top_padding', 
               'description' => __( '% padding above Web Dev Agent title & lead.','wda'),
               'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 5 ))
      );

      $wp_customize->add_setting( 'wda_title_lead_bottom_padding',
         array('default'    => '0', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'wda_sanitize_number_range') 
      );
      $wp_customize->add_control( 'wda_title_lead_bottom_padding', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'wda_title_lead_patterns',
               'label' => __( '','wda'),
               'settings'   => 'wda_title_lead_bottom_padding', 
               'description' => __( '% padding below for Web Dev Agent title & lead.','wda'),
               'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 5 ))
      );

      
      //
      // lead-text margins
      //
      $wp_customize->add_setting( 'wda_title_lead_top_margin',
         array('default'    => '0', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'wda_sanitize_number_range') 
      );
      $wp_customize->add_control( 'wda_title_lead_top_margin', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'wda_title_lead_patterns',
               'label' => __( 'Margins','wda'),
               'settings'   => 'wda_title_lead_top_margin', 
               'description' => __( '% margin above Web Dev Agent title & lead.','wda'),
               'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 5 ))
      );

      $wp_customize->add_setting( 'wda_title_lead_bottom_margin',
         array('default'    => '0', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'wda_sanitize_number_range') 
      );
      $wp_customize->add_control( 'wda_title_lead_bottom_margin', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'wda_title_lead_patterns',
               'label' => __( '','wda'),
               'settings'   => 'wda_title_lead_bottom_margin', 
               'description' => __( '% margin below for Web Dev Agent title & lead.','wda'),
               'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 5 ))
      );


      //
      // text block pattern   
      //  
      $wp_customize->add_setting( 'wda_text_x_padding',
         array('default'    => '0', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'wda_sanitize_number_range') 
      );
      $wp_customize->add_control( 'wda_text_x_padding', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'wda_text_patterns',
               'label' => __( 'Simple Text','wda'),
               'settings'   => 'wda_text_x_padding', 
               'description' => __( '% horizontal padding for Web Dev Agent texts.','wda'),
               'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 5 ))
      );

      $wp_customize->add_setting( 'wda_text_y_margins',
         array('default'    => '0', 
               'type'       => 'theme_mod',
               'capability' => 'edit_theme_options',
               'transport'  => 'postMessage',
               'sanitize_callback' => 'wda_sanitize_number_range') 
      );
      $wp_customize->add_control( 'wda_text_y_margins', 
         array('type' => 'number',
               'priority' => 10,
               'section' => 'wda_text_patterns',
               'label' => __( '','wda'),
               'settings'   => 'wda_text_y_margins', 
               'description' => __( '% vertical spacing for Web Dev Agent texts.','wda'),
               'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 5 )) 
      );
   }


   public static function wda_customizer_patterns_styles() {

      ?><!-- Web Dev Agent Patterns Customizer CSS --> 
<style id="wda-custom-patterns" type="text/css">
<?php 

   /* wda-cover block */

      // wda-cover
      ?>
      @media screen and (min-width: 768px) { 
      
         <?php 
            // wda-cover - md/lg 
            wda_generate_css_rule('.wda-cover',
               ['style' => 'width','setting' => 'wda_cover_x_width','prefix'  => '','postfix' => '%'],);
            wda_generate_css_rule('.wda-cover',
               ['style' => 'margin-top','setting' => 'wda_cover_y_margins','prefix'  => '','postfix' => 'vh'],
               ['style' => 'margin-bottom','setting' => 'wda_cover_y_margins','prefix'  => '','postfix' => 'vh']);

            // wda-columns - md/lg

         ?>
      }
      <?php

      // wda-columns
         wda_generate_css_rule('.wp-block-media-text.wda-columns,.wp-block-media-text.wda-columns.has-background,.wp-block-columns.wda-columns,.wp-block-columns.wda-columns.has-background',
            ['style' => 'padding-top','setting' => 'wda_column_top_padding','prefix'  => '','postfix' => 'vh'],
            ['style' => 'padding-bottom','setting' => 'wda_column_bottom_padding','prefix'  => '','postfix' => 'vh']);
         wda_generate_css_rule('.wp-block-media-text.wda-columns.wda-single-feature-columns,.wp-block-media-text.wda-columns.has-background,.wp-block-columns.wda-columns,.wp-block-columns.wda-columns.has-background',
            ['style' => 'margin-top','setting' => 'wda_column_y_margins','prefix'  => '','postfix' => 'vh !important'],
            ['style' => 'margin-bottom','setting' => 'wda_column_y_margins','prefix'  => '','postfix' => 'vh !important']);
      ?>
      @media screen and (min-width: 768px) { 
         <?php
      wda_generate_css_rule(
         '.wp-block-media-text.wda-columns,
          .wp-block-media-text.wda-columns.has-background,
          .wp-block-columns.wda-columns,
          .wp-block-columns.wda-columns.has-background',
         ['style' => 'padding-left','setting' => 'wda_column_x_padding','prefix'  => '','postfix' => '%'],
         ['style' => 'padding-right','setting' => 'wda_column_x_padding','prefix'  => '','postfix' => '%']);
      wda_generate_css_rule('.wda-cover-columns, .wda-cover-columns.has-background',
         ['style' => 'padding-left','setting' => 'wda_cover_column_x_padding','prefix'  => '','postfix' => '%'],
         ['style' => 'padding-right','setting' => 'wda_cover_column_x_padding','prefix'  => '','postfix' => '%']);?>}
<?php
      wda_generate_css_rule('.wda-cover-columns, .wda-cover-columns.has-background',
         ['style' => 'padding-top','setting' => 'wda_cover_columns_y_padding','prefix'  => '','postfix' => 'vh'],
         ['style' => 'padding-bottom','setting' => 'wda_cover_columns_y_padding','prefix'  => '','postfix' => 'vh']);

      /* wda-cover-grid block */
      wda_generate_css_rule('.wp-block-group.wda-cover-grid',
         ['style' => 'margin-top','setting' => 'wda_cover_grid_y_margins','prefix'  => '','postfix' => 'vh'],
         ['style' => 'margin-bottom','setting' => 'wda_cover_grid_y_margins','prefix'  => '','postfix' => 'vh']);
      ?>@media screen and (min-width: 768px) {
<?php
      wda_generate_css_rule('.wda-cover-grid ',
         ['style' => 'width','setting' => 'wda_cover_grid_x_width','prefix'  => '','postfix' => '%'],);?>}
<?php
      /* wda-media-text-grid block */
      wda_generate_css_rule('.wda-media-text-grid',
         ['style' => 'padding-left','setting' => 'wda_media_text_grid_x_padding','prefix'  => '','postfix' => '%'],
         ['style' => 'padding-right','setting' => 'wda_media_text_grid_x_padding','prefix'  => '','postfix' => '%']);
      wda_generate_css_rule('.wda-media-text-grid',
         ['style' => 'margin-top','setting' => 'wda_media_text_grid_y_margins','prefix'  => '','postfix' => 'vh'],
         ['style' => 'margin-bottom','setting' => 'wda_media_text_grid_y_margins','prefix'  => '','postfix' => 'vh']);

      /* wda-image */
      wda_generate_css_rule('article .entry-content figure.wp-block-image.wda-image img',
         ['style' => 'padding-left','setting' => 'wda_image_x_padding','prefix'  => '','postfix' => '%'],
         ['style' => 'padding-right','setting' => 'wda_image_x_padding','prefix'  => '','postfix' => '%']);
      wda_generate_css_rule('figure.wp-block-image.wda-image',
         ['style' => 'padding-left','setting' => 'wda_image_x_padding','prefix'  => '','postfix' => '%'],
         ['style' => 'padding-right','setting' => 'wda_image_x_padding','prefix'  => '','postfix' => '%']);
      wda_generate_css_rule('article .entry-content figure.wp-block-image.wda-image img,article .entry-content figure.wp-block-image.wda-image.has-background img',
         ['style' => 'margin-top','setting' => 'wda_image_y_margins','prefix'  => '','postfix' => 'vh'],
         ['style' => 'margin-bottom','setting' => 'wda_image_y_margins','prefix'  => '','postfix' => 'vh']);

      /* wda-gallery */
      wda_generate_css_rule('.wda-gallery,.wda-gallery.has-background',
         ['style' => 'padding-left','setting' => 'wda_gallery_x_padding','prefix'  => '','postfix' => '%'],
         ['style' => 'padding-right','setting' => 'wda_gallery_x_padding','prefix'  => '','postfix' => '%']);
      wda_generate_css_rule('.wda-gallery,.wda-gallery.has-background',
         ['style' => 'margin-top','setting' => 'wda_gallery_y_margins','prefix'  => '','postfix' => 'vh'],
         ['style' => 'margin-bottom','setting' => 'wda_gallery_y_margins','prefix'  => '','postfix' => 'vh']);

      /* wda-title-lead */
      wda_generate_css_rule('.wp-block-group.wda-title-lead',
         ['style' => 'margin-top','setting' => 'wda_title_lead_bottom_margin','prefix'  => '','postfix' => 'vh'],
         ['style' => 'margin-bottom','setting' => 'wda_title_lead_bottom_margin','prefix'  => '','postfix' => 'vh']);
      ?>@media screen and (min-width: 768px) {
<?php
         wda_generate_css_rule('.wda-title-lead__title',
            ['style' => 'padding-bottom','setting' => 'wda_title_lead_btwn_padding','prefix'  => '','postfix' => 'vw']);
         wda_generate_css_rule(
            '.wp-block-group.wda-title-lead,
             .wp-block-group.wda-title-lead.has-background ',
            ['style' => 'padding-left','setting' => 'wda_title_lead_x_padding','prefix'  => '','postfix' => '%'],
            ['style' => 'padding-right','setting' => 'wda_title_lead_x_padding','prefix'  => '','postfix' => '%']);
         wda_generate_css_rule('.wp-block-group.wda-title-lead',
            ['style' => 'padding-top','setting' => 'wda_title_lead_top_padding','prefix'  => '','postfix' => 'vh'],
            ['style' => 'padding-bottom','setting' => 'wda_title_lead_bottom_padding','prefix'  => '','postfix' => 'vh']);
      ?>}<?php
      wda_generate_css_rule('.wp-block-group.wda-text.wda-simple-text',
         ['style' => 'margin-top','setting' => 'wda_text_y_margins','prefix'  => '','postfix' => 'vh'],
         ['style' => 'margin-bottom','setting' => 'wda_text_y_margins','prefix'  => '','postfix' => 'vh']); 
      ?>@media screen and (min-width: 768px) {
<?php
      wda_generate_css_rule('.wda-text, .wda-text.has-background ',
         ['style' => 'padding-left','setting' => 'wda_text_x_padding','prefix'  => '','postfix' => '%'],
         ['style' => 'padding-right','setting' => 'wda_text_x_padding','prefix'  => '','postfix' => '%']);?>}<?php
      ?>
</style> 
<!--/ Web Dev Agent Patterns Customizer CSS -->
      <?php
   }
}


//
// setup theme customizer settings and controls
//
add_action( 'customize_register', array( 'WebDevAgentPatternsCustomizer' , 'register' ) );


//
// output custom css to frontend
//
add_action( 'wp_head', array( 'WebDevAgentPatternsCustomizer' , 'wda_customizer_patterns_styles' ) );


