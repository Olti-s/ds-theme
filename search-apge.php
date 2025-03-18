<?php /* Template nama: Search   */      ?>

<?php get_header() ;  ?>

<div class="row">
    <div class="col-lg-8">
      <?php get_search_form(); ?>
       
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