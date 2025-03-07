<?php

// Register Theme Customizer Settings and Controls
//
function wda_customize_theme_footer($wp_customize) {

   $wp_customize->add_setting(
      'wda_footer',
      array('default'    => 'Copyright © ...', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'sanitize_text_field') 
   );
   $wp_customize->add_control(
      'wda_footer', 
      array('type' => 'text',
            'priority' => 10,
            'section' =>
            'wda_footer',
            'settings'   =>
            'wda_footer', 
            'description' => esc_html__('The copyright notice with year of first publication','wda' ),
            'input_attrs' => array('style' => 'width: 96%;')) 
   );

   
   $wp_customize->add_setting(
      'wda_footer_gap',
      array('default'    => '0', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(new CompactNumberCustomizerControl($wp_customize,
      'wda_footer_gap', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_footer',
            'label' => __('','wda'),
            'settings'   => 'wda_footer_gap', 
            'description' => __('element spacing','wda'),
            'input_attrs' => array('min' => 0, 'max' => 5, 'style' => 'width: 60px;', 'step'	=> .5 )) 
   ));

   $wp_customize->add_setting(
      'wda_footer_template_cols',
      array('default'    => '0', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(new CompactNumberCustomizerControl($wp_customize,
      'wda_footer_template_cols', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_footer',
            'label' => __( '','wda'),
            'settings'   => 'wda_footer_template_cols', 
            'description' => __( 'number of columns','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 5, 'style' => 'width: 60px;', 'step' => 1 )) 
   )); 
}



// Output Custom Block Pattern CSS to frontend (utilising Block Customizer Settings and Controls above)
//
function wda_customize_theme_footer_styles() {

   wda_start_css_block('Footer');

   wda_generate_css_rule(
      '.wda_footer > .wda_footer_content',
      [],
      ['style' => 'grid-template-columns','setting' => 'wda_footer_template_cols','prefix'  => 'repeat(','postfix' => ',minmax(100px,1fr))']);



   wda_start_media_query("screen","(min-width: " . wda_get_md_breakpoint() . ")");

   wda_generate_css_rule(
      '.wda_footer > .wda_footer_content',
      ['indent' => 'true'],
      ['style' => 'gap','setting' => 'wda_footer_gap','prefix'  => '','postfix' => 'rem']);

   wda_end_media_query();

}

