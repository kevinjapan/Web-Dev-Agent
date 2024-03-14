<?php

// Register Theme Customizer Settings and Controls
//
function wda_customize_theme_posts($wp_customize) {
   
   $wp_customize->add_setting( 'wda_is_posts_sidebar',
   array('default'    => true, 
         'type'       => 'theme_mod',
         'capability' => 'edit_theme_options',
         'transport'  => 'postMessage',
         'sanitize_callback' => 'wda_sanitize_checkbox') 
   );
   $wp_customize->add_control( 'wda_is_posts_sidebar', 
      array('type' => 'checkbox',
            'priority' => 10,
            'section' => 'wda_posts',
            'label' => esc_html__( 'posts sidebar','wda'),
            'settings'   => 'wda_is_posts_sidebar', 
            'input_attrs' => array( 'style' => 'width:100%;' ),
            'description' => esc_html__( 
               'Posts pages have a sidebar (may require refresh).
                You can place functional widgets in the Post Sidebar under Appearance - Widgets.','wda' ))
   );

}



// Output Custom Block Pattern CSS to frontend (utilising Block Customizer Settings and Controls above)
//
function wda_customize_theme_posts_styles() {


}

