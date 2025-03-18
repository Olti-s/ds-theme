

<?php get_header() ;  ?>

<div class="row">
    <div class="col-lg-8">
      <?php if(have_posts()):
        ?>
        <h6>Searched for:<?php get_search_query();  ?></h6>
        <?php 
            while(have_posts()): the_post();?>
            <h1><a href="<?php the_permalink();  ?>"><?php the_title();  ?></a></h1>
        <?php
        endwhile;
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