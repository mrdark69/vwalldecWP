<?php
/**
 *
 * Template name: Home Page V.1
 *
 */

get_header('home'); ?>


<?php  //echo  get_home_path() ?>

    <!-- SECTION -->
    <section class="blog">
        <div class="container">
            <div class="row">

                <div class="section-title">
                    <h1>สินค้าและบริการ</h1>
                </div>


                <?php
                // args
                $args = array(

                    'post_type'       => 'v_products',
                    'orderby' => 'date',
                    'order' => 'ASC'

                );



                // query
                $the_query = new WP_Query( $args );
//                var_dump($the_query);
                ?>
                <?php if( $the_query->have_posts() ):  $post_idx = 0; ?>

                    <?php while( $the_query->have_posts() ) : $the_query->the_post();  ?>




                      <?php  get_template_part( 'template-parts/content', 'ourproduct' ); ?>



                    <?php $post_idx++; endwhile;   ?>

                <?php endif; ?>

                <?php wp_reset_query();    ?>



                <div class="more col-xs-12">
                    <a class="animsition-link btn-normal" href="<?php echo get_site_url(); ?>/our-product/" title="Go Blog">ดูสินค้าและบริการทั้งหมด</a>
                </div>


            </div>
        </div>
    </section>
    <!-- end SECTION -->

    <section class="gallery gallery-categories">
    <div class="container">
        <div class="row">

            <div class="section-title">
                <h1>ผลงานของเรา</h1>
            </div>



            <?php
            // args
            $args = array(

                'post_type'       => 'v_port',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'recommended',
                        'field' => 'slug',
                        'terms' => 'focus'
                    )
                )

            );



            // query
            $the_query = new WP_Query( $args );

            ?>
            <?php if( $the_query->have_posts() ): ?>

                <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>



                    <?php
                    $img= get_field('v_port_single',get_the_ID());

                    ?>

                    <figure class="col-md-4 col-sm-6 col-xs-12 gallery-thumb">
                        <a href="<?php echo esc_url( get_permalink() ) ?>" alt="<?php echo $img['alt']?>" title="<?php echo $img['title']?>" >
                            <img src="<?php echo $img['url']?>" data-rjs="2" alt="<?php echo $img['alt']?>"/>
                            <div class="gallery-thumb-desc">
                                <h4><?php echo get_the_title();// $img['title']?></h4>
                                <p>ดูรูปภาพทั้งหมด</p>
                            </div>
                        </a>
                    </figure>



                <?php endwhile; ?>

            <?php endif; ?>

            <?php wp_reset_query();    ?>




        </div>
        <div class="row">
            <div class="row">
                <div class="more col-xs-12">
                    <a class="animsition-link btn-normal" href="<?php echo get_site_url(); ?>/portfolio/" title="More">ดูผลงานทั้งหมด</a>
                </div>
            </div>
        </div>
    </div>
    </section>


<?php
//get_sidebar();
get_footer();
?>
