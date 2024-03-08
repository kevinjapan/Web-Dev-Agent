<?php



function wda_customize_cover_block($wp_customize) {

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
            'label' => __( 'Covers','the-educator'),
            'settings'   => 'wda_cover_x_width', 
            'description' => __( '% width for Covers.','the-educator'),
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
            'label' => __( '','the-educator'),
            'settings'   => 'wda_cover_y_margins', 
            'description' => __( '% above and below Covers.','the-educator'),
            'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 1 )) 
   );
}

function wda_customize_cover_block_styles() {

   //
   // te-cover
   //
   ?>
   @media screen and (min-width: 768px) { 
      <?php 
         // te-cover - md/lg 
         wda_generate_css_rule('.wda-cover',
            ['style' => 'width','setting' => 'wda_cover_x_width','prefix'  => '','postfix' => '%'],);
         wda_generate_css_rule('.wda-cover',
            ['style' => 'margin-top','setting' => 'wda_cover_y_margins','prefix'  => '','postfix' => 'vh'],
            ['style' => 'margin-bottom','setting' => 'wda_cover_y_margins','prefix'  => '','postfix' => 'vh']);
      ?>
   }
   <?php
}