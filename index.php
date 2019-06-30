<?php get_header(); ?>
    <div class="container mb-4">
        <div class="text-center p-5">
            <h1><?php single_post_title(); ?></h1>
        </div>
        <?php get_template_part('content'); ?>
    </div>
</div>
<?php get_footer(); ?>