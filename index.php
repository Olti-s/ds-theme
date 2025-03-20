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
<button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-secondary">Secondary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button>
<button type="button" class="btn btn-link">Link</button>




</div>
<?php endwhile;   ?>
<?php endif;?>
 

  </div>
  
  <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php bloginfo("template_directory");?>/img/image.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo("template_directory");?>/img/image2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo("template_directory");?>/img/image3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



<div id="sidebar-primary" class="sidebar">
  <?php if (is_active_sidebar('primary')):  ?>
      <?php dynamic_sidebar('primary');?>
  <?php else :?>
    <!-- Add some text or widgetss -->
     <?php endif;?>
</div>

<div id="primary" class="sidebar"> 
  <?php do_action('before_sidebar' );?>
  <?php if(! dynamic_sidebar( 'sidebar_primary')): ?>
    <aside id="search" class="widget_search">
      <?php get_search_form();?>
    </aside>
    <aside id="archives" class="widget">
      <h3 class="widget_title"><?php _e('Archives', 'shape');?></h3>
      <ul>
        <!-- <?php wp_get_archive( array('type' => 'monthly'));?> -->
      </ul>
    </aside>

    <aside id="meta" class="widget">
      <h3 class="widget_title"><?php _e('Meta', 'shape');?></h3>
      <ul>
        <?php wp_register(); ?>
        <li><?php wp_loginout();?></li>
        <?php wp_meta();?>
      </ul>
    </aside>
  <?php endif;?>
</div>
<?php  get_footer()  ;   ?>

 