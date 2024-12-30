
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




//    Dynamic nav bar
//    hides when user is scrolling down
//    to prevent nav disappearing in ios safari bounce, we don't hide < 80px from top
const init_nav_scroll_listener = () => {

   let last_scroll = 0
   const nav_bar = document.querySelector('nav')

   if(nav_bar) {
      window.addEventListener('scroll', () => {
         let current_scroll = window.scrollY         
         if((current_scroll > last_scroll) && (current_scroll > 80)) {
            nav_bar.classList.add('hide_on_scroll_down')    // user is scrolling downwards - hide nav bar ( if below 80px )
         } else {
            nav_bar.classList.remove('hide_on_scroll_down')    // scrolling upwards - show hide bar
         }
         last_scroll = current_scroll
      })
   }
}

// if any issues arise with fade_in not taking effect..
// we have fixed fade_in failing on 'back' button & '#' links in wda and te projects.

init_fade_ins()
init_nav_scroll_listener()


// toggle sm/mobile menu
const nav_toggle = document.querySelector('.nav_toggle')
const dropdown = document.querySelector('nav ul.menu')
nav_toggle.addEventListener('click',() => {
   if(dropdown) {
      // drop the nav list
      dropdown.classList.toggle('extended_sm_nav_dropdown')
      // modify the toggle      
      nav_toggle.classList.toggle('selected_toggle')
   }
})

// page transitions - we retract dropdown on item clicked & fade out content
// to do : create react/vue components to encapsulate this functionality?
const menu_items = document.querySelectorAll('.menu-item')
menu_items.forEach((menu_item) => {
   menu_item.addEventListener('click',() => {
      if(dropdown) {
         dropdown.classList.remove('extended_sm_nav_dropdown')
      }
      // Fade out any 'fade_in' class elements while waiting for new page.
      // Does rely on fade out (.fade_in) being quick or looks awkward.
      const faders = document.querySelectorAll('.fade_in')
      if(faders) {
         faders.forEach(fader => {
            fader.classList.toggle('appear')
         })
      }
   })
})


//    faqs_block
const close_open_faq = () => {
   const faq = document.querySelector('.open_faq')
   if(faq) faq.classList.remove('open_faq')
}
const faq_toggles = document.querySelectorAll('.faq_toggle')
faq_toggles.forEach((faq_toggle) => {
   faq_toggle.addEventListener('click',() => {

      // get immediate sibling <p>
      let faq_text = faq_toggle.nextElementSibling

      if(!faq_text.classList.contains('open_faq')) {
         close_open_faq()
      }
      faq_text.classList.toggle('open_faq')
   })
})