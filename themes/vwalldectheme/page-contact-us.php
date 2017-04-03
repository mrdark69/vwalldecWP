<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package vwalldecTheme
 */

get_header(); ?>
    <section class="contact">
    <div class="container">
    <div class="row">

        <div class="section-title">
            <h1>ติอต่อสอบถาม</h1>
        </div>
<?php
while ( have_posts() ) : the_post();
    the_content();
//    get_template_part( 'template-parts/content', 'about' );



endwhile; // End of the loop.
?>
        <div style="clear: both;"></div>
        <ul class="contact-info">
            <li class="col-lg-offset-2 col-lg-2 col-sm-4 col-xs-12">
                <span class="icon-envelope"></span>
                <p><a href="mailto:<?php  echo get_field('v_email', 'option')   ?>" title="email"><?php  echo get_field('v_email', 'option')   ?></a></p>
            </li>
            <li class="col-lg-offset-1 col-lg-2 col-sm-4 col-xs-12">
                <span class="icon-pointer"></span>
                <p><?php  echo get_field('v_address', 'option')   ?>
                </p>
            </li>
            <li class="col-lg-offset-1 col-lg-2 col-sm-4 col-xs-12">
                <span class="icon-call-end"></span>
                <p><a href="tel:<?php  echo get_field('v_phone', 'option')   ?>" title="<?php  echo get_field('v_phone', 'option')   ?>"><?php  echo get_field('v_phone', 'option')   ?></a></p>
            </li>
        </ul>
    </div>
    </div>
    </section>
    <!-- MAPS -->
    <section id="map">

        <?php echo  do_shortcode('[wpgmza id="1"]')?>
    </section>
    <!-- end MAPS -->

    <!-- SOCIALS -->
    <section class="socials">
        <div class="container">

            <div class="section-title">
                <h1>Socials</h1>
            </div>

            <ul class="row">
                <li class="col-md-6 col-xs-6">
                    <span class="icon icon-facebook"></span>
                    <div>
                        <p class="nickname"><a href="https://www.facebook.com/visionwalldec/?ref=br_tf" title="Facebook Profile vision space">ผนังตกแต่ง ลายฉลุ visionspace wall dec</a></p>
                        <p class="social-type">Facebook</p>
                        <div class="fb-follow" data-href="https://www.facebook.com/visionwalldec/?ref=br_tf" data-layout="standard" data-size="large" data-show-faces="true"></div>
                    </div>
                </li>
                <li class="col-md-4 col-xs-6">
                    <div class="fb-page" data-href="https://www.facebook.com/visionwalldec/?ref=br_tf" data-tabs="timeline" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/visionwalldec/?ref=br_tf" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/visionwalldec/?ref=br_tf">ผนังตกแต่ง ลายฉลุ visionspace wall dec</a></blockquote></div>
                </li>

            </ul>

        </div>
    </section>
    <!-- end SOCIALS -->
<?php
//get_sidebar();
get_footer();
