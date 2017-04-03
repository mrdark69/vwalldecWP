<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vwalldecTheme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class();  ?> >

<!-- OVERLAY NAVIGATION -->
<div id="nav_overlay" class="menu_overlay">
    <div class="nav-overlay-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="menu close_btn">
                        <a href="#">
                        <span data-icon="&#x4d;"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="nav-overlay-content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">

                    <?php
                    $defaults = array(
                        'theme_location' => 'menu-1',
                        'container' => 'nav',
                        'menu' => 'primary-menu',
                        'menu_class' => ''
                    );

                    wp_nav_menu( $defaults );

                    ?>
<!--                    <nav>-->
<!--                        <ul>-->
<!--                            <li><a href="index.html" title="Start">Start</a></li>-->
<!--                            <li class="active"><a href="gallery-categories.html" title="Photos">Photos</a></li>-->
<!--                            <li><a href="blog.html" title="Blog">Blog</a></li>-->
<!--                            <li><a href="contact.html" title="Contact">Contact</a></li>-->
<!--                            <li><a href="about.html" title="About me">About me</a></li>-->
<!--                        </ul>-->
<!--                    </nav>-->
                </div>
            </div>
        </div>
    </div>

    <footer class="menu_footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">

                    <!-- Copyright informations -->
                    <div class="copyright">
                        <p>Made by <a href="http://gosolve.net/" title="Gosolve">Gosolve</a> . All rights reserved
                            2017
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- end OVERLAY NAVIGATION -->

<!-- HEADER -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="logo">

                    <a href="<?php echo get_site_url() ?>">
                        <img src="<?php  echo get_field('v_site_logo', 'option')   ?>" title="vision space" style="display: none;" class="logo_white" />
                        <img src="<?php echo get_field('v_site_logo_b', 'option')  ?>" title="vision space" class="logo_black" />
                    </a>

                </div>
                <div class="menu">
                    <a href="#"><span data-icon="&#x61;"></span></a></div>
            </div>
        </div>
    </div>
</header>
<!-- end HEADER -->