<?php get_header(); ?>

<div id="page">

  <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <div id="content"><?php the_content(); ?></div>
   <?php endwhile; ?>
  <?php endif; ?>

  <?php echo do_shortcode("[authoravatars avatar_size=64 show_name=true show_biography=true]"); ?>

</div>

<?php get_footer(); ?>


