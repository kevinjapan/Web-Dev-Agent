<?php
require_once get_template_directory() . '/inc/wda-sanitize.php';
require_once get_template_directory() . '/inc/wda-utility.php';


// Settings Control Combos
require_once get_template_directory() . '/inc/customizer-theme-combos/wda-customize-theme-copyright.php';
require_once get_template_directory() . '/inc/customizer-theme-combos/wda-customize-theme-typography.php';
require_once get_template_directory() . '/inc/customizer-theme-combos/wda-customize-theme-posts.php';
require_once get_template_directory() . '/inc/customizer-theme-combos/wda-customize-theme-frontpage.php';


//
// WebDevAgentThemeCustomizer
// Creates 'Web Dev Agent' Theme Controls in Customizer.
// Generates front-end CSS from the configured Settings.
// 


// to do : refactor - see this file version in The Educator.

class WebDevAgentThemeCustomizer {
   

   public static function register ( $wp_customize ) {

      $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
      $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

      //
      // Wed Dev Agent Theme panel
      // to do : this panel not appearing? no sections content?
      //
      if ( class_exists( 'WP_Customize_Panel' ) ) {
         if ( ! $wp_customize->get_panel( 'wda_layout_panel' ) ) {
            $wp_customize->add_panel(
               'wda_layout_panel',
               array(
                  'priority' => 25,
                  'title' => esc_html__( 'Wed Dev Agent','wda'),
                  'description' => esc_html__('Customize your Wed Dev Agent theme here.', 'wda'))
            );
         }
      }


      // Theme Customizer Sections
      //
      $wp_customize->add_section( 'wda_typography', 
         array('title'       => esc_html( 'Typography', 'wda' ),
               'priority'    => 10,
               'capability'  => 'edit_theme_options',
               'description' => esc_html('You can assign any custom font families you have included via a font plugin here.', 'wda'),
               'panel' => 'wda_layout_panel',
               'active_callback' => ''
         ) 
      );
      $wp_customize->add_section( 'wda_posts', 
         array('title'       => esc_html__( 'Posts', 'wda' ),
               'priority'    => 52,
               'capability'  => 'edit_theme_options',
               'description' => esc_html__('Customize the layout of your posts.', 'wda'),
               'panel' => 'wda_layout_panel') 
      );
      $wp_customize->add_section( 'wda_copyright', 
         array('title'       => esc_html__( 'Copyright', 'wda' ),
               'priority'    => 52,
               'capability'  => 'edit_theme_options',
               'description' => esc_html__('You can customize the site\'s Copyright Footer Notice here.', 'wda'),
               'panel' => 'wda_layout_panel') 
      );
      

      // Theme Sections Settings/Controls combos
      //
      wda_customize_theme_copyright($wp_customize);
      wda_customize_theme_typography($wp_customize);
      wda_customize_theme_frontpage($wp_customize);
      wda_customize_theme_posts($wp_customize);
      


   }


   //
   // frontend inline theme styles
   // to do : merging in refactoring from TE - enable styles !
   public static function wda_customizer_theme_styles() {
      ?>
      <!-- Web Dev Agent Theme Customizer CSS --> 
      <style id="web-dev-agent-custom-theme" type="text/css">
      <?php 
      //
      // Theme Customizer Styles
      //
      wda_customize_theme_copyright_styles();
      wda_customize_theme_typography_styles();
      wda_customize_theme_posts_styles();
      wda_customize_theme_frontpage_styles();
      ?>
      </style> 
      <!-- Web Dev Agent Theme Customizer -->
      <?php
   }
}


// setup theme customizer settings and controls
//
add_action( 'customize_register', array( 'WebDevAgentThemeCustomizer' , 'register' ) );


// output custom css to frontend
//
add_action('wp_head', array( 'WebDevAgentThemeCustomizer' , 'wda_customizer_theme_styles' ) );

