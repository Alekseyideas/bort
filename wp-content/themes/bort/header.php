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

                    <div class="menu-main-container">
                        <ul id="primary-menu" class="menu nav-menu" aria-expanded="false">
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7"></li>
                            <li id="menu-item-7" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7"><a href="<?php echo get_page_link(13)?>">Услуги</a></li>
                            <li id="menu-item-8" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8"><a href="#">Тарифы</a></li>
                            <li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9"><a href="#">Наши водители</a></li>

                            <li id="menu-item-11" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11"><a href="#">Вакансии</a></li>
                            <li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12"><a href="#">Контакты</a></li>
                        </ul>
                        <button class="btn btn__submit-app btn__submit-app--m">Оставить заявку</button>
                    </div>
                </nav>
            </div>

            <div class="header__tel flex flex--a-center">
               <span class="header__tel-image"></span>
                <a href="tel:+74952333444">+7 495 233-34-44</a>
            </div>
        </div>

    </div>

</header>

