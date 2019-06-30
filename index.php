<?php get_header(); ?>
    <div class="container">
        <div class="text-center p-4">
            <h1><?php get_the_title(); ?></h1>
        </div>
        <div class="row">
            <div class="col-md-8">
                <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                        <div class="card mb-4">
                            <?php if(has_post_thumbnail()) : ?>
                                <img class="card-img-top" src="<?php the_post_thumbnail_url('full'); ?>">
                            <?php else : ?>
                                <img class="card-img-top" src="https://via.placeholder.com/1200x700">
                            <?php endif; ?>
                            <div class="card-body">
                                <p class="text-center text-primary m-1"><small>Category</small></p>
                                <h4 class="card-title text-center"><?php the_title(); ?></h4>
                                <p class="card-text"><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <div class="card">
                        <div class="card-body">
                            <p>There are no posts that match this query. Please check the url bar and try again.</p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img class="card-img-top" src="https://via.placeholder.com/1200x700" alt="Card image cap">
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