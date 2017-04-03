<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package vwalldecTheme
 */

get_header(); ?>



<!--    <meta property="og:url"           content="http://www.your-domain.com/your-page.html" />-->
<!--    <meta property="og:type"          content="website" />-->
<!--    <meta property="og:title"         content="Your Website Title" />-->
<!--    <meta property="og:description"   content="Your description" />-->
<!--    <meta property="og:image"         content="http://www.your-domain.com/path/image.jpg" />-->


<?php
		while ( have_posts() ) : the_post();
		?>
            <article class="blog-post"  style="margin: 20px 0;" id="post-<?php the_ID(); ?>">
            <div class="container">
                    <?php get_template_part( 'template-parts/content', 'port_detail' ); ?>
            </div>
            </article>

            <section class="gallery">
            <div class="container">
                <?php get_template_part( 'template-parts/content', 'port_gall' ); ?>
            </div>
            </section>

            <article class="blog-post">
                <div class="container">
                    <div style="margin-bottom: 20px;" class="blog-post-article col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 col-xs-12">
                        <ul class="article-social" style="text-align: center;">
                            <li><a>Like: </a> <?php echo  get_simple_likes_button( get_the_ID() );    ?></li>
                            <li><div class="fb-save" data-uri="<?php echo get_permalink();?>" data-size="small"></div></li>
<!--                            <li><a href="#" title="Share it!"><span data-icon=""></span> Share it!</a></li>-->
<!--                            <li><div class="fb-follow" style="float: left" data-href="https://www.facebook.com/visionwalldec" data-layout="standard" data-size="large" data-show-faces="true"></div></li>-->
<!--                            <li><a href="#" title="Tweet it!"><span class="icon-twitter"></span> Tweet it!</a></li>-->
                        </ul>
                    </div>
                    <div style="margin-bottom: 20px;" class="blog-post-article col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 col-xs-12">
                     <?php echo add_social_button_in_content(); //do_shortcode('[cresta-social-share]') ?>
                    </div>
                    <div class="blog-post-article col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 col-xs-12">
                    <div class="fb-like" data-href="<?php echo get_permalink();?>" data-share="false" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
                    </div>
                </div>
            </article>

            <section class="comments">
                <a href=”#comments”></a>
            <div class="container">

                    <?php
//                    var_dump(get_comments_number());//|| get_comments_number()
                    //			the_post_navigation();
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open()  ) :
                        comments_template();
                    endif;
                    ?>


            </div>
            </section>



            <?php
		endwhile; // End of the loop.
		?>


<?php

get_footer();
