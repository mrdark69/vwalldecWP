<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package vwalldecTheme
 */

?>

<!-- I CAN -->
<section class="ican">
    <div class="container">
        <div class="row">

            <div class="section-title">
                <h1>I can</h1>
            </div>

           <?php
           $icon = get_field('v_i_can_icon',get_the_ID());
            $ican =  $ican.'<ul class="ican-nav col-xs-12">';

           foreach ($icon as $i){
               $ican = $ican . '<li>';
               $ican = $ican .        '<a href="#" title="Portraits">';
               $ican = $ican .           '<span ><img style="width:80px" src="'.$i['v_ican_icon']['url'].'" /></span>';
               $ican = $ican .           ' <h2>'.$i['v_ican_title'].'</h2>';
               $ican = $ican .       ' </a>';
               $ican = $ican .    ' </li>';
           }
           $ican = $ican .'</ul>';


           echo $ican ;
           ?>

            <?php
            $value = get_field( 'v_ican', get_the_ID());
            echo $value ;
            ?>

        </div>
    </div>
</section>
<!-- end I CAN -->


