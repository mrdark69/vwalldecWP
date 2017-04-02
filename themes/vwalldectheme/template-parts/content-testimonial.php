<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package vwalldecTheme
 */

?>
<!-- WHAT CLIENTS SAY -->
<div class="cv-opinion">
    <div class="container">
        <div class="row">

            <section class="cv col-sm-6 col-xs-12">
                <div>
                    <img src="<?php echo get_field('v_tesimonial_image',get_the_ID())['url']?>" data-rjs="2" alt="Cv">
                </div>
                <h2>My<span style="display: block;margin-top: 40px;">Design</span></h2>
<!--                <a class="animsition-link btn-normal" href="#" title="Download CV">Download</a>-->
            </section>

            <section class="col-sm-6 col-xs-12">
                <div class="opinion">
                    <div class="section-title">
                        <h1 class="section-title">ความเห็น ลูกค้าของเรา</h1>
                    </div>
                    <div class="opinions">

                        <?php $tes = get_field('i_can_tesimonial',get_the_ID());   ?>


                        <?php foreach ($tes as $i){ ?>
                        <blockquote>

                            <p><span class="addition">“</span><?php echo $i['i_can_tesimonial_list']?>
                                <span class="author">- <?php echo $i['i_can_tesimonial_author']?> </span></p>
                        </blockquote>
                        <?php } ?>
                    </div>
                </div>

            </section>

        </div>
    </div>
</div>
<!-- end WHAT CLIENTS SAY -->


