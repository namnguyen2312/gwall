<?php
/* Template Name: Blog */
  wp_head();

?>
<div id="blog">
  <header>
    <?php echo do_shortcode('[title title="Blog" class="contact-bg"][/title]');?>
  </header>
  <div id="mainContent" class="container">
    <?php greenwall_blog(); ?>
    <?php  /*
       * Code hiển thị phân trang trong post type
       */
      $link_pages = array(
        'before' =>'<p>'.__('Page:', 'greenwall'),
        'after' => '</p>',
        'link_before'     => '<span>',
        'link_after' => '</span>',
        'nextpagelink'     => __( 'Next page', 'greenwall' ),
        'previouspagelink' => __( 'Previous page', 'greenwall' )
      );
      wp_link_pages( $link_pages );
    ?>
  </div>
</div>
<?php get_footer();?>