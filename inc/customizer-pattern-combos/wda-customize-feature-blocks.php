<?php

// wda 'customize_register' Feature Blocks
// The ‘customize_register‘ action hook is used to customize and manipulate the Theme Customization admin screen.


// Feature Blocks [multi-columns]

function wda_customize_register_feature_blocks($wp_customize) {

   $wp_customize->add_control(new LabelCustomizerControl($wp_customize,
      'wda_features_padding_label', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_features_patterns',
            'label' => __( 'HERE IS MY OWN LABEL','wda'))
   ));
   $wp_customize->add_setting(
      'wda_features_x_padding',
      array('default'    => '0', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(new CompactNumberCustomizerControl($wp_customize,
      'wda_features_x_padding', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_features_patterns',
            'label' => __( 'Padding','wda'),
            'settings'   => 'wda_features_x_padding', 
            'description' => __( '% horizontal padding','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 60px;', 'step'	=> 5 )) 
   ));

   $wp_customize->add_setting(
      'wda_features_y_padding',
      array('default'    => '0', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range') 
   );
   $wp_customize->add_control(new CompactNumberCustomizerControl($wp_customize,
      'wda_features_y_padding', 
      array('type' => 'number',
            'priority' => 10,
            'section' => 'wda_features_patterns',
            'label' => __( '','wda'),
            'settings'   => 'wda_features_y_padding', 
            'description' => __( '% vertical padding','wda'),
            'input_attrs' => array( 'min' => 0, 'max' => 25, 'style' => 'width: 60px;', 'step'	=> 5 )) 
   ));

   // depr : 'wda_features_img_width' : changing image size via setting is not compatible w/ Page Editor, 
   //        so we offer as different separate templates instead.

   $wp_customize->add_setting(
      'wda_features_cta_type',
      array('default'    => 'Button', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_select',) 
   );

   $wp_customize->add_control(new CompactSelectCustomizerControl($wp_customize,
      'wda_features_cta_type', 
      array('type' => 'select',
            'priority' => 12,
            'section' => 'wda_features_patterns',
            'settings'   => 'wda_features_cta_type', 
            'description' => __( 'link type','wda'),
            'choices' => array(
               'Button' => 'Button',
               'Link' => 'Link',
            ))
   ));

}


function wda_customize_register_feature_blocks_styles() {
      
      wda_generate_css_rule('.wp-block-media-text.wda-features,.wp-block-media-text.wda-features.has-background,.wp-block-columns.wda-features,.wp-block-columns.wda-features.has-background',
      ['style' => 'padding-top','setting' => 'wda_features_y_padding','prefix'  => '','postfix' => 'vh'],
      ['style' => 'padding-bottom','setting' => 'wda_features_y_padding','prefix'  => '','postfix' => 'vh']);
      wda_generate_css_rule('.wp-block-media-text.wda-features.wda-single-feature-columns,.wp-block-media-text.wda-features.has-background,.wp-block-columns.wda-features,.wp-block-columns.wda-features.has-background',
         ['style' => 'margin-top','setting' => 'wda_column_y_margins','prefix'  => '','postfix' => 'vh !important'],
         ['style' => 'margin-bottom','setting' => 'wda_column_y_margins','prefix'  => '','postfix' => 'vh !important']);
      ?>
      @media screen and (min-width: 768px) { 
         <?php
            wda_generate_css_rule(
               '.wp-block-media-text.wda-features,
               .wp-block-media-text.wda-columfeaturesns.has-background,
               .wp-block-columns.wda-features,
               .wp-block-columns.wda-features.has-background',
               ['style' => 'padding-left','setting' => 'wda_features_x_padding','prefix'  => '','postfix' => '%'],
               ['style' => 'padding-right','setting' => 'wda_features_x_padding','prefix'  => '','postfix' => '%']
            );

            wda_generate_css_rule('.wda-cover-columns, .wda-cover-columns.has-background',
               ['style' => 'padding-left','setting' => 'wda_cover_column_x_padding','prefix'  => '','postfix' => '%'],
               ['style' => 'padding-right','setting' => 'wda_cover_column_x_padding','prefix'  => '','postfix' => '%']
            );

            if(get_theme_mod('wda_features_cta_type') === "Button") {
               wda_inject_css(
                  '.wda_feature_btns',
                  ['style' => 'background','value' => 'unset' ,'prefix'  => '','postfix' => '']
               );
            }
            else {
               wda_inject_css(
                  '.wda_feature_btns > div > a',
                  ['style' => 'background','value' => 'transparent' ,'prefix'  => '','postfix' => ''],
                  ['style' => 'color','value' => 'var(--wda_btn_bg)' ,'prefix'  => '','postfix' => ''],
                  ['style' => 'text-align','value' => 'left' ,'prefix'  => '','postfix' => ''],
                  ['style' => 'padding','value' => '.25rem' ,'prefix'  => '','postfix' => ''],
                  ['style' => 'padding-left','value' => '.5rem' ,'prefix'  => '','postfix' => ''],
                  ['style' => 'font-size','value' => '1rem' ,'prefix'  => '','postfix' => ''],
                  ['style' => 'text-decoration','value' => 'underline' ,'prefix'  => '','postfix' => '']
               );
               wda_inject_css(
                  '.wda_feature_btns > div > a:hover',
                  ['style' => 'background','value' => 'transparent' ,'prefix'  => '','postfix' => ''],
                  ['style' => 'color','value' => 'var(--link_text_color_hover)' ,'prefix'  => '','postfix' => '']
               );
            }
         ?>
      }
   <?php
}


