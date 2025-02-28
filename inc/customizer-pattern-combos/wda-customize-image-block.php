<?php

// wda 'customize_register' Image Blocks
// The ‘customize_register‘ action hook is used to customize and manipulate the Theme Customization admin screen.



function wda_customize_register_image_blocks($wp_customize) {

   // 
   // image block pattern : 
   // wrap wp-block-image to enable our margin and padding applied across all te-image blocks 
   //      
   $wp_customize->add_setting(
      'wda_image_x_padding',
      array('default'    => '0', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(new CompactNumberCustomizerControl($wp_customize,
      'wda_image_x_padding', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_image_patterns',
            'label' => __( 'Images','wda'),
            'settings'   => 'wda_image_x_padding', 
            'description' => __( '% horizontal padding','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 60px;', 'step'	=> 5 )) 
   ));

   $wp_customize->add_setting(
      'wda_image_y_margins',
      array('default'    => '0', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(new CompactNumberCustomizerControl($wp_customize,
      'wda_image_y_margins', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_image_patterns',
            'label' => __( '','wda'),
            'settings'   => 'wda_image_y_margins', 
            'description' => __( '% vertical margins','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 60px;', 'step'	=> 5 )) 
   ));



}



function wda_customize_register_image_blocks_styles() {
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



