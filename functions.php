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


?>