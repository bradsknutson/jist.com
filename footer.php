<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jist
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<?php wp_nav_menu( array( 'menu' => '6' ) ); ?>
				</div>
				<div class="col-md-3 col-sm-4">
				<?php wp_nav_menu( array( 'menu' => '7' ) ); ?>
				</div>
				<div class="col-md-2 col-sm-4">
					<?php wp_nav_menu( array( 'menu' => '5' ) ); ?>
				</div>
				<div class="col-md-3 col-sm-12">
					<div class="connect">
						<h5>Connect with us</h5>
						<h4>800-328-1452</h4>
						<div class="social">
							<a href="#" class="icon icon-facebook"></a>
							<a href="#" class="icon icon-twitter"></a>
							<a href="#" class="icon icon-linkedin"></a>
							<a href="#" class="icon icon-youtube"></a>
							<a href="#" class="icon icon-pinterest"></a>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 copyright">&copy; JIST Career Solutions, A Division of New Mountain Learning </div>
			</div>
		</div>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
