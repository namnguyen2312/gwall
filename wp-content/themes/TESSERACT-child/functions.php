<?php
/**
 * Tesseract functions and definitions
 *
 * @package Tesseract
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 700; /* pixels */
}

if ( ! function_exists( 'tesseract_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function tesseract_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Tesseract, use a find and replace
	 * to change 'tesseract' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'tesseract', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	
	// Add tyles the visual editor to resemble the theme style.
	add_editor_style( array( 'css/editor-style.css', tesseract_fonts_url() ) );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	
	// Set default size.
	set_post_thumbnail_size( 1580, 480, true );
	
	// Add default size for single pages.
	add_image_size( 'tesseract-large', '1580', '480', true );

	// Add default size for homepage.
	add_image_size( 'tesseract-thumbnail', '210', '150', true );
		
	// Add default logo size for Jetpack.
	add_image_size( 'tesseract-site-logo', '300', '9999', false );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Header', 'tesseract' ),
		'secondary' => __( 'Footer', 'tesseract' ),
        'thirddary' => __( 'Menu', 'tesseract' )
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'tesseract_custom_background_args', array(
		'default-color' => 'f9f9f9',
		'default-image' => '',
	) ) );
}
endif; // tesseract_setup
add_action( 'after_setup_theme', 'tesseract_setup' );

/* Backwards compatibility 
 * @ https://make.wordpress.org/core/2014/10/29/title-tags-in-4-1/
 * To enable support in existing themes without breaking backwards compatibility, 
 * theme authors can check if the callback function exists, and add a shiv in case 
 * it does not:
 */
if ( ! function_exists( '_wp_render_title_tag' ) ) :
	function theme_slug_render_title() {
		?>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<?php
	}
	add_action( 'wp_head', 'theme_slug_render_title' );
endif;	

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */

/**
 * Enqueue scripts and styles.
 */

function ten() {
	return 'Nguyen Duc Nam';
}
add_shortcode('ten','ten');	

/**
 * Register Google fonts.
 *
 */


/**
 * Enqueue Google fonts style to admin screen for custom header display.
 */

/**
 * Implement the Custom Header feature.
 */

/**
 * Custom template tags for this theme.
 */

/**
 * Custom functions that act independently of the theme templates.
 */

/**
 * Customizer additions.
 */

/**
 * Load Jetpack compatibility file.
 */


