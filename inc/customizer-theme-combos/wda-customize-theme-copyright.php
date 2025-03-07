<?php

// Register Theme Customizer Settings and Controls
//
function wda_customize_theme_copyright($wp_customize) {

   $wp_customize->add_setting(
      'wda_copyright',
      array('default'    => 'Copyright © ...', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'sanitize_text_field') 
   );
   $wp_customize->add_control(
      'wda_copyright', 
      array('type' => 'text',
            'priority' => 10,
            'section'  => 'wda_copyright',
            'settings' => 'wda_copyright', 
            'description' => esc_html__('The copyright notice with year of first publication','wda' ),
            'input_attrs' => array('style' => 'width: 96%;')) 
   );
   $wp_customize->add_setting(
      'wda_copyright_auto_complete',
      array('default'    => false, 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_checkbox') 
   );
   $wp_customize->add_control(
      'wda_copyright_auto_complete', 
      array('type' => 'checkbox',
            'priority' => 10,
            'section'  => 'wda_copyright',
            'label'    => esc_html__('Always auto-complete with current year','wda'),
            'settings' => 'wda_copyright_auto_complete', 
            'description' => esc_html__('Expands copyright notice dates from year of first publication to current year','wda' ),
            'input_attrs' => array('style' => 'width: 96%;')) 
   );  
}



// Output Custom Block Pattern CSS to frontend (utilising Block Customizer Settings and Controls above)
//
function wda_customize_theme_copyright_styles() {


}

