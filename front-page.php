<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />
  <meta name="keywords" content="music, live, streaming, curated, songs">
  <meta name="description" content="Each week, (re)discover a live song, carefully hand-picked by our fine team of music connoisseurs.">
  <meta property="og:image" content="<?php bloginfo( 'template_url' ); ?>/img/screenshot.png"/>
  <title>
    <?php bloginfo('name') ?>
    <?php if ( is_404() ) : ?> - <?php _e('Not Found') ?>
      <?php elseif ( is_home() ) : ?> - <?php bloginfo('description') ?>
      <?php else : ?><?php wp_title('-') ?>
    <?php endif ?>
  </title>
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php wp_head(); ?>
  <link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/favicon.png" type="image/png">
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
</head>

<body <?php body_class(); ?>>

  <div id="bg_img" style="background-image:url(<?php bloginfo( 'template_url' ); ?>/img/bg_front.jpg)"></div>
  <main>
    <div id="inner">
      <div id="front_logo">
        <img src="<?php bloginfo( 'template_url' ); ?>/img/logo_jammin.svg" alt="Jamm.in logo" />
      </div>
      <div class="content">
        <?php if(have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>

      <!-- Begin MailChimp Signup Form -->
      <div id="mc_embed_signup">
        <form action="http://jamm.us8.list-manage1.com/subscribe/post?u=85d1a88939ef01406658b6202&amp;id=862b5acf49" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <h2>Subscribe and get the song directly in your inbox</h2>
          <div class="form_elements">
            <div class="mc-field-group">
              <input type="email" value="Your email" name="EMAIL" class="required email" id="mce-EMAIL">
            </div>
            <div id="mce-responses" class="clear">
              <div class="response" id="mce-error-response" style="display:none"></div>
              <div class="response" id="mce-success-response" style="display:none"></div>
            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;"><input type="text" name="b_85d1a88939ef01406658b6202_862b5acf49" tabindex="-1" value=""></div>
            <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
          </div>
          <span class="additional_info">No more than one mail each week. No spam.</spam>
        </form>
      </div>
      <!--End mc_embed_signup-->

    </div>
    <div id="credit">Photo by <a href="https://www.flickr.com/photos/8364994@N02/" target="_blank">Miss.Libertine</a></div>
    <footer>
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
  </main>
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