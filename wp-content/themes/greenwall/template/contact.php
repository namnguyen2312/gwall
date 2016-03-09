<?php 
	/* Template Name: Contact */
	wp_head();
?>


                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', 'page'); ?>
                <?php endwhile; ?>
                <?php else : ?>
                        <?php get_template_part( 'content', 'none' ); ?>
                <?php endif; ?>
 
</div>
<?php get_footer();?>