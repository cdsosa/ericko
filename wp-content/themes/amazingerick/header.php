<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Erick Olivares</title>
    <!-- Facebook -->
    <?php if (get_permalink()) { ?>
        <meta property="og:url" content="<?php the_permalink(); ?>" />
    <?php } ?>
    <?php if (get_the_title()) { ?>
        <meta property="og:title" content="<?php the_title(); ?>" />
    <?php } ?>
    <?php if (get_field('description')) { ?>
        <meta property="og:description" content="<?php the_field('description'); ?>" />
    <?php } ?>
    <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
    <?php if ((get_field('logo')) || $thumb ) { ?>
        <meta property="og:image" content="<?php if($thumb) { echo $thumb[0]; } else { the_field('logo'); } ?>"/>
    <?php } ?>
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    <!-- FavIcons -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--  jQuery 1.7+  -->
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

    <?php
        do_action('wp_head');
    ?>

</head>

<body <?php body_class( $class ); ?> >

<header>

    <div class="grid">

        <a href="<?php echo site_url(); ?>">
            <img class="logo" src="<?php the_field('logo','option'); ?>">
            <p class="slogan">run. travel. code.</p>
        </a>

        <?php
            wp_nav_menu(array(
                'theme_location' => 'main_menu',
                'container_class' => 'mainMenu',
                'menu_class' => 'menu',
                'before' => '<div class="selected btn">',
                'after' => '<span class="icon-angle-right"></span></div>',
                'items_wrap' => '<ul id="%1$s" class="">%3$s</ul>'
            ));
         ?>

        <div class="mobileToggle">
            <i class="fa fa-bars fa-2x"></i>
        </div>

    </div>


</header>
