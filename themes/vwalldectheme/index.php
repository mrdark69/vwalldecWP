<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package vwalldecTheme
 */

get_header('home'); ?>

<?php
    $defaults = array(
            'theme_location' => 'menu-1',
            'container' => 'nav',
            'menu' => 'primary-menu',
            'menu_class' => ''
    );

    wp_nav_menu( $defaults );

?>

<?php var_dump(get_field('v_site_logo', 'option')) ?>


<!---->
<!--        --><?php //wp_nav_menu( array(
//                'theme_location' => 'menu-1',
//                'container'=> 'nav',
//                'container_class' =>'nav'
//
//
////            'menu_id' => 'primary-menu',
////            'walker' => new Custom_Walker_Nav_Menu
//        ) ); ?>


<?php
//get_sidebar();
get_footer();
