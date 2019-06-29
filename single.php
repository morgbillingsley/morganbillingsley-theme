<?php get_header(); ?>
    <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
            <?php if have_post_thumbnail() : ?>
                <header class="masthead" style="background-image: url('https://via.placeholder.com/1900x1200'); padding: 100px 0px 75px 0px;">
            <?php else : ?>
                <header class="masthead bg-secondary" style="padding: 100px 0px 75px 0px;">
            <?php endif; ?>
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="post-heading">
                            <h1><?php the_title(); ?></h1>
                            <span class="meta">Posted by
                                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
                                on <?php the_time('F j, Y g:i a'); ?>
                            </span>
                        </div>
                        </div>
                    </div>
                </div>
            </header>

        <!-- Post Content -->
            <article>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-10 mx-auto pt-4">
                            <?php the_content(); ?>

                            <hr>

                        </div>
                    </div>
                </div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p class="p-4"><?php echo 'There were no posts found for the provided query. Please check the url and try again.'; ?></p>
    <?php endif; ?>
<?php get_footer(); ?>