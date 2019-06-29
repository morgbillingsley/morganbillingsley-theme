<?php
/*
    Template Name: Contact
*/
?>
<?php get_header(); ?>
    <div class="main app text-center" id="main">
        <div class="image-bg">
            <div class="hero-section pb-5">
                <div class="container nopadding">
                    <div class="col-md-12 center">
                        <div class="hero-content">
                            <h1 class="wow fadeInUp" data-wow-delay="0.1s">Contact Me</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">And ler's get to work on your next project.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="m-4">

        <p class="text-center w-responsive mx-auto mb-5">Have a question? Please don't hesitate to contact me using the form below.<br>
            I will be happy to give you a free consultation and answer any questions you may have.<br>
            I look forward to speaking with you.
        </p>

        <div class="row">

            <div class="container">
                <form action="<?php echo esc_url(admin_url("admin-post.php")); ?>" method="POST">
                    <input type="hidden" name="action" value="contact">
                    <div class="row">

                        <div class="col-md-3 col-sm-6 form-group">
                            <label for="name">First Name:</label>
                            <input type="text" id="fname" name="fname" placeholder="First Name" class="form-control">
                        </div>

                        <div class="col-md-3 col-sm-6 form-group">
                            <label for="name">Last Name:</label>
                            <input type="text" id="lname" name="lname" placeholder="Last Name" class="form-control">
                        </div>
                        
                        <div class="col-md-6 form-group">
                            <label for="name">Phone Number:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">+1</span>
                                </div>
                                <input type="text" id="phone" name="phone" placeholder="Phone" class="form-control">
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="name">Email Address:</label>
                            <input type="email" id="email" name="email" placeholder="Email" class="form-control">
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-12 form-group">
                            <label for="name">Your Message:</label>
                            <textarea type="text" id="message" name="message" placeholder="Message" rows="2" class="form-control md-textarea"></textarea>
                        </div>
                    </div>

                    <div class="text-center text-md-left">
                        <button class="btn btn-primary" type="submit">Send</button>
                    </div>

                </form>

            </div>

        </div>

    </section>
    <?php get_footer(); ?>