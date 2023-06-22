<footer>

   <ul>
      <li>
         <a href="home.html">
            <?php if ( function_exists( 'the_custom_logo' ) ) {
               the_custom_logo();
            } ?>
         </a>
      </li>
      <li>
         <?php wp_nav_menu(
            array(
               'theme_location' => 'footer-menu'
            )
         ); ?>     
      </li>
      <li>addresses here</li>
   </ul>

   <ul class="footnote">
      <li>
         <div class="footer_copyright"><?php echo esc_html(get_theme_mod('wda_copyright'));?></div>
      </li>
   </ul>

</footer>

<?php // load all enqueqed assets ?>
<?php  wp_footer(); ?>

</body>
</html>