<?php
/**
 * Template part for displaying page content in Why JIST Page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jist
 */

?>
<?php if( get_field('quote') ): ?>

    <div class="quote">
        <div class="container">
            <img src="<?php echo get_template_directory_uri(); ?>/img/quote.png" />
            <div class="quote-content">
                <?php the_field('quote'); ?>
            </div>
            <div class="quote-attribution">
                - <?php the_field('quote_attribution'); ?>
            </div>
        </div>
    </div>

<?php endif; ?>