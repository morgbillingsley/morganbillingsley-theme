<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116911191-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-116911191-3');
    </script>
    <!-- Google Analytics -->

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        <?php bloginfo('name'); ?> |
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/images/emblem_circle.png" type="image/png" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="keywords" content="Website Design, Web Design, Morgan Billingsley, Web App, Build My Website, Website Builder">
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,500,600,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">
    <!-- Resource style -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Resource style -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="all" />

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '2254829784768274');
        fbq('track', 'PageView');
    </script>
    <?php wp_head(); ?>
</head>
<body>
    <!-- Facebook Pixel Code -->
    <script>
    fbq('track', 'ViewContent', {
    value: 1,
    });
    </script>
    <!-- End Facebook Pixel Code -->

    <div class="wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary nav-shadow">

            <a class="navbar-brand" href="#">MorganBillingsley</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="basicExampleNav">

                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="http://morganbillingsley.com/">Home
                        <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">My Work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_permalink(8); ?>">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Content</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <h5 class="dropdown-header">Categories</h5>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item mt-2 mb-2" href="#">Machine Learning</a>
                            <a class="dropdown-item mt-2 mb-2" href="#">Programming</a>
                            <a class="dropdown-item mt-2 mb-2" href="#">Blockchain</a>
                        </div>
                    </li>
                </ul>

                <?php get_search_form(); ?>

            </div>

        </nav>