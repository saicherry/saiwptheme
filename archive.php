<?php get_header(); ?>
<!-- <h1>This is specific template for list of all posts</h1> -->

<section class="page-wrap">


<div class="container">
  <div class="row">
    <div class="col-8">
    <h1><?php echo single_cat_title(); ?></h1>
        <?php
        get_template_part('includes/section', 'archive');
        ?>
        <?php previous_posts_link(); ?>
        <?php next_posts_link(); ?>
    </div>
    <div class="col-4">
    <?php if (is_active_sidebar('blog-sidebar')): ?>
      <?php dynamic_sidebar('blog-sidebar'); ?>
    <?php endif; ?>
    </div>
   
  </div>
</div>




  
<div class="container">

    <?php if (is_active_sidebar('blog-sidebar')): ?>
      <?php dynamic_sidebar('blog-sidebar'); ?>
    <?php endif; ?>

        <h1><?php echo single_cat_title(); ?></h1>
        <?php
        get_template_part('includes/section', 'archive');
        ?>
        <?php previous_posts_link(); ?>
        <?php next_posts_link(); ?>


    </div>
    
</section>
<?php get_footer(); ?>