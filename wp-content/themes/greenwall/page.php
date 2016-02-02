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
    if(is_home()){
        get_header();
    }else{
        wp_head();  
    }
?>
<body>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			 <?php get_template_part( 'content' ); ?>
    	<?php endwhile; ?>
    	<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
    	<?php endif; ?>
</body>
<?php get_footer(); ?>