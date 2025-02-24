<?php


// utility funcs
// @since Web Dev Agent 1.0


if (!function_exists('wda_is_general_page')) :
   function wda_is_general_page() {
      return !is_front_page() && !is_category('blog');
   }
endif;

if (!function_exists('wda_sanitize_checkbox')) :
   function wda_sanitize_checkbox( $checked ) {
      return ((isset($checked) && true === $checked) ? true : false);
   }
endif;

if (!function_exists('wda_is_blog_archive_page')) :
   function wda_is_blog_archive_page() {
      return is_category('blog');
   }
endif;


// wda_generate_css_rule
// Generates front-end css selector with rule(s) from our theme mods.
// These rules will not appear in the front-end until you have 'published' in the Customizer.

if (!function_exists('wda_generate_css_rule')) :

   function wda_generate_css_rule($selector,...$rules) {

      if(!is_array($rules)) return;
      
      $mod = null;
      $css = '';
      $css_inners = '';
      foreach ($rules as $rule) {

         if(empty($rule['setting'])) break;

         if(!empty($rule['map_value_to'])) {
            $mod = map_prop_values($rule['map_value_to'],get_theme_mod($rule['setting']));
         }
         else {
            $mod = get_theme_mod($rule['setting']);
         }
         if (!empty($mod) || $mod === "0") {
            $css_inners.= sprintf('%s:%s;',$rule['style'],$rule['prefix'].$mod.$rule['postfix']);
         }
      }
      if($css_inners !== '') {
         $css = $selector . '{';
         $css.= $css_inners;
         $css.= '}';
         echo $css . "\n";
      }
   }
endif;


// map setting values to appropriate value for a specified property

if (!function_exists('map_prop_values')) :

   function map_prop_values($mapping,$mod) {
      switch($mapping) {
         case 'text_to_flex_props':
            return text_to_flex_props($mod);
      }
      return $mod;
   }
endif;


if(!function_exists('text_to_flex_props')) :
   function text_to_flex_props($mod) {
      $text_to_flex_props = [
         "left" => "flex-start",
         "right" => "flex-end",
         "center" => "center",
      ];
      $result = $text_to_flex_props[$mod];
      if(!empty($result)) return $result;
      return $mod;
   }
endif;




// Generate front-end css selector with rule(s) from our theme mods.
// Handle complex single-properties - eg "background-position: {top 20px right -10px};"
// to do : 
// - not used - we need it? or remove
// - include handling for : $mod = map_prop_values($rule['map_value_to'],get_theme_mod($rule['setting'])); - see wda_generate_css_rule()

if (!function_exists('wda_generate_complex_css_rule')) :

   function wda_generate_complex_css_rule($selector, $style, $mod_names, $prefixes=array(), $postfixes=array()) {
      $mod = null;
      $index = 0;
      if(is_array($mod_names)) {
         foreach ($mod_names as $mod_name) {
            $mod.= " " . $prefixes[$index] . get_theme_mod($mod_name) . $postfixes[$index++];
         }
      }
      // $prefix ?
      // if ( ! empty( $mod ) ) sprintf('%s{%s:%s;}',$selector,$style,$prefix.$mod.$postfix) . "\n";
   } 

endif;