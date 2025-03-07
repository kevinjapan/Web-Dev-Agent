<?php
// Global Page Footer
// to do : make customizable/configurable footer blocks
?>
<footer class="wda_footer">
   <section class="wda_footer_content">
      <div><ul>
         <li>
            <?php // to do : logo img ?>
            <a href="<?php echo get_site_url(); ?>">
               <h5><?php echo get_bloginfo('name'); ?></h5>
            </a>
         </li>
         <li>
            <?php wp_nav_menu(
               array(
                  'theme_location' => 'footer-menu'
               )
            ); ?>     
         </li>
         <li></li>
      </ul></div>
      <div><ul>
         <li>
            <?php // to do : logo img ?>
            <a href="<?php echo get_site_url(); ?>">
               <h5><?php echo get_bloginfo('name'); ?></h5>
            </a>
         </li>
         <li>
            <?php wp_nav_menu(
               array(
                  'theme_location' => 'footer-menu'
               )
            ); ?>     
         </li>
         <li></li>
      </ul></div>
      <div><ul>
         <li>
            <?php // to do : logo img ?>
            <a href="<?php echo get_site_url(); ?>">
               <h5><?php echo get_bloginfo('name'); ?></h5>
            </a>
         </li>
         <li>
            <?php wp_nav_menu(
               array(
                  'theme_location' => 'footer-menu'
               )
            ); ?>     
         </li>
         <li></li>
      </ul></div>
   </section>
   <ul class="footnote">
      <li class="flex fit_content">
         <div class="footer_copyright fit_content">
            <?php 
            echo esc_html(get_theme_mod('wda_copyright'));
            ?>
         </div>
         <div class="footer_copyright_auto_complete fit_content">
            <?php
            $inc_auto_complete = get_theme_mod('wda_copyright_auto_complete');
            if($inc_auto_complete) {
               echo esc_html(' - ' . date("Y"));
            }
            ?>
         </div>
      </li>
   </ul>
</footer>

<?php // load all enqueqed assets ?>
<?php  wp_footer(); ?>

</body>
</html>