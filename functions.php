<?php

// add featured image support
/*add_theme_support( 'post-thumbnails' );*/
// Image size for recettes list
if ( function_exists( 'add_image_size' ) ) { 
  add_image_size( 'archives', 540, 400, true );
}

// Custom post types
add_action('init', 'custom_init');
function custom_init()
{
register_post_type('track', array(
 'label' => __('Track'),
 'singular_label' => __('Track'),
 'public' => true,
 'show_ui' => true,
 'show_in_menu' => true,
 'menu_position' => 4,
 'capability_type' => 'post',
 'hierarchical' => true,
 'has_archive' => true,
 'query_var' => true,
 'supports' => array('title', 'editor', 'author')
));
}

// Remove CPT slug
/*add_filter('post_type_link','custom_post_type_link', 10, 3); 
function custom_post_type_link($permalink, $post, $leavename) { 
  $url_components = parse_url($permalink); 
  $post_path = $url_components['path']; 
  $post_name = end(explode('/', trim($post_path, '/'))); 
  if(!empty($post_name)) { 
    switch($post->post_type) { 
      case 'track': 
        $permalink = str_replace($post_path, '/' . $post_name . '/', $permalink); 
      break; 
    } 
  } 
  return $permalink; 
} 
function custom_pre_get_posts($query) { 
  global $wpdb; 
  if(!$query->is_main_query()) { 
    return; 
  } 
  $post_name = $query->get('name'); 
  $post_type = $wpdb->get_var( $wpdb->prepare( 'SELECT post_type FROM ' . $wpdb->posts . ' WHERE post_name = %s LIMIT 1', $post_name ) ); 
  switch($post_type) { 
    case 'track': 
      $query->set('track', $post_name); 
      $query->set('post_type', $post_type); 
      $query->is_single = true; 
      $query->is_page = false; 
    break; 
  } 
  return $query; 
} 
add_action('pre_get_posts','custom_pre_get_posts');*/

// register menus
function register_my_menus() {
  register_nav_menus(
    array( 
      'primary_menu' => __( 'Primary menu' ), 
      'secondary_menu' => __( 'Secondary menu' ),
      'social_menu' => __( 'Social menu' ))
  );
}
add_action( 'init', 'register_my_menus' );

// enqueue scripts
function load_scripts() {
  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', 'http://code.jquery.com/jquery-1.11.0.min.js');
  wp_enqueue_script( 'jquery' );
  wp_register_script( 'jammin',  get_bloginfo( 'template_directory' ) . '/js/jammin.js');
  wp_enqueue_script( 'jammin' );
  /*wp_register_script( 'typekit',  'http://use.typekit.net/isn6eoi.js');
  wp_enqueue_script( 'typekit' );*/
}    
add_action('wp_enqueue_scripts', 'load_scripts');

// load css
function load_styles() {
  wp_register_style('opensans',  'http://fonts.googleapis.com/css?family=Open+Sans:400italic,400');
  wp_enqueue_style( 'opensans');
}
add_action('wp_print_styles', 'load_styles');

// Add viewport meta tag to head
function viewport_meta() { 
  echo '<meta name="viewport" content="width=device-width" />';
}
add_filter('wp_head', 'viewport_meta');

// List only CPT posts on author page
function custom_post_author_archive($query) {
  if ($query->is_author)
    $query->set( 'post_type', array('track', 'post') );
  remove_action( 'pre_get_posts', 'custom_post_author_archive' );
}
add_action('pre_get_posts', 'custom_post_author_archive');


?>