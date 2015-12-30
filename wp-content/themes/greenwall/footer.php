<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package greenwall
 */
?>
</section> <!-- End Service -->

    <footer id="footer-wrapper" class="content-background">
    <?php if(is_home()):?>
        <div class="container">
                <?php
                 if ( is_active_sidebar( 'footer-sidebar' ) ) : ?>
                <div class="footer-widget-area" >
                    <?php dynamic_sidebar( 'footer-sidebar' ); ?>
                </div>
                <?php endif; ?>
        </div>
    <?php endif;?>
        <div id="main-footer">
            <p class="footer-text">Copyright © 2015 Bản quyền thuộc về GreenWall. Design by NamNguyen</p>
        </div>
    </footer> <!-- End Footer-->
</div>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/classie.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>
