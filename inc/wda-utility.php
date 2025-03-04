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


// Responsive Breakpoints

if (!function_exists('wda_get_md_breakpoint')) :
   function wda_get_md_breakpoint($as_str = true) {
      if($as_str) return "768px";
      return 768;
   }
endif;


// We generate tidy front-end CSS and we don't want source code providing formatting for output

if(!function_exists('wda_start_css_block')) :
   function wda_start_css_block($block_name) {
      echo "\n\t/* " . $block_name . " */\n";
   }
endif;
if(!function_exists('wda_start_media_query')) :
   function wda_start_media_query($media_type = "screen", $media_features = "(min-width: 768px)") {
      echo "\t" . "@media $media_type and $media_features {" . "\n";
   }
endif;
if(!function_exists('wda_end_media_query')) :
   function wda_end_media_query() {
      echo "\t}\n";
   }
endif;


// Generate front-end css selector with rule(s) from our theme_mods

if (!function_exists('wda_generate_css_rule')) :

   function wda_generate_css_rule($selector,$formats,...$rules) {

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
         if(!empty($formats['indent'])) $css = "\t";
         $css.= $selector . '{';
         $css.= $css_inners;
         $css.= '}';
         echo ("\t");
         echo $css . "\n";
      }
   }
endif;


// Generate front-end css selector with rules from given values

if (!function_exists('wda_inject_css')) :

   function wda_inject_css($selector,$formats,...$rules) {

      $css_inners = '';
      foreach ($rules as $rule) {
         $css_inners.= sprintf('%s:%s;',$rule['style'],$rule['prefix'].$rule['value'].$rule['postfix']);
      }
      if($css_inners !== '') {
         if(!empty($formats['indent'])) $css = "\t";
         $css = $selector . '{';
         $css.= $css_inners;
         $css.= '}';
         echo ("\t");
         echo $css . "\n";
      }
   }

endif;


// Map setting values to appropriate value for a specified property

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

