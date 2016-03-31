<?php
/**
 * Template part for displaying page content in Home Page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jist
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="hero" style="background-image:url('<?php the_post_thumbnail_url() ?>');">
		<div class="container">
			<div class="col-md-8 col-md-offset-2">
				<?php the_content(); ?>
			</div>
			<div class="col-md-10 col-md-offset-1">
				<?php if ( get_field( 'nav-box' ) ) { ?>
					<div class="nav-boxes">
						<?php if( have_rows('nav-box') ): ?>

	              			<?php while( have_rows('nav-box') ): the_row();
	                  		
	                  		$icon = get_sub_field('icon');
	                  		$content = get_sub_field('content');
	                  		$link = get_sub_field('link');

							?>
								<div class="col-md-4">
									<div class="wrap" style="background-image:url('<?php echo $icon; ?>');">
										<?php echo $content; ?>
										<a href="<?php echo $link; ?>"></a>
									</div>
								</div>

							<?php endwhile; ?>
						<?php endif; ?>
					</div>
					
				<?php } ?>
			</div>
		</div>
	</div><!-- .hero -->

	
	<?php if ( get_field( 'main' ) ) { ?>

		<div class="why">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<?php the_field('main') ?>
						<a href="<?php the_field('btn-link') ?>" class="btn blue"><?php the_field('btn-text') ?></a>
					</div>
					<div class="col-md-7">
						<div class="row">
							<div class="col-md-12">
								<div class="wrap top">
									<img src="<?php the_field('right-section-top-img') ?>" />
									<div class="content"><?php the_field('right-section-content-top') ?></div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="wrap left">
									<img src="<?php the_field('right-section-left-img') ?>" />
									<div class="content"><?php the_field('right-section-content-left') ?></div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="wrap right">
									<img src="<?php the_field('right-section-right-img') ?>" />
									<div class="content"><?php the_field('right-section-content-right') ?></div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			
		</div>
	<?php } ?>

	

</article><!-- #post-## -->
