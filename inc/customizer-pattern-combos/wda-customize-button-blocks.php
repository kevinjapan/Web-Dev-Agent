<?php

// wda 'customize_register' Button Blocks
// The ‘customize_register‘ action hook is used to customize and manipulate the Theme Customization admin screen.


// Button Blocks

function wda_customize_register_button_blocks($wp_customize) {

   $wp_customize->add_setting(
      'wda_button_margin',
      array('default'    => '0.5', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );

   // to do : not enforcing min of .5 below
   $wp_customize->add_control(new CompactNumberCustomizerControl($wp_customize,
      'wda_button_margin', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_buttons_patterns',
            'label' => __( 'Spacing','wda'),
            'settings'   => 'wda_button_margin', 
            'description' => __( 'margin','wda'),
            'input_attrs' => array( 'min' => 0.5, 'max' => 5, 'style' => 'width: 60px;', 'step'	=> .25 )) 
   ));

   
   $wp_customize->add_setting(
      'wda_button_padding',
      array('default'    => '0.5', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );

   // to do : not enforcing min of .5 below
   $wp_customize->add_control(new CompactNumberCustomizerControl($wp_customize,
      'wda_button_padding', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_buttons_patterns',
            'label' => __( '','wda'),
            'settings'   => 'wda_button_padding', 
            'description' => __( 'padding','wda'),
            'input_attrs' => array( 'min' => 0.5, 'max' => 5, 'style' => 'width: 60px;', 'step'	=> .25 )) 
   ));

}


function wda_customize_register_button_blocks_styles() {

   wda_start_css_block('Button Blocks');

   // to do : ' wda_button_margin' not working exactly as expected - apply to container (group) ? stretching x-axis unexpectedly
   
   wda_generate_css_rule(
      '.wda_discrete_buttons > .wda_button > a.wp-block-button__link',
      [],
      ['style' => 'margin','setting' => 'wda_button_margin','prefix'  => '','postfix' => 'rem']);
   wda_generate_css_rule(
      '.wda_discrete_buttons > .wda_button > a.wp-block-button__link',
      [],
      ['style' => 'padding','setting' => 'wda_button_padding','prefix'  => '','postfix' => 'rem']);

}