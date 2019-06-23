<?php get_header(); ?>
    <div style="height:150px;"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form action="<?php echo esc_url(admin_url("admin-post.php")); ?>" method="post">
                    <input type="hidden" name="action" value="contact">
                    <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="text" class="form-control" name="fname">
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text" class="form-control" name="lname">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <div class="input-group-addon">+1</div>
                        <input type="text" class="form-control" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" class="form-control" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>