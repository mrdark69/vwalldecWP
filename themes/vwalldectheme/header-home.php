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
<html <?php language_attributes(); ?> class="full_height">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class();  ?>>


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
                                <p>Made by <a href="https://themeforest.net/user/prestahome" title="PrestaHome">Gosolve</a> . All rights reserved
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
        <header class="header_dynamic header_white header_static_nav">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="logo">
                            <a href="<?php echo get_site_url() ?>">
                                <img src="<?php  echo get_field('v_site_logo', 'option')   ?>" title="vision space" style="display: none;" class="logo_white" />
                                <img src="<?php echo get_field('v_site_logo_b', 'option')  ?>" title="vision space" class="logo_black" />
                            </a>
                        </div>
                        <div class="menu">  <a href="#"><span data-icon="&#x61;"></span></a></div>
                        <?php
                        $defaults = array(
                            'theme_location' => 'menu-1',
                            'container' => 'nav',
                            'menu' => 'primary-menu',
                            'menu_class' => ''
                        );

                        wp_nav_menu( $defaults );

                        ?>
                    </div>
                </div>
            </div>
        </header>
        <!-- end HEADER -->


        <!-- SLIDER -->
        <section class="full_slider full_slider_white" style="background-image: url('<?php echo get_theme_file_uri( '/assets/images/slider2.jpg' )?>')" data-rjs="2">
            <div class="full_slider_one full_slider_one_white">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h2><span id="slider-animation"></span></h2>
                            <?php  $txt = get_field('v_slide_w_1', 'option');


                                $count = count($txt);
                                $index= 0;
                                foreach ($txt as $i){
                                    if($index< ($count-1))
                                        $val .= $i['v_slide_w_2_1'] .",";
                                    else
                                        $val .= $i['v_slide_w_2_1'];
                                    $index ++;
                                }


                            ?>
                            <input type="hidden" id="txt_wording" value="<?php  echo $val;   ?>"?>
                            <h1><span class="grey"><?php  echo get_field('v_slide_w_2', 'option')   ?></span></h1>
                            <p><?php  echo get_field('v_slide_w_3', 'option')   ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="full_slider_arrow">
                <a href="#"><span data-icon="&#x3b;"></span></a>
            </div>
        </section>
        <!-- end SLIDER -->