<?php
/**
 * displaying featured image for sticky post
 *
 * @package Pofo
 */
?>
<?php
$pofo_srcset_sticky = get_theme_mod( 'pofo_image_srcset_sticky', 'full' );

echo '<div class="blog-image"><a href="'.get_permalink().'">';
    if ( has_post_thumbnail() ) {
        the_post_thumbnail( $pofo_srcset_sticky );
    }
echo '</a></div>';