<?php get_header(); ?>
    <div class="image-bg">
        <div class="hero-section">
            <div class="container nopadding">
                <div class="col-md-12 center">
                    <div class="hero-content mx-auto">
                        <h2 data-wow-delay="0.1s">Contact Me</h2>
                        <p data-wow-delay="0.2s">And lets get to work on your next project</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">Software Project</div>
                    <div class="panel-body">
                        If you're looking to launch a new application or program, and you are looking for a developer, go ahead and fill out this form. Let me know a little bit about the project and I will get back to you as soon as I can.
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">Dynamic Website</div>
                    <div class="panel-body">
                        Does your company need a powerful website? One where clients can login and make appointments? Or maybe an advanced dashboard for your customers to view invoices and pending orders? Let me know how much power you need in your website and we can get to work creating that for you.
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">Not Sure?</div>
                    <div class="panel-body">
                        If you know that you need a tech solution, but you're not exactly sure what you need, describe your problem for me in this form. I will give you a free consultation and we can figure out what the best solution is for your company.
                    </div>
                </div>
            </div>
            <div class="col-md-6">
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
                            <div class="input-group">
                                <div class="input-group-addon">+1</div>
                                <input type="text" class="form-control" name="phone">
                            </div>
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