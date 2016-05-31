<?php
/**
 * Template part for displaying page content in Digital Solutions Page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jist
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="hero" style="background-image:url('<?php the_post_thumbnail_url() ?>');">
		<div class="container">
			<div class="row">
                <div class="col-md-10 col-md-offset-1">
				    <?php the_content(); ?>
                </div>
			</div>
		</div>
	</div><!-- .hero -->
    <?php get_template_part( 'template-parts/content', 'alternating-text-images' ); ?>
	

</article><!-- #post-## -->
