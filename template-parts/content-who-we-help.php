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
			<div class="col-md-7 col-md-offset-5">
                <div class="wrap top">
				    <?php the_field('content') ?>
                </div>
			</div>
			<div class="col-md-7 col-md-offset-5">
                <div class="wrap bottom">
				    <img src="<?php the_field('image') ?>" />
                </div>
			</div>
		</div>
	</div><!-- .hero -->
    <div class="entry-content">
        <div class="container">
            <div class="row">        
                <div class="col-md-6 col-md-offset-1">
                    <div class="wrap left">
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wrap right news-and-tips">

                        <h3>News and tips</h3>
                        
                        <?php
                            $args = array( 'posts_per_page' => 3 );

                            $myposts = get_posts( $args );
                            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                                <div>
                                    <?php 
                                        $categories = get_the_category();
                                            if ( ! empty( $categories ) ) {
                                                echo '<p class="cat">' . esc_html( $categories[0]->name ) . '</p>';
                                            }
                                    ?>
                                    <h4 class="post-title"><a href="<?php the_permalink(); ?>" class="post-title-link"><?php the_title(); ?></a></h4>

                                    <div><?php the_excerpt();  ?></div>

                                    <a class="more" href="<?php the_permalink(); ?>">Learn More...</a>
                                </div>

                        <?php endforeach; 
                        wp_reset_postdata();?>                

                    </div>
                </div>
            </div>
        </div>
    </div>

</article><!-- #post-## -->
