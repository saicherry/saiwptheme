<?php 
/*
Template Name: Secondary
*/
?>
<?php get_header('secondary'); ?>


<div class="container">
    <h1><?php the_title(); ?></h1>

    <div class="row">
        <div class="col-lg-6">
        <?php the_content(); ?>

        </div>

        <div class="col-lg-6">
        <?php the_content(); ?>

        </div>
    </div> 
</div>
<?php get_footer('secondary'); ?>