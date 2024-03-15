<?php



function wda_customize_cover_block($wp_customize) {

   
   // Hero Cover Block Patterns
   //
   $wp_customize->add_setting( 'wda_hero_v_align',
      array('default'    => 'center', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control( 'wda_hero_v_align', 
      array('type' => 'select',
            'priority' => 10,
            'section' => 'wda_hero_patterns',
            'label' => __( 'Hero Cover Blocks','the-educator'), 
            'description' => __( 'Align text vertically.','the-educator'),
            'choices' => array(
               'flex-start' => 'Top',
               'center' => 'Center',
               'flex-end' => 'Bottom',
            ))
   );
   $wp_customize->add_setting( 'wda_hero_x_height',
      array('default'    => '100', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control( 'wda_hero_x_height', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_cover_patterns',
            'label' => __( 'Hero Cover Blocks','wda'), 
            'description' => __( '% height for Hero Covers.','wda'),
            'input_attrs' => array( 'min' => 50, 'max' => 100, 'style' => 'width: 80px;', 'step'	=> 5 )) 
   );
   $wp_customize->add_setting( 'wda_hero_bottom_margin',
      array('default'    => '0', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control( 'wda_hero_bottom_margin', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_cover_patterns',
            'label' => __( '','wda'),
            'description' => __( '% margin below Hero Covers.','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 5 )) 
   );



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
            'description' => __( '% width for Covers.','wda'),
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
            'description' => __( '% above and below Covers.','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 1 )) 
   );
}

function wda_customize_cover_block_styles() {

   //
   // wda-cover
   //
   ?>
   @media screen and (min-width: 768px) { 
      <?php 
         // Hero Cover Block 
         wda_generate_css_rule('.wda-hero',            
         ['style' => 'height','setting' => 'wda_hero_x_height','prefix'  => '','postfix' => 'vh'],);
         wda_generate_css_rule('.wda-hero',            
            ['style' => 'margin-bottom','setting' => 'wda_hero_bottom_margin','prefix'  => '','postfix' => '%'],);  
            
         wda_generate_css_rule('.wda-hero',            
         ['style' => 'align-items','setting' => 'wda_hero_v_align','prefix'  => '','postfix' => ''],);

         
         // Cover Block 
         wda_generate_css_rule('.wda-cover',
            ['style' => 'width','setting' => 'wda_cover_x_width','prefix'  => '','postfix' => '%'],);
         wda_generate_css_rule('.wda-cover',
            ['style' => 'margin-top','setting' => 'wda_cover_y_margins','prefix'  => '','postfix' => 'vh'],
            ['style' => 'margin-bottom','setting' => 'wda_cover_y_margins','prefix'  => '','postfix' => 'vh']);
      ?>
   }
   <?php
}