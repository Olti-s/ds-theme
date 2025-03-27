<?php get_header() ;  ?>

<div class="row">
    <div class="col-lg-8">
       <?php
       if(have_posts()):
        while(have_posts()):  the_post();?>
        <article id="post <?php the_ID();  ?>" class="<?php post_class();  ?>" >
            <?php the_title();  ?>
             <div class="pull-right"><?php the_post_thumbnail();  ?></div>
             <small>
                <?php the_category();  ?> || <?php the_tags();   ?>  || <?php edit_post_link();   ?>
             </small>
             <?php  the_content(); ?>
        </article> 
       <hr>
       <?php 
       if(comments_open()){
        comments_tempalte();
       }else{
        echo"<h5>Sorry, comments are closed!!!</h5>";
       }
    
       ?>
       <?php endwhile;
         endif;
       ?>
       
    </div>
    <div class="col-lg-4">
      <?php 
       if(is_active_sidebar("sidebar_1")){?>
         <ul>
            <?php dynamic_sidebar("sidebar_1");  ?>
         </ul>
         <?php }  ?>
       
      
    </div>
</div>

<?php get_footer() ;  ?>