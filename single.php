<?php get_header(); ?>
<!-- <h1>This is specific template for Single post</h1> -->

<section class="page-wrap">

<div class="container">

<?php if(has_post_thumbnail()): ?>
   <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail">

  <?php endif;?>
    <h1><?php the_title(); ?></h1>
  
<?php
  get_template_part('includes/section','blogcontent'); 
?>

<?php wp_link_pages(); ?>

<?php comments_template(); ?>


</div>
</section>
<?php get_footer(); ?>