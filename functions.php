<?php

// to do : currently web-dev-agent plugins and this theme both load the same outlinecss stylesheets (duplicate)
//         (plugins appear to avoid duplication)
// - afterthought - maybe don't need these in the theme? we are only currently interested in the nav.

function load_stylesheets() {
   wp_register_style('wda_stylesheet',get_template_directory_uri() . '/css/wda.css',array(),1,'all');
   wp_enqueue_style('wda_stylesheet');
   wp_register_style('outline',get_template_directory_uri() . '/css/outline.css',array(),1,'all');
   wp_enqueue_style('outline');
   wp_register_style('outline_custom_props',get_template_directory_uri() . '/css/outline-custom-props.css',array(),1,'all');
   wp_enqueue_style('outline_custom_props');
   wp_register_style('outline_layouts',get_template_directory_uri() . '/css/outline-layouts.css',array(),1,'all');
   wp_enqueue_style('outline_layouts');
   wp_register_style('outline_utilities',get_template_directory_uri() . '/css/outline-utilities.css',array(),1,'all');
   wp_enqueue_style('outline_utilities');
}
add_action('wp_enqueue_scripts','load_stylesheets');


function load_jquery() {
   // wp_deregister_script('jquery');
   wp_enqueue_script('jquery',get_template_directory_uri() .'/js/jquery.js','',1,true);
}
add_action('wp_enqueue_scripts','load_jquery');

function load_scripts() {
   // wp_register_script('wda_js',get_template_directory_uri() . '/js/wda.js','',1,true);
   // wp_enqueue_script('wda_js');
   wp_register_script('outlinecss_behaviour',get_template_directory_uri() . '/js/outlinecss_behaviour.js','',1,true);
   wp_enqueue_script('outlinecss_behaviour');
}
add_action('wp_enqueue_scripts','load_scripts');

// enable menus
add_theme_support('menus');

add_theme_support('post-thumbnails');

// menu location

//
// to do : review
// our header.php builds nav - so we are tied to eg 'top-menu' - ensure this is reasonable
//
register_nav_menus(
   array(
      'top-menu' => __('Top Menu','theme'),
      'footer-menu' => __('Footer Menu','theme')
   )
);

// configure all uploaded images
add_image_size('cover',1200,600,true);
add_image_size('large',600,300,true);
add_image_size('medium',300,300,true);
add_image_size('small',200,200,true);

// use plugin 'force_regenerate_thumbnails' if you change 
// these on existing uploaded img files (to reconfigure imgs)


