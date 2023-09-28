<?php
if( have_posts() ):while( have_posts() ): the_post();
?>

<p><?php echo get_the_date('l jS F, Y'); ?></p> 

<?php the_content(); ?>
<?php 
$fname = get_the_author_meta('first_name');
$lname = get_the_author_meta('last_name');
?>

<p>Posted by <?php echo $fname; ?> <?php echo $lname; ?></p>

<p>Tags :
<?php 
$tags = get_the_tags();
foreach($tags as $tag):?>
     <a href="<?php echo get_tag_link( $tag->term_id ); ?>" class="badge rounded-pill text-bg-info">
    <?php echo $tag->name; ?>
     </a>    
<?php endforeach;?>
</p>

<p>Caterogy :
                    <?php 
                    $categories = get_the_category();
                    foreach($categories as $category): ?>
                    <a href="<?php echo get_category_link( $category->term_id ); ?>" class="badge rounded-pill text-bg-danger">
                         <?php echo $category->name; ?>
                    </a>
                    <?php endforeach; ?>
                </p>

<?php endwhile; else: endif ?>