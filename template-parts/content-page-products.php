<?php
/**
 * Template part for displaying page content in Product Page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jist
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="hero hero-major-padding" style="background-image:url('<?php the_post_thumbnail_url() ?>');">
		<div class="container">
			<div class="col-md-10 col-md-offset-1">
				<?php the_content(); ?>
			</div>
		</div>
	</div><!-- .hero -->
    <?php if ( get_field( 'products' ) ) { ?>
    <div class="products">
        <div class="container">
            <div class="row products-container">
                <?php if( have_rows('products') ): ?>

				<?php while( have_rows('products') ): the_row(); 

					// vars
					$icon = get_sub_field('icon');
					$content = get_sub_field('content');
					$hover_image = get_sub_field('hover_image');
					$link = get_sub_field('link');

					?>
		        	
		        	<div class="col-md-4 col-sm-6 products-box">
                        <div class="products-background" style="background-image:url('<?php echo $icon; ?>');">
                            <?php echo $content; ?>
                            <img class="product-box-background" src="<?php echo $hover_image; ?>"/>
                            <a href="<?php echo $link ?>"></a>
                        </div>
					</div>
					
				<?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php } ?>
	

</article><!-- #post-## -->
