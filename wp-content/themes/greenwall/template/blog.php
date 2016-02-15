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
   
  </div>
</div>
<?php get_footer();?>