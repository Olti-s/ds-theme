<?php  get_header();     ?>


<h1>hello</h1>
<div >
<?php
  if(have_posts()):
  while(have_posts()): the_post();?>
<h2><?php   the_title();   ?></h2>
<small class="post-categories"><?php the_time('Y/m/d');  ?>  in <?php the_category(); ?> </small>
<?php the_post_thumbnail(array(200,200)); ?>
<p><?php the_content();   ?></p>
<?php endwhile;   ?>
<?php endif;?>
 

  </div>
<?php  get_footer()  ;   ?>

 