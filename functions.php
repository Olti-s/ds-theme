<?php 

function add_theme_script(){
 wp_enqueue_style("style",get_template_directory_uri()."/style.css",false,"1.0","all");
 wp_enqueue_style("main",get_template_directory_uri()."/css/main.css",false,"1.0","all");
 wp_enqueue_script("main",get_template_directory_uri()."/js/main.js",array('jquery'),"1.0",  true);
 wp_enqueue_style("bootstrap.min",get_template_directory_uri()."/css/bootstrap.min.css",false,"1.0","all");
 wp_enqueue_script("bootstrap.bundle.min",get_template_directory_uri()."/js/bootstrap.bundle.min.js",array('jquery'),"1.0",  true);
  
 if(is_singular() && comments_open() && get_option('thread-comments') ){
    wp_enqueue_script('comment-replay');
 }
}

              
add_action("wp_enqueue_scripts","add_theme_script");


function ds_set_up(){
   add_theme_support('menus');
   register_nav_menu('primary','Primary Navigation');
    
}

add_action("init","ds_set_up");
add_theme_support("post-thumbnails");


function themename_widgets_init(){
   register_sidebar( array(
      'name' => __('Primary Sidebar', 'theme_name'),
      'id' => 'sidebar_1',
      'before_widget ' => '<aside id="%1$s" class="widget %2$s">  ',
      'after_widget' => '</aside>',
      'before_title' => '<h3 class="widget_title">',
      'after_title' => '</h3>'
   ));

   register_sidebar( array(
      'name' => __('Secondary Sidebar', 'theme_name'),
      'id' => 'sidebar_2',
      'before_widget ' => '<ul><li id="%1$s" class="widget %2$s">  ',
      'after_widget' => '</li></ul>',
      'before_title' => '<h3 class="widget_title">',
      'after_title' => '</h3>'
   ));
};


function create_post_type(){
   $labels =array(
      'name'=>__('Movies'),
      'singular_name'=>__('movie'),
      'add_new'=>__("Add Movie", 'movie'),
      'add_new_item'=>__('Add New Movie'),
      'edit item'=>__("Edit Movie"),
      'new_items'=>__("New Movie"),
      'add_items'=>__('All Movies'),
      'view_item'=>__('View Movie'),
      'search_items'=>__('Search Movie'),
      'not_found'=>__('No Movies found'),
      'not_found_in_trash'=>__('No Movies found in trash'),
      'menu_name'=>"Movie"

   );
   $args=array(
      'labels'=>$labels,
      'description'=>"Movie and single movie details",
      'public'=>true,
      'menu_position'=>5,
      'supports'=>array('title','editor','thumbnail', 'excerpt','comments'  ),
      'menu_icon'=>'dashicons-button',
      'has_archive'=>true
   );
   register_post_type("movie",$args);
};

add_action('init','create_post_type');

?>