<?php get_header(); ?>

<div id="archives" class="wrapper">
  <div id="inner" class="cf">

    <h1>Posts by <?php the_author(); ?></h1>

    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>

      <div class="post" id="post-<?php the_ID(); ?>">
        <?php
          $attachment_id = get_field('post_image');
          $size = "archives";
          $image = wp_get_attachment_image_src( $attachment_id, $size );
        ?>
        <a href="<?php the_permalink(); ?>">
          <img src="<?php echo $image[0]; ?>" alt="Photo" />
          <span><?php the_field('song_name'); ?></span>
        </a>
        <span><?php the_field('artist_name'); ?></span>
      </div>

     <?php endwhile; ?>
    <?php endif; ?>

  </div>
</div>

<?php get_footer(); ?>