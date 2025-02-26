<?php

// paired w/ wda-customize.js for live updates in Customizer

// to do : comment here - where/how are these put out to front-end?

function wda_customize_card_block($wp_customize) {

   // X-margins
   $wp_customize->add_setting(
      'wda_card_x_margins',
      array('default'    => '0', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(new CompactNumberCustomizerControl($wp_customize,
      'wda_card_x_margins', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_card_patterns',
            'label' => __( '','wda'),
            'settings'   => 'wda_card_x_margins', 
            'description' => __( '% horizontal margin','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 60px;', 'step'	=> 1 )) 
   ));

   // Y-margins
   $wp_customize->add_setting(
      'wda_card_y_margins',
      array('default'    => '0', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(new CompactNumberCustomizerControl($wp_customize,
      'wda_card_y_margins', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_card_patterns',
            'label' => __( '','wda'),
            'settings'   => 'wda_card_y_margins', 
            'description' => __( '% vertical margin','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 60px;', 'step'	=> 1 )) 
   ));
   

   // card Gap
   $wp_customize->add_setting(
      'wda_card_gap',
      array('default'    => '0', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(new CompactNumberCustomizerControl($wp_customize,
      'wda_card_gap', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_card_patterns',
            'label' => __( '','wda'),
            'settings'   => 'wda_card_gap', 
            'description' => __( 'element spacing','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 5, 'style' => 'width: 60px;', 'step'	=> .5 )) 
   ));

   // card Template Columns
   $wp_customize->add_setting(
      'wda_card_template_cols',
   array('default'    => '0', 
         'type'       => 'theme_mod',
         'capability' => 'edit_theme_options',
         'transport'  => 'postMessage',
         'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(new CompactNumberCustomizerControl($wp_customize,
      'wda_card_template_cols', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_card_patterns',
            'label' => __( '','wda'),
            'settings'   => 'wda_card_template_cols', 
            'description' => __( 'number of columns','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 9, 'style' => 'width: 60px;', 'step'	=> 1 )) 
   ));

}

function wda_customize_card_block_styles() {

   //
   // wda-card
   // to do : review : we likely are generating way too many '@media screen..'s in page source?
   // to do : review : 'vh'/'vw' for margins?
   ?>
   @media screen and (min-width: 768px) { 
      <?php 

      // container rules
      wda_generate_css_rule('.wda-card',
      ['style' => 'margin-left','setting' => 'wda_card_x_margins','prefix'  => '','postfix' => 'vw'],
      ['style' => 'margin-right','setting' => 'wda_card_x_margins','prefix'  => '','postfix' => 'vw']);
      
      wda_generate_css_rule('.wda-card',
      ['style' => 'margin-top','setting' => 'wda_card_y_margins','prefix'  => '','postfix' => 'vh'],
      ['style' => 'margin-bottom','setting' => 'wda_card_y_margins','prefix'  => '','postfix' => 'vh']);


      // card rules
      wda_generate_css_rule('.wda-card > div, .wda-card:not(:has(div))',
      ['style' => 'gap','setting' => 'wda_card_gap','prefix'  => '','postfix' => 'rem']);

      // wda_card_template_cols
      wda_generate_css_rule('.wda-card > div, .wda-card:not(:has(div))',
      ['style' => 'card-template-columns','setting' => 'wda_card_template_cols','prefix'  => 'repeat(','postfix' => ',minmax(100px,1fr))']);

      ?>

   }
   <?php
}
