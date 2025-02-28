<?php

// wda 'customize_register' Cover Blocks
// The ‘customize_register‘ action hook is used to customize and manipulate the Theme Customization admin screen.


function wda_customize_register_cover_blocks($wp_customize) {

   
   // Hero Cover Block Patterns
   $wp_customize->add_setting(
      'wda_hero_v_align',
      array('default'    => 'center', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_select') 
   );
   $wp_customize->add_control(new CompactSelectCustomizerControl($wp_customize,
      'wda_hero_v_align', 
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
   ));
   $wp_customize->add_setting(
      'wda_hero_x_height',
      array('default'    => '100', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );

   $wp_customize->add_control(new CompactNumberCustomizerControl($wp_customize,
      'wda_hero_x_height', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_cover_patterns',
            'label' => __( 'Hero Cover Blocks','wda'), 
            'description' => __( '% height','wda'),
            'input_attrs' => array( 'min' => 50, 'max' => 100, 'style' => 'width: 60px;', 'step'	=> 5 )) 
   ));
   $wp_customize->add_setting(
      'wda_hero_bottom_margin',
      array('default'    => '0', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(new CompactNumberCustomizerControl($wp_customize,
      'wda_hero_bottom_margin', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_cover_patterns',
            'label' => __( '','wda'),
            'description' => __( '% margin below','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 60px;', 'step'	=> 5 )) 
   ));



   // 
   // cover block patterns
   //
   $wp_customize->add_setting(
      'wda_cover_x_width',
      array('default'    => '100', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(new CompactNumberCustomizerControl($wp_customize,
      'wda_cover_x_width', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_cover_patterns',
            'label' => __( 'Covers','wda'),
            'settings'   => 'wda_cover_x_width', 
            'description' => __( '% width','wda'),
            'input_attrs' => array( 'min' => 60, 'max' => 100, 'style' => 'width: 60px;', 'step'	=> 5 )) 
   ));

   $wp_customize->add_setting(
      'wda_cover_y_margins',
      array('default'    => '0', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(new CompactNumberCustomizerControl($wp_customize,
      'wda_cover_y_margins', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_cover_patterns',
            'label' => __( '','wda'),
            'settings'   => 'wda_cover_y_margins', 
            'description' => __( '% vertical margin','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 60px;', 'step'	=> 1 )) 
   ));
}

function wda_customize_register_cover_blocks_styles() {

   // to do : we were generating way too many '@media screen..'s in page source : on-going
   // we removed all for now and will only add when we have specific responsive requirement
   // for individual CSS rules.
   // solution: check if rule has been set - only include '@media..' if setting a rule:
   // eg  if(get_theme_mod($rule['wda_cover_x_width'])) {..
   //          @media screen and (max-width: 768px) {..

   ?>
<?php 
   // Hero Block
   wda_generate_css_rule('.wda-hero',            
      ['style' => 'height','setting' => 'wda_hero_x_height','prefix'  => '','postfix' => 'vh'],);
   wda_generate_css_rule('.wda-hero',            
      ['style' => 'margin-bottom','setting' => 'wda_hero_bottom_margin','prefix'  => '','postfix' => '%'],);  
   wda_generate_css_rule('.wda-hero',            
   ['style' => 'align-items','setting' => 'wda_hero_v_align','prefix'  => '','postfix' => ''],);

   // Cover Block    ?>
@media screen and (min-width: 768px) { 
<?php
      wda_generate_css_rule('.wda-cover, .wda-cover-rows',
         ['style' => 'width','setting' => 'wda_cover_x_width','prefix'  => '','postfix' => '%'],);
?>
}
<?php
   wda_generate_css_rule('.wda-cover',
      ['style' => 'margin-top','setting' => 'wda_cover_y_margins','prefix'  => '','postfix' => 'vh'],
      ['style' => 'margin-bottom','setting' => 'wda_cover_y_margins','prefix'  => '','postfix' => 'vh']);

}