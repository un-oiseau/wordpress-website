<?php get_header();?>
<section class="page-wrap mt-5">
    <div class="container">
        <h1>Search Results for '<?php echo get_search_query();?>'</h1>
        <div class="row">
            <div class="col-lg-9">
                <h1><?php echo single_cat_title();?></h1>
                <?php get_template_part('includes/section', 'searchresult');?>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?> 