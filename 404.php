
<?php get_header();   ?>
 
<div class="container">
    <div class="row">
        <div class="col-8">
        <h1>Page not found</h1>
 
            <img src="<?php echo get_template_directory_uri(); ?>/img/404.jpg" alt="404" style="width:100%"    >

        </div>
        <div class="col-4">
        <?php 
          get_search_form(); 
         ?>
        </div>
    </div>
    
</div>





<?php get_footer();   ?> 