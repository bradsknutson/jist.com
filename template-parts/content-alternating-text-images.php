<?php
/**
 * Template part for displaying alternating text and images section. 
 * Originally developed for the Why JIST page but has since been refactored
 * and reused on other pages.
 *
 * Brad Knutson 5/11/2016
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jist
 */

?>
    <div class="why-jist-page">
        <div class="container">
            <?php

            if( have_rows('content_and_image_row') ):
            
                $rows = get_field('content_and_image_row');
                $count = count($rows);
                
                echo '<div class="row">';
                for( $i = 0; $i < $count; $i++ ) {
                    
                    $content = $rows[$i]['content'];
                    $image = $rows[$i]['image'];
                    
                    $img = '';
                    if( !empty($image) ) {
                        $img = '<img src="'. $rows[$i]['image'] .'" />';
                    }
                    
                    if( $i % 2 == 0 ) {
                        
                        echo '<div class="col-md-6 why-jist-content">'. $content .'</div>
                                <div class="col-md-6 why-jist-image">'. $img .'</div>';
                    } else {
                        
                        echo '<div class="col-md-6 why-jist-content float-swap">'. $content .'</div>
                                <div class="col-md-6 why-jist-image float-swap">'. $img .'</div>';
                    }
                    
                }
                echo '</div>';
            
                /*
                while ( have_rows('content_and_image_row') ) : the_row();

                    the_sub_field('sub_field_name');

                endwhile;
                */

            else :  endif;

            ?>
            
        </div>
</div>
