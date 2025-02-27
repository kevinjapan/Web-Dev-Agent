//
// Enable preview live changes in WordPress Customizer here
// Settings referenced here are defined in wda-customize-patterns.php
//

(function($) {

   // Site
	wp.customize('blogname', function(setting) {
		setting.bind(function(value) {
			$('.front_page.cover_block h1').text(value);
		});
	});
	wp.customize('blogdescription', function(setting) {
		setting.bind(function(value) {
			$('.wda-tagline').text(value);
		});
	});

   // Hero Cover Block
   //
   wp.customize('wda_hero_x_height', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0;
         if(value > 100) value =  100;
         $('.wda-hero').css('height', value + 'vh');
      });
   });
   wp.customize('wda_hero_bottom_margin', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0;
         if(value > 100) value =  100;
         $('.wda-hero').css('margin-bottom', value + '%');
      });
   });
   wp.customize('wda_hero_v_align', function(setting) {
      setting.bind( function(value) {
         $('.wda-hero').css('align-items', value);
      });
   });


   // Cover Block
   //
   wp.customize('wda_cover_x_width', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0;
         if(value > 100) value =  100;
         $('.wda-cover').css('width', value + '%');
      });
   });
   wp.customize('wda_cover_y_margins',function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0;
         if(value > 25) value = 25;
         $('.wda-cover').css({"margin-top":value + 'vh',"margin-bottom":value + 'vh'}); 
      });
   });


   // WDA Feature Blocks
   wp.customize('wda_features_x_padding', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0;
         if(value > 25) value = 25;
         $('.wda-features').css({"padding-left":value + '%',"padding-right":value + '%'}); 
      });
   });
   wp.customize('wda_features_y_padding', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0;
         if(value > 25) value = 25;
         $('.wda-features, .wda-features.has-background').css({"padding-top": value + 'vh',"padding-bottom": value + 'vh'}); 
      });
   });
   wp.customize('wda_features_bottom_padding', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0;
         if(value > 25) value = 25;
         $('.wda-features, .wda-features.has-background').css('padding-bottom', value + 'vh');
      });
   });
   
   // wp.customize('wda_features_img_width', function(setting) {
   //    setting.bind( function(value) {
   //       if(value < 0) value = 0;
   //       if(value > 100) value = 100;
   //       $('.wda-two-col-features img, .wda-three-col-features img').css('width', value + '%');
   //       if(value !== '100') {
   //          $('.wda-two-col-features img, .wda-three-col-features img').css('margin-left','.5rem').css('margin-top','.5rem');
   //       }
   //       else {
   //          // reset on-the-fly if user swaps between options
   //          $('.wda-two-col-features img, .wda-three-col-features img').css('margin-left','0').css('margin-top','0');
   //       }
   //    });
   // });

   wp.customize('wda_features_cta_type', function(setting) {

      setting.bind( function(value) {
         if(value === "Link") {

            $('.wda_feature_btns > div > a').css('background','transparent');
            $('.wda_feature_btns > div > a').css('color','var(--link_text_color');
            $('.wda_feature_btns > div > a').css('text-align','left');
            $('.wda_feature_btns > div > a').css('padding','.25rem');
            $('.wda_feature_btns > div > a').css('padding-left','.5rem');
            $('.wda_feature_btns > div > a').css('font-size','1rem');
            $('.wda_feature_btns > div > a').css('text-decoration','underline');            
            $('.wda_feature_btns > div > a:hover').css('background','transparent');
            $('.wda_feature_btns > div > a:hover').css('color','var(--link_text_color_hover');
         }
         else {            
            $('.wda_feature_btns > div > a').css('background','var(--wda_btn_bg)');
            $('.wda_feature_btns > div > a').css('color','var(--wda_btn_text_color)');
            $('.wda_feature_btns > div > a').css('text-align','left');
            $('.wda_feature_btns > div > a').css('padding','.25rem');
            $('.wda_feature_btns > div > a').css('padding-left','.25rem');
            $('.wda_feature_btns > div > a').css('font-size','1rem');
            $('.wda_feature_btns > div > a').css('text-decoration','underline');
         }
      });
   });

   
   // Card Block
   wp.customize('wda_card_x_margins',function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0;
         if(value > 25) value = 25;
         $('.wda-card').css({"margin-left":value + 'vw',"margin-right":value + 'vw'}); 
      });
   });
   wp.customize('wda_card_y_margins',function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0;
         if(value > 25) value = 25;
         $('.wda-card').css({"margin-top":value + 'vh',"margin-bottom":value + 'vh'}); 
      });
   });


   // Grid Block
   // to do : review : 'vh'/'vw' for margins? - how about 'rem' and make it standard across all dimensions..?
   // container rules
   wp.customize('wda_grid_x_margins',function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0;
         if(value > 25) value = 25;
         $('.wda-grid').css({"margin-left":value + 'vw',"margin-right":value + 'vw'}); 
      });
   });
   wp.customize('wda_grid_y_margins',function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0;
         if(value > 25) value = 25;
         $('.wda-grid').css({"margin-top":value + 'vh',"margin-bottom":value + 'vh'}); 
      });
   });
   // grid rules
   // to do : bug : if go to zero, loses render completely in editor
   wp.customize('wda_grid_gap',function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0;
         if(value > 25) value = 25;
         $('.wda-grid > div').css({"gap":value + 'vh'}); 
      });
   });
   wp.customize('wda_grid_gap',function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0;
         if(value > 25) value = 25;
         $('.wda-grid:not(:has(div))').css({"gap":value + 'vh'});
      });
   });
   wp.customize('wda_grid_gap',function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0;
         if(value > 25) value = 25;
         $('.wda-grid > div').css({"grid-template-columns":value + ''}); 
      });
   });
   wp.customize('wda_grid_template_cols',function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0;
         if(value > 10) value = 10;
         $('.wda-grid:not(:has(div))').css({"grid-template-columns":'repeat(' + value + ',minmax(100px,1fr))' + ''}); 
      });
   });



   // wda text blocks
   //
   wp.customize('wda_title_lead_x_padding', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0;
         if(value > 25) value = 25;
         $('.wda-title-lead').css({"padding-left":value + '%',"padding-right":value + '%'}); 
      });
   });
   wp.customize('wda_title_lead_btwn_padding', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0;
         if(value > 25) value = 25;
         $('.wda-title-lead__title').css('padding-bottom', value + 'vh');
      });
   });
   wp.customize('wda_title_lead_y_padding', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0;
         if(value > 25) value = 25;
         $('.wda-title-lead').css('padding-top', value + 'vh').css('padding-bottom', value + 'vh');
      });
   });
   wp.customize('wda_title_lead_y_margin', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0;
         if(value > 25) value = 25;
         $('.wda-title-lead').css('margin-top', value + 'vh').css('margin-bottom', value + 'vh');
      });
   });


   function map_to_flex_value(value) {
      switch(value) {
         case 'left':
            return 'flex-start'
            break
         case 'right':
            return 'flex-end'
      }
      return 'center'
   }

   const text_to_flex_props = {
      'left': 'flex-start',
      'right': 'flex-end',
      'center': 'center'
   }
   
   // wda_generate_css_rule('.wda-title-lead,.wda-title-lead > div',
   //    ['style' => 'align-items','setting' => 'wda_title_lead_align','prefix'  => '','postfix' => '']);

   wp.customize('wda_title_lead_align', function(setting) {
      setting.bind( function(value) {
         // to do : validation?
         // eg cf. if(value < 0) value = 0;
         $('.wda-title-lead__title').css('text-align', value);
         $('.wda-title-lead__p').css('text-align', value);
         $('.wda-title-lead').css('align-items',text_to_flex_props[value])
         $('.wda-title-lead > div').css('align-items',text_to_flex_props[value])
      });
   });

   
   // wp.customize('wda_title_lead_bottom_margin', function(setting) {
   //    setting.bind( function(value) {
   //       if(value < 0) value = 0;
   //       if(value > 25) value = 25;
   //       $('.wda-title-lead').css('margin-bottom', value + 'vh');
   //    });
   // });
   wp.customize('wda_text_x_padding', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0;
         if(value > 25) value = 25;
         $('.wda-text').css({"padding-left":value + '%',"padding-right":value + '%'}); 
      });
   });
   wp.customize('wda_text_y_margins', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0;
         if(value > 25) value = 25;
         $('.wda-text').css({"margin-top":value + 'vh',"margin-bottom":value + 'vh'}); 
      });
   });
   wp.customize('wda_text_text_align', function(setting) {
      setting.bind( function(value) {
         $('.wda-text').css({"text-align":value}); 
      });
   });


   // wda image block
   //
   wp.customize('wda_image_x_padding', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0;
         if(value > 25) value = 25;
         $('.wda-image').css({"padding-left":value + '%',"padding-right":value + '%'}); 
      });
   });
   wp.customize('wda_image_y_margins', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0;
         if(value > 25) value = 25;
         $('.wda-image').css({"margin-top":value + 'vh',"margin-bottom":value + 'vh'}); 
      });
   });

 
   // wda gallery block
   //
     wp.customize('wda_gallery_x_padding', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0;
         if(value > 25) value = 25;
         $('.wda-gallery').css({"padding-left":value + '%',"padding-right":value + '%'}); 
      });
   });
   wp.customize('wda_gallery_y_margins', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0;
         if(value > 25) value = 25;
         $('.wda-gallery').css({"margin-top":value + 'vh',"margin-bottom":value + 'vh'}); 
      });
   });


   // copyright notice
   //
   wp.customize('wda_copyright',function(setting) {
      setting.bind( function(value) {
         $('.footer_copyright').text(value);
      });
   });
   wp.customize('wda_copyright_auto_complete',function(setting) {
      setting.bind( function(value) {
         if(value) {
            $('.footer_copyright_auto_complete').text(' - ' + new Date().getFullYear());
         }
         else {
            $('.footer_copyright_auto_complete').text('');
         }
      });
   });

   
}) (jQuery);
