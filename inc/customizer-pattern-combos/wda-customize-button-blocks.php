<?php

// wda 'customize_register' Button Blocks
// The ‘customize_register‘ action hook is used to customize and manipulate the Theme Customization admin screen.


// Button Blocks

function wda_customize_register_button_blocks($wp_customize) {

   $wp_customize->add_setting(
      'wda_button_margin',
      array('default'    => '0', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(new CompactNumberCustomizerControl($wp_customize,
      'wda_button_margin', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_buttons_patterns',
            'label' => __( 'Spacing','wda'),
            'settings'   => 'wda_button_margin', 
            'description' => __( 'margin','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 5, 'style' => 'width: 60px;', 'step'	=> .25 )) 
   ));
   
   $wp_customize->add_setting(
      'wda_button_padding',
      array('default'    => '0', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(new CompactNumberCustomizerControl($wp_customize,
      'wda_button_padding', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_buttons_patterns',
            'label' => __( '','wda'),
            'settings'   => 'wda_button_padding', 
            'description' => __( 'padding','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 5, 'style' => 'width: 60px;', 'step'	=> .25 )) 
   ));

}


function wda_customize_register_button_blocks_styles() {

   wda_start_css_block('Button Blocks');

   wda_generate_css_rule(
      'div.wda_discrete_buttons > div.wp-block-button.wda_button > a.wp-block-button__link.wp-element-button',
      [],
      ['style' => 'margin','setting' => 'wda_button_margin','prefix'  => '','postfix' => 'rem']);

   // we use high specificity to ensure displays correct in Customizer
   wda_generate_css_rule(
      'div.wda_discrete_buttons > div.wp-block-button.wda_button > a.wp-block-button__link.wp-element-button',
      [],
      ['style' => 'padding','setting' => 'wda_button_padding','prefix'  => '','postfix' => 'rem']);

}