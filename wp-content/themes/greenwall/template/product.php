
<?php
/* Template Name: Product */
  wp_head();
  if ( have_posts() ) : while ( have_posts() ) : the_post();
  get_template_part( 'product', 'page');
  endwhile;
  else :
  get_template_part( 'content', 'none' );
  endif;
  get_footer();
?>