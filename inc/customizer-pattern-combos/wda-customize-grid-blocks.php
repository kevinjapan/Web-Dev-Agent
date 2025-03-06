<?php

// wda 'customize_register' Grid Blocks
// The ‘customize_register‘ action hook is used to customize and manipulate the Theme Customization admin screen.


function wda_customize_register_grid_blocks($wp_customize) {


   // Grid Blocks
   // ------------------------------------------------

   $wp_customize->add_setting(
      'wda_grid_x_margins',
      array('default'    => '0', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(new CompactNumberCustomizerControl($wp_customize,
      'wda_grid_x_margins', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_grid_patterns',
            'label' => __( '','wda'),
            'settings'   => 'wda_grid_x_margins', 
            'description' => __( '% horizontal margin','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 60px;', 'step'	=> 1 )) 
   ));

   $wp_customize->add_setting(
      'wda_grid_y_margins',
      array('default'    => '0', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(new CompactNumberCustomizerControl($wp_customize,
      'wda_grid_y_margins', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_grid_patterns',
            'label' => __( '','wda'),
            'settings'   => 'wda_grid_y_margins', 
            'description' => __( '% vertical margin','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 60px;', 'step'	=> 1 )) 
   ));

   $wp_customize->add_setting(
      'wda_grid_gap',
      array('default'    => '0', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(new CompactNumberCustomizerControl($wp_customize,
      'wda_grid_gap', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_grid_patterns',
            'label' => __( '','wda'),
            'settings'   => 'wda_grid_gap', 
            'description' => __( 'element spacing','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 5, 'style' => 'width: 60px;', 'step'	=> .5 )) 
   ));

   $wp_customize->add_setting(
      'wda_grid_template_cols',
      array('default'    => '0', 
         'type'       => 'theme_mod',
         'capability' => 'edit_theme_options',
         'transport'  => 'postMessage',
         'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(new CompactNumberCustomizerControl($wp_customize,
      'wda_grid_template_cols', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_grid_patterns',
            'label' => __( '','wda'),
            'settings'   => 'wda_grid_template_cols', 
            'description' => __( 'number of columns','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 9, 'style' => 'width: 60px;', 'step'	=> 1 )) 
   ));

   

   // Grid Card Blocks
   // ------------------------------------------------

   $wp_customize->add_setting(
      'wda_grid_cards_x_margins',
      array('default'    => '0', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(new CompactNumberCustomizerControl($wp_customize,
      'wda_grid_cards_x_margins', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_grid_cards_patterns',
            'label' => __( '','wda'),
            'settings'   => 'wda_grid_cards_x_margins', 
            'description' => __( '% horizontal margin','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 60px;', 'step'	=> 1 )) 
   ));

   $wp_customize->add_setting(
      'wda_grid_cards_y_margins',
      array('default'    => '0', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(new CompactNumberCustomizerControl($wp_customize,
      'wda_grid_cards_y_margins', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_grid_cards_patterns',
            'label' => __( '','wda'),
            'settings'   => 'wda_grid_cards_y_margins', 
            'description' => __( '% vertical margin','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 60px;', 'step'	=> 1 )) 
   ));

   $wp_customize->add_setting(
      'wda_grid_cards_gap',
      array('default'    => '0', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(new CompactNumberCustomizerControl($wp_customize,
      'wda_grid_cards_gap', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_grid_cards_patterns',
            'label' => __( '','wda'),
            'settings'   => 'wda_grid_cards_gap', 
            'description' => __( 'element spacing','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 5, 'style' => 'width: 60px;', 'step'	=> .5 )) 
   ));

   $wp_customize->add_setting(
      'wda_grid_cards_template_cols',
      array('default'    => '0', 
         'type'       => 'theme_mod',
         'capability' => 'edit_theme_options',
         'transport'  => 'postMessage',
         'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(new CompactNumberCustomizerControl($wp_customize,
      'wda_grid_cards_template_cols', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_grid_cards_patterns',
            'label' => __( '','wda'),
            'settings'   => 'wda_grid_cards_template_cols', 
            'description' => __( 'number of columns','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 9, 'style' => 'width: 60px;', 'step'	=> 1 )) 
   ));


   // Call To Action Button|Link Ctrl
   // attempts to alter styling on-the-fly failed - WP is just too complex btwn front-end / customizer / editor.
   // Solution : we just offer binary choices (checkboxes) on both button and link. User can select either|combine|exclude.

   // has_btn
   $wp_customize->add_setting( 'wda_grid_cards_has_btn',
   array('default'    => true, 
         'type'       => 'theme_mod',
         'capability' => 'edit_theme_options',
         'transport'  => 'postMessage',
         'sanitize_callback' => 'wda_sanitize_checkbox') 
   );
   $wp_customize->add_control(new CompactCheckBoxCustomizerControl($wp_customize,
      'wda_grid_cards_has_btn', 
      array('type' => 'checkbox',
            'priority' => 10,
            'section' => 'wda_grid_cards_patterns',
            'label' => esc_html__( '','wda'),
            'settings'   => 'wda_grid_cards_has_btn', 
            'input_attrs' => array( 'style' => 'width:100%;' ),
            'description' => esc_html__('display button','wda' ))
   ));

   // has_link
   $wp_customize->add_setting( 
      'wda_grid_cards_has_link',
      array('default'    => true, 
         'type'       => 'theme_mod',
         'capability' => 'edit_theme_options',
         'transport'  => 'postMessage',
         'sanitize_callback' => 'wda_sanitize_checkbox') 
   );
   $wp_customize->add_control(new CompactCheckBoxCustomizerControl($wp_customize,
      'wda_grid_cards_has_link', 
      array('type' => 'checkbox',
            'priority' => 10,
            'section' => 'wda_grid_cards_patterns',
            'label' => esc_html__( '','wda'),
            'settings'   => 'wda_grid_cards_has_link', 
            'input_attrs' => array( 'style' => 'width:100%;' ),
            'description' => esc_html__('display link','wda' ))
   ));

}

function wda_customize_register_grid_blocks_styles() {
   
    
   // Grid Blocks
   // ------------------------------------------

   wda_start_css_block('Grid Blocks');

   wda_generate_css_rule(
      '.wda-grid',
      [],
      ['style' => 'margin-top','setting' => 'wda_grid_y_margins','prefix'  => '','postfix' => 'vh'],
      ['style' => 'margin-bottom','setting' => 'wda_grid_y_margins','prefix'  => '','postfix' => 'vh']);

   wda_generate_css_rule(
      '.wda-grid > div, .wda-grid:not(:has(div))',
      [],
      ['style' => 'grid-template-columns','setting' => 'wda_grid_template_cols','prefix'  => 'repeat(','postfix' => ',minmax(100px,1fr))']);




   wda_start_media_query("screen","(min-width: " . wda_get_md_breakpoint() . ")");

      wda_generate_css_rule(
         '.wda-grid',
         ['indent' => 'true'],
         ['style' => 'margin-left','setting' => 'wda_grid_x_margins','prefix'  => '','postfix' => 'vw'],
         ['style' => 'margin-right','setting' => 'wda_grid_x_margins','prefix'  => '','postfix' => 'vw']);
      
      wda_generate_css_rule(
         '.wda-grid > div, .wda-grid:not(:has(div))',
         ['indent' => 'true'],
         ['style' => 'gap','setting' => 'wda_grid_gap','prefix'  => '','postfix' => 'rem']);
         
     
    wda_end_media_query();



   // Grid Cards Blocks
   // ------------------------------------------

   wda_start_css_block('Grid Cards Blocks');
   
   // we increase specificity to ensure this rule is selected over WP classes and avoid using !important so as not to override web-customize.js binding in Customizer
   wda_generate_css_rule(
      'div.wp-block-group.wda_grid_cards.is-layout-grid',
      [],
      ['style' => 'grid-template-columns','setting' => 'wda_grid_cards_template_cols','prefix'  => 'repeat(','postfix' => ',minmax(100px,1fr))']);

   wda_generate_css_rule(
      '.wda_grid_cards',
      [],
      ['style' => 'margin-top','setting' => 'wda_grid_cards_y_margins','prefix'  => '','postfix' => 'vw'],
      ['style' => 'margin-bottom','setting' => 'wda_grid_cards_y_margins','prefix'  => '','postfix' => 'vw']);

      

   if(!get_theme_mod('wda_grid_cards_has_link')) {
      wda_inject_css(
         '.wda_grid_cards_links',
         [],
         ['style' => 'display','value' => 'none' ,'prefix'  => '','postfix' => '']
      );
   }
   
   if(!get_theme_mod('wda_grid_cards_has_btn')) {
      wda_inject_css(
         'div.wp-block-buttons.wda_grid_cards_btns',
         [],
         ['style' => 'display','value' => 'none' ,'prefix'  => '','postfix' => '']
      );
   }


   wda_start_media_query("screen","(min-width: " . wda_get_md_breakpoint() . ")");
   
   wda_generate_css_rule(
      '.wda_grid_cards',
      ['indent' => 'true'],
      ['style' => 'margin-left','setting' => 'wda_grid_cards_x_margins','prefix'  => '','postfix' => 'vw'],
      ['style' => 'margin-right','setting' => 'wda_grid_cards_x_margins','prefix'  => '','postfix' => 'vw']);

   wda_generate_css_rule(
      '.wda_grid_cards',
      ['indent' => 'true'],
      ['style' => 'gap','setting' => 'wda_grid_cards_gap','prefix'  => '','postfix' => 'rem']);

   wda_end_media_query();



}
