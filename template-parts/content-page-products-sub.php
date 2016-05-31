<?php
/**
 * Template part for displaying page content in Sub-product Pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jist
 */

$parent = get_post_ancestors( $post->ID );
$parent_id = $parent[0];

$parent_info = get_post( $parent_id );
$parent_content =  apply_filters( 'the_content', $parent_info->post_content );

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php

// If the page has a thumbnail set, use that.
if( has_post_thumbnail( $post->ID ) ) {
    ?>

	<div class="hero hero-major-padding" style="background-image:url('<?php the_post_thumbnail_url() ?>');">

    <?php
// Otherwise, use the featured image from the parent  
} else {
    $url = wp_get_attachment_url( get_post_thumbnail_id( $parent_id ) );
    
?>

	<div class="hero hero-major-padding" style="background-image:url('<?php echo $url; ?>');">
    
<?php } ?>
    
		<div class="container">
			<div class="col-md-10 col-md-offset-1">
<?php 
    if( $post->post_content == "" ) {
        echo $parent_content;
    } else {
        the_content();
    }
?>
			</div>
		</div>
	</div><!-- .hero -->

    <div class="secondary-page-content">
		<div class="container">
                <div class="resource-page-content">
                    <?php
                        if ( get_field( 'navigation_menu' ) ) {
                            // Navigation Menu is set.
                            $menu = get_field( 'navigation_menu' );
                        } else {
                            // Navigation Menu is not set, look for parent's.
                            $menu = get_field( 'navigation_menu', $parent_id );
                        }
                    ?>
                    <?php if ( is_active_sidebar( $menu ) ) : ?>
                    <div class="row">
                        <div class="contact-nav resources-nav career-exploration-nav">
                            <?php dynamic_sidebar( $menu ); ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="row">
                        <div class="products-sub-container">

                            <?php 
                                /* 
                                 * Products Pages 
                                 */
                            ?>
                            <?php if ( get_field( 'products' ) ) { ?>
                            <div class="products">
                                <div class="container">
                                    <div class="row products-sub-container">
                                        <?php if( have_rows('products') ):
                                            while( have_rows('products') ): the_row(); 

                                            // vars
                                                $image = get_sub_field('image');
                                                $content = get_sub_field('content');
                                                $link = get_sub_field('link');

                                                ?>

                                                <div class="col-md-4 col-sm-6 products-sub-box">
                                                    <img class="product-sub-box-image" src="<?php echo $image; ?>"/>
                                                    <?php echo $content; ?>
                                                    <a class="products-sub-cta" href="<?php echo $link ?>" target="_blank">Learn more</a>
                                                </div>

                                        <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>


                            <?php 
                                /* 
                                 * Digital Solutions Pages 
                                 */
                            ?>
                            <?php if ( get_field( 'body_content' ) ) { ?>
                            <div class="products-sub-digital-solutions">
                                <div class="sub-block-body">
                                    <?php the_field( 'body_content' ); ?>
                                </div>
                                <div class="sub-block-columns">
                                    <?php if( have_rows('columns') ): ?>
                                    <div class="row">
                                    <?php while( have_rows('columns') ): the_row(); 

                                            $image = get_sub_field('image');
                                            $content = get_sub_field('content');


                                    ?>
                                            <div class="col-md-4">
                                                <div class="img-container">
                                                    <img class="product-sub-box-image" src="<?php echo $image; ?>"/>
                                                </div>
                                                <?php echo $content; ?>
                                            </div>

                                    <?php endwhile; ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php } ?>

                            <?php 
                                /* 
                                 * Review Copies Pages 
                                 */
                            ?>
                            <?php if( get_field( 'left_column_-_content') ) { ?>
                            <div class="products-sub-review-copies">
                                <div class="row">
                                    <div class="col-md-6 review-columns">
                                        <?php the_field( 'left_column_-_content' ); ?>
                                        <?php
                                                $review_link = get_field( 'et_link' );
                                                $review_text = get_field( 'et_button_text' );
                                        ?>
                                        <a class="products-sub-cta" href="<?php echo $review_link ?>" target="_blank"><?php echo $review_text; ?></a>
                                    </div>
                                    <div class="col-md-6 review-columns">
                                        <?php $image = get_field('right_column_-_image'); ?>
                                        <img src="<?php echo $image; ?>"/>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            
        </div>
    </div>
	

</article><!-- #post-## -->
