<?php get_header(); ?>
    <div class="container">
        <div class="text-center p-4">
            <?php if(is_category()) : ?>
                <h1><?php echo single_cat_title(); ?></h1>
            <?php endif; ?> 
        </div>
        <?php get_template_part('content'); ?>
    </div>
</div>
<?php get_footer(); ?>