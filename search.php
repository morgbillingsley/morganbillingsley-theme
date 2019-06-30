<?php
/*
    Template Name: Search Page
*/
?>
<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ul class="list-unstyled">
                    <?php if(have_posts()) : ?>
                        <?php while(have_posts()) : the_post(); ?>
                            <li class="media">
                                <?php if(has_post_thumbnail()) : ?>
                                    <img class="mr-3" src="<?php the_post_thumbnail_url('thumbnail'); ?>">
                                <?php else : ?>
                                    <img class="mr-3" src="<?php bloginfo('template_url'); ?>/images/emblem.png" height="150px" weight="150px">
                                <?php endif; ?>
                                <div class="media-body">
                                    <a class="text-decoration-none" href="<?php the_permalink(); ?>"><h5 class="mt-0 mb-1"><?php the_title(); ?></h5></a>
                                    <?php the_excerpt(); ?>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Uh Oh!</strong> There are no posts that match your query. Please check the url and try again.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img class="card-img-top" src="<?php bloginfo('template_url'); ?>/images/profile-bg.jpeg" alt="Card image cap">
                    <div class="prof-wrapper text-center">
                        <img class="prof-pic" src="https://morganbillingsley.com/wp-content/themes/morganbillingsley/images/me.jpeg">
                    </div>
                    <div class="card-body prof-pad">
                        <p class="card-text text-center">I am Morgan Billingsley, software developer and technology enthusiast. Take a look at some of the content myself and others have written to entertain and educate our users.</p>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Join my Newsletter</h5>
                        <form>
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" placeholder="Email" aria-label="Email">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button">Join!</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>