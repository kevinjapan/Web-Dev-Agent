# Web Dev Agent

### WordPress Theme

#### Theme for a Web Development Agency.

[Web Dev Agent](https://web-dev-agent.netlify.app/)


`# to do : on-going - review & update setup instructions below`

## Setup
The following steps should get you off and running!

### Homepage
To display the styled **WDA** homepage hero section, create a new page and add
the desired background image as it's `featured image` in the page settings.

Then set your homepage as a static page in `Admin/Settings/Reading` and select
this page as your Homepage.

This will automatically add the site title, tagline and featured image to a **Cover Bloc Pattern** hero section on your homepage.


## Menus

### Menu Locations
**WDA** exposes 2 Menu Locations - **Top Menu** and **Footer Menu**.
Add a `top-menu` and `footer-menu` menu to these respectively and
the theme will inject these into your pages appropriately.

### Top Menu
To display the top level navigation for your site, add a menu named `top-menu` in  `Admin/Appearance/Menus` and set it's `Display Location` as **Top Menu** in the Menu Settings. Then add your **Homepage** to this menu and a link to this page will appear on the top level navigation.
You can add any subsequent pages to this menu as required.


## Blog
**WDA** will automatically inject your Posts into a Blog.
Create an empty page named **Blog** and add this to your menu.
In `Admin/Settings/Reading` where you have set `Your homepage displays` as `A static page`,
set your `Posts page` as **Blog**.


## Plugins 

### Abridged Plugins on your homepage

`to do : setup
- shortcodes
- add new items`

### Full version Plugins on dedicated pages

To access the archive page for each **WDA** Custom Post type, change `Admin/Settings/Permalink Settings/Permalink Stucture` to 'Post Name'.

Then in `Admin/Settings/Appearance/Menu` add a Custom Link for each plugin archive page as follows:


`to do : go through example - case studies
- create page / or access existing template page?
- add to menu`

`Case Studies - http://web-dev-agent-example-site/casestudy`

`Services - http://web-dev-agent-example-site/service`

`Testimonials - http://web-dev-agent-example-site/testimonial`

`Packages - http://web-dev-agent-example-site/package`




