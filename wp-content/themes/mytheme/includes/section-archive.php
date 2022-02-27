<?php if(have_posts() ): while(have_posts() ): the_post(); ?>
    <div class="card mb-3">
        <div class="card-body row justify-content-between">
            <?php 
            if(has_post_thumbnail()):?>
            <div class="col-4 ">
                <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title(); ?>" class="mb-3 img-thumbnail">
            <?php endif; ?>
            </div>
            <div class="col-8">
                <h2><?php the_title();?></h2>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink();?>" class="btn btn-success">Read More</a>
            </div>
        </div>
    </div>
<?php endwhile; else: endif; ?>

