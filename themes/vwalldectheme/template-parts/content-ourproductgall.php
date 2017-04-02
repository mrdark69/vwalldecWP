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
$gall= get_field('v_our_Gallery',get_the_ID());
if ($gall):
?>
<div class="section-title">
    <h1>รูปภาพ</h1>
</div>




<div class="my-gallery">

    <?php foreach ($gall as $img) {?>
    <figure class="col-md-4 col-sm-6 col-xs-12 gallery-thumb">
        <a href="<?php echo $img['url']?>" alt="<?php echo $img['alt']?>" title="<?php echo $img['title']?>" >
            <img src="<?php echo $img['url']?>" data-rjs="2" alt="<?php echo $img['alt']?>"/>
            <div class="gallery-thumb-desc">
                <h4><?php echo $img['title']?></h4>
                <p>กดดูภาพ</p>
            </div>
        </a>
    </figure>

    <?php } ?>

</div>
    <?php
endif ;
?>




