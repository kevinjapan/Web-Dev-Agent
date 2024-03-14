<?php

// Register Theme Customizer Settings and Controls
//
function wda_customize_theme_typography($wp_customize) {

   // Custom Fonts
   //

   /* Title & Tagline Custom Fonts */
   $wp_customize->add_setting( 'wda_title_fonts',
      array('default'    => 'Roboto', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'sanitize_text_field') 
   );
   $wp_customize->add_control( 'wda_title_fonts', 
      array(
         'type' => 'text',
         'priority' => 10,
         'section' => 'wda_typography',
         'label' => esc_html__( 'Site Title','wda'),
         'settings'   => 'wda_title_fonts', 
         'input_attrs' => array('style' => 'width: 50%;')) 
   );
   $wp_customize->add_setting( 'wda_tagline_fonts',
      array('default'    => 'Festive', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'sanitize_text_field') 
   );
   $wp_customize->add_control( 'wda_tagline_fonts', 
      array(
         'type' => 'text',
         'priority' => 10,
         'section' => 'wda_typography',
         'label' => esc_html__( 'Site Tagline','wda'),
         'settings'   => 'wda_tagline_fonts',
         'input_attrs' => array('style' => 'width: 50%;'))  
   );
   
   /* Hero Custom Fonts */
   $wp_customize->add_setting( 'wda_hero_fonts',
      array('default'    => 'Century Gothic', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'sanitize_text_field') 
   );
   $wp_customize->add_control( 'wda_hero_fonts', 
      array(
         'type' => 'text',
         'priority' => 10,
         'section' => 'wda_typography',
         'label' => esc_html__( 'Hero Text','wda'),
         'settings'   => 'wda_hero_fonts', 
         'input_attrs' => array('style' => 'width: 50%;')) 
   );
   
   /* Nav Custom Fonts */
   $wp_customize->add_setting( 'wda_nav_fonts',
      array('default'    => 'Courier', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'sanitize_text_field') 
   );
   $wp_customize->add_control( 'wda_nav_fonts', 
      array('type' => 'text',
            'priority' => 10,
            'section' => 'wda_typography',
            'label' => esc_html__( 'Navigation Text','wda'),
            'settings'   => 'wda_nav_fonts', 
            'input_attrs' => array('style' => 'width: 50%;')) 
   );
   
   /* Headings Custom Fonts */
   $wp_customize->add_setting( 'wda_headings_fonts',
      array('default'    => 'Verdana', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'sanitize_text_field') 
   );
   $wp_customize->add_control( 'wda_headings_fonts', 
      array(
         'type' => 'text',
         'priority' => 10,
         'section' => 'wda_typography',
         'label' => esc_html__( 'Headings','wda'),
         'settings'   => 'wda_headings_fonts', 
         'input_attrs' => array('style' => 'width: 50%;')) 
   );

   /* Text Custom Fonts */
   $wp_customize->add_setting( 'wda_body_fonts',
      array('default'    => 'Sans Serif', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'sanitize_text_field') 
   );
   $wp_customize->add_control( 'wda_body_fonts', 
      array('type' => 'text',
            'priority' => 10,
            'section' => 'wda_typography',
            'label' => esc_html__( 'Text','wda'),
            'settings'   => 'wda_body_fonts',
            'input_attrs' => array('style' => 'width: 50%;')) 
   ); 
}


// Output Custom Block Pattern CSS to frontend (utilising Block Customizer Settings and Controls above)
//
function wda_customize_theme_typography_styles() {

   /* custom fonts - ensure order is maintained */
   // $fallback_fonts = ',serif,verdana';  /* fallback system fonts */
   // wda_generate_css_rule('body',
   //    ['style' => 'font-family','setting' => 'wda_body_fonts',  'prefix'  => '',  'postfix' => $fallback_fonts]);
   // wda_generate_css_rule('.evolutiondesuka-navigation',
   //    ['style' => 'font-family','setting' => 'wda_nav_fonts',  'prefix'  => '',  'postfix' => $fallback_fonts]);
   // wda_generate_css_rule('h1:not(.wda_title_heading),h2:not(.wda_title_heading),h3:not(.wda_title_heading),h4:not(.wda_title_heading),h5,h6',
   //    ['style' => 'font-family','setting' => 'wda_headings_fonts',  'prefix'  => '',  'postfix' => $fallback_fonts]);
   // wda_generate_css_rule('.wda_title_heading',
   //    ['style' => 'font-family','setting' => 'wda_tagline_fonts',  'prefix'  => '',  'postfix' => $fallback_fonts]);
   // wda_generate_css_rule('h1.wda_title_heading,h2.wda_title_heading,h3.wda_title_heading',
   //    ['style' => 'font-family','setting' => 'wda_title_fonts',  'prefix'  => '',  'postfix' => $fallback_fonts]);

}

