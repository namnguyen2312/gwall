<?php 
	/* Template Name: Contact */
?>
<?php get_header(); ?>
<div id="content">
 
        <section id="main-content">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', 'page'); ?>
                <?php endwhile; ?>
                <?php else : ?>
                        <?php get_template_part( 'content', 'none' ); ?>
                <?php endif; ?>
        </section>
 
</div>
 
<?php get_footer(); ?>