<?php

function wda_customize_image_block($wp_customize) {

   // 
   // te-image block pattern : 
   // wrap wp-block-image to enable our margin and padding applied across all te-image blocks 
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
            'description' => __( '% horizontal padding for Images.','wda'),
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
            'description' => __( '% vertical spacing for Images.','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 5 )) 
   );



}



function wda_customize_image_block_styles() {

   //
   // te-image
   //
   ?>
   @media screen and (min-width: 768px) { 
      <?php 
      wda_generate_css_rule('article .entry-content figure.wp-block-image.wda-image img',
         ['style' => 'padding-left','setting' => 'wda_image_x_padding','prefix'  => '','postfix' => '%'],
         ['style' => 'padding-right','setting' => 'wda_image_x_padding','prefix'  => '','postfix' => '%']);
      wda_generate_css_rule('figure.wp-block-image.wda-image',
         ['style' => 'padding-left','setting' => 'wda_image_x_padding','prefix'  => '','postfix' => '%'],
         ['style' => 'padding-right','setting' => 'wda_image_x_padding','prefix'  => '','postfix' => '%']);
      wda_generate_css_rule('article .entry-content figure.wp-block-image.wda-image img,article .entry-content figure.wp-block-image.wda-image.has-background img',
         ['style' => 'margin-top','setting' => 'wda_image_y_margins','prefix'  => '','postfix' => 'vh'],
         ['style' => 'margin-bottom','setting' => 'wda_image_y_margins','prefix'  => '','postfix' => 'vh']);
      ?>
   }
   <?php
   
}



