<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package vwalldecTheme
 */

?>


<div class="row">
    <div class="blog-post-image col-xs-12">
        <?php $img = get_field('v_our_image_big',get_the_ID());  ?>
        <img src="<?php echo $img['url']?>" data-rjs="2" alt="<?php echo $img['alt']?>" title="<?php echo $img['title']?>">
<!--        <img src="images/blog/blog-post.jpg" data-rjs="2" alt="Article Image">-->
    </div>
</div>
<div class="row">
    <div class="blog-post-title">
       <?php the_title( '<h1>', '</h1>' ); $like_count = get_post_meta( get_the_ID(), "_post_like_count", true ) ?>
        <ul class="icons">
            <li>
                <span data-icon="&#xe023;"></span> <?php echo get_the_date()?>
            </li>
            <li>
                <span data-icon="&#x76;"></span> <?php echo get_comments_number()?>
            </li>
            <li>
                <span data-icon="&#xe106;"></span> <?php echo $like_count ?>
            </li>
            <li>
                <div class="post-views"><span data-icon="&#xe018;"></span></div> <?php echo pvc_post_views( get_the_ID(),true) ?>  <div class="post-views"> Views</div>
            </li>
        </ul>
    </div>
    <div class="blog-post-article col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 col-xs-12">
        <?php echo get_field('v_our_description_full',get_the_ID());?>
    </div>
</div>



