<?php get_header(); ?>
    <div class="main app form" id="main">
        <div class="image-bg">
            <div class="hero-section">
                <div class="container nopadding">
                    <div class="col-md-12 center">
                        <div class="hero-content">
                            <h1 class="wow fadeInUp" data-wow-delay="0.1s">Morgan Billingsley Software Development</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Building powerful, interactive applications using advanced technology <br class="hidden-xs">and expert design.</p>
                            <button class="btn btn-primary btn-action btn-fill" onclick="window.open('#'); fbq('track', 'Contact');">Build My Site</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="app-features text-center" id="features">
            <div class="container">
                <h1 class="wow fadeInDown" data-wow-delay="0.1s">What do I Offer?</h1>
                <p class="wow fadeInDown" data-wow-delay="0.2s"> I will provide everything your business needs to get started online<br class="hidden-xs">
                from highly advanced database management to free professionail email service. </p>
                <div class="row">
                    <div class="col-md-4 col-sm-6 pb-4">
                        <div class="card">
                            <div class="card-body text-center">
                            <i class="material-icons text-primary" style="font-size: 68px;">desktop-windows</i>
                                <h5 class="card-title">Desktop Applications</h5>
                                <p class="card-text">A desktop app can be excellent for marketability, but even better for internal use.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 pb-4">
                        <div class="card">
                            <div class="card-body text-center">
                            <i class="material-icons text-primary" style="font-size: 68px;">smartphone</i>
                                <h5 class="card-title">Mobile Applications</h5>
                                <p class="card-text">Your next billion-dollar idea is waiting to be introduced to the app store.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 pb-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <i class="material-icons text-primary" style="font-size: 68px;">dashboard</i>
                                <h5 class="card-title">Web Applications</h5>
                                <p class="card-text">Take your business beyond a static web page. Make your app accessible with a url.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 pb-4">
                        <div class="card">
                            <div class="card-body text-center">
                            <i class="material-icons text-primary" style="font-size: 68px;">folder</i>
                                <h5 class="card-title">Data Structure</h5>
                                <p class="card-text">The most vital issues almost always begin with how your data is being organized.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 pb-4">
                        <div class="card">
                            <div class="card-body text-center">
                            <i class="material-icons text-primary" style="font-size: 68px;">lock</i>
                                <h5 class="card-title">Cyber Security</h5>
                                <p class="card-text">No business can afford to lose a battle against an attack from a malicious hacker.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 pb-4">
                        <div class="card">
                            <div class="card-body text-center">
                            <i class="material-icons text-primary" style="font-size: 68px;">cloud</i>
                                <h5 class="card-title">Server Assistance</h5>
                                <p class="card-text">Cloud computing technology now allows us to host remotely... What's your best option?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pitch text-center">
            <div class="container">
                <div class="pitch-intro">
                    <h1 class="wow fadeInDown" data-wow-delay="0.2s">Find out More</h1>
                    <p class="wow fadeInDown" data-wow-delay="0.2s"> If you need to know some more information, or you want to get started on your project, click the button below and let's get to work!</p><br>
                    <button class="btn btn-primary btn-action btn-fill" onclick="window.open('<?php get_post_permalink(8); ?>'); fbq('track', 'Contact');">Contact Me</button>
                </div>
            </div>
        </div>
        <div class="cta-sub no-color">
            <div class="container">
                <div class="cta-inner">
                    <h1 class="wow fadeInUp" data-wow-delay="0s">Have you visited my social media pages yet?</h1>
                </div>
                <div class="row social-links mx-auto">
                    <div class="col-md-12">
                        <a href="https://www.facebook.com/morgbillingsley/" class="m-2"><i class="ion-social-facebook"></i></a>
                        <a href="https://www.instagram.com/morgbillingsley/" class="m-2"><i class="ion-social-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/morgan-billingsley/" class="m-2"><i class="ion-social-linkedin"></i></a>
                        <a href="https://twitter.com/MorgBillingsley" class="m-2"><i class="ion-social-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="review-section" class="review-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <div class="reviews">
                            <div class="review-single"><img class="rounded-circle" src="<?php bloginfo('template_url'); ?>/images/me.jpeg" />
                                <div class="review-text wow fadeInUp" data-wow-delay="0.2s">
                                    <p>Morgan is the founder and president of Morgan Billingsley Software Development <br> email him at morgan@morganbillingsley.com or call at (208) 918-2941</p>
                                    <h3>Morgan Billingsley</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="pricing" class="pricing-section text-center">
            <div class="container">
                <div class="row nopadding">
                    <div class="pricing-intro text-center mx-auto">
                        <h1 class="wow fadeInUp" data-wow-delay="0s">For Custom Plans</h1>
                        <p class="wow fadeInUp" data-wow-delay="0.2s"> Please <a href="<?php get_post_permalink(8); ?>">contact me</a></p>
                    </div>
                </div>
            </div>
        </div>
        <?php get_footer(); ?>