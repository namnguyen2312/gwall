<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
?>
<div class="entry-footer">
    <div class="author-box">
        <div class="autor-avatar">
                <?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?>
        </div>
        <h3><?php printf('Written by <a href="%1$s">%2$s</a>',
                get_author_posts_url( get_the_author_meta('ID') ),
                get_the_author() ); ?></h3>
        <p><?php echo get_the_author_meta( 'description' ); ?></p>
    </div>
</div>