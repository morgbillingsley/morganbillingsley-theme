<form action="/" method="get" class="form-inline">
    <div class="input-group">
        <input class="search-bar bg-transparent" type="text" name="s" id="search" placeholder="Search" aria-label="Search in <?php echo home_url( '/' ); ?>" value="<?php the_search_query(); ?>">
        <div class="input-group-append">
            <button class="btn search-btn" type="submit"><i class="icon ion-ios-search"></i></button>
        </div>
    </div>
</form>