<?php get_header();?>
<section class="page-wrap mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <h1><?php the_title();?></h1>
                 <?php if(has_post_thumbnail()):?>
                    <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title(); ?>" class="mb-3 img-thumbnail">
                <?php endif; ?>
                <?php get_template_part('includes/section', 'content');?>
            </div>
            <div class="col-lg-3">
                <?php if(is_active_sidebar('page-sidebar') ): ?>
                    <?php dynamic_sidebar('page-sidebar'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>  
<?php get_footer();?>