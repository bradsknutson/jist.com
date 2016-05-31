<?php
/**
 * Template part for displaying page content in Infographic Pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jist
 */

?>
<?php
    $ancestors = get_ancestors( $post->ID, 'page' );
    $parent_id = $ancestors[0];
    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($parent_id), 'full' );


// Infographics Landing Page
if( have_rows('infographic') ):
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
    
    while ( have_rows('infographic') ) : the_row();
                        
        $image =  get_sub_field('image');
        $label =  get_sub_field('label');
        $link =  get_sub_field('link');
                        
        // Start Infographic Repeater  
        ?>
        <div class="col-md-4">
            <div class="infographic-container">
                <img src="<?php echo $image; ?>" alt="<?php echo $label; ?>" />
                <h4><?php echo $label; ?></h4>
                <a href="<?php echo $link; ?>"></a>
            </div>              
        </div>               
                        
    <?php
    endwhile;
    ?>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
     </div>
<?php
                        
else :
// Infographic (Sub) Pages
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="hero hero-style-a hero-major-padding" style="background-image:url('<?php echo $thumb['0']; ?>');">
		<div class="container">
			<div class="row">
                <div class="col-md-10 col-md-offset-1">
				    <?php echo '<h1>'. get_the_title() .'</h1>'; ?>
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
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
	

</article><!-- #post-## -->
<?php

endif;

?>
