<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package vwalldecTheme
 */

?>

<?php  global $post_idx;  ?>
<article id="post-<?php the_ID(); ?>" <?php $classes[] = 'article-preview'; post_class($classes); ?> >

    <!-- IMAGE (left) -->
    <figure class="article-preview-<?php echo ($post_idx%2 == 0? 'left':'right' ) ?>-image col-sm-6 col-xs-12">
        <div class="article-preview-<?php echo ($post_idx%2 == 0? 'left':'right' ) ?>-image-content">
            <span class="article-preview-image-arrow"></span>
            <?php $img = get_field('v_our_image_small',get_the_ID());  ?>
            <img src="<?php echo $img['url']?>" data-rjs="2" alt="<?php echo $img['alt']?>" title="<?php echo $img['title']?>">
        </div>
    </figure>
    <!-- end IMAGE -->

    <!-- ARTICLE CONTENT (right) -->
    <div class="article-preview-content col-sm-5 <?php echo ($post_idx%2 == 0? 'col-sm-offset-1':'' ) ?> col-xs-12">
        <div class="article-preview-content-vertical-align">
<!--            --><?php //echo get_post_type(); ?>

            <?php
            if ( is_single() ) :

                the_title( '<h1>', '</h1>' );
            else :
                the_title( '<h1><a href="' . esc_url( get_permalink() ) . '" target="_Blank" >', '</a></h2>' );
//                the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            endif;



//            if ( 'post' === get_post_type() ) : ?>
<!--                <div class="entry-meta">-->
<!--                    --><?php // vwalldectheme_posted_on(); ?>
<!--                </div><! .entry-meta -->
<!--                --><?php
//            endif; ?>
<!--            <h1><a href="blog-post.html" title="The 80 best Tumblr blogs for designers">The 80 best Tumblr blogs for designers</a></h1>-->


<!--            <a href="#" class="article-category" title="tutorials">tutorials</a>-->
            <ul class="article-info">
                <?php  $like_count = get_post_meta( get_the_ID(), "_post_like_count", true ) ?>
                <li><span data-icon="&#xe023;"></span> <?php echo get_the_date()?> </li>
                <li><span data-icon="&#x76;"></span>  <?php echo get_comments_number()?></li>
                <li><span data-icon="&#xe106;"></span> <?php echo $like_count ?></li>
            </ul>

            <div class="article-text">
                <p>
                    <?php echo get_field('v_our_description_short',get_the_ID());?> ....
                </p>
            </div>

            <?php
            if ( is_single() )
                echo  '';
            
            else
                echo  '<a href="' . esc_url( get_permalink() ) . '" target="_Blank" class="btn-noborder" title="Read more">อ่านทั้งหมด</a>';


            ?>

        </div>
    </div>
    <!-- end ARTICLE CONTENT -->
</article>


