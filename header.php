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
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.theme.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ionicons.min.css">
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Morgan<span class="text-primary">Billingsley</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">My Work</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Blog</a>
                </li>
            </ul>
        </div>
    </nav>