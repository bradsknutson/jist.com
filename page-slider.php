<?php
/**
 * Template Name: Alternating Content/Images/Slider
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jist
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'slider-text-images' );
				get_template_part( 'template-parts/content', 'signup' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
