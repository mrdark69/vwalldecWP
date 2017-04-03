<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package vwalldecTheme
 */

?>

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









