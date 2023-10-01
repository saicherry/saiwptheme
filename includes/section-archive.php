<?php
if (have_posts()):
    while (have_posts()):
        the_post();
        ?>
        <div class="card mb-3">
            <div class="card-body">
            <?php if(has_post_thumbnail()): ?>
   <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail">

  <?php endif;?>
                <h3>
                    <?php the_title(); ?>
                </h3>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="btn btn-success">Read more</a>
                <?php echo "<br>"?>
                <p>Tags :
                <?php
                $tags = get_the_tags();
                foreach ($tags as $tag): ?>
                    <a href="<?php echo get_tag_link($tag->term_id); ?>" class="badge rounded-pill text-bg-info">
                        <?php echo $tag->name; ?>
                    </a>
                <?php endforeach; ?>
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
            </div>
        </div>
    <?php endwhile; else: endif ?>