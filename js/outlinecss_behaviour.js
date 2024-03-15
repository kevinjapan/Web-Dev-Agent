//
// Behaviour for OutlineCSS Components
//



//
// Fade In Components on entering viewport
//
const init_fade_ins = () => {

   const faders = document.querySelectorAll('.fade_in')

   const appearOptions = {
      threshold: 0,
      rootMargin: "0px 0px -200px 0px"
   }
   return create_observers(faders,'appear',appearOptions)
}
const create_observers = (elements,active_class,options) => {

   let observers_created = false

   const appearOnScroll = new IntersectionObserver(
      function(entries,appearOnScroll){
         entries.forEach(entry => {
            if(!entry.isIntersecting) return
            entry.target.classList.add(active_class)
            appearOnScroll.unobserve(entry.target)
         })
   },options)

   if(elements) {
      elements.forEach(element => {
         appearOnScroll.observe(element)
      })
      observers_created = true
   }
   return observers_created
}


//
// Dynamic nav bar - hide on scrolling down
//
const init_nav_scroll_listener = () => {

   let last_scroll = 0
   const nav_bar = document.querySelector('nav.outline_nav')

   if(nav_bar) {
      window.addEventListener('scroll', () => {
         let current_scroll = window.scrollY       
         // to prevent nav disappearing in ios safari bounce, we don't hide < 80px from top  
         if((current_scroll > last_scroll) && (current_scroll > 80)) {
            nav_bar.classList.add('invisible_nav')    // user is scrolling downwards - hide nav bar below 80px
         } else {
            nav_bar.classList.remove('invisible_nav')    // scrolling upwards - show hide bar
         }
         last_scroll = current_scroll
      })
   }
}


//
// Toggle sm menu extend dropdown
//
const init_toggle_sm_menu = (dropdown) => {

   const nav_toggle = document.querySelector('.nav_toggle')

   nav_toggle.addEventListener('click',() => {
      if(dropdown) {
         dropdown.classList.toggle('extended_nav_dropdown')  
         nav_toggle.classList.toggle('selected_toggle')
      }
   })
}


// 
// Retract sm menu dropdown on item clicked
//
const init_retract_sm_menu = (dropdown) => {

   const menu_items = document.querySelectorAll('.menu-item')

   menu_items.forEach((menu_item) => {
      menu_item.addEventListener('click',() => {

         if(dropdown) dropdown.classList.remove('extended_nav_dropdown')
         
         // Fade out any 'fade_in' class elements while waiting for new page.
         // Relies on fade out (.fade_in) being quick or looks awkward.
         const faders = document.querySelectorAll('.fade_in')
         if(faders) {
            faders.forEach(fader => {
               fader.classList.toggle('appear')
            })
         }
      })
   })
}


//
// Init all behaviours
//

init_fade_ins()

init_nav_scroll_listener()

const dropdown = document.querySelector('nav.outline_nav  ul.menu')

if(dropdown) {
   init_toggle_sm_menu(dropdown)
   init_retract_sm_menu(dropdown)
}
