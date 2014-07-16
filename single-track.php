<?php get_header(); ?>

<?php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post(); ?>
    <?php
      $attachment_id = get_field('post_image');
      $size = "full";
      $image = wp_get_attachment_image_src( $attachment_id, $size );
    ?>
    <div id="bg_img" style="background-image:url(<?php echo $image[0]; ?>)"></div>
    <div id="hero">
      <div id="main_infos">
        <div id="controls">
          <div id="play-button" class="active"><img src="<?php bloginfo( 'template_url' ); ?>/img/icon_play.svg" alt="Play" /></div>
          <div id="pause-button"><img src="<?php bloginfo( 'template_url' ); ?>/img/icon_pause.svg" alt="Pause" /></div>
        </div>
        <h1><?php the_field('song_name'); ?></h1>
        <h2><?php the_field('artist_name'); ?></h2>
        <h3><?php the_field('live_version_info'); ?></h3>
        <div id="view_details"><img src="<?php bloginfo( 'template_url' ); ?>/img/icon_slide_down.svg" alt="More info" /></div>
      </div>
      <iframe id="video" src="//www.youtube.com/embed/<?php the_field('video_id'); ?>?enablejsapi=1" frameborder="0" allowfullscreen></iframe>
      <div id="credit"><?php the_field('post_image_credit'); ?></div>

      <div id="share">
        <!-- AddThis Button BEGIN -->
        <a class="addthis_button" href="http://www.addthis.com/bookmark.php?v=300&amp;pubid=ra-537099e32e83c842"><img src="<?php bloginfo( 'template_url' ); ?>/img/icon_share.svg" width="32" height="32" alt="Bookmark and Share" style="border:0"/></a>
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-537099e32e83c842"></script>
        <!-- AddThis Button END -->
      </div>

      <nav>
        <div id="prev_post" title="Previous post"><?php previous_post('%', '', 'yes'); ?></div>
        <div id="next_post" title="Next post"><?php next_post('%', '', 'yes'); ?></div>
      </nav>
    </div>
    <div id="editorial" class="wrapper">
      <article>
          <?php the_field('post_description'); ?>
          <div id="author">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>index.php?author=<?php the_author_ID(); ?>">
              <?php echo get_avatar( get_the_author_meta( 'ID' ), 48 ); ?>
            </a>
            <?php the_author_posts_link(); ?>
            <span class="post_date"><?php the_date(); ?></span>
          </div>
      </article>
      <aside>
        <div class="block">
          <div title="Song title"><?php the_field('song_name'); ?></div>
          <div title="Artist name"><?php the_field('artist_name'); ?></div>
          <div title="Live infos"><?php the_field('live_version_info'); ?></div>
        </div>
        <div class="block">
          Streamed from <a href="http://youtu.be/<?php the_field('video_id'); ?>">youtu.be/<?php the_field('video_id'); ?></a>
        </div>
        <ul class="block">
        <?php if(get_field('external_links')): ?>
          <?php while(has_sub_field('external_links')): ?>
            <li><a href="<?php the_sub_field('url_site_web'); ?>" title="<?php the_sub_field('url_site_web'); ?>"><?php the_sub_field('nom_site_web'); ?></a></li>
         <?php endwhile; ?>
        <?php endif; ?>
        </ul>
      </aside>
    </div>
  <?php endwhile; ?>
<?php endif; ?>

<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup" class="wrapper">
  <form action="http://jamm.us8.list-manage1.com/subscribe/post?u=85d1a88939ef01406658b6202&amp;id=862b5acf49" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <h2>Subscribe by email and get a new song in your inbox each week.</h2>
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
  </form>
</div>
<!--End mc_embed_signup-->

<div id="overlay">
  <div id="modal_player"></div>
</div>

<?php get_footer(); ?>