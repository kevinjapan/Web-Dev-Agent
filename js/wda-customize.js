//
// Enable preview live changes in WordPress Customizer here
// Settings referenced here are defined in wda-customize-patterns.php
//

(function($) {

   //
   // site
   //
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


   // 
   // wda cover block
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


   // 
   // wda columns blocks
   //
   wp.customize('wda_column_x_padding', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0;
         if(value > 25) value = 25;
         $('.wda-columns').css({"padding-left":value + '%',"padding-right":value + '%'}); 
      });
   });
   wp.customize('wda_column_top_padding', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0;
         if(value > 25) value = 25;
         $('.wda-columns, .wda-columns.has-background').css('padding-top', value + 'vh'); 
      });
   });
   wp.customize('wda_column_bottom_padding', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0;
         if(value > 25) value = 25;
         $('.wda-columns, .wda-columns.has-background').css('padding-bottom', value + 'vh');
      });
   });


   // 
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
   wp.customize('wda_title_lead_top_padding', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0;
         if(value > 25) value = 25;
         $('.wda-title-lead').css('padding-top', value + 'vh');
      });
   });
   wp.customize('wda_title_lead_bottom_padding', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0;
         if(value > 25) value = 25;
         $('.wda-title-lead').css('padding-bottom', value + 'vh');
      });
   });
   wp.customize('wda_title_lead_top_margin', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0;
         if(value > 25) value = 25;
         $('.wda-title-lead').css('margin-top', value + 'vh');
      });
   });
   wp.customize('wda_title_lead_bottom_margin', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0;
         if(value > 25) value = 25;
         $('.wda-title-lead').css('margin-bottom', value + 'vh');
      });
   });
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


   // 
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


   // 
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


   //
   // copyright notice
   //
   wp.customize('wda_copyright',function(setting) {
      setting.bind( function(value) {
         $('.footer_copyright').text(value);
      });
   });

   
}) (jQuery);
