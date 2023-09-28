<?php get_header(); ?>

<!-- <h1>This is specific template for category page</h1> -->

<section class="page-wrap">

    <div class="container">
    <h1><?php echo single_cat_title(); ?></h1>

        <?php
        get_template_part('includes/section', 'archive');
        ?>
        <?php previous_posts_link(); ?>
        <?php next_posts_link(); ?>


    </div>
</section>
<?php get_footer(); ?>