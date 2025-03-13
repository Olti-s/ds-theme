<?php 

 /* Template Name :Portfolio */


?>
<?php get_header();  ?>
<div class="row">
    <div class="col-8">
        <?php $args=["post_per_page" =>4,
          "cat "=>3
        ];
        $query=new WP_Query($args);

        if($query->have_posts()):
            while($query->have_posts()): $query->the_post();?>
            <h2><?php the_title();  ?></h2>

            <?php 
             endwhile;
            endif;
            ?>

    </div>
    <div class="col-4">

    </div>
</div>
<?php get_footer();   ?>