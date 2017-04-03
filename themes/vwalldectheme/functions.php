<?php
/**
 * vwalldecTheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package vwalldecTheme
 */

if ( ! function_exists( 'vwalldectheme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function vwalldectheme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on vwalldecTheme, use a find and replace
	 * to change 'vwalldectheme' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'vwalldectheme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'vwalldectheme' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'vwalldectheme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'vwalldectheme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function vwalldectheme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'vwalldectheme_content_width', 640 );
}
add_action( 'after_setup_theme', 'vwalldectheme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function vwalldectheme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'vwalldectheme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'vwalldectheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'vwalldectheme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function vwalldectheme_scripts() {


//    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
//        wp_enqueue_style( 'vwalldectheme-stly-fontthai', 'https://fonts.googleapis.com/css?family=Kanit', array(), '1.0' );
    wp_enqueue_style( 'vwalldectheme-stly-bootstrap', get_theme_file_uri( '/assets/css/bootstrap.min.css' ), array(), '1.0' );
    wp_enqueue_style( 'vwalldectheme-stly-bootstrap_theme', get_theme_file_uri( '/assets/css/bootstrap-theme.min.css' ), array(), '1.0' );
    wp_enqueue_style( 'vwalldectheme-stly-bootstrap_font', get_theme_file_uri( '/assets/css/elegant-font.css' ), array(), '1.0' );
    wp_enqueue_style( 'vwalldectheme-stly-bootstrap_icon', get_theme_file_uri( '/assets/css/custom-icons.css' ), array(), '1.0' );
    wp_enqueue_style( 'vwalldectheme-stly-bootstrap-ani', get_theme_file_uri( '/assets/css/animsition.min.css' ), array(), '1.4' );
    wp_enqueue_style( 'vwalldectheme-stly-bootstra-popup', get_theme_file_uri( '/assets/css/magnific-popup.css' ), array(), '1.2' );

    if(!is_home() && !is_front_page() ){
        wp_enqueue_style( 'vwalldectheme-stly-olw', get_theme_file_uri( '/assets/css/owl.carousel.css' ), array(), '1.2' );
    }

	wp_enqueue_style( 'vwalldectheme-style', get_stylesheet_uri() );
    wp_enqueue_style( 'vwalldectheme-custom', get_theme_file_uri( '/assets/css/custom.css' ), array(), '1.22' );
	wp_enqueue_script( 'vwalldectheme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'vwalldectheme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}


	wp_enqueue_script( 'jquery-type', get_theme_file_uri( '/assets/js/typed.js' ), array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'jquery-ani', get_theme_file_uri( '/assets/js/animsition.min.js' ), array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'jquery-mag', get_theme_file_uri( '/assets/js/jquery.magnific-popup.min.js' ), array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'jquery-owl', get_theme_file_uri( '/assets/js/owl.carousel.min.js' ), array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'jquery-mas', get_theme_file_uri( '/assets/js/masonry.pkgd.min.js' ), array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'jquery-retina', get_theme_file_uri( '/assets/js/retina.min.js' ), array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'jquery-main', get_theme_file_uri( '/assets/js/main.js' ), array( 'jquery' ), '2.1.80', true );
}
add_action( 'wp_enqueue_scripts', 'vwalldectheme_scripts' );

add_action('init', 'init_remove_support',100);
add_action('init', 'init_remove_support_1',100);
function init_remove_support(){
    $post_type = 'v_products';
    remove_post_type_support( $post_type, 'editor');
}
function init_remove_support_1(){
    $post_type = 'v_port';
    remove_post_type_support( $post_type, 'editor');
}

function wpcodex_add_comment_support_for_pages() {
    add_post_type_support( 'v_products', 'comments' );
}
add_action( 'init', 'wpcodex_add_comment_support_for_pages' );
//add_post_type_support( 'v_products', array( 'comments' ) );
//function remove_pages_editor(){
//    var_dump(get_the_ID());
//    if(get_the_ID() == 15) {
//        remove_post_type_support( 'post', 'editor' );
//    } // end if
//} // end remove_pages_editor
//add_action( 'add_meta_boxes', 'remove_pages_editor' );

function my_class_names($classes) {
    // add 'class-name' to the $classes array
    $classes[] = 'animsition';
//    $classes[] = 'no-padding';
//    $classes[] = 'full_height';
    if(is_front_page() || is_home() ){
        $classes[] = 'no-padding';
        $classes[] = 'full_height';
    }


    // return the $classes array
    return $classes;
}

//Now add test class to the filter
add_filter('body_class','my_class_names');

function comment_custom($classes) {

    $classes[] = 'comment';
    $classes[] = 'col-md-offset-2';
    $classes[] = 'col-md-8';
    $classes[] = 'col-sm-offset-1';
    $classes[] = 'col-sm-10';
    $classes[] = 'col-xs-12';



    // return the $classes array
    return $classes;
}
add_filter('comment_class','comment_custom');


class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_el ( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {


        // Copy all the start_el code from source, and modify
    }

    function end_el( &$output, $item, $depth = 0, $args = array() ) {
        // Copy all the end_el code from source, and modify
    }
}


//add_filter('admin_footer_text', 'getSocialIcon');
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Website Setting',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Main Picture Wording',
        'menu_slug' => 'theme-general-wording-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}


// Assets Path for theme
if( !defined(THEME_IMG_PATH)){
    define( 'THEME_IMG_PATH', get_stylesheet_directory_uri() . '/assets/images' );
}


//comment custom
function pietergoosen_comments( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    switch ( $comment->comment_type ) :
        case 'pingback' :
        case 'trackback' :
            if ( 'div' == $args['style'] ) {
                $tag = 'div';
                $add_below = 'comment';
            } else {
                $tag = 'li';
                $add_below = 'div-comment';
            }
            ?>
            <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
            <p><?php _e( 'Pingback:', 'pietergoosen' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'pietergoosen' ), '<span class="edit-link">', '</span>' ); ?></p>
            <?php
            break;
        default :
            global $post;
            ?>


        <div <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
            <article id="div-comment-<?php comment_ID(); ?>" class="comment-body">
                <footer class="comment-meta">
                    <div class="comment-author vcard">
                        <?php if ( 0 != $args['avatar_size'] ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
                        <?php printf( __( '%s <span class="says">says:</span>' ), sprintf( '<b class="fn">%s</b>', get_comment_author_link() ) ); ?>
                    </div><!-- .comment-author -->

                    <div class="comment-metadata">
                        <a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
                            <time datetime="<?php comment_time( 'c' ); ?>">
                                <?php printf( _x( '%1$s at %2$s', '1: date, 2: time' ), get_comment_date(), get_comment_time() ); ?>
                            </time>
                        </a>
                        <?php edit_comment_link( __( 'Edit', 'pietergoosen' ), '<span class="edit-link">', '</span>' ); ?>
                    </div><!-- .comment-metadata -->

                    <?php if ( '0' == $comment->comment_approved ) : ?>
                        <p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'pietergoosen' ); ?></p>
                    <?php endif; ?>
                </footer><!-- .comment-meta -->

                <div class="comment-content">
                    <?php comment_text(); ?>
                </div><!-- .comment-content -->

                <div class="reply">
                    <span data-icon="&#x24;"></span>  <?php comment_reply_link( array_merge( $args, array( 'add_below' => 'div-comment', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
                </div><!-- .reply -->
            </article><!-- .comment-body -->
        </div>
<!--            <div class="comment col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 col-xs-12" id="li-comment---><?php //comment_ID(); ?><!--">-->
<!--                <img src="images/profile-avatar.png" data-rjs="2" alt="Jessica Simpson Avatar">-->
<!--                <div class="comment-content">-->
<!--                    <h2><a href="#" title="Jessica Simpson">Jessica Simpson</a></h2>-->
<!--                    <small><time datetime="--><?php //comment_time( 'c' ); ?><!--">-->
<!--                            --><?php //printf( _x( '%1$s at %2$s', '1: date, 2: time' ), get_comment_date(), get_comment_time() ); ?>
<!--                        </time></small>-->
<!--                    <p>--><?php //comment_text(); ?><!--</p>-->
<!--                    --><?php //comment_reply_link( array_merge( $args, array( 'add_below' => 'div-comment', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
<!---->
<!--                </div>-->
<!--            </div>-->

            <?php
            break;
    endswitch;
}




/**
 * Display a custom taxonomy dropdown in admin
 * @author Mike Hemberger
 * @link http://thestizmedia.com/custom-post-type-filter-admin-custom-taxonomy/
 */
add_action('restrict_manage_posts', 'tsm_filter_post_type_by_taxonomy');
function tsm_filter_post_type_by_taxonomy() {
    global $typenow;
    $post_type = 'v_port'; // change to your post type
    $taxonomy  = 'portfolio_category'; // change to your taxonomy
    if ($typenow == $post_type) {
        $selected      = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
        $info_taxonomy = get_taxonomy($taxonomy);
        wp_dropdown_categories(array(
            'show_option_all' => __("Show All {$info_taxonomy->label}"),
            'taxonomy'        => $taxonomy,
            'name'            => $taxonomy,
            'orderby'         => 'name',
            'selected'        => $selected,
            'show_count'      => true,
            'hide_empty'      => true,
        ));
    };
}
/**
 * Filter posts by taxonomy in admin
 * @author  Mike Hemberger
 * @link http://thestizmedia.com/custom-post-type-filter-admin-custom-taxonomy/
 */
add_filter('parse_query', 'tsm_convert_id_to_term_in_query');
function tsm_convert_id_to_term_in_query($query) {
    global $pagenow;
    $post_type = 'v_port'; // change to your post type
    $taxonomy  = 'portfolio_category'; // change to your taxonomy
    $q_vars    = &$query->query_vars;
    if ( $pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0 ) {
        $term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
        $q_vars[$taxonomy] = $term->slug;
    }
}
////Adding the Open Graph in the Language Attributes
//function add_opengraph_doctype( $output ) {
//    return $output . ' xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"';
//}
//add_filter('language_attributes', 'add_opengraph_doctype');

//Lets add Open Graph Meta Info

//function insert_fb_in_head() {
//    global $post;
//    if ( !is_singular()) //if it is not a post or a page
//        return;
//    echo '<meta property="fb:admins" content="YOUR USER ID"/>';
//    echo '<meta property="og:title" content="' . get_the_title() . '"/>';
//    echo '<meta property="og:type" content="article"/>';
//    echo '<meta property="og:description" content="'. get_the_content().'" />';
//    echo '<meta property="og:url" content="' . get_permalink() . '"/>';
//    echo '<meta property="og:site_name" content="www.vwalldec.com"/>';
//    if(!has_post_thumbnail( $post->ID )) { //the post does not have featured image, use a default image
//        $default_image="http://example.com/image.jpg"; //replace this with a default image on your server or an image in your media library
//        echo '<meta property="og:image" content="' . $default_image . '"/>';
//    }
//    else{
//        $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
//        echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src[0] ) . '"/>';
//    }
//    echo "
//";
//}
//add_action( 'wp_head', 'insert_fb_in_head', 5 );


if(function_exists('add_social_button_in_content')) { echo add_social_button_in_content(); }


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/*
Name:  WordPress Post Like System
Description:  A simple and efficient post like system for WordPress.
Version:      0.5.2
Author:       Jon Masterson
Author URI:   http://jonmasterson.com/
License:
Copyright (C) 2015 Jon Masterson
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

/**
 * Register the stylesheets for the public-facing side of the site.
 * @since    0.5
 */
add_action( 'wp_enqueue_scripts', 'sl_enqueue_scripts' );
function sl_enqueue_scripts() {
    wp_enqueue_script( 'simple-likes-public-js', get_template_directory_uri() . '/js/simple-likes-public.js', array( 'jquery' ), '0.5', false );
    wp_localize_script( 'simple-likes-public-js', 'simpleLikes', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'like' => __( 'Like', 'YourThemeTextDomain' ),
        'unlike' => __( 'Unlike', 'YourThemeTextDomain' )
    ) );
}

/**
 * Processes like/unlike
 * @since    0.5
 */
add_action( 'wp_ajax_nopriv_process_simple_like', 'process_simple_like' );
add_action( 'wp_ajax_process_simple_like', 'process_simple_like' );
function process_simple_like() {
    // Security
    $nonce = isset( $_REQUEST['nonce'] ) ? sanitize_text_field( $_REQUEST['nonce'] ) : 0;
    if ( !wp_verify_nonce( $nonce, 'simple-likes-nonce' ) ) {
        exit( __( 'Not permitted', 'YourThemeTextDomain' ) );
    }
    // Test if javascript is disabled
    $disabled = ( isset( $_REQUEST['disabled'] ) && $_REQUEST['disabled'] == true ) ? true : false;
    // Test if this is a comment
    $is_comment = ( isset( $_REQUEST['is_comment'] ) && $_REQUEST['is_comment'] == 1 ) ? 1 : 0;
    // Base variables
    $post_id = ( isset( $_REQUEST['post_id'] ) && is_numeric( $_REQUEST['post_id'] ) ) ? $_REQUEST['post_id'] : '';
    $result = array();
    $post_users = NULL;
    $like_count = 0;
    // Get plugin options
    if ( $post_id != '' ) {
        $count = ( $is_comment == 1 ) ? get_comment_meta( $post_id, "_comment_like_count", true ) : get_post_meta( $post_id, "_post_like_count", true ); // like count
        $count = ( isset( $count ) && is_numeric( $count ) ) ? $count : 0;
        if ( !already_liked( $post_id, $is_comment ) ) { // Like the post
            if ( is_user_logged_in() ) { // user is logged in
                $user_id = get_current_user_id();
                $post_users = post_user_likes( $user_id, $post_id, $is_comment );
                if ( $is_comment == 1 ) {
                    // Update User & Comment
                    $user_like_count = get_user_option( "_comment_like_count", $user_id );
                    $user_like_count =  ( isset( $user_like_count ) && is_numeric( $user_like_count ) ) ? $user_like_count : 0;
                    update_user_option( $user_id, "_comment_like_count", ++$user_like_count );
                    if ( $post_users ) {
                        update_comment_meta( $post_id, "_user_comment_liked", $post_users );
                    }
                } else {
                    // Update User & Post
                    $user_like_count = get_user_option( "_user_like_count", $user_id );
                    $user_like_count =  ( isset( $user_like_count ) && is_numeric( $user_like_count ) ) ? $user_like_count : 0;
                    update_user_option( $user_id, "_user_like_count", ++$user_like_count );
                    if ( $post_users ) {
                        update_post_meta( $post_id, "_user_liked", $post_users );
                    }
                }
            } else { // user is anonymous
                $user_ip = sl_get_ip();
                $post_users = post_ip_likes( $user_ip, $post_id, $is_comment );
                // Update Post
                if ( $post_users ) {
                    if ( $is_comment == 1 ) {
                        update_comment_meta( $post_id, "_user_comment_IP", $post_users );
                    } else {
                        update_post_meta( $post_id, "_user_IP", $post_users );
                    }
                }
            }
            $like_count = ++$count;
            $response['status'] = "liked";
            $response['icon'] = get_liked_icon();
        } else { // Unlike the post
            if ( is_user_logged_in() ) { // user is logged in
                $user_id = get_current_user_id();
                $post_users = post_user_likes( $user_id, $post_id, $is_comment );
                // Update User
                if ( $is_comment == 1 ) {
                    $user_like_count = get_user_option( "_comment_like_count", $user_id );
                    $user_like_count =  ( isset( $user_like_count ) && is_numeric( $user_like_count ) ) ? $user_like_count : 0;
                    if ( $user_like_count > 0 ) {
                        update_user_option( $user_id, "_comment_like_count", --$user_like_count );
                    }
                } else {
                    $user_like_count = get_user_option( "_user_like_count", $user_id );
                    $user_like_count =  ( isset( $user_like_count ) && is_numeric( $user_like_count ) ) ? $user_like_count : 0;
                    if ( $user_like_count > 0 ) {
                        update_user_option( $user_id, '_user_like_count', --$user_like_count );
                    }
                }
                // Update Post
                if ( $post_users ) {
                    $uid_key = array_search( $user_id, $post_users );
                    unset( $post_users[$uid_key] );
                    if ( $is_comment == 1 ) {
                        update_comment_meta( $post_id, "_user_comment_liked", $post_users );
                    } else {
                        update_post_meta( $post_id, "_user_liked", $post_users );
                    }
                }
            } else { // user is anonymous
                $user_ip = sl_get_ip();
                $post_users = post_ip_likes( $user_ip, $post_id, $is_comment );
                // Update Post
                if ( $post_users ) {
                    $uip_key = array_search( $user_ip, $post_users );
                    unset( $post_users[$uip_key] );
                    if ( $is_comment == 1 ) {
                        update_comment_meta( $post_id, "_user_comment_IP", $post_users );
                    } else {
                        update_post_meta( $post_id, "_user_IP", $post_users );
                    }
                }
            }
            $like_count = ( $count > 0 ) ? --$count : 0; // Prevent negative number
            $response['status'] = "unliked";
            $response['icon'] = get_unliked_icon();
        }
        if ( $is_comment == 1 ) {
            update_comment_meta( $post_id, "_comment_like_count", $like_count );
            update_comment_meta( $post_id, "_comment_like_modified", date( 'Y-m-d H:i:s' ) );
        } else {
            update_post_meta( $post_id, "_post_like_count", $like_count );
            update_post_meta( $post_id, "_post_like_modified", date( 'Y-m-d H:i:s' ) );
        }
        $response['count'] = get_like_count( $like_count );
        $response['testing'] = $is_comment;
        if ( $disabled == true ) {
            if ( $is_comment == 1 ) {
                wp_redirect( get_permalink( get_the_ID() ) );
                exit();
            } else {
                wp_redirect( get_permalink( $post_id ) );
                exit();
            }
        } else {
            wp_send_json( $response );
        }
    }
}

/**
 * Utility to test if the post is already liked
 * @since    0.5
 */
function already_liked( $post_id, $is_comment ) {
    $post_users = NULL;
    $user_id = NULL;
    if ( is_user_logged_in() ) { // user is logged in
        $user_id = get_current_user_id();
        $post_meta_users = ( $is_comment == 1 ) ? get_comment_meta( $post_id, "_user_comment_liked" ) : get_post_meta( $post_id, "_user_liked" );
        if ( count( $post_meta_users ) != 0 ) {
            $post_users = $post_meta_users[0];
        }
    } else { // user is anonymous
        $user_id = sl_get_ip();
        $post_meta_users = ( $is_comment == 1 ) ? get_comment_meta( $post_id, "_user_comment_IP" ) : get_post_meta( $post_id, "_user_IP" );
        if ( count( $post_meta_users ) != 0 ) { // meta exists, set up values
            $post_users = $post_meta_users[0];
        }
    }
    if ( is_array( $post_users ) && in_array( $user_id, $post_users ) ) {
        return true;
    } else {
        return false;
    }
} // already_liked()

/**
 * Output the like button
 * @since    0.5
 */
function get_simple_likes_button( $post_id, $is_comment = NULL ) {
    $is_comment = ( NULL == $is_comment ) ? 0 : 1;
    $output = '';
    $nonce = wp_create_nonce( 'simple-likes-nonce' ); // Security
    if ( $is_comment == 1 ) {
        $post_id_class = esc_attr( ' sl-comment-button-' . $post_id );
        $comment_class = esc_attr( ' sl-comment' );
        $like_count = get_comment_meta( $post_id, "_comment_like_count", true );
        $like_count = ( isset( $like_count ) && is_numeric( $like_count ) ) ? $like_count : 0;
    } else {
        $post_id_class = esc_attr( ' sl-button-' . $post_id );
        $comment_class = esc_attr( '' );
        $like_count = get_post_meta( $post_id, "_post_like_count", true );
        $like_count = ( isset( $like_count ) && is_numeric( $like_count ) ) ? $like_count : 0;
    }
    $count = get_like_count( $like_count );
    $icon_empty = get_unliked_icon();
    $icon_full = get_liked_icon();
    // Loader
    $loader = '<span id="sl-loader"></span>';
    // Liked/Unliked Variables
    if ( already_liked( $post_id, $is_comment ) ) {
        $class = esc_attr( ' liked' );
        $title = __( 'Unlike', 'YourThemeTextDomain' );
        $icon = $icon_full;
    } else {
        $class = '';
        $title = __( 'Like', 'YourThemeTextDomain' );
        $icon = $icon_empty;
    }
    $output = '<span class="sl-wrapper"><a href="' . admin_url( 'admin-ajax.php?action=process_simple_like' . '&post_id=' . $post_id . '&nonce=' . $nonce . '&is_comment=' . $is_comment . '&disabled=true' ) . '" class="sl-button' . $post_id_class . $class . $comment_class . '" data-nonce="' . $nonce . '" data-post-id="' . $post_id . '" data-iscomment="' . $is_comment . '" title="' . $title . '">' . $icon . $count . '</a>' . $loader . '</span>';
    return $output;
} // get_simple_likes_button()

/**
 * Processes shortcode to manually add the button to posts
 * @since    0.5
 */
add_shortcode( 'jmliker', 'sl_shortcode' );
function sl_shortcode() {
    return get_simple_likes_button( get_the_ID(), 0 );
} // shortcode()

/**
 * Utility retrieves post meta user likes (user id array),
 * then adds new user id to retrieved array
 * @since    0.5
 */
function post_user_likes( $user_id, $post_id, $is_comment ) {
    $post_users = '';
    $post_meta_users = ( $is_comment == 1 ) ? get_comment_meta( $post_id, "_user_comment_liked" ) : get_post_meta( $post_id, "_user_liked" );
    if ( count( $post_meta_users ) != 0 ) {
        $post_users = $post_meta_users[0];
    }
    if ( !is_array( $post_users ) ) {
        $post_users = array();
    }
    if ( !in_array( $user_id, $post_users ) ) {
        $post_users['user-' . $user_id] = $user_id;
    }
    return $post_users;
} // post_user_likes()

/**
 * Utility retrieves post meta ip likes (ip array),
 * then adds new ip to retrieved array
 * @since    0.5
 */
function post_ip_likes( $user_ip, $post_id, $is_comment ) {
    $post_users = '';
    $post_meta_users = ( $is_comment == 1 ) ? get_comment_meta( $post_id, "_user_comment_IP" ) : get_post_meta( $post_id, "_user_IP" );
    // Retrieve post information
    if ( count( $post_meta_users ) != 0 ) {
        $post_users = $post_meta_users[0];
    }
    if ( !is_array( $post_users ) ) {
        $post_users = array();
    }
    if ( !in_array( $user_ip, $post_users ) ) {
        $post_users['ip-' . $user_ip] = $user_ip;
    }
    return $post_users;
} // post_ip_likes()

/**
 * Utility to retrieve IP address
 * @since    0.5
 */
function sl_get_ip() {
    if ( isset( $_SERVER['HTTP_CLIENT_IP'] ) && ! empty( $_SERVER['HTTP_CLIENT_IP'] ) ) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif ( isset( $_SERVER['HTTP_X_FORWARDED_FOR'] ) && ! empty( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = ( isset( $_SERVER['REMOTE_ADDR'] ) ) ? $_SERVER['REMOTE_ADDR'] : '0.0.0.0';
    }
    $ip = filter_var( $ip, FILTER_VALIDATE_IP );
    $ip = ( $ip === false ) ? '0.0.0.0' : $ip;
    return $ip;
} // sl_get_ip()

/**
 * Utility returns the button icon for "like" action
 * @since    0.5
 */
function get_liked_icon() {
    /* If already using Font Awesome with your theme, replace svg with: <i class="fa fa-heart"></i> */
    $icon = '<span class="sl-icon"><svg role="img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0" y="0" viewBox="0 0 128 128" enable-background="new 0 0 128 128" xml:space="preserve"><path id="heart-full" d="M124 20.4C111.5-7 73.7-4.8 64 19 54.3-4.9 16.5-7 4 20.4c-14.7 32.3 19.4 63 60 107.1C104.6 83.4 138.7 52.7 124 20.4z"/>&#9829;</svg></span>';
    return $icon;
} // get_liked_icon()

/**
 * Utility returns the button icon for "unlike" action
 * @since    0.5
 */
function get_unliked_icon() {
    /* If already using Font Awesome with your theme, replace svg with: <i class="fa fa-heart-o"></i> */
    $icon = '<span class="sl-icon"><svg role="img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0" y="0" viewBox="0 0 128 128" enable-background="new 0 0 128 128" xml:space="preserve"><path id="heart" d="M64 127.5C17.1 79.9 3.9 62.3 1 44.4c-3.5-22 12.2-43.9 36.7-43.9 10.5 0 20 4.2 26.4 11.2 6.3-7 15.9-11.2 26.4-11.2 24.3 0 40.2 21.8 36.7 43.9C124.2 62 111.9 78.9 64 127.5zM37.6 13.4c-9.9 0-18.2 5.2-22.3 13.8C5 49.5 28.4 72 64 109.2c35.7-37.3 59-59.8 48.6-82 -4.1-8.7-12.4-13.8-22.3-13.8 -15.9 0-22.7 13-26.4 19.2C60.6 26.8 54.4 13.4 37.6 13.4z"/>&#9829;</svg></span>';
    return $icon;
} // get_unliked_icon()

/**
 * Utility function to format the button count,
 * appending "K" if one thousand or greater,
 * "M" if one million or greater,
 * and "B" if one billion or greater (unlikely).
 * $precision = how many decimal points to display (1.25K)
 * @since    0.5
 */
function sl_format_count( $number ) {
    $precision = 2;
    if ( $number >= 1000 && $number < 1000000 ) {
        $formatted = number_format( $number/1000, $precision ).'K';
    } else if ( $number >= 1000000 && $number < 1000000000 ) {
        $formatted = number_format( $number/1000000, $precision ).'M';
    } else if ( $number >= 1000000000 ) {
        $formatted = number_format( $number/1000000000, $precision ).'B';
    } else {
        $formatted = $number; // Number is less than 1000
    }
    $formatted = str_replace( '.00', '', $formatted );
    return $formatted;
} // sl_format_count()

/**
 * Utility retrieves count plus count options,
 * returns appropriate format based on options
 * @since    0.5
 */
function get_like_count( $like_count ) {
    $like_text = __( 'Like', 'YourThemeTextDomain' );
    if ( is_numeric( $like_count ) && $like_count > 0 ) {
        $number = sl_format_count( $like_count );
    } else {
        $number = $like_text;
    }
    $count = '<span class="sl-count">' . $number . '</span>';
    return $count;
} // get_like_count()

// User Profile List
add_action( 'show_user_profile', 'show_user_likes' );
add_action( 'edit_user_profile', 'show_user_likes' );
function show_user_likes( $user ) { ?>
    <table class="form-table">
        <tr>
            <th><label for="user_likes"><?php _e( 'You Like:', 'YourThemeTextDomain' ); ?></label></th>
            <td>
                <?php
                $types = get_post_types( array( 'public' => true ) );
                $args = array(
                    'numberposts' => -1,
                    'post_type' => $types,
                    'meta_query' => array (
                        array (
                            'key' => '_user_liked',
                            'value' => $user->ID,
                            'compare' => 'LIKE'
                        )
                    ) );
                $sep = '';
                $like_query = new WP_Query( $args );
                if ( $like_query->have_posts() ) : ?>
                    <p>
                        <?php while ( $like_query->have_posts() ) : $like_query->the_post();
                            echo $sep; ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                            <?php
                            $sep = ' &middot; ';
                        endwhile;
                        ?>
                    </p>
                <?php else : ?>
                    <p><?php _e( 'You do not like anything yet.', 'YourThemeTextDomain' ); ?></p>
                    <?php
                endif;
                wp_reset_postdata();
                ?>
            </td>
        </tr>
    </table>
<?php } // show_user_likes()