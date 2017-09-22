<?php 
add_theme_support( 'post-thumbnails' );

// add_image_size( 'recomienda', 273, 178, true);
// add_image_size( 'top-home', 279, 182, true);
// add_image_size( 'top-home-large', 570, 380, true);


define("THEME_DIR", get_template_directory_uri());
function enqueue_styles() {
	wp_register_style( 'style', THEME_DIR.'/style.css', array(), '1', 'all' );
	wp_enqueue_style( 'style' );
	wp_register_style( 'font', 'https://fonts.googleapis.com/css?family=Glegoo:400|Kalam:400,700|Poppins:300', array(), '1', 'all' );
	wp_enqueue_style( 'font' );
	wp_register_style( 'awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '1', 'all' );
	wp_enqueue_style( 'awesome' );
}
function enqueue_scripts(){
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), array(), '1', true );
	wp_enqueue_script( 'jquery' );
	wp_register_script( 'script', THEME_DIR . '/js/script.js', array('jquery'), '1', false );
	wp_enqueue_script( 'script' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

function remove_image_size_attributes( $html ) {
    return preg_replace( '/(width|height)="\d*"/', '', $html );
}
// Remove image size attributes from post thumbnails
add_filter( 'post_thumbnail_html', 'remove_image_size_attributes' );
 
// Remove image size attributes from images added to a WordPress post
add_filter( 'image_send_to_editor', 'remove_image_size_attributes' );

function excerpt($limit) {
      $excerpt = explode(' ', get_the_excerpt(), $limit);
      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
      } else {
        $excerpt = implode(" ",$excerpt);
      } 
      $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
      return $excerpt;
    }
?>