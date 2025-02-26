<?php

// Feature Blocks [multi-columns]

function wda_customize_feature_blocks($wp_customize) {

   // future : Add bg color setting to block patterns
   // considerations: 
   // - padding, esp y-padding. 
   // - buttons need eg :hover rules for particular combos. 
   // - using WordPress editor, adding bg colors gets awkward and uncomfortable for 'normal' users. 
   //   (doesn't even update the editor view w/ the background color if using additional css class!)
   // - also te classes are exposed as 'additional css classes' - which means they can be mistakenly
   //   removed too easily. Hence, we don't want to encourage access to this control.
   // - if we tie into customizer, we can restrict or encourage choice from site color palette.
   //   while applying across site w/ single action.

   
   // to do : review - is there an existing way to add a separate label (outside add_setting/add_control) ?
   //         - if so, use and remove this..
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

   // to do : not 'wda_sanitize_number_range' : rollout

   // depr : changing image size via setting is not compatible w/ Page Editor, so we offer as different separate templates instead.
      // $wp_customize->add_setting(
      //    'wda_features_img_width',
      //    array('default'    => '100', 
      //          'type'       => 'theme_mod',
      //          'capability' => 'edit_theme_options',
      //          'transport'  => 'postMessage',
      //          'sanitize_callback' => 'wda_sanitize_number_range') 
      // );
      // $wp_customize->add_control(new CompactSelectCustomizerControl($wp_customize,
      //    'wda_features_img_width', 
      //    array('type' => 'select',
      //          'priority' => 10,
      //          'section' => 'wda_features_patterns',
      //          'label' => __( 'Multi-Feature Blocks only','wda'),
      //          'settings'   => 'wda_features_img_width', 
      //          'description' => __( 'image size','wda'),
      //          'choices' => array(
      //             '100' => 'Cover',
      //             '50' => 'Small',
      //             '20' => 'Icon',
      //          ))
      // ));
   
   $wp_customize->add_setting(
      'wda_features_cta_type',
      array('default'    => 'Button', 
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
            'sanitize_callback' => 'wda_sanitize_number_range',) 
   );
   // $wp_customize->add_control(
   //    'wda_features_cta_type', 
   //    array('type' => 'number',
   //          'priority' => 12,
   //          'type' => 'radio',
   //          'section' => 'wda_features_patterns',
   //          'label' => __( '','wda'),
   //          'settings'   => 'wda_features_cta_type', 
   //          'description' => __( 'Set link type','wda'),
   //          'choices' => array(
   //             'Button' => __( 'Button' ),
   //             'Link' => __( 'Link' )
   //          )
   //    )
   // );
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


function wda_customize_feature_blocks_styles() {

   
      //
      // te-columns  to do : remove/replace refs. to te-..
      //
      wda_generate_css_rule('.wp-block-media-text.wda-features,.wp-block-media-text.wda-features.has-background,.wp-block-columns.wda-features,.wp-block-columns.wda-features.has-background',
      ['style' => 'padding-top','setting' => 'wda_features_y_padding','prefix'  => '','postfix' => 'vh'],
      ['style' => 'padding-bottom','setting' => 'wda_features_y_padding','prefix'  => '','postfix' => 'vh']);
      wda_generate_css_rule('.wp-block-media-text.wda-features.wda-single-feature-columns,.wp-block-media-text.wda-features.has-background,.wp-block-columns.wda-features,.wp-block-columns.wda-features.has-background',
         ['style' => 'margin-top','setting' => 'wda_column_y_margins','prefix'  => '','postfix' => 'vh !important'],
         ['style' => 'margin-bottom','setting' => 'wda_column_y_margins','prefix'  => '','postfix' => 'vh !important']);
      ?>

      <?php
      // future : refactor : we want to prevent empty media queries but efficiently!
      // $mod = get_theme_mod('wda_features_x_padding');
      // if ( ! empty($mod) || $mod === "0" ) {?>
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

            // to do : wda-cover-columns?
            wda_generate_css_rule('.wda-cover-columns, .wda-cover-columns.has-background',
               ['style' => 'padding-left','setting' => 'wda_cover_column_x_padding','prefix'  => '','postfix' => '%'],
               ['style' => 'padding-right','setting' => 'wda_cover_column_x_padding','prefix'  => '','postfix' => '%']
            );

            // wda_generate_css_rule('.wda-two-col-features img,.wda-three-col-features img',
            //    ['style' => 'width','setting' => 'wda_features_img_width','prefix'  => '','postfix' => '%']
            // );
            // if features_img is not 'Cover' (100), we inject a left margin
            // if(get_theme_mod('wda_features_img_width') !== '100') {               
            //    echo('.wda-two-col-features img,.wda-three-col-features img {margin-left:.5rem;margin-top:.5rem;}');
            // }

            // to do : replace bg_color only w/ styling to change btn to link and vice-versa

            if(get_theme_mod('wda_features_cta_type') === "Button") {
               wda_inject_css(
                  '.wda_feature_btns',
                  ['style' => 'background','value' => 'unset' ,'prefix'  => '','postfix' => '']
               );
            }
            else {
               // future : package as a class? how would we inject?
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
            

            // to do : wda_features_cta_type - rules to erode the button styling and re-enable as simple link
            // if we can access the value, then if==='link', then we can add this rule:
            // wda_generate_css_rule('.wda_feature_btns',
            //    ['style' => 'background','setting' => 'wda_cover_column_x_padding','prefix'  => '','postfix' => '%'],
            // );
            
         ?>
      }
   <?php
   //}
   
}


