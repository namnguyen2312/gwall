<?php 
	/* Template Name: Contact */
?>
<?php get_header(); ?>
<div class="content">
    <section id="main-content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			 <?php get_template_part( 'content' ); ?>
    	<?php endwhile; ?>
    	<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
    	<?php endif; ?>
    </section>
    <section id="sidebar">

    </section>
</div>


<?php get_footer(); ?>