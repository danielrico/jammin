<?php get_header(); ?>

    <div id="bg_img" style="background-image:url(<?php bloginfo( 'template_url' ); ?>/img/bg_404_alt.jpg)"></div>
    <main>
      <div id="inner" class="page_not_found">
        <strong>We can't find the page you're looking for.</strong>
        <span>Go back to the <a href="<?php echo esc_url( home_url( '/' ) ); ?>">homepage</a></span>
        <div id="credit">Photo by <a target="_blank" href="https://www.flickr.com/photos/christopherdurant/" target="_blank">Chris Durant</a></div>
    </main>

</body>
</html>