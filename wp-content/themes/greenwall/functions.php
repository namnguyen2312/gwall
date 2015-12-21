

<?php
 include (dirname( __FILE__ ) . '/template/shortcode.php');
 include(dirname( __FILE__ ) . '/widget.php');

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

function greenwall_widgets_init() { register_sidebar( array( 'name' => __( 'Footer Widget Area', 'greenwall' ),
        'id' => 'footer-sidebar',
        'description' => __( 'Appears on the footer, which has its own widgets', 'greenwall' ),
        'before_widget' => '<div id="%1$s" class="widgetfooter">',
        'after_widget' => '</div>'
    ) );
}
add_action( 'widgets_init', 'greenwall_widgets_init' );

/**
@ Hàm hiển thị ảnh thumbnail của post.
@ Ảnh thumbnail sẽ không được hiển thị trong trang single
@ Nhưng sẽ hiển thị trong single nếu post đó có format là Image
@ thachpham_thumbnail( $size )
**/
if ( ! function_exists( 'greenwall_thumbnail' ) ) {
  function greenwall_thumbnail( $size ) {
 
    // Chỉ hiển thumbnail với post không có mật khẩu
    if ( ! is_single() &&  has_post_thumbnail()  && ! post_password_required() || has_post_format( 'image' ) ) : ?>
      <figure class="post-thumbnail"><?php the_post_thumbnail( $size ); ?></figure><?php
    endif;
  }
}
/**
@ Hàm hiển thị tiêu đề của post trong .entry-header
@ Tiêu đề của post sẽ là nằm trong thẻ <h1> ở trang single
@ Còn ở trang chủ và trang lưu trữ, nó sẽ là thẻ <h2>
@ thachpham_entry_header()
**/
if ( ! function_exists( 'greenwall_entry_header' ) ) {
  function greenwall_entry_header() {
    if ( is_single() ) : ?>
 
      <h1 class="entry-title">
        <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
          <?php the_title(); ?>
        </a>
      </h1>
    <?php else : ?>
      <h2 class="entry-title">
        <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
          <?php the_title(); ?>
        </a>
      </h2><?php
 
    endif;
  }
}
/**
@ Hàm hiển thị thông tin của post (Post Meta)
@ thachpham_entry_meta()
**/
if( ! function_exists( 'greenwall_entry_meta' ) ) {
  function greenwall_entry_meta() {
    if ( ! is_page() ) :
      echo '<div class="entry-meta">';
 
        // Hiển thị tên tác giả, tên category và ngày tháng đăng bài
        printf( __('<span class="author">Posted by %1$s</span>', 'greenwall'),
          get_the_author() );
 
        printf( __('<span class="date-published"> at %1$s</span>', 'greenwall'),
          get_the_date() );
 
        printf( __('<span class="category"> in %1$s</span>', 'greenwall'),
          get_the_category_list( ', ' ) );
 
        // Hiển thị số đếm lượt bình luận
        if ( comments_open() ) :
          echo ' <span class="meta-reply">';
            comments_popup_link(
              __('Leave a comment', 'greenwall'),
              __('One comment', 'greenwall'),
              __('% comments', 'greenwall'),
              __('Read all comments', 'greenwall')
             );
          echo '</span>';
        endif;
      echo '</div>';
    endif;
  }
}
/*
 * Thêm chữ Read More vào excerpt
 */
function greenwall_readmore() {
  return '...<a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'greenwall') . '</a>';
}
add_filter( 'excerpt_more', 'greenwall_readmore' );
 
/**
@ Hàm hiển thị nội dung của post type
@ Hàm này sẽ hiển thị đoạn rút gọn của post ngoài trang chủ (the_excerpt)
@ Nhưng nó sẽ hiển thị toàn bộ nội dung của post ở trang single (the_content)
@ thachpham_entry_content()
**/
if ( ! function_exists( 'greenwall_entry_content' ) ) {
  function greenwall_entry_content() {
 
    if ( ! is_single() ) :
      the_excerpt();
    else :
      the_content();
 
      /*
       * Code hiển thị phân trang trong post type
       */
      $link_pages = array(
        'before' => __('<p>Page:', 'greenwall'),
        'after' => '</p>',
        'nextpagelink'     => __( 'Next page', 'greenwall' ),
        'previouspagelink' => __( 'Previous page', 'greenwall' )
      );
      wp_link_pages( $link_pages );
    endif;
 
  }
}
/**
@ Hàm hiển thị tag của post
@ thachpham_entry_tag()
**/
if ( ! function_exists( 'greenwall_entry_tag' ) ) {
  function greenwall_entry_tag() {
    if ( has_tag() ) :
      echo '<div class="entry-tag">';
      printf( __('Tagged in %1$s', 'greenwall'), get_the_tag_list( '', ', ' ) );
      echo '</div>';
    endif;
  }
}
?>
