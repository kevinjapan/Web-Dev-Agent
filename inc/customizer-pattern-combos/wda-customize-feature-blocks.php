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

   
   // 'wda_features_img_width' : depr
   // changing image size via setting is not compatible w/ Page Editor, so we offer as different separate templates instead.


   // Call To Action Button|Link Ctrl
   // attempts to alter styling on-the-fly failed - WP is just too complex btwn front-end / customizer / editor.
   // Solution : we just offer binary choices (checkboxes) on both button and link. User can select either|combine|exclude.

   // has_btn
   $wp_customize->add_setting(
      'wda_features_has_btn',
      array('default'    => true, 
         'type'       => 'theme_mod',
         'capability' => 'edit_theme_options',
         'transport'  => 'postMessage',
         'sanitize_callback' => 'wda_sanitize_checkbox') 
   );
   $wp_customize->add_control(new CompactCheckBoxCustomizerControl($wp_customize,
      'wda_features_has_btn', 
      array('type' => 'checkbox',
            'priority' => 10,
            'section' => 'wda_features_patterns',
            'label' => esc_html__( '','wda'),
            'settings'   => 'wda_features_has_btn', 
            'input_attrs' => array( 'style' => 'width:100%;' ),
            'description' => esc_html__('display button','wda' ))
   ));

   // has_link
   $wp_customize->add_setting( 
      'wda_features_has_link',
      array('default'    => true, 
         'type'       => 'theme_mod',
         'capability' => 'edit_theme_options',
         'transport'  => 'postMessage',
         'sanitize_callback' => 'wda_sanitize_checkbox') 
   );
   $wp_customize->add_control(new CompactCheckBoxCustomizerControl($wp_customize,
      'wda_features_has_link', 
      array('type' => 'checkbox',
            'priority' => 10,
            'section' => 'wda_features_patterns',
            'label' => esc_html__( '','wda'),
            'settings'   => 'wda_features_has_link', 
            'input_attrs' => array( 'style' => 'width:100%;' ),
            'description' => esc_html__('display link','wda' ))
   ));

}

function wda_customize_register_feature_blocks_styles() {

   wda_start_css_block('Feature Blocks');

   wda_generate_css_rule(
      '.wp-block-media-text.wda-features,.wp-block-media-text.wda-features.has-background',
      [],
      ['style' => 'padding-top','setting' => 'wda_features_y_padding','prefix'  => '','postfix' => 'vh'],
      ['style' => 'padding-bottom','setting' => 'wda_features_y_padding','prefix'  => '','postfix' => 'vh']);
   wda_generate_css_rule(
      '.wp-block-columns.wda-features,.wp-block-columns.wda-features.has-background',
      [],
      ['style' => 'padding-top','setting' => 'wda_features_y_padding','prefix'  => '','postfix' => 'vh'],
      ['style' => 'padding-bottom','setting' => 'wda_features_y_padding','prefix'  => '','postfix' => 'vh']);
   wda_generate_css_rule(
      '.wp-block-media-text.wda-features.wda-single-feature-columns,.wp-block-media-text.wda-features.has-background,.wp-block-columns.wda-features,.wp-block-columns.wda-features.has-background',
      [],
      ['style' => 'margin-top','setting' => 'wda_column_y_margins','prefix'  => '','postfix' => 'vh !important'],
      ['style' => 'margin-bottom','setting' => 'wda_column_y_margins','prefix'  => '','postfix' => 'vh !important']);

   wda_generate_css_rule(
      '.wda-cover-columns, .wda-cover-columns.has-background',
      [],
      ['style' => 'padding-left','setting' => 'wda_cover_column_x_padding','prefix'  => '','postfix' => '%'],
      ['style' => 'padding-right','setting' => 'wda_cover_column_x_padding','prefix'  => '','postfix' => '%']
   );

   
   if(!get_theme_mod('wda_features_has_link')) {
      wda_inject_css(
         '.wda_features_links',
         [],
         ['style' => 'display','value' => 'none' ,'prefix'  => '','postfix' => '']
      );
   }
   
   if(!get_theme_mod('wda_features_has_btn')) {
      wda_inject_css(
         'div.wp-block-buttons.wda_features_btns',
         [],
         ['style' => 'display','value' => 'none' ,'prefix'  => '','postfix' => '']
      );
   }


   wda_start_media_query("screen","(min-width: " . wda_get_md_breakpoint() . ")");

      wda_generate_css_rule(
         '.wp-block-media-text.wda-features,.wp-block-media-text.wda-features.has-background',
         ['indent' => 'true'],
         ['style' => 'padding-left','setting' => 'wda_features_x_padding','prefix'  => '','postfix' => '%'],
         ['style' => 'padding-right','setting' => 'wda_features_x_padding','prefix'  => '','postfix' => '%']
      );
      wda_generate_css_rule(
         '.wp-block-columns.wda-features,.wp-block-columns.wda-features.has-background',
         ['indent' => 'true'],
         ['style' => 'padding-left','setting' => 'wda_features_x_padding','prefix'  => '','postfix' => '%'],
         ['style' => 'padding-right','setting' => 'wda_features_x_padding','prefix'  => '','postfix' => '%']
      );
      
   wda_end_media_query();
?>
<?php
}


