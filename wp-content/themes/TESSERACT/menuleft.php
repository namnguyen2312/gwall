<?php
/**
 *
 * @package Tesseract
 */
?>

<div id="menu-left">
	<ul>
	    <?php
		    if (is_home ()) { /* Does not appear on frontpage */
				return;
			}
			$categories = get_categories();
			if ( ! empty( $categories ) ) {
			    foreach( $categories as $category ) {
			    	echo '<li><a class="menuleft" href="'.get_category_link( $category->term_id ).'">'.$category->name.'</li>';
			    }
			}
		?>
	</ul>
 </div>