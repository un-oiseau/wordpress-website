<?php get_header();?>
<section class="page-wrap mt-5">
    <div class="container">
        <h1><?php the_title();?></h1>
        <div class="row">
            <div class="col-lg-6">
                <?php 
                if(has_post_thumbnail()):?>
                    <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title(); ?>" class="mb-3 img-thumbnail">
                <?php endif; ?>
            </div>
            <div class="col-lg-6">
                <?php get_template_part('includes/section', 'custompost');?>

                <?php wp_link_pages();?>
            </div>
            <div class="col-lg-12 mt-5">
               <ul>
                    <li>Colour <?php the_field('color');?></li>
                    
                    <li>Registration <?php the_field('registration');?></li>
                </ul>
                <div class="row">
                    <div class="col-12">
                        <div class="row align-items-center ">
                            <div class="col-lg-6 enquiry-form">
                                <!-- Gravity form -->
                                <?php gravity_form(1, 'Enquire about this car', null, false, ['reg' => get_field('registration')], true, 100, true); ?>
                                <!-- Custom Form -->
                                <!-- <?php get_template_part('includes/form', 'enquiry');?> -->
                            </div>
                            <?php 
                                $image = get_field('contact_image');
                                $size = array(700, 700);
                            ?>
                            <?php if( $image ): ?>
                                <div class="col-lg-6">
                                    <?php echo wp_get_attachment_image( $image, $size ); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5">
                        <h3>Features 1</h3> 
                        <div class="row">
                            <div class="col-lg-6">
                                    <ul>
                                        <?php if (have_rows('features')) :?>
                                            <?php while (have_rows('features')) : the_row();
                                                $feature = get_sub_field('feature');
                                            ?>
                                                <li><?php echo $feature; ?></li>
                                            <?php endwhile;?>
                                        <?php endif;?>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul>
                                        <?php if (have_rows('features')) :?>
                                            <?php while (have_rows('features')) : the_row();
                                                $feature2 = get_sub_field('feature2');
                                            ?>
                                                <li><?php echo $feature2; ?></li>
                                            <?php endwhile;?>
                                        <?php endif;?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <div class="col-lg-6 mt-5">
                        <h3>Features 2</h3> 
                        <div class="row">
                            <div class="col-lg-6">
                                <?php $rows = get_field('features'); ?>
                                <?php if( $rows ) :?>
                                    <?php $feature = $row['feature']; ?>
                                            <li>
                                                <?php echo $feature; ?>
                                            </li>
                                    </ul>
                                <?php endif;?> 
                            </div>
                            <div class="col-lg-6">
                            <?php if( $rows ) :?>
                                <ul class="slides">
                                    <?php foreach( $rows as $row ) :?> 
                                        <?php $feature2 = $row['feature2']; ?>
                                        <li>
                                            <?php echo $feature2; ?>
                                        </li>
                                    <?php endforeach;?>
                                </ul>
                            <?php endif;?> 
                        </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <?php 
                $gallery = get_field('gallery');
                
                if( $gallery ): ?>
                    <ul class="gallery text-center">
                        <?php foreach( $gallery as $image ): ?>
                            <a href="<?php echo $image['sizes']['blog-large']; ?>">
                                <img src="<?php echo $image['sizes']['blog-small']; ?>" alt="car" class="img-fluid img-thumbnail w-25 h-50">
                            </a>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; 
            ?>
        </div>
    </div>
</section>
<?php get_footer();?>