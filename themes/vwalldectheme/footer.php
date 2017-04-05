<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vwalldecTheme
 */

?>


<div id="fb-root"></div>

<script type="text/javascript">
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=435120963494493";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>



<div class="clear"></div>

<!-- FOOTER -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- Logo -->
                <div class="logo">


                    <img src="<?php echo get_field('v_site_logo_b', 'option')  ?>" title="vision space" style="height: 150px" />

                </div>
                <a style="color:#337ab7" href="<?php  echo get_field('v_setting_pdf_dl', 'option')['url']  ?>" >ท่านสามารถกดดาวโหลด โบรชัวร์ของเราได้ที่นี่</a>

                <!-- Social icons -->
                <div class="socials">
                    <ul>

                        <?php
                        $ret = "";
                        $field = get_field_object('v_social','option');

                            foreach ($field['value'] as $i){
                                $ret = $ret .  '<li><a href="'.$i['vs_social_link'].'" title="'.$i['vs_social_name'].'"><span data-icon="'.getSocialIcon($i['vs_social_name']).'"></span></a></li>';
                        }

                        echo $ret;
//                        var_dump($v);

                        ?>
<!--                        <li><a href="#" title="Facebook"><span data-icon="&#xe093;"></span></a></li>-->
<!--                        <li><a href="#" title="Twitter"><span data-icon="&#xe094;"></span></a></li>-->
<!--                        <li><a href="#" title="Instagram"><span data-icon="&#xe09a;"></span></a></li>-->
<!--                        <li><a href="#" title="Dribbble"><span data-icon="&#xe09b;"></span></a></li>-->
<!--                        <li><a href="#" title="Flickr"><span data-icon="&#xe0a6;"></span></a></li>-->
<!--                        <li><a href="#" title="LinkedIn"><span data-icon="&#xe09d;"></span></a></li>-->
<!--                        <li><a href="#" title="Pinterest"><span data-icon="&#xe095;"></span></a></li>-->
                    </ul>
                </div>
                <div>

                </div>
                <!-- Contact details -->
                <address class="footer-contact">
                    <p><?php  echo get_field('v_phone', 'option')   ?> <br/><?php  echo get_field('v_email', 'option')   ?></p>
                    <p><?php  echo get_field('v_address', 'option')   ?></p>
                </address>

                <!-- Copyright informations -->
                <div class="copyright">
                    <p>Made by <a href="https://www.gosolve.com" title="Gosolve">Gosolve Developement</a> . All rights reserved 2017</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end FOOTER -->
<!---->
<!--	<footer id="colophon" class="site-footer" role="contentinfo">-->
<!--		<div class="site-info">-->
<!--			<a href="--><?php //echo esc_url( __( 'https://wordpress.org/', 'vwalldectheme' ) ); ?><!--">--><?php //printf( esc_html__( 'Proudly powered by %s', 'vwalldectheme' ), 'WordPress' ); ?><!--</a>-->
<!--			<span class="sep"> | </span>-->
<!--			--><?php //printf( esc_html__( 'Theme: %1$s by %2$s.', 'vwalldectheme' ), 'vwalldectheme', '<a href="https://automattic.com/" rel="designer">Underscores.me</a>' ); ?>
<!--		</div><!-- .site-info -->
<!--	</footer><!-- #colophon -->
<!--</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
