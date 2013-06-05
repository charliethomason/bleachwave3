<?php

// Add jQuery and fancyBox styles & scripts (only jQuery on front page)
function bleachwave_add_lightbox() {
	if (is_front_page()) {
		wp_enqueue_script( 'jquery');
	} else {
		wp_enqueue_script( 'jquery' );
	    wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/inc/lightbox/js/jquery.fancybox.pack.js', array( 'jquery' ), false, true );
	    wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/inc/lightbox/js/lightbox.js', array( 'fancybox' ), false, true );
	    wp_enqueue_style( 'lightbox-style', get_template_directory_uri() . '/inc/lightbox/css/jquery.fancybox.css' );
	}
}
add_action( 'wp_enqueue_scripts', 'bleachwave_add_lightbox' );

//Add support for WordPress 3.0's custom menus
add_action( 'init', 'register_my_menu' );

//Register area for custom menu
function register_my_menu() {
    register_nav_menu( 'blog-menu', __( 'Blog Menu' ) );
}
// Remove custom menu navigation container
function my_wp_nav_menu_args( $args = '' ) {
	$args['container'] = false;
	return $args;
}
add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );

// Enable post thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(290, 200, true);

remove_action( 'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
remove_action( 'wp_head', 'feed_links', 2 ); // Display the links to the general feeds: Post and Comment Feed
remove_action( 'wp_head', 'rsd_link' ); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action( 'wp_head', 'wlwmanifest_link' ); // Display the link to the Windows Live Writer manifest file.
remove_action( 'wp_head', 'index_rel_link' ); // index link
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // prev link
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // start link
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 ); // Display relational links for the posts adjacent to the current post.
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 ); // Display relational links for the posts adjacent to the current post.
remove_action( 'wp_head', 'wp_generator' ); // Display the XHTML generator that is generated on the wp_head hook, WP version

// Register widget-enabled sidebar
if ( function_exists( 'register_sidebar' ) )
    register_sidebar();

// Add Gallery Post Format Theme Support
add_theme_support( 'post-formats', array( 'gallery' ) );

// Add Post Type Support for Posts and Galleries
add_post_type_support( 'gallery', 'post-formats' );

//Portfolio Custom Post Type Functions
require_once( 'functions-gallery.php' );

// Read more link does not jump down page on pageload 
function remove_more_jump_link($link) { 
	$offset = strpos($link, '#more-');
	if ($offset) {
		$end = strpos($link, '"',$offset);
	}
	if ($end) {
		$link = substr_replace($link, '', $offset, $end-$offset);
	}
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_jump_link' );

// Convert p tags around images to div tags
function filter_ptags_on_images($content) {
  return preg_replace('/<p[^>]*>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\/p>/', '<div class="post-image">$1</div>', $content);
}
add_filter('the_content', 'filter_ptags_on_images');

?>