<?php

// paired w/ wda-customize.js for live updates in Customizer

// to do : comment here - where/how are these put out to front-end?

function wda_customize_grid_block($wp_customize) {

   // X-margins
   $wp_customize->add_setting(
      'wda_grid_x_margins',
      array('default'    => '0', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(
      'wda_grid_x_margins', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_grid_patterns',
            'label' => __( '','wda'),
            'settings'   => 'wda_grid_x_margins', 
            'description' => __( '% margin either side of Grids.','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 60px;', 'step'	=> 1 )) 
   );

   // Y-margins
   $wp_customize->add_setting(
      'wda_grid_y_margins',
      array('default'    => '0', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(
      'wda_grid_y_margins', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_grid_patterns',
            'label' => __( '','wda'),
            'settings'   => 'wda_grid_y_margins', 
            'description' => __( '% margin above and below Grids.','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 60px;', 'step'	=> 1 )) 
   );
   

   // Grid Gap
   $wp_customize->add_setting(
      'wda_grid_gap',
      array('default'    => '0', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(
      'wda_grid_gap', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_grid_patterns',
            'label' => __( '','wda'),
            'settings'   => 'wda_grid_gap', 
            'description' => __( 'rem gap between Grid elements.','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 5, 'style' => 'width: 60px;', 'step'	=> .5 )) 
   );

   // Grid Template Columns
   $wp_customize->add_setting(
      'wda_grid_template_cols',
   array('default'    => '0', 
         'type'       => 'theme_mod',
         'capability' => 'edit_theme_options',
         'transport'  => 'postMessage',
         'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(
      'wda_grid_template_cols', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_grid_patterns',
            'label' => __( '','wda'),
            'settings'   => 'wda_grid_template_cols', 
            'description' => __( 'number of Grid columns.','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 9, 'style' => 'width: 60px;', 'step'	=> 1 )) 
   );

}

function wda_customize_grid_block_styles() {

   //
   // wda-grid
   // to do : review : we likely are generating way too many '@media screen..'s in page source?
   // to do : review : 'vh'/'vw' for margins?
   ?>
   @media screen and (min-width: 768px) { 
      <?php 

      // container rules
      wda_generate_css_rule('.wda-grid',
      ['style' => 'margin-left','setting' => 'wda_grid_x_margins','prefix'  => '','postfix' => 'vw'],
      ['style' => 'margin-right','setting' => 'wda_grid_x_margins','prefix'  => '','postfix' => 'vw']);
      
      wda_generate_css_rule('.wda-grid',
      ['style' => 'margin-top','setting' => 'wda_grid_y_margins','prefix'  => '','postfix' => 'vh'],
      ['style' => 'margin-bottom','setting' => 'wda_grid_y_margins','prefix'  => '','postfix' => 'vh']);


      // grid rules
      wda_generate_css_rule('.wda-grid > div, .wda-grid:not(:has(div))',
      ['style' => 'gap','setting' => 'wda_grid_gap','prefix'  => '','postfix' => 'rem']);

      // wda_grid_template_cols
      wda_generate_css_rule('.wda-grid > div, .wda-grid:not(:has(div))',
      ['style' => 'grid-template-columns','setting' => 'wda_grid_template_cols','prefix'  => 'repeat(','postfix' => ',minmax(100px,1fr))']);

      ?>

   }
   <?php
}
