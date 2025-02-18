<?php 

function add_theme_script(){
 wp_enqueue_style("style",get_template_directory_uri()."/style.css",false,"1.0","all");
 wp_enqueue_script("main",get_template_directory_uri()."/js/main.js",array('jquery'),"1.0",  true);
  
 if(is_singular() && comments_open() && get_option('thread-comments') ){
    wp_enqueue_script('comment-replay');
 }
}

              
add_action("wp_enqueue_scripts","add_theme_script");
?>