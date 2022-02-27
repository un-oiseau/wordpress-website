<?php if(have_posts() ): while(have_posts() ): the_post(); ?>

    <p><?php echo get_the_date('l jS F, Y h:i:s');?></p>
     
    <?php the_content(); ?>

    <!--  Show tags -->
    <?php 
        $tags = get_the_tags();
        foreach($tags as $tag): ?>
        <div class="btn btn-success">
            <a href="<?php echo get_tag_link($tag->term_id);?>" class="badge text-white">
                <?php echo $tag->name; ?>
            </a>
        </div>
        <?php endforeach;?>


    <!-- Show categories -->
    <?php 
        $categories = get_the_category();
        foreach($categories as $category): ?>
        <a href="<?php echo get_category_link($category->term_id);?>"><?php echo $category->name; ?></a>
    <?php endforeach; ?>

    <!-- Show comments section -->

    <?php // comments_template(); ?>

<?php endwhile; else: endif; ?>