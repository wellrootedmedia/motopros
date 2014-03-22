<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/ico/favicon.png">

    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/jquery-ui.css">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="<?php echo get_template_directory_uri(); ?>/dist/css/starter-template.css" rel="stylesheet">
<!--    <link href="--><?php //echo get_template_directory_uri(); ?><!--/dist/css/offcanvas.css" rel="stylesheet">-->

    <link href="<?php echo get_template_directory_uri(); ?>/dist/css/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/dist/css/sticky-footer.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/dist/css/jumbotron-narrow.css" rel="stylesheet">

    <link href="<?php echo get_template_directory_uri(); ?>/dist/css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>assets/js/html5shiv.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>assets/js/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>

</head>

<body>

    <div class="header-link-ad">
        <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
            <img src="http://motopros.wellrootedmedia.com/wp-content/uploads/2014/03/MotoPros-Logo-no-background.png"
                 height="165" />
        </a>
        <img class="img-ad" data-src="<?php echo get_template_directory_uri(); ?>/assets/js/holder.js/728x90/#a3e29e:#82b47e/text:Advertisement 728x90"
             alt="728x90" src="data:image/jpg;base64,">
    </div>

<div class="wrapper">
    <div class="container">
        <div class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="navbar-collapse collapse">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => '',
                        'menu' => 'main menu',
                        'container' => 'div',
                        'container_class' => 'navbar-collapse collapse',
                        'container_id' => '',
                        'menu_class' => 'nav navbar-nav',
                        'menu_id' => '',
                        'echo' => true,
                        'fallback_cb' => 'wp_page_menu',
                        'before' => '',
                        'after' => '',
                        'link_before' => '',
                        'link_after' => '',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth' => 0,
                        'walker' => ''
                    )
                );
                ?>
            </div>
        </div>
        <div class="col-md-8">