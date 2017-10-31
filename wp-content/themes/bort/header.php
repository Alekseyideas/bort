<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bort
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri()?>/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri()?>/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri()?>/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri()?>/images/favicons/manifest.json">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri()?>/images/favicons/safari-pinned-tab.svg" color="#858585">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri()?>/images/favicons/favicon.ico">
    <meta name="msapplication-config" content="<?php echo get_template_directory_uri()?>/images/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<header class="header">
    <div class="container">
        <div class="flex flex--a-center flex--j-between">
            <div class="flex flex--a-center">
                <a href="/#page-1" class="header__logo">
                    <img src="<?php echo get_template_directory_uri()?>/images/logo.svg" alt="logo">
                </a>
                <nav id="site-navigation" class="main-navigation">
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><img src="<?php echo get_template_directory_uri()?>/images/icon-menu.svg" alt=""></button>


	                <?php wp_nav_menu( array(
		                'menu_id'         => 'primary-menu',
                    )); ?>

                </nav>
            </div>

            <div class="header__tel flex flex--a-center">
               <span class="header__tel-image"></span>
                <a href="tel:<?php  front_phone() ?>"><?php  front_phone() ?></a>
            </div>
        </div>

    </div>

</header>

