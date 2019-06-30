<?php get_header(); ?>
    <div class="container">
        <div class="text-center p-5">
            <h1><?php single_cat_title(); ?></h1>
        </div>
        <?php get_template_part('content'); ?>
    </div>
</div>
<?php get_footer(); ?>