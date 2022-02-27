<?php get_header();?>
<section class="page-wrapper">
    <div class="container">
        <?php 
            if(has_post_thumbnail()):?>
            <img src="<?php the_post_thumbnail_url('home-large');?>" alt="<?php the_title(); ?>" class="mb-3">
        <?php endif; ?>
        <h1><?php the_title();?></h1>

        <?php get_template_part('includes/section', 'content');?>

        <?php get_search_form();?>  
    </div>
</section>
    

<?php get_footer();?>