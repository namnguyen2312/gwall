
<?php
/* Template Name: Product */
  wp_head();

?>
<div id="main-products">
  <header>
    <?php echo do_shortcode('[title title="Gwall Product" class="contact-bg"]please, dont hesitate to contact us ....![/title]');?>
  </header>
  <div class="container-fluid product-background">
    <?php greenwall_product(); ?>
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