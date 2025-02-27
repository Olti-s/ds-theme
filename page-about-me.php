<?php
    // Template Name: About Page
?>

<?php  get_header();     ?>

<div class="container">
  <div class="first">
    <h1>About page posts</h1>
      <?php
        if(have_posts()):
        while(have_posts()): the_post();?>
      <h2><?php   the_title();   ?></h2>
      <p><?php the_content();   ?></p>
      <?php endwhile;   ?>
      <?php endif;?>
  </div>
  <div class="second">
          <h1>Sidebar</h1>
  </div>

 
</div>



<?php  get_footer()  ;   ?>

 