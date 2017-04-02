<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package vwalldecTheme
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<?php
if ( have_comments() ) : ?>
    <div class="row">
        <div class="section-title">
            <h1>Comments</h1>
            <p>ทั้งหมด: <?php echo get_comments_number() ?> </p>
        </div>


        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
            <div class="container">
                <div class="section-nav  col-md-12  col-sm-10 col-xs-12">
                    <?php previous_comments_link( esc_html__( 'Older Comments', 'vwalldectheme' ) ); ?>
                    <?php next_comments_link( esc_html__( 'Newer Comments', 'vwalldectheme' ) ); ?>
                </div>
                </div>


        <?php endif; // Check for comment navigation. ?>


        <div class="comments-container">

<!--            <div class="comment col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 col-xs-12">-->
<!--                <img src="images/profile-avatar.png" data-rjs="2" alt="Jessica Simpson Avatar">-->
<!--                <div class="comment-content">-->
<!--                    <h2><a href="#" title="Jessica Simpson">Jessica Simpson</a></h2>-->
<!--                    <small>24/08/2016</small>-->
<!--                    <p>Sed lectus. Quisque id odio. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices-->
<!--                        posuere cubilia Curae. Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac-->
<!--                        placerat dolor lectus quis orci. Vivamus elementum semper!</p>-->
<!--                    <a href="#" title="Reply"><span data-icon="&#x24;"></span> Reply</a>-->
<!--                </div>-->
<!--            </div>-->



                <?php

                wp_list_comments( array(
                    'callback' => 'pietergoosen_comments',
                    'style'      => 'ol',
                    'short_ping' => true,
                    'avatar_size'=> 34,
                ) );
//                				wp_list_comments( array(
//                					'style'      => 'ol',
//                					'short_ping' => true,
//                				) );
                ?>



        </div>


        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
        <div class="container">
                <div class="section-nav  col-md-12  col-sm-10 col-xs-12">
                    <?php previous_comments_link( esc_html__( 'Older Comments', 'vwalldectheme' ) ); ?>
                    <?php next_comments_link( esc_html__( 'Newer Comments', 'vwalldectheme' ) ); ?>
                </div>

        </div>

        <?php endif; // Check for comment navigation. ?>
    </div>



<?php endif; ?>
<?php
if ( comments_open() ) : ?>
    <div class="row">
        <div class="comment" style="margin-top: 60px;">


            <?php
            //// If comments are closed and there are comments, let's leave a little note, shall we?
            if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

                <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'vwalldectheme' ); ?></p>
                <?php
            endif;

            comment_form(array(
                'title_reply' => 'ADD COMMENT'
            ) );
            ?>
        </div>
    </div>
<?php endif; ?>



