

<?php
/**
  @ Declare constant variable
  @ THEME_URL: link folder
**/

include (dirname( __FILE__ ) . '/template/shortcode.php');
include(dirname( __FILE__ ) . '/widget.php');


define('THEME_URL', get_template_directory_uri());

/**
 @ Thiết lập $content_width để khai báo kích thước chiều rộng của nội dung
 **/
 if ( ! isset( $content_width ) ) {
       /*
        * Nếu biến $content_width chưa có dữ liệu thì gán giá trị cho nó
        */
       $content_width = 620;
  }

 if ( ! function_exists( 'greenwall_theme_setup' ) ) {
        /*
         * Nếu chưa có hàm thachpham_theme_setup() thì sẽ tạo mới hàm đó
         */
        function greenwall_theme_setup() {
 
        }
        add_action ( 'init', 'greenwall_theme_setup' );
 
  }

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
		wp_enqueue_style( 'greenwall-reset', THEME_URL .'/css/reset.css', array(), '1.0.0' );
		
	    // Horizontal menu style	
		wp_enqueue_style( 'greenwall-bootstrap', THEME_URL.'/css/bootstrap.min.css', array(), '1.0.0' );		
		wp_enqueue_style( 'greenwall-icommoon', THEME_URL .'/css/iconmoon.css', array(), '1.0.0' );
		wp_enqueue_style( 'greenwall-responsive', THEME_URL.'/css/responsive.css', array(), '1.0.0' );
		wp_enqueue_style( 'greenwall-animate', THEME_URL.'/css/animate.css', array(), '1.0.0' );
		wp_enqueue_style( 'greenwall-settings', THEME_URL.'/rs-plugin/css/settings.css', array(), '1.0.0' ,true);
		// Fittext
		wp_enqueue_script( 'greenwall', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', array( 'jquery' ), '1.0.0');

		wp_enqueue_script( 'greenwall-isotope', THEME_URL.'/js/isotope.pkgd.min.js', array( 'jquery' ), '1.0.0');
		

	    // JS helpers (This is also the place where we call the jQuery in array)
		wp_enqueue_script( 'greenwall-themepunch-plugins', THEME_URL.'/rs-plugin/js/jquery.themepunch.plugins.min.js', array( 'jquery' ), '1.0.0');
		
		// Skip link fix
		wp_enqueue_script( 'greenwall-themepunch-revolution', THEME_URL.'/rs-plugin/js/jquery.themepunch.revolution.min.js', array( 'jquery'), '1.0.0');
		wp_enqueue_script( 'greenwall-inview', THEME_URL.'/js/jquery.inview.js', array( 'jquery'), '1.0.0' );
    wp_enqueue_script( 'greenwall-blog', THEME_URL.'/rs-plugin/js/jquery.blog.js', array( 'jquery'), '1.0.0' );
		wp_enqueue_script( 'greenwall-common', THEME_URL.'/js/jquery.common.js', array( 'jquery'), '1.0.0' );
    wp_enqueue_script( 'greenwall-scroll', THEME_URL.'/js/jquery.scroll.js', array( 'jquery'), '1.0.0' );
		//wp_enqueue_script( 'greenwall-main', get_template_directory_uri().'/js/main.js', array( 'jquery'), '1.0.0' );
    wp_register_script(
        'infinite_scrolling',//name of script
        get_template_directory_uri().'/js/jquery.infinitescroll.min.js',//where the file is
        array('jquery'),//this script requires a jquery script
        null,//don't have a script version number
        true//script will de placed on footer
    );

    wp_enqueue_script('infinite_scrolling');        

	}

	add_action( 'wp_enqueue_scripts', 'greenwall_scripts' );
endif;

function greenwall_widgets_init() { register_sidebar( array( 'name' => __( 'Footer Widget Area', 'greenwall' ),
        'id' => 'footer-sidebar',
        'description' => __( 'Appears on the footer, which has its own widgets', 'greenwall' ),
        'before_widget' => '',
        'after_widget' => ''
    ) );
}
add_action( 'widgets_init', 'greenwall_widgets_init' );

function set_infinite_scrolling(){

    echo " <script type='text/javascript'>            
            /*
                This is the inifinite scrolling setting, you can modify this at your will
            */
            var inf_scrolling = {                
                /*
                    img: is the loading image path, add a nice gif loading icon there                    
                    msgText: the loading message                
                    finishedMsg: the finished loading message
                */
                loading:{
                    img: '<? echo get_template_directory_uri(); ?>/images/ajax-loading.gif',
                    msgText: 'Loading next posts....',
                    finishedMsg: 'Posts loaded!!',
                },

                /*Next item is set nextSelector. 
                NextSelector is the css class of page navigation.
                In our case is #nav-below .nav-previous a
                */
                'nextSelector':'#nav-below .nav-previous a',

                //navSelector is a css id of page navigation
                'navSelector':'#nav-below',

                //itemSelector is the div where post is displayed
                'itemSelector':'box',

                //contentSelector is the div where page content (posts) is displayed
                'contentSelector':'#mainContent'
            };

            /*
                Last thing to do is configure contentSelector to infinite scroll,
                with a function jquery from infinite-scroll.min.js
            */
            jQuery(inf_scrolling.contentSelector).infinitescroll(inf_scrolling);
        </script> ";
}

