<?php 

function add_theme_scripts(){
 wp_enqueue_style('style',get_template_directory_uri()."/style.css",false,'1.0',"all");

}

add_action("wp_enqueue_scripts","add_theme_scripts");
?>