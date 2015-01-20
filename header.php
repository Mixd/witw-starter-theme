<!DOCTYPE html>
<!--[if lt IE 9]><html class="no-js ie lt-ie9 " lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js " lang="en"><!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="cleartype" content="on">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php wp_title( '', true, 'right' ); ?></title>

    <!--[if IE 9]><!-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/styles.css">
    <!--<![endif]-->

    <!--[if lte IE 8]>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/ie.css" media="screen">
    <![endif]-->

    <?php wp_head(); ?>
</head>
<body class="debug">

<div class="site-wrap">
    <header class="header" role="banner">
            <a href="<?php bloginfo( 'url' ); ?>" class="header__logo">
                <?php bloginfo('title'); ?>
            </a>

            <nav class="header__nav | nav-container" role="navigation">
                <?php echo wp_nav_menu( array( 'theme_location' => 'primary', 'items_wrap' => '<ul class="nav nav--primary">%3$s</ul>' ) ); ?>
            </nav>
    </header>

    <div class="content cf">
