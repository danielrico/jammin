  <footer>
    <div class="logo">
      <img src="<?php bloginfo( 'template_url' ); ?>/img/logo_jammin.svg" alt="Logo Jamm.in" />
    </div>
    <nav>
      <?php wp_nav_menu(array( 'theme_location' => 'secondary_menu' )); ?>
    </nav>
    <nav>
      <div class="menu-social-container">
        <ul id="menu-social" class="menu">
          <li><a href="https://twitter.com/Heyjammin">Twitter</a></li>
          <li><a href="https://www.facebook.com/comejammin">Facebook</a></li>
          <li><a href="https://plus.google.com/115344125718679709486" rel="publisher">Google+</a></li>
        </ul>
      </div>      
    </nav>
    <?php wp_footer(); ?>
  </footer>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-51098340-1', 'jamm.in');
    ga('send', 'pageview');

  </script>
</body>
</html>