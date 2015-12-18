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
        <div class="container">
            <div class="main-address">
        		<?php if ( is_active_sidebar( 'footer-sidebar' ) ) : ?>
				<div class="footer-widget-area" >
            		<?php dynamic_sidebar( 'footer-sidebar' ); ?>
        		</div>
    			<?php endif; ?>
                <a href="#"><i>Email:</i> sales@gwall.vn</a>
                <div class="social-title">Kết Nối Với Chúng Tôi</div>
                <nav>
                    <ul>
                        <li><a href="#"><i class="icon-facebook3"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-pinterest"></i></a></li>
                        <li><a href="#"><i class="icon-google-plus3"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div id="main-footer">
            <p class="footer-text">Copyright © 2015 Bản quyền thuộc về GreenWall. Design by NamNguyen</p>
        </div>
    </footer> <!-- End Footer-->
</div>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/classie.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/main.js"></script>
</body>
</html>
