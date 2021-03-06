<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143787458-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-143787458-1');
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->

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
    <?php wp_head(); ?>
</head>
<body>
    <div class="wrapper">
        <?php $menu = get_menu('primary'); ?>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary nav-shadow">

            <a class="navbar-brand" href="<?php bloginfo('url'); ?>">MorganBillingsley</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="basicExampleNav">

                <ul class="navbar-nav mr-auto">
                    <?php foreach($menu as $item) : ?>
                        <?php if(empty($item['children'])) : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo $item['url']; ?>"><?php echo $item['label']; ?></a>
                            </li>
                        <?php else : ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $item['label']; ?></a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <h5 class="dropdown-header"><?php echo $item['label']; ?></h5>
                                    <div class="dropdown-divider"></div>
                                    <?php foreach($item['children'] as $child) : ?>
                                        <a class="dropdown-item mt-2 mb-2" href="<?php echo $child['url']; ?>"><?php echo $child['label']; ?></a>
                                    <?php endforeach; ?>
                                </div>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>

                <?php get_search_form(); ?>

            </div>

        </nav>