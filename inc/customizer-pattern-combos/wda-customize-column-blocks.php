<?php

function wda_customize_column_blocks($wp_customize) {

   // future : Add bg color setting to block patterns
   // considerations: 
   // - padding, esp y-padding. 
   // - buttons need eg :hover rules for particular combos. 
   // - using WordPress editor, adding bg colors gets awkward and uncomfortable for 'normal' users. 
   //   (doesn't even update the editor view w/ the background color if using additional css class!)
   // - also te classes are exposed as 'additional css classes' - which means they can be mistakenly
   //   removed too easily. Hence, we don't want to encourage access to this control.
   // - if we tie into customizer, we can restrict or encourage choice from site color palette.
   //   while applying across site w/ single action.

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
            'label' => __( 'Padding','the-educator'),
            'settings'   => 'wda_column_x_padding', 
            'description' => __( '% horizontal padding for Columns.','the-educator'),
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
            'label' => __( '','the-educator'),
            'settings'   => 'wda_column_top_padding', 
            'description' => __( '% top padding for Columns.','the-educator'),
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
            'label' => __( '','the-educator'),
            'settings'   => 'wda_column_bottom_padding', 
            'description' => __( '% bottom padding for Columns.','the-educator'),
            'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 5 )) 
   );
}


function wda_customize_column_blocks_styles() {

   
      //
      // te-columns
      //
      wda_generate_css_rule('.wp-block-media-text.wda-columns,.wp-block-media-text.wda-columns.has-background,.wp-block-columns.wda-columns,.wp-block-columns.wda-columns.has-background',
      ['style' => 'padding-top','setting' => 'wda_column_top_padding','prefix'  => '','postfix' => 'vh'],
      ['style' => 'padding-bottom','setting' => 'wda_column_bottom_padding','prefix'  => '','postfix' => 'vh']);
   wda_generate_css_rule('.wp-block-media-text.wda-columns.wda-single-feature-columns,.wp-block-media-text.wda-columns.has-background,.wp-block-columns.wda-columns,.wp-block-columns.wda-columns.has-background',
      ['style' => 'margin-top','setting' => 'wda_column_y_margins','prefix'  => '','postfix' => 'vh !important'],
      ['style' => 'margin-bottom','setting' => 'wda_column_y_margins','prefix'  => '','postfix' => 'vh !important']);
?>

<?php
   // future : refactor : we want to prevent empty media queries but efficiently!
   // $mod = get_theme_mod('wda_column_x_padding');
   // if ( ! empty($mod) || $mod === "0" ) {?>
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
               ['style' => 'padding-right','setting' => 'wda_cover_column_x_padding','prefix'  => '','postfix' => '%']);
         ?>
      }
   <?php
   //}
   
}


