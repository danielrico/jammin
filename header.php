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


  <?php if (have_posts()):while(have_posts()):the_post();endwhile;endif;?>
  <!-- Facebook Opengraph -->
      <meta property="og:url" content="<?php the_permalink() ?>"/>
  <?php if (is_single()) { ?>
      <meta property="og:title" content="<?php wp_title('-') ?>" />
      <meta property="og:image" content="<?php
        $attachment_id = get_field('post_image');
        $size = "full";
        $image = wp_get_attachment_image_src( $attachment_id, $size );
      ?>
      <?php echo $image[0]; ?>" />
  <?php } else { ?>
      <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
      <meta property="og:description" content="<?php bloginfo('description'); ?>" />
      <meta property="og:type" content="website" />
      <meta property="og:image" content="<?php bloginfo( 'template_url' ); ?>/img/screenshot.png"/>
  <?php } ?>


  <!--<meta property="og:image" content="<?php bloginfo( 'template_url' ); ?>/img/screenshot.png"/>-->
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
	<header>
		<div id="logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
    </div>
	</header>