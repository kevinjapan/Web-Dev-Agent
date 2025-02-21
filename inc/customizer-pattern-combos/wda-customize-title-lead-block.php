<?php


// future : can we / need we! make ctrls layout more compact - eg side-by-side smaller ctrls?
   
function wda_customize_title_lead_block($wp_customize) {


   //
   // big title & lead block pattern
   //
   $wp_customize->add_setting(
      'wda_big_title_lead_btwn_padding',
      array('default'    => '0', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(
      'wda_big_title_lead_btwn_padding', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_big_title_lead_patterns',
            'label' => __( 'Padding','wda'),
            'settings'   => 'wda_big_title_lead_btwn_padding', 
            'description' => __( '% padding between Big Title & Lead.','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 5, 'style' => 'width: 60px;', 'step'	=> 1 ))
   );



   // 
   // big title & lead-text box padding
   //
   $wp_customize->add_setting(
      'wda_big_title_lead_x_padding',
      array('default'    => '0', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(
      'wda_big_title_lead_x_padding', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_big_title_lead_patterns',
            'label' => __( '','wda'),
            'settings'   => 'wda_big_title_lead_x_padding', 
            'description' => __( '% horizontal padding for Big Title & Lead.','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 60px;', 'step'	=> 5 ))
   );

   $wp_customize->add_setting(
      'wda_big_title_lead_top_padding',
      array('default'    => '0', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(
      'wda_big_title_lead_top_padding', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_big_title_lead_patterns',
            'label' => __( '','wda'),
            'settings'   => 'wda_big_title_lead_top_padding', 
            'description' => __( '% padding above Big Title & Lead.','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 60px;', 'step'	=> 5 ))
   );

   $wp_customize->add_setting(
      'wda_big_title_lead_bottom_padding',
      array('default'    => '0', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(
      'wda_big_title_lead_bottom_padding', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_big_title_lead_patterns',
            'label' => __( '','wda'),
            'settings'   => 'wda_big_title_lead_bottom_padding', 
            'description' => __( '% padding below for Big Title & Lead.','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 60px;', 'step'	=> 5 ))
   );

   

   //
   // lead-text margins
   //
   $wp_customize->add_setting(
      'wda_big_title_lead_top_margin',
      array('default'    => '0', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(
      'wda_big_title_lead_top_margin', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_big_title_lead_patterns',
            'label' => __( 'Margins','wda'),
            'settings'   => 'wda_big_title_lead_top_margin', 
            'description' => __( '% margin above Big Title & Lead.','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 60px;', 'step'	=> 5 ))
   );

   $wp_customize->add_setting(
      'wda_big_title_lead_bottom_margin',
      array('default'    => '0', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(
      'wda_big_title_lead_bottom_margin', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_big_title_lead_patterns',
            'label' => __( '','wda'),
            'settings'   => 'wda_big_title_lead_bottom_margin', 
            'description' => __( '% margin below for Big Title & Lead.','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 60px;', 'step'	=> 5 ))
   );



   // ------------------------------------------------------------------------------------------------

   //
   // title & lead block pattern
   //
   $wp_customize->add_setting(
      'wda_title_lead_btwn_padding',
      array('default'    => '0', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(
      'wda_title_lead_btwn_padding', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_title_lead_patterns',
            'label' => __( 'Padding','wda'),
            'settings'   => 'wda_title_lead_btwn_padding', 
            'description' => __( '% padding between Title & Lead.','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 5, 'style' => 'width: 60px;', 'step'	=> 1 ))
   );



   // 
   // lead-text box padding
   //
   $wp_customize->add_setting(
      'wda_title_lead_x_padding',
      array('default'    => '0', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(
      'wda_title_lead_x_padding', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_title_lead_patterns',
            'label' => __( '','wda'),
            'settings'   => 'wda_title_lead_x_padding', 
            'description' => __( '% horizontal padding for Title & Lead.','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 60px;', 'step'	=> 5 ))
   );

   $wp_customize->add_setting(
      'wda_title_lead_y_padding',
      array('default'    => '0', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(
      'wda_title_lead_y_padding', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_title_lead_patterns',
            'label' => __( '','wda'),
            'settings'   => 'wda_title_lead_y_padding', 
            'description' => __( '% padding above and below Title & Lead.','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 60px;', 'step'	=> 5 ))
   );

   // to do : remove
   // $wp_customize->add_setting(
   //    'wda_title_lead_bottom_padding',
   //    array('default'    => '0', 
   //          'type'       => 'theme_mod',
   //          'capability' => 'edit_theme_options',
   //          'transport'  => 'postMessage',
   //          'sanitize_callback' => 'wda_sanitize_number_range') 
   // );
   // $wp_customize->add_control(
   //    'wda_title_lead_bottom_padding', 
   //    array('type' => 'number',
   //          'priority' => 10,
   //          'section' => 'wda_title_lead_patterns',
   //          'label' => __( '','wda'),
   //          'settings'   => 'wda_title_lead_bottom_padding', 
   //          'description' => __( '% padding below for Title & Lead.','wda'),
   //          'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 60px;', 'step'	=> 5 ))
   // );

   

   //
   // lead-text margins
   //
   $wp_customize->add_setting(
      'wda_title_lead_y_margin',
      array('default'    => '0', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(
      'wda_title_lead_y_margin', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_title_lead_patterns',
            'label' => __( 'Margins','wda'),
            'settings'   => 'wda_title_lead_y_margin', 
            'description' => __( '% margin above Title & Lead.','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 60px;', 'step'	=> 5 ))
   );

   // $wp_customize->add_setting(
   //    'wda_title_lead_bottom_margin',
   //    array('default'    => '0', 
   //          'type'       => 'theme_mod',
   //          'capability' => 'edit_theme_options',
   //          'transport'  => 'postMessage',
   //          'sanitize_callback' => 'wda_sanitize_number_range') 
   // );
   // $wp_customize->add_control(
   //    'wda_title_lead_bottom_margin', 
   //    array('type' => 'number',
   //          'priority' => 10,
   //          'section' => 'wda_title_lead_patterns',
   //          'label' => __( '','wda'),
   //          'settings'   => 'wda_title_lead_bottom_margin', 
   //          'description' => __( '% margin below for Title & Lead.','wda'),
   //          'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 60px;', 'step'	=> 5 ))
   // );




}



function wda_customize_title_lead_block_styles() {

   
   //
   // big te-title-lead
   //
   wda_generate_css_rule('.wp-block-group.wda-big-title-lead',
      ['style' => 'margin-top','setting' => 'wda_big_title_lead_top_margin','prefix'  => '','postfix' => 'vh'],
      ['style' => 'margin-bottom','setting' => 'wda_big_title_lead_bottom_margin','prefix'  => '','postfix' => 'vh']);
   ?>
   @media screen and (min-width: 768px) { 
      <?php 
      wda_generate_css_rule('.wda-big-title-lead__title',
         ['style' => 'padding-bottom','setting' => 'wda_big_title_lead_btwn_padding','prefix'  => '','postfix' => 'vw']);
      wda_generate_css_rule(
         '.wp-block-group.wda-big-title-lead,
         .wp-block-group.wda-big-title-lead.has-background ',
         ['style' => 'padding-left','setting' => 'wda_big_title_lead_x_padding','prefix'  => '','postfix' => '%'],
         ['style' => 'padding-right','setting' => 'wda_big_title_lead_x_padding','prefix'  => '','postfix' => '%']);
      wda_generate_css_rule('.wp-block-group.wda-big-title-lead',
         ['style' => 'padding-top','setting' => 'wda_big_title_lead_top_padding','prefix'  => '','postfix' => 'vh'],
         ['style' => 'padding-bottom','setting' => 'wda_big_title_lead_bottom_padding','prefix'  => '','postfix' => 'vh']);
      ?>
   }
   <?php
   //
   // te-title-lead
   //
   wda_generate_css_rule('.wp-block-group.wda-title-lead',
      ['style' => 'margin-top','setting' => 'wda_title_lead_y_margin','prefix'  => '','postfix' => 'vh'],
      ['style' => 'margin-bottom','setting' => 'wda_title_lead_bottom_margin','prefix'  => '','postfix' => 'vh']);
   ?>
   @media screen and (min-width: 768px) { 
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
      ?>
   }
   <?php


}