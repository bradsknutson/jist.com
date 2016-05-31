<?php
/**
 * Template part for displaying page content in Contact Page.
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
                <div class="contact-page-content">
                    <?php if ( is_active_sidebar( 'contact-menu' ) ) : ?>
                    <div class="contact-nav">
                        <?php dynamic_sidebar( 'contact-menu' ); ?>
                    </div>
                    <?php endif; ?>
                    <div class="clearfix"></div>
                        <?php 
                            // Main Contact Page
                            if( get_field('body_content_two_col_left') ):
                        ?>
                            <div class="col-md-6">
                        <?php
                                the_field('body_content_two_col_left');
                        ?>
                            </div>
                        <?php
                            endif;
                            if( get_field('body_content_two_col_right') ):
                        ?>
                            <div class="col-md-6">
                        <?php
                                the_field('body_content_two_col_right');
                        ?>
                            </div>
                        <?php
                            endif;
                        
                            // (Sub) Contact Pages body section
                            if( get_field('body_content') ):
                        ?>
                    <div class="body-full-width-content">
                        <?php
                                the_field('body_content');
                            endif;

                            // Find Account Manager Page Unique Content
                            if( get_field('non_us_button_background_image') ):
                                $img = get_field('non_us_button_background_image');
                                $href = get_field('non_us_button_link');
                                echo '<div class="non-us-button" style="background-image:url(\''. $img .'\');">';
                                    the_field('non_us_button_text');
                                    echo '<a href="'. $href .'"></a>';
                                echo '</div>';
                            endif; 
                        
                            // Technical Support Page Unique Content
                            if( get_field('window_options') ):
                                if( get_field('window_options') == 'new' ) {
                                    $window = ' target="_blank"';
                                }
                            endif;
                            if( have_rows('pdf_list') ):
                                while ( have_rows('pdf_list') ) : the_row();

                                    $pdf_title = get_sub_field('pdf_title');
                                    $pdf_href = get_sub_field('pdf_file');
                        
                                    echo '<a class="pdf-link" href="'. $pdf_href .'"'. $window .'>
                                            <img class="pdf-icon" src="'. get_template_directory_uri() .'/img/pdf-icon.png" /> '. $pdf_title .'
                                        </a>';

                                endwhile;

                            else : endif;
                        
                            // Customer Service Page Unique Content
                            if( have_rows('expandable_boxes_p') ):
                                echo '<h4>Policies and Order Information</h4><a id="faqs" name="faqs"></a>';
                                while ( have_rows('expandable_boxes_p') ) : the_row();

                                    $label_p = get_sub_field('label_p');
                                    $content_p = get_sub_field('content_p');
                        
                                    echo '<div class="expandable-box">
                                        <div class="expandable-box-label"><i class="fa fa-plus" aria-hidden="true"></i>'. $label_p .'</div>
                                        <div class="expandable-box-content">
                                            <div class="hidden-content">'. $content_p .'</div>
                                        </div>
                                    </div>';

                                endwhile;

                            else : endif;
                            if( have_rows('expandable_boxes_f') ):
                                echo '<h4>Frequently Asked Questions</h4>';
                                while ( have_rows('expandable_boxes_f') ) : the_row();

                                    $label_f = get_sub_field('label_f');
                                    $content_f = get_sub_field('content_f');
                        
                                    echo '<div class="expandable-box">
                                        <div class="expandable-box-label"><i class="fa fa-plus" aria-hidden="true"></i>'. $label_f .'</div>
                                        <div class="expandable-box-content">
                                            <div class="hidden-content">'. $content_f .'</div>
                                        </div>                             
                                    </div>';

                                endwhile;

                            else : endif;

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
	

</article><!-- #post-## -->
