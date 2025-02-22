//
// Enable preview live changes in WordPress Customizer here
// Settings referenced here are defined in wda-customize-patterns.php
//

(function($) {

   // Site
   // to do : replace evolutiondesuka refs : rollout
	wp.customize('blogname', function(setting) {
		setting.bind(function(value) {
			$('.front_page.cover_block h1').text(value);
		});
	});
	wp.customize('blogdescription', function(setting) {
		setting.bind(function(value) {
			$('.evolutiondesuka--tagline').text(value);
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
   // to do : review all - use 'vh' for measurements or 'rem'?
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
   // ----------------------------------------------------------------------------------------
   // ----------------------------------------------------------------------------------------
   // to do : not working:
   wp.customize('wda_features_img_width', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0;
         if(value > 100) value = 100;
         $('.wda-two-col-features img, .wda-three-col-features img,.wda-six-col-featuress img').css('width', value + '%');
      });
   });
   // ----------------------------------------------------------------------------------------
   // ----------------------------------------------------------------------------------------
   

 
   // Grid Block
   // to do : review : 'vh'/'vw' for margins? - how about 'rem' and make it standard across all dimensions..?
   // to do : eg '.wda-grid > div' & '.wda-grid:not(:has(div))' are not working :  WP injects inner__container..
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
   // to do : alternative not working?
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
   // to do : working?
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
   // to do : review - we limit functionality - eg you cannot do top and bottom separately,
   //         rather you can edit y margins as a pair
   //         this constrains the no. of ctrls in customizer (a good thing)
   //         and we can still address indvdl blocks w/ 'advanced' css rules on the block itself.
   // wp.customize('wda_title_lead_bottom_padding', function(setting) {
   //    setting.bind( function(value) {
   //       if(value < 0) value = 0;
   //       if(value > 25) value = 25;
   //       $('.wda-title-lead').css('padding-bottom', value + 'vh');
   //    });
   // });
   wp.customize('wda_title_lead_y_margin', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0;
         if(value > 25) value = 25;
         $('.wda-title-lead').css('margin-top', value + 'vh').css('margin-bottom', value + 'vh');
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
