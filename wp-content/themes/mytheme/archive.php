<?php get_header();?>
<section class="page-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <h1><?php echo single_cat_title();?></h1>
                <?php get_template_part('includes/section', 'archive');?>
            </div>
            <div class="col-lg-3">
                <?php if(is_active_sidebar('blog-sidebar') ): ?>
                    <?php dynamic_sidebar('blog-sidebar'); ?>
                <?php endif; ?>
            </div>
        </div>
        <?php 
            global $wp_query;
            $pager = 999999999; // need an unlikely integer
        
                echo paginate_links( array(
                    'base' => str_replace( $pager, '%#%', esc_url( get_pagenum_link( $pager ) ) ),
                    'format' => '?paged=%#%',
                    'current' => max( 1, get_query_var('paged') ),
                    'total' => $wp_query->max_num_pages
                ) );
            ?>
        <!-- <?php previous_posts_link();?>
        <?php next_posts_link();?> -->
    </div>
</section>
<?php get_footer();?> 
 


