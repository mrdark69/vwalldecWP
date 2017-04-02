<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package vwalldecTheme
 */

get_header(); ?>

    <section class="blog">
    <div class="container">
    <div class="row">

        <div class="section-title">
            <h1>สินค้าและบริการ</h1>
        </div>
		<?php
        global $post_idx;
		if ( have_posts() ) : ?>


			<?php
            $post_idx = 0;
			/* Start the Loop */
			while ( have_posts() ) : the_post();


//                the_archive_title( '<h1 class="page-title">', '</h1>' );
//                the_archive_description( '<div class="archive-description">', '</div>' );



				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'ourproduct' );
                $post_idx++;
			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>


</div>
    </div>
    </section>
        <div style="height: 100px;">  </div>
<?php

get_footer();
