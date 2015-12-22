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
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-thumbnail">
 			<?php greenwall_thumbnail( 'thumbnail' ); ?>
        </div>
        <header class="entry-header">
 			<?php greenwall_entry_header(); ?>
        </header>
        <div class="entry-content">
 			<?php greenwall_entry_content_page(); ?>
 			<?php ( is_single() ? greenwall_entry_tag() : '' ); ?>
        </div>
</article>
