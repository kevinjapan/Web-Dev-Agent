//
// Enable preview live changes in WordPress Customizer here
// Settings referenced here are defined in wda-customize-patterns.php
//

(function($) {


   // Site
   // -----------------------------------------------
	wp.customize('blogname', function(setting) {
		setting.bind(function(value) {
			$('.front_page.cover_block h1').text(value)
		})
	})
	wp.customize('blogdescription', function(setting) {
		setting.bind(function(value) {
			$('.wda-tagline').text(value)
		})
	})


   // Hero Cover Blocks
   // -----------------------------------------------
   wp.customize('wda_hero_x_height', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0
         if(value > 100) value =  100
         $('.wda-hero').css('height', value + 'vh')
      })
   })
   wp.customize('wda_hero_bottom_margin', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0
         if(value > 100) value = 100
         $('.wda-hero').css('margin-bottom', value + '%')
      })
   })
   wp.customize('wda_hero_v_align', function(setting) {
      setting.bind( function(value) {
         $('.wda-hero').css('align-items', value)
      })
   })


   // Cover Blocks
   // -----------------------------------------------
   wp.customize('wda_cover_x_width', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0
         if(value > 100) value = 100
         $('.wda-cover').css('width', value + '%')
      })
   })
   wp.customize('wda_cover_y_margins',function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0
         if(value > 25) value = 25
         $('.wda-cover').css({
            "margin-top":value + 'vh',
            "margin-bottom":value + 'vh'
         })
      })
   })


   // Feature Blocks
   // -----------------------------------------------
   wp.customize('wda_features_x_padding', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0
         if(value > 25) value = 25
         $('.wda-features').css({
            "padding-left":value + '%',
            "padding-right":value + '%'
         })
      })
   })
   wp.customize('wda_features_y_padding', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0
         if(value > 25) value = 25
         $('.wda-features, .wda-features.has-background').css({
            "padding-top": value + 'vh',
            "padding-bottom": value + 'vh'
         })
      })
   })
   wp.customize('wda_features_bottom_padding', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0
         if(value > 25) value = 25
         $('.wda-features, .wda-features.has-background').css('padding-bottom', value + 'vh')
      })
   })
   
   // to do : why is this not used?
   // wp.customize('wda_features_img_width', function(setting) {
   //    setting.bind( function(value) {
   //       if(value < 0) value = 0
   //       if(value > 100) value = 100
   //       $('.wda-two-col-features img, .wda-three-col-features img').css('width', value + '%')
   //       if(value !== '100') {
   //          $('.wda-two-col-features img, .wda-three-col-features img').css('margin-left','.5rem').css('margin-top','.5rem')
   //       }
   //       else {
   //          // reset on-the-fly if user swaps between options
   //          $('.wda-two-col-features img, .wda-three-col-features img').css('margin-left','0').css('margin-top','0')
   //       }
   //    })
   // })

   wp.customize('wda_features_cta_type', function(setting) {
      setting.bind( function(value) {
         if(value === "Link") {
            $('.wda_feature_btns > div > a').css({
               backgroundColor:'transparent',
               color:'var(--link_text_color)',
               textAlign:'left',
               padding:'.25rem',
               paddingLeft:'.5rem',
               fontSize:'1rem',
               textDecoration:'underline'
            })           
            $('.wda_feature_btns > div > a:hover').css({
               backgroundColor:'transparent',
               color:'var(--link_text_color_hover)'
            })
         }
         else {            
            $('.wda_feature_btns > div > a').css({
               backgroundColor:'var(--wda_btn_bg)',
               color:'var(--wda_btn_text_color)',
               textAlign:'left',
               padding:'.25rem',
               paddingLeft:'.25rem',
               fontSsize:'1rem',
               textDecoration:'underline'
            })
         }
      })
   })


   // Grid Block
   // -----------------------------------------------
   // future : review : 'vh'/'vw' for margins? - how about 'rem' and make it standard across all dimensions..?
   wp.customize('wda_grid_x_margins',function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0
         if(value > 25) value = 25
         $('.wda-grid').css({
            "margin-left":value + 'vw',
            "margin-right":value + 'vw'
         })
      })
   })
   wp.customize('wda_grid_y_margins',function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0
         if(value > 25) value = 25
         $('.wda-grid').css({
            "margin-top":value + 'vh',
            "margin-bottom":value + 'vh'
         })
      })
   })
   wp.customize('wda_grid_gap',function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0
         if(value > 25) value = 25
         $('.wda-grid').css({
            "gap":value + 'rem'
         })
      })
   })
   wp.customize('wda_grid_template_cols',function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0
         if(value > 10) value = 10
         $('.wda-grid:not(:has(div))').css({
            "grid-template-columns":'repeat(' + value + ',minmax(100px,1fr))' + ''
         })
      })
   })

   
   // Grid Cards Block
   // -----------------------------------------------
   wp.customize('wda_grid_cards_x_margins',function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0
         if(value > 25) value = 25
         $('.wda_grid_cards').css({
            "margin-left":value + 'vw',
            "margin-right":value + 'vw'
         })
      })
   })
   wp.customize('wda_grid_cards_gap',function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0
         if(value > 25) value = 25
         $('.wda_grid_cards').css({
            "gap":value + 'rem'
         })
      })
   })
   wp.customize('wda_grid_cards_template_cols',function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0
         if(value > 10) value = 10
         $('.wda_grid_cards').css({
            "grid-template-columns":'repeat(' + value + ',minmax(100px,1fr))'
         })
      })
   })
   wp.customize('wda_grid_cards_cta_type', function(setting) {
      setting.bind( function(value) {
         if(value === "Link") {
            $('.wda_grid_cards_btns > div > a').css({
               backgroundColor:'transparent',
               color:'var(--link_text_color)',
               textAlign:'left',
               padding:'.25rem',
               paddingLeft:'.5rem',
               fontSize:'1rem',
               textDecoration:'underline'
            })
            $('.wda_grid_cards_btns > div > a:hover').css({
               backgroundColor:'transparent',
               color:'var(--link_text_color_hover)'
            })
         }
         else {
            $('.wda_grid_cards_btns > div > a').css({
               backgroundColor:'var(--wda_btn_bg)',
               color:'var(--wda_btn_text_color)',
               textAlign:'left',
               padding:'.25rem',
               paddingLeft:'.25rem',
               fontSsize:'1rem',
               textDecoration:'underline'
            })
         }
      })
   })


   // Text Blocks
   // -----------------------------------------------
   wp.customize('wda_title_lead_x_padding', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0
         if(value > 25) value = 25
         $('.wda-title-lead').css({
            "padding-left":value + '%',
            "padding-right":value + '%'
         })
      })
   })
   wp.customize('wda_title_lead_btwn_padding', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0
         if(value > 25) value = 25
         $('.wda-title-lead__title').css('padding-bottom', value + 'vh')
      })
   })
   wp.customize('wda_title_lead_y_padding', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0
         if(value > 25) value = 25
         $('.wda-title-lead').css({
            'padding-top':value + 'vh',
            'padding-bottom': value + 'vh'
         })
      })
   })
   wp.customize('wda_title_lead_y_margin', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0
         if(value > 25) value = 25
         $('.wda-title-lead').css({
            'margin-top': value + 'vh',
            'margin-bottom': value + 'vh'
         })
      })
   })

   
   // Title Lead Blocks
   // -----------------------------------------------
   wp.customize('wda_title_lead_align', function(setting) {
      setting.bind( function(value) {
         // future : validation
         $('.wda-title-lead__title').css('text-align', value)
         $('.wda-title-lead__p').css('text-align', value)
         $('.wda-title-lead').css('align-items',text_to_flex_props[value])
         $('.wda-title-lead > div').css('align-items',text_to_flex_props[value])
      })
   })

   wp.customize('wda_text_x_padding', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0
         if(value > 25) value = 25
         $('.wda-text').css({
            "padding-left":value + '%',"padding-right":value + '%'
         })
      })
   })
   wp.customize('wda_text_y_margins', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0
         if(value > 25) value = 25
         $('.wda-text').css({
            "margin-top":value + 'vh',"margin-bottom":value + 'vh'
         })
      })
   })
   wp.customize('wda_text_text_align', function(setting) {
      setting.bind( function(value) {
         $('.wda-text').css({
            "text-align":value
         })
      })
   })


   // Image Blocks
   // -----------------------------------------------
   wp.customize('wda_image_x_padding', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0
         if(value > 25) value = 25
         $('.wda-image').css({
            "padding-left":value + '%',
            "padding-right":value + '%'
         })
      })
   })
   wp.customize('wda_image_y_margins', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0
         if(value > 25) value = 25
         $('.wda-image').css({
            "margin-top":value + 'vh',
            "margin-bottom":value + 'vh'
         })
      })
   })

 
   // Gallery Blocks
   // -----------------------------------------------
     wp.customize('wda_gallery_x_padding', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0
         if(value > 25) value = 25
         $('.wda-gallery').css({
            "padding-left":value + '%',
            "padding-right":value + '%'
         })
      })
   })
   wp.customize('wda_gallery_y_margins', function(setting) {
      setting.bind( function(value) {
         if(value < 0) value = 0
         if(value > 25) value = 25
         $('.wda-gallery').css({
            "margin-top":value + 'vh',
            "margin-bottom":value + 'vh'
         })
      })
   })


   // Button Blocks
   // -----------------------------------------------
   wp.customize(
      'wda_button_margin',
      function(setting) {
         setting.bind( function(value) {
            if(value < 0) value = 0
            if(value > 5) value = 5
            $('.wda_discrete_buttons > .wda_button > a.wp-block-button__link').css({
               "margin":value + 'rem'})
      })
   })
   wp.customize(
      'wda_button_padding',
      function(setting) {
         setting.bind( function(value) {
            if(value < 0) value = 0
            if(value > 5) value = 5
            $('.wda_discrete_buttons > .wda_button > a.wp-block-button__link').css({
               "padding":value + 'rem'})
      })
   })


   // Copyright Notice Block
   // -----------------------------------------------
   wp.customize('wda_copyright',function(setting) {
      setting.bind( function(value) {
         $('.footer_copyright').text(value)
      })
   })
   wp.customize('wda_copyright_auto_complete',function(setting) {
      setting.bind( function(value) {
         if(value) {
            $('.footer_copyright_auto_complete').text(' - ' + new Date().getFullYear())
         }
         else {
            $('.footer_copyright_auto_complete').text('')
         }
      })
   })


   // Utilities
   // -----------------------------------------------
   const text_to_flex_props = {
      'left': 'flex-start',
      'right': 'flex-end',
      'center': 'center'
   }


   
}) (jQuery)
