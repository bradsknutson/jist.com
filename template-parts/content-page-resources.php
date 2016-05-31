<?php
/**
 * Template part for displaying page content in Resources Pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jist
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="hero hero-style-a hero-major-padding" style="background-image:url('<?php the_post_thumbnail_url() ?>');">
		<div class="container">
			<div class="row">
                <div class="col-md-10 col-md-offset-1">
				    <?php the_content(); ?>
                </div>
			</div>
		</div>
	</div><!-- .hero -->
    <div class="secondary-page-content">
		<div class="container">
			<div class="row">
                <div class="resource-page-content">
                    <?php if ( is_active_sidebar( 'resources-menu' ) ) : ?>
                    <div class="contact-nav resources-nav">
                        <?php dynamic_sidebar( 'resources-menu' ); ?>
                    </div>
                    <?php endif; ?>
                    <div class="clearfix"></div>
                    <div class="body-full-width-content">
                        <?php 
                            // Main Content Section
                            if( get_field('body_content') ):
                                the_field('body_content');
                            endif;

                        
                            // Administrator Guides Pages
                            // Start Product Repeater
                            if( get_field('window_options') ):
                                if( get_field('window_options') == 'new' ) {
                                    $window = ' target="_blank"';
                                }
                            endif;
                            if( have_rows('administrator_guides') ):
                                while ( have_rows('administrator_guides') ) : the_row();
                        
                                    echo '<div class="col-md-6">';

                                    $product_label = get_sub_field('product');
                                    echo '<div class="col-sm-2"><img class="admin-guide-icon" src="'. get_template_directory_uri() .'/img/admin-guide-icon.png" /></div>
                                        <div class="col-sm-10"><h4>'. $product_label .'</h4>';
                        
                                    // Start File Repeater
                                    if( have_rows('guide_manual_repeater') ):
                                        while ( have_rows('guide_manual_repeater') ) : the_row();
                        
                                            $file_label = get_sub_field('file_label');
                                            $file_upload = get_sub_field('file_upload');
                        
                                            echo '<a class="pdf-link" href="'. $file_upload .'"'. $window .'>- '. $file_label .'</a>';
                        
                                        endwhile;

                                    else : endif;
                                    // End File Repeater
                        
                                    echo '</div></div>';

                                endwhile;

                            else : endif;
                            // End Product Repeater
                        
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
	

</article><!-- #post-## -->
