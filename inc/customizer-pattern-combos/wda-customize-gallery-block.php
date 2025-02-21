<?php

   
function wda_customize_gallery_block($wp_customize) {

   //
   // te-gallery block pattern : 
   // wrap wp-block-image to enable our margin and padding applied across all gallery blocks 
   //
   $wp_customize->add_setting(
      'wda_gallery_x_padding',
      array('default'    => '0', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(
      'wda_gallery_x_padding', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_image_patterns',
            'label' => __( 'Galleries','wda'),
            'settings'   => 'wda_gallery_x_padding', 
            'description' => __( '% horizontal padding for Galleries.','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 60px;', 'step'	=> 5 )) 
   );

   $wp_customize->add_setting(
      'wda_gallery_y_margins',
      array('default'    => '0', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(
      'wda_gallery_y_margins', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_image_patterns',
            'label' => __( '','wda'),
            'settings'   => 'wda_gallery_y_margins', 
            'description' => __( '% vertical spacing for Galleries.','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 60px;', 'step'	=> 5 ))
   );


}



function wda_customize_gallery_block_styles() {


   
   //
   // te-gallery
   //
   ?>
   @media screen and (min-width: 768px) { 
      <?php 
      wda_generate_css_rule('.wda-gallery,.wda-gallery.has-background',
         ['style' => 'padding-left','setting' => 'wda_gallery_x_padding','prefix'  => '','postfix' => '%'],
         ['style' => 'padding-right','setting' => 'wda_gallery_x_padding','prefix'  => '','postfix' => '%']);
      wda_generate_css_rule('.wda-gallery,.wda-gallery.has-background',
         ['style' => 'margin-top','setting' => 'wda_gallery_y_margins','prefix'  => '','postfix' => 'vh'],
         ['style' => 'margin-bottom','setting' => 'wda_gallery_y_margins','prefix'  => '','postfix' => 'vh']);
      ?>
   }
   <?php

}

