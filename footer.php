<footer>

   <ul>
      <li>
         <a href="home.html">
            <h5>webstudio kimono</h5>
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