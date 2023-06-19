<footer>

   <ul>
      <li>
         <a href="home.html">
            <img class="logo" style="max-height:80px;border:solid 5px black;" 
            src="./imgs/logo-outlinecss-education.jpg" alt="logo" />
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

      <!-- to do : insert copyright_from() 
         Copyright &#169; ` + copyright_from(2022) + `-->
         Copyright &#169;
      </li>
   </ul>

</footer>

<?php // load all enqueqed assets ?>
<?php  wp_footer(); ?>

</body>
</html>