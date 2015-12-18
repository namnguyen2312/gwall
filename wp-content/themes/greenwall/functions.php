

<?php
 include ('/template/shortcode.php');
 include('/widget.php');

if ( ! function_exists( 'greenwall_setup' ) ) :

function greenwall_scripts() {

	// Localize script (only few lines in helpers.js)
    wp_localize_script( 'greenwall-helpers', 'greenwall-vars', array(  
 	    'author'   => __( 'Your Name', 'greenwall' ), 
 	    'email'    => __( 'E-mail', 'greenwall' ),
		'url'      => __( 'Website', 'greenwall' ),
		'comment'  => __( 'Your Comment', 'greenwall' ) 
 	) );	
	
	// Enqueue default style
	wp_enqueue_style( 'greenwall-style', get_stylesheet_uri(), array(), '1.0.0' );
	
	
    // Social icons style	
	wp_enqueue_style( 'greenwall-reset', get_template_directory_uri() .'/css/reset.css', array(), '1.0.0' );
	
    // Horizontal menu style	
	wp_enqueue_style( 'greenwall-bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '1.0.0' );		
	wp_enqueue_style( 'greenwall-icommoon', get_template_directory_uri() .'/css/iconmoon.css', array(), '1.0.0' );
	wp_enqueue_style( 'greenwall-responsive', get_template_directory_uri().'/css/responsive.css', array(), '1.0.0' );
	wp_enqueue_style( 'greenwall-animate', get_template_directory_uri().'/css/animate.css', array(), '1.0.0' );
	wp_enqueue_style( 'greenwall-settings', get_template_directory_uri().'/rs-plugin/css/settings.css', array(), '1.0.0' ,true);
	// Fittext
	wp_enqueue_script( 'greenwall', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', array( 'jquery' ), '1.0.0');

	wp_enqueue_script( 'greenwall-isotope', get_template_directory_uri().'/js/isotope.pkgd.min.js', array( 'jquery' ), '1.0.0');
	

    // JS helpers (This is also the place where we call the jQuery in array)
	wp_enqueue_script( 'greenwall-themepunch-plugins', get_template_directory_uri().'/rs-plugin/js/jquery.themepunch.plugins.min.js', array( 'jquery' ), '1.0.0');
	
	// Skip link fix
	wp_enqueue_script( 'greenwall-themepunch-revolution', get_template_directory_uri().'/rs-plugin/js/jquery.themepunch.revolution.min.js', array( 'jquery'), '1.0.0');
	wp_enqueue_script( 'greenwall-inview', get_template_directory_uri().'/js/jquery.inview.js', array( 'jquery'), '1.0.0' );
	//wp_enqueue_script( 'greenwall-classie', get_template_directory_uri().'/js/classie.js', array( 'jquery'), '1.0.0' );
	//wp_enqueue_script( 'greenwall-main', get_template_directory_uri().'/js/main.js', array( 'jquery'), '1.0.0' );

}

add_action( 'wp_enqueue_scripts', 'greenwall_scripts' );
endif;
function greenwall_widgets_init() {     register_sidebar( array(         'name' => __( 'Footer Widget Area', 'greenwall' ),
        'id' => 'footer-sidebar',
        'description' => __( 'Appears on the footer, which has its own widgets', 'greenwall' ),
        'before_widget' => '<div id="%1$s" class="widgetfooter">',
        'after_widget' => '</div>'
    ) );
}
add_action( 'widgets_init', 'greenwall_widgets_init' );

?>
