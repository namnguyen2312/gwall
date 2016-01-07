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
    wp_head();
?>
<div class="content">
    <section id="main-content">
		<section id="main-content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php
                 setPostViews(get_post()->ID);
            ?>
            <?php get_template_part( 'content' ); ?>
        <?php endwhile; ?>
        <?php else : ?>
            <?php get_template_part( 'content', 'none' ); ?>
        <?php endif; ?>
</section>
    </section>
    <section id="sidebar">

    </section>
</div>
<?php get_footer(); ?>