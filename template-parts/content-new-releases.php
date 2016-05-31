<?php
if ( get_field( 'new_releases', 92 ) ) {
	?>
	<div class="new-releases">
		<h2>New releases</h2>
		<div class="new-carousel">
        	<?php if( have_rows('new_releases', 92) ): ?>

				<?php while( have_rows('new_releases', 92) ): the_row(); 

					// vars
					$link = get_sub_field('link');

					$image = get_sub_field('img');


						// vars
						$url = $image['url'];
						$title = $image['title'];
						$alt = $image['alt'];
						$caption = $image['caption'];

					?>
		        	
		        	<div>
			            <a href="<?php echo $link; ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></a>
					</div>
					
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
<?php }	?>


