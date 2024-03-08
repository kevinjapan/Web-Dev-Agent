<?php

   
function wda_customize_text_block($wp_customize) {

   //
   // text block pattern   
   //  
   $wp_customize->add_setting( 'wda_text_x_padding',
      array('default'    => '0', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control( 'wda_text_x_padding', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_text_patterns',
            'label' => __( 'Simple Text','the-educator'),
            'settings'   => 'wda_text_x_padding', 
            'description' => __( '% horizontal padding for Texts.','the-educator'),
            'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 5 ))
   );

   $wp_customize->add_setting( 'wda_text_y_margins',
      array('default'    => '0', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control( 'wda_text_y_margins', 
      array('type' => 'number',
            'priority' => 11,
            'section' => 'wda_text_patterns',
            'label' => __( '','the-educator'),
            'settings'   => 'wda_text_y_margins', 
            'description' => __( '% vertical spacing for Texts.','the-educator'),
            'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 80px;', 'step'	=> 5 )) 
   );

   $wp_customize->add_setting('wda_text_text_align',
      array('default'    => 'left', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_radio_buttons',) 
   );
   // WordPress forces 'Center' -> 'Centre' if 'UK English' set!
   $wp_customize->add_control('wda_text_text_align', 
      array('type' => 'number',
            'priority' => 12,
            'type' => 'radio',
            'section' => 'wda_text_patterns',
            'label' => __( '','the-educator'),
            'settings'   => 'wda_text_text_align', 
            'description' => __( 'Set text alignment for Texts.','the-educator'),
            'choices' => array(
               'left' => __( 'Left' ),
               'center' => __( 'Center' ),
               'right' => __( 'Right' )
            )
      )
   );

}



function wda_customize_text_block_styles() {

   
   //
   // te-simple-text
   // 

   wda_generate_css_rule('.wp-block-group.wda-text.wda-simple-text',
      ['style' => 'margin-top','setting' => 'wda_text_y_margins','prefix'  => '','postfix' => 'vh'],
      ['style' => 'margin-bottom','setting' => 'wda_text_y_margins','prefix'  => '','postfix' => 'vh']); 
   wda_generate_css_rule('.wp-block-group.wda-text.wda-simple-text',
      ['style' => 'text-align','setting' => 'wda_text_text_align','prefix'  => '','postfix' => '']); 
   ?>

   @media screen and (min-width: 768px) { 
      <?php 
      wda_generate_css_rule('.wda-text, .wda-text.has-background ',
         ['style' => 'padding-left','setting' => 'wda_text_x_padding','prefix'  => '','postfix' => '%'],
         ['style' => 'padding-right','setting' => 'wda_text_x_padding','prefix'  => '','postfix' => '%']);
      ?>
   }
   <?php

}

