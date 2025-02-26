<?php
/*
Wed Dev Agent Theme Setup
Add Features & Functions here
*/

if ( ! function_exists('wda_theme_setup') ) {

	// theme defaults and support for WordPress features.
   function wda_theme_setup() {
      add_theme_support('menus');
      add_theme_support('post-thumbnails');
      add_theme_support('custom-logo');
   }
}
add_action( 'after_setup_theme', 'wda_theme_setup' );


// frontend stylesheets
function load_stylesheets() {
   wp_register_style('wda_stylesheet',get_template_directory_uri() . '/css/wda.css',array(),1,'all');
   wp_enqueue_style('wda_stylesheet');
   wp_register_style('outline',get_template_directory_uri() . '/css/outline.css',array(),1,'all');
   wp_enqueue_style('outline');

   // to do : remove depr outline files
   // wp_register_style('outline_custom_props',get_template_directory_uri() . '/css/outline-custom-props.css',array(),1,'all');
   // wp_enqueue_style('outline_custom_props');
   // wp_register_style('outline_layouts',get_template_directory_uri() . '/css/outline-layouts.css',array(),1,'all');
   // wp_enqueue_style('outline_layouts');
   // wp_register_style('outline_utilities',get_template_directory_uri() . '/css/outline-utilities.css',array(),1,'all');
   // wp_enqueue_style('outline_utilities');
}
add_action('wp_enqueue_scripts','load_stylesheets');


// Admin stylesheets
function wda_enqueue_custom_admin_style($hook) {
   if ('post.php' === $hook ||  'post-new.php' === $hook || 'site-editor.php' === $hook) {
      wp_register_style('outline',get_template_directory_uri() . '/css/outline.css',array(),1,'all');
      wp_enqueue_style('outline');
      
      // to do : review : try include wda.css in editor - initially for Feature Block Button/Link option
      wp_register_style('wda_stylesheet',get_template_directory_uri() . '/css/wda.css',array(),1,'all');
      wp_enqueue_style('wda_stylesheet');

      wp_register_style('wda_admin_stylesheet',get_template_directory_uri() . '/css/wda-admin-style.css',array(),1,'all');
      wp_enqueue_style('wda_admin_stylesheet');

      // wp_register_style('outline_custom_props',get_template_directory_uri() . '/css/outline-custom-props.css',array(),1,'all');
      // wp_enqueue_style('outline_custom_props');
      // wp_register_style('outline_layouts',get_template_directory_uri() . '/css/outline-layouts.css',array(),1,'all');
      // wp_enqueue_style('outline_layouts');
      // wp_register_style('outline_utilities',get_template_directory_uri() . '/css/outline-utilities.css',array(),1,'all');
      // wp_enqueue_style('outline_utilities');
   }
}
add_action( 'admin_enqueue_scripts', 'wda_enqueue_custom_admin_style' );


// scripts
function load_jquery() {
   wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts','load_jquery');
function load_scripts() {
   wp_register_script('outlinecss_behaviour',get_template_directory_uri() . '/js/outlinecss_behaviour.js','',1,true);
   wp_enqueue_script('outlinecss_behaviour');
}
add_action('wp_enqueue_scripts','load_scripts');


// menu location
register_nav_menus(
   array(
      'top-menu' => __('Top Menu','theme'),
      'footer-menu' => __('Footer Menu','theme')
   )
);

// configure all uploaded images
add_image_size('cover',1920,600,true);
add_image_size('large',1200,630,true);
add_image_size('medium',600,305,true);
add_image_size('small',200,200,true);

// our custom WDA block pattrns
require_once get_template_directory() . '/inc/wda-block-patterns.php';

// add theme patterns to customizer - must be included last
require_once get_template_directory() . '/inc/wda-customize-theme.php';
require_once get_template_directory() . '/inc/wda-customize-patterns.php';


// enable live preview on customizer screen
function wda_customizer_live_preview()
{
	wp_enqueue_script( 
		  'wda-themecustomizer',
		  get_template_directory_uri().'/js/wda-customize.js',
		  array( 'jquery','customize-preview' ),
		  '',
		  true
	);
}
add_action( 'customize_preview_init', 'wda_customizer_live_preview' );