/*
    we need to add this action on page's footer.
    100 is a priority number that correpond a later execution.
*/
add_action( 'wp_footer', 'set_infinite_scrolling',100 );

/*
* Thêm chức năng post thumbnail
*/
add_theme_support( 'post-thumbnails' );


/*
* Thêm chức năng title-tag để tự thêm <title>
*/
add_theme_support( 'title-tag' );

/*
* Thêm chức năng post format
*/
add_theme_support( 'post-formats',
    array(
       'image',
       'video',
       'gallery',
       'quote',
       'link'
    )
 );

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
@ Hàm hiển thị nội dung của cua 1 page
**/
if ( ! function_exists( 'greenwall_entry_content_page' ) ) {
  function greenwall_entry_content_page() {
      the_content();
  }
}

  
/**
@ Hàm hiển thị nội dung của cua product page
**/  
if ( ! function_exists( 'greenwall_product' ) ) {
  function greenwall_product() {
      $args = array("posts_per_page" => 5, "orderby" => "desc",'category_name'=> 'Tường Cây');
      $posts_array = get_posts($args);
      foreach($posts_array as $post)
      {
          $string= '<div class="row">'
          .'<div class="main-title">'
          .'<h2>' . $post->post_title . '</h2>'
          .'</div>'
          .'<div class="col-sm-6 product-img">'
          .'<img class="img-responsive" src="'.wp_get_attachment_url( get_post_thumbnail_id($post->ID)).'" alt="tuong cay da dung">'
          .'</div>'
          .'<div class="product-info col-sm-6">'  
          .'<p>'.$post->post_excerpt.'</p>'
          .'<a href="'.get_permalink($post->ID).'">Read more</a>'
          .'</div>'
          .'</div>';
          echo $string;
      } 
  }
}

/**
@ Hàm hiển thị nội dung của cua blog page
**/  
if ( ! function_exists( 'greenwall_blog' ) ) {
  function greenwall_blog() {
      $args = array('order' => 'desc','category_name'=> 'Blog');
      $posts = new WP_Query($args);
      if ( $posts->have_posts() ) : while($posts->have_posts()) : $posts->the_post();
          $date=new DateTime($posts->post->post_date);
          $date=$date->format('Y/m/d');
          $count=getPostViews($posts->post->ID);
          $author=get_the_author_meta( 'display_name', $posts->post->post_author );
          $author_posts=get_the_author_meta( 'user_url', $post_author );
          $string= '<div id="box" class="box">'
                    .'<article>'
                    .'<figure>'
                    .'<img height="200" width="370" src="'.wp_get_attachment_url( get_post_thumbnail_id($posts->post->ID)).'" alt="view hydroponics">'
                    .'</figure>'
                    .'<div class="article-content">'
                    .'<head>'
                    .'<h2>'. $posts->post->post_title .'</h2>'
                    .'</head>'
                    .'<footer>'
                    .'<ul>'
                    .'<li><i class="icon-user"></i><a href="'.$author_posts.'"><span>'.$author.'</span></a></li>'
                    .'<li><i class="icon-calendar"></i><span>'.$date.'</span></li>'
                    .'<li><i class="icon-bubbles4"></i><a href="#"><span>'.$posts->post->comment_count.'</span></a></li>'
                    .'<li><i class="icon-eye"></i><span>'.$count.'</span></li>'
                    .'</ul>'
                    .'</footer>'
                    .'<div>'
                    .'<p>'.$posts->post->post_excerpt.'</p>'
                    .'<div class="readmore"><a href="'.get_permalink($posts->post->_ID).'">Read more</a></div>'
                    .'</div>'
                    .'</div>'
                    .'</article>'
                    .'</div>';
          echo $string;
        endwhile;
      endif; 
     
      wp_reset_postdata();
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
/**
@ Hàm send email
@ wp_mail()
**/
function contact_send_message() {

    // get the posted data
    $name = $_POST["yourname"];
    $email_address = $_POST["youremail"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // write the email content
    $header .= "MIME-Version: 1.0"."\r\n";
    $header .= "Content-Type: text/html; charset=utf-8"."\r\n";
    $header .= "From:" . $email_address."\r\n";
    $to = "suk3c2uit@gmail.com";
    // send the email using wp_mail()
    $send=wp_mail($to, $subject, $message,$header);
     if($send) {
          echo "send";
        return false;
     }else {
           echo $send;
        return true;
       }

}

add_action('contact_send_message', 'contact_send_message');
/*
  the functions Set and Get view of the posts
*/
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
} 
?>

