<?php

/*
Template Name: Contact us

*/

?>

<?php get_header();?>

<div class="container">
    <?php 
        if(has_post_thumbnail()):?>
        <img src="<?php the_post_thumbnail_url('contact-medium');?>" alt="<?php the_title(); ?>" class="mb-3">
    <?php endif; ?>
    <h1><?php the_title();?></h1>

    <div class="row">
        <div class="col-lg-6">
            Contact Form
        </div>
        <div class="col-lg-6">
            <?php get_template_part('includes/section', 'content');?>
        </div>
    </div>

</div>

<?php get_footer();?>