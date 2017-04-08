<?php

function my_scripts_method() {
    
    wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css', false ); 
    wp_enqueue_style( 'core', get_template_directory_uri().'/style.css', false ); 
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.1.1.slim.min.js',false,'',true);
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'tether', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js',false,'',true);
    wp_enqueue_script( 'bootstrp', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js',false,'',true);
    wp_enqueue_script( 'myjs', get_template_directory_uri().'/scripts.min.js',false,'',true);
    wp_enqueue_script( 'fontawsome', 'https://use.fontawesome.com/4da6afe776.js',false,'',true);
    

}    
 
add_action('wp_enqueue_scripts', 'my_scripts_method');

//add featured image to post--------------------------------------------
add_theme_support( 'post-thumbnails' );

//excerpt------------------------
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
    return '[.....]';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

//获取第一个图片
function catch_that_image() {
global $post, $posts;
$first_img = '';
ob_start();
ob_end_clean();
$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
$first_img = $matches [1] [0];
if(empty($first_img)){ //Defines a default image
$popimg=get_option( 'mao10_popimg');
$first_img = "$popimg";
}
return $first_img;
}
 
function mmimg($postID) {
 $cti = catch_that_image();
 $showimg = $cti;
 has_post_thumbnail();
 if ( has_post_thumbnail() ) { 
 $thumbnail_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail');
 $shareimg = $thumbnail_image_url[0];
 } else { 
 $shareimg = $showimg;
 };
 return $shareimg;
} 

//-----------multi-language------------------------------
load_theme_textdomain('nzcn-theme');


//disable plugin update
remove_action( 'load-update-core.php', 'wp_update_plugins' );
add_filter( 'pre_site_transient_update_plugins', create_function( '$a', "return null;" ) );



?>